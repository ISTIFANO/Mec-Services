@extends('layout.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="flex justify-center">
        <div class="w-full max-w-5xl">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-blue-600 text-white px-6 py-4 flex justify-between items-center">
                    <h3 class="text-xl font-semibold">Professional Profile</h3>
                    <span class="px-3 py-1 rounded-full text-sm {{ $profile->is_active ? 'bg-green-500' : 'bg-red-500' }}">
                        {{ $profile->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>

                <div class="p-6">
                    <div class="flex flex-col md:flex-row gap-6">
                        {{-- Left Column --}}
                        <div class="md:w-1/3">
                            <div class="text-center mb-6">
                                <img src="{{ $profile->user->avatar ?? asset('images/default-avatar.png') }}"
                                     alt="Profile Image"
                                     class="w-36 h-36 mx-auto rounded-full object-cover shadow">
                                <h4 class="mt-4 text-lg font-semibold">{{ $profile->user->name }}</h4>
                                <p class="text-gray-500">{{ $profile->specialization ?? 'No specialization listed' }}</p>
                            </div>

                            <div class="space-y-3">
                                <div class="flex justify-between border px-4 py-2 rounded">
                                    <strong>Experience:</strong>
                                    <span>{{ $profile->experience_years ?? 'Not specified' }} years</span>
                                </div>
                                <div class="mt-6">
                                    <h4 class="text-lg font-semibold mb-2">Certificate Preview</h4>
                                    @if($profile->certificat_pdf)
                                        <iframe 
                                            src="{{ asset('storage/certificates/' . $profile->certificat_pdf) }}" 
                                            class="w-full h-96 border rounded shadow"
                                            frameborder="0">
                                        </iframe>
                                    @else
                                        <p class="text-gray-500">No certificate available for preview.</p>
                                    @endif
                                </div>
                                <div class="flex justify-between border px-4 py-2 rounded">
                                    <strong>Valid From:</strong>
                                    <span>{{ $profile->variable_at ? date('M d, Y', strtotime($profile->variable_at)) : 'Not specified' }}</span>
                                </div>
                                <div class="flex justify-between border px-4 py-2 rounded">
                                    <strong>Valid Until:</strong>
                                    <span>{{ $profile->variable_to ? date('M d, Y', strtotime($profile->variable_to)) : 'Not specified' }}</span>
                                </div>
                            </div>

                            <div class="mt-4">
                                <form action="/admin/validate" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $profile->id }}">
                                    <button type="submit" class="w-full inline-block text-center bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded shadow">
                                        <i class="fas fa-edit mr-2"></i> Validate
                                    </button>
                                </form>
                            </div>
                        </div>

                        {{-- Right Column --}}
                        <div class="md:w-2/3">
                            <h4 class="text-xl font-semibold border-b pb-2 mb-4">Professional Details</h4>

                            <div class="mb-6">
                                <h5 class="text-lg font-semibold mb-1">About</h5>
                                <p class="text-gray-700">{{ $profile->user->bio ?? 'No biography available.' }}</p>
                            </div>

                            <div class="mb-6">
                                <h5 class="text-lg font-semibold mb-1">Contact Information</h5>
                                <p><i class="fas fa-envelope mr-2 text-gray-500"></i> {{ $profile->user->email }}</p>
                                <p><i class="fas fa-phone mr-2 text-gray-500"></i> {{ $profile->user->phone ?? 'No phone number available' }}</p>
                            </div>

                            @if($profile->avis)
                            <div class="mb-6">
                                <h5 class="text-lg font-semibold mb-2">Reviews</h5>
                                <div class="bg-gray-100 rounded-lg p-4 shadow">
                                    <div class="flex justify-between">
                                        <div>
                                            <h6 class="font-semibold">{{ $profile->avis->title ?? 'Review' }}</h6>
                                        </div>
                                        <div class="text-yellow-500">
                                            @for($i = 0; $i < ($profile->avis->rating ?? 0); $i++)
                                                <i class="fas fa-star"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <p class="mt-3 text-gray-700">{{ $profile->avis->content ?? 'No review content available.' }}</p>
                                </div>
                            </div>
                            @endif

                            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 rounded">
                                <h5 class="font-semibold mb-1">Certification Status</h5>
                                @if($profile->is_active && $profile->variable_to && strtotime($profile->variable_to) > time())
                                    <p>This professional's certification is valid until {{ date('F d, Y', strtotime($profile->variable_to)) }}.</p>
                                @elseif($profile->is_active && !$profile->variable_to)
                                    <p>This professional is active but has no specified certification expiration date.</p>
                                @else
                                    <p>This professional's certification is not currently active or has expired.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 text-gray-500 text-sm px-6 py-3">
                    {{-- <small>Profile ID: {{ $profile->id }} | Last updated: {{ $profile->updated_at->format('M d, Y H:i') }}</small> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
