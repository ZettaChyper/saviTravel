<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Inquiry;
use App\Models\Package;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index(): View
    {
        $stats = [
            'total_packages' => Package::count(),
            'active_packages' => Package::active()->count(),
            'total_destinations' => Destination::count(),
            'new_inquiries' => Inquiry::new()->count(),
            'total_inquiries' => Inquiry::count(),
        ];

        $recentInquiries = Inquiry::with('package')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        $recentPackages = Package::with('destination')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('admin.dashboard', [
            'stats' => $stats,
            'recentInquiries' => $recentInquiries,
            'recentPackages' => $recentPackages,
        ]);
    }
}


