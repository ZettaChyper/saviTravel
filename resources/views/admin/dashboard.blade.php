@extends('layouts.admin')

@section('content')
{{-- Stats Cards --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total Packages</p>
                <p class="text-3xl font-bold text-gray-900">{{ $stats['total_packages'] }}</p>
            </div>
            <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
            </div>
        </div>
        <p class="text-sm text-green-600 mt-2">{{ $stats['active_packages'] }} active</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Destinations</p>
                <p class="text-3xl font-bold text-gray-900">{{ $stats['total_destinations'] }}</p>
            </div>
            <div class="w-12 h-12 bg-accent-100 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">New Inquiries</p>
                <p class="text-3xl font-bold text-gray-900">{{ $stats['new_inquiries'] }}</p>
            </div>
            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
        </div>
        <p class="text-sm text-gray-500 mt-2">{{ $stats['total_inquiries'] }} total</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Quick Actions</p>
            </div>
        </div>
        <div class="mt-2 space-y-2">
            <a href="{{ route('admin.packages.create') }}" class="block text-sm text-primary-600 hover:text-primary-700">+ Add Package</a>
            <a href="{{ route('admin.destinations.create') }}" class="block text-sm text-primary-600 hover:text-primary-700">+ Add Destination</a>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    {{-- Recent Inquiries --}}
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-100">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Recent Inquiries</h2>
                <a href="{{ route('admin.inquiries.index') }}" class="text-sm text-primary-600 hover:text-primary-700">View All</a>
            </div>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse($recentInquiries as $inquiry)
            <div class="p-4 hover:bg-gray-50">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="font-medium text-gray-900">{{ $inquiry->name }}</p>
                        <p class="text-sm text-gray-500">{{ $inquiry->email }}</p>
                        @if($inquiry->package)
                        <p class="text-sm text-primary-600">{{ $inquiry->package->title }}</p>
                        @endif
                    </div>
                    <div class="text-right">
                        <span class="inline-flex px-2 py-1 text-xs rounded-full {{ $inquiry->status_badge_class }}">
                            {{ $inquiry->formatted_status }}
                        </span>
                        <p class="text-xs text-gray-400 mt-1">{{ $inquiry->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="p-6 text-center text-gray-500">
                No inquiries yet
            </div>
            @endforelse
        </div>
    </div>

    {{-- Recent Packages --}}
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-100">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Recent Packages</h2>
                <a href="{{ route('admin.packages.index') }}" class="text-sm text-primary-600 hover:text-primary-700">View All</a>
            </div>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse($recentPackages as $package)
            <div class="p-4 hover:bg-gray-50">
                <div class="flex items-center gap-4">
                    <img src="{{ $package->featured_image_url }}" alt="{{ $package->title }}" class="w-16 h-12 object-cover rounded-lg">
                    <div class="flex-1 min-w-0">
                        <p class="font-medium text-gray-900 truncate">{{ $package->title }}</p>
                        <p class="text-sm text-gray-500">{{ $package->location }} • {{ $package->formatted_price }}</p>
                    </div>
                    <div>
                        @if($package->is_active)
                        <span class="inline-flex px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span>
                        @else
                        <span class="inline-flex px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">Inactive</span>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="p-6 text-center text-gray-500">
                No packages yet
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection


