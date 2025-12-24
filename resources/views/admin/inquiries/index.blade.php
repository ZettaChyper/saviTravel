@extends('layouts.admin')

@php $title = 'Inquiries'; @endphp

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Inquiries</h1>
    <p class="text-gray-600">Manage customer inquiries and messages</p>
</div>

{{-- Filters --}}
<div class="bg-white rounded-xl shadow-sm p-4 mb-6">
    <form action="{{ route('admin.inquiries.index') }}" method="GET" class="flex flex-wrap gap-4">
        <div class="flex-1 min-w-[200px]">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name, email..." class="input-field">
        </div>
        <select name="status" class="input-field w-auto">
            <option value="">All Status</option>
            @foreach($statuses as $key => $label)
            <option value="{{ $key }}" {{ request('status') == $key ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn-primary">Filter</button>
        <a href="{{ route('admin.inquiries.index') }}" class="btn-outline">Reset</a>
    </form>
</div>

@if($newCount > 0)
<div class="bg-blue-50 border border-blue-200 rounded-xl p-4 mb-6">
    <p class="text-blue-800">You have <strong>{{ $newCount }}</strong> new inquiries waiting for response.</p>
</div>
@endif

{{-- Inquiries Table --}}
<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Package</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse($inquiries as $inquiry)
            <tr class="hover:bg-gray-50 {{ $inquiry->isNew() ? 'bg-blue-50' : '' }}">
                <td class="px-6 py-4">
                    <div>
                        <p class="font-medium text-gray-900">{{ $inquiry->name }}</p>
                        <p class="text-sm text-gray-500">{{ $inquiry->email }}</p>
                        @if($inquiry->phone)
                        <p class="text-sm text-gray-500">{{ $inquiry->phone }}</p>
                        @endif
                    </div>
                </td>
                <td class="px-6 py-4">
                    @if($inquiry->package)
                    <a href="{{ route('packages.show', $inquiry->package) }}" target="_blank" class="text-primary-600 hover:text-primary-700">
                        {{ Str::limit($inquiry->package->title, 30) }}
                    </a>
                    @else
                    <span class="text-gray-400">General Inquiry</span>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <p class="text-gray-600 text-sm">{{ Str::limit($inquiry->message, 60) }}</p>
                </td>
                <td class="px-6 py-4">
                    <span class="inline-flex px-2 py-1 text-xs rounded-full {{ $inquiry->status_badge_class }}">
                        {{ $inquiry->formatted_status }}
                    </span>
                </td>
                <td class="px-6 py-4 text-gray-500 text-sm">
                    {{ $inquiry->created_at->format('M d, Y') }}<br>
                    <span class="text-xs">{{ $inquiry->created_at->diffForHumans() }}</span>
                </td>
                <td class="px-6 py-4 text-right">
                    <div class="flex items-center justify-end gap-2">
                        <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="text-primary-600 hover:text-primary-700" title="View">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </a>
                        <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" class="inline" onsubmit="return confirm('Delete this inquiry?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-700" title="Delete">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-6 py-12 text-center text-gray-500">
                    No inquiries found
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    @if($inquiries->hasPages())
    <div class="px-6 py-4 border-t border-gray-100">
        {{ $inquiries->links() }}
    </div>
    @endif
</div>
@endsection


