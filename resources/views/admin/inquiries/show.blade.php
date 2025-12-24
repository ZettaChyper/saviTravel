@extends('layouts.admin')

@php $title = 'View Inquiry'; @endphp

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.inquiries.index') }}" class="text-gray-600 hover:text-gray-900 flex items-center gap-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        Back to Inquiries
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    {{-- Main Content --}}
    <div class="lg:col-span-2">
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-start justify-between mb-6">
                <div>
                    <h1 class="text-xl font-bold text-gray-900">{{ $inquiry->name }}</h1>
                    <p class="text-gray-500">{{ $inquiry->email }}</p>
                    @if($inquiry->phone)
                    <p class="text-gray-500">{{ $inquiry->phone }}</p>
                    @endif
                </div>
                <span class="inline-flex px-3 py-1 text-sm rounded-full {{ $inquiry->status_badge_class }}">
                    {{ $inquiry->formatted_status }}
                </span>
            </div>

            @if($inquiry->package)
            <div class="bg-gray-50 rounded-xl p-4 mb-6">
                <p class="text-sm text-gray-500 mb-2">Inquiring about:</p>
                <a href="{{ route('packages.show', $inquiry->package) }}" target="_blank" class="flex items-center gap-4 group">
                    <img src="{{ $inquiry->package->featured_image_url }}" alt="{{ $inquiry->package->title }}" class="w-20 h-14 object-cover rounded-lg">
                    <div>
                        <p class="font-semibold text-gray-900 group-hover:text-primary-600">{{ $inquiry->package->title }}</p>
                        <p class="text-sm text-gray-500">{{ $inquiry->package->formatted_price }} • {{ $inquiry->package->duration }}</p>
                    </div>
                </a>
            </div>
            @endif

            <div class="mb-6">
                <h2 class="font-semibold text-gray-900 mb-2">Message</h2>
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-gray-700 whitespace-pre-wrap">{{ $inquiry->message }}</p>
                </div>
            </div>

            {{-- Update Status --}}
            <div class="border-t border-gray-100 pt-6">
                <h2 class="font-semibold text-gray-900 mb-4">Update Status</h2>
                <form action="{{ route('admin.inquiries.update-status', $inquiry) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="input-field">
                                @foreach(\App\Models\Inquiry::getStatuses() as $key => $label)
                                <option value="{{ $key }}" {{ $inquiry->status == $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="admin_notes" class="form-label">Admin Notes</label>
                        <textarea name="admin_notes" id="admin_notes" rows="3" class="input-field">{{ $inquiry->admin_notes }}</textarea>
                    </div>
                    <button type="submit" class="btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Sidebar --}}
    <div class="space-y-6">
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h2 class="font-semibold text-gray-900 mb-4">Details</h2>
            <dl class="space-y-3">
                <div>
                    <dt class="text-sm text-gray-500">Submitted</dt>
                    <dd class="text-gray-900">{{ $inquiry->created_at->format('M d, Y \a\t h:i A') }}</dd>
                </div>
                <div>
                    <dt class="text-sm text-gray-500">IP Address</dt>
                    <dd class="text-gray-900">{{ $inquiry->ip_address ?? 'Unknown' }}</dd>
                </div>
            </dl>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6">
            <h2 class="font-semibold text-gray-900 mb-4">Quick Actions</h2>
            <div class="space-y-3">
                <a href="mailto:{{ $inquiry->email }}?subject=Re: Your Inquiry at {{ config('app.name') }}" class="btn-primary w-full text-center">
                    <svg class="w-5 h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Reply via Email
                </a>
                @if($inquiry->phone)
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->phone) }}" target="_blank" class="btn-whatsapp w-full text-center">
                    <svg class="w-5 h-5 mr-2 inline" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                    </svg>
                    WhatsApp
                </a>
                @endif
            </div>
        </div>

        <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full text-red-600 hover:text-red-700 text-center py-2">
                Delete Inquiry
            </button>
        </form>
    </div>
</div>
@endsection


