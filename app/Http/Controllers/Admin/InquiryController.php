<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InquiryController extends Controller
{
    /**
     * Display a listing of inquiries.
     */
    public function index(Request $request): View
    {
        $query = Inquiry::with('package');

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        $inquiries = $query->orderBy('created_at', 'desc')
            ->paginate(20)
            ->withQueryString();

        $statuses = Inquiry::getStatuses();
        $newCount = Inquiry::new()->count();

        return view('admin.inquiries.index', [
            'inquiries' => $inquiries,
            'statuses' => $statuses,
            'newCount' => $newCount,
        ]);
    }

    /**
     * Display the specified inquiry.
     */
    public function show(Inquiry $inquiry): View
    {
        // Mark as read
        $inquiry->markAsRead();

        return view('admin.inquiries.show', [
            'inquiry' => $inquiry->load('package'),
        ]);
    }

    /**
     * Update the inquiry status.
     */
    public function updateStatus(Request $request, Inquiry $inquiry): RedirectResponse
    {
        $validated = $request->validate([
            'status' => 'required|in:new,read,replied,closed',
            'admin_notes' => 'nullable|string|max:1000',
        ]);

        $inquiry->update($validated);

        return back()->with('success', 'Inquiry status updated successfully!');
    }

    /**
     * Remove the specified inquiry.
     */
    public function destroy(Inquiry $inquiry): RedirectResponse
    {
        $inquiry->delete();

        return redirect()
            ->route('admin.inquiries.index')
            ->with('success', 'Inquiry deleted successfully!');
    }

    /**
     * Bulk delete inquiries.
     */
    public function bulkDelete(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:inquiries,id',
        ]);

        Inquiry::whereIn('id', $validated['ids'])->delete();

        return back()->with('success', 'Selected inquiries deleted successfully!');
    }
}


