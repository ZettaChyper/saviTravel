@extends('layouts.admin')

@php $title = 'Destinations'; @endphp

@section('content')
<div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Destinations</h1>
        <p class="text-gray-600">Manage travel destinations</p>
    </div>
    <a href="{{ route('admin.destinations.create') }}" class="btn-primary">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        </svg>
        Add Destination
    </a>
</div>

{{-- Filters --}}
<div class="bg-white rounded-xl shadow-sm p-4 mb-6">
    <form action="{{ route('admin.destinations.index') }}" method="GET" class="flex flex-wrap gap-4">
        <div class="flex-1 min-w-[200px]">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search destinations..." class="input-field">
        </div>
        <button type="submit" class="btn-primary">Search</button>
        <a href="{{ route('admin.destinations.index') }}" class="btn-outline">Reset</a>
    </form>
</div>

{{-- Destinations Table --}}
<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Destination</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Country</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Packages</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse($destinations as $destination)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                    <div class="flex items-center gap-4">
                        <img src="{{ $destination->featured_image_url }}" alt="{{ $destination->name }}" class="w-16 h-12 object-cover rounded-lg">
                        <div>
                            <p class="font-medium text-gray-900">{{ $destination->name }}</p>
                            @if($destination->is_featured)
                            <span class="inline-flex px-2 py-0.5 text-xs rounded-full bg-accent-100 text-accent-800">Featured</span>
                            @endif
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 text-gray-600">{{ $destination->country }}</td>
                <td class="px-6 py-4 text-gray-600">{{ $destination->packages_count ?? 0 }}</td>
                <td class="px-6 py-4">
                    @if($destination->is_active)
                    <span class="inline-flex px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span>
                    @else
                    <span class="inline-flex px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">Inactive</span>
                    @endif
                </td>
                <td class="px-6 py-4 text-right">
                    <div class="flex items-center justify-end gap-2">
                        <a href="{{ route('destinations.show', $destination) }}" target="_blank" class="text-gray-400 hover:text-gray-600" title="View">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </a>
                        <a href="{{ route('admin.destinations.edit', $destination) }}" class="text-primary-600 hover:text-primary-700" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </a>
                        <form action="{{ route('admin.destinations.destroy', $destination) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure? This will not delete if destination has packages.')">
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
                <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                    <p>No destinations found</p>
                    <a href="{{ route('admin.destinations.create') }}" class="text-primary-600 hover:text-primary-700 mt-2 inline-block">Create your first destination</a>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    @if($destinations->hasPages())
    <div class="px-6 py-4 border-t border-gray-100">
        {{ $destinations->links() }}
    </div>
    @endif
</div>
@endsection


