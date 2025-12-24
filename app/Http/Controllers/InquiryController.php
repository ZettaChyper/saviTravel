<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\RateLimiter;

class InquiryController extends Controller
{
    /**
     * Store a newly created inquiry.
     */
    public function store(Request $request): RedirectResponse
    {
        // Rate limiting: max 5 inquiries per IP per hour
        $key = 'inquiry_' . $request->ip();
        
        if (RateLimiter::tooManyAttempts($key, 5)) {
            return back()
                ->withInput()
                ->with('error', 'Too many requests. Please try again later.');
        }

        RateLimiter::hit($key, 3600);

        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string|max:2000',
            'package_id' => 'nullable|exists:packages,id',
        ]);

        // Honeypot check (anti-spam)
        if ($request->filled('website')) {
            // This is a bot, silently fail
            return back()->with('success', 'Thank you for your message. We will get back to you soon!');
        }

        // Create the inquiry
        Inquiry::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'message' => $validated['message'],
            'package_id' => $validated['package_id'] ?? null,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }

    /**
     * Store a package inquiry.
     */
    public function packageInquiry(Request $request, Package $package): RedirectResponse
    {
        $request->merge(['package_id' => $package->id]);
        return $this->store($request);
    }
}


