@extends('layout.App')

@section('content')
<div class="py-12 bg-gradient-to-b from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl">
            <div class="p-8 bg-white border-b border-gray-200">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-6">
                    <h2 class="text-3xl font-bold text-gray-800">
                        {{ __('Profile Information') }}
                    </h2>
                    <div class="flex items-center">
                        @if(auth()->user()->image)
                            <img src="{{ asset('storage/images/' . auth()->user()->image) }}" alt="Profile Image" class="h-20 w-20 rounded-full object-cover border-4 border-blue-500 shadow-md hover:border-blue-600 transition-all">
                        @else
                            <div class="h-20 w-20 rounded-full bg-blue-100 flex items-center justify-center border-4 border-blue-500 shadow-md">
                                <span class="text-2xl font-bold text-blue-600">{{ substr(auth()->user()->firstname, 0, 1) . substr(auth()->user()->lastname, 0, 1) }}</span>
                            </div>
                        @endif
                        <div class="ml-5">
                            <h3 class="text-xl font-semibold text-gray-900">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h3>
                            <p class="text-sm text-gray-500">
                                @if(auth()->user()->est_service)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 shadow-sm">
                                        <svg class="-ml-0.5 mr-1.5 h-3 w-3 text-green-500" fill="currentColor" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="3" />
                                        </svg>
                                        Mechanic
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 shadow-sm">
                                        <svg class="-ml-0.5 mr-1.5 h-3 w-3 text-blue-500" fill="currentColor" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="3" />
                                        </svg>
                                        Client
                                    </span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>

                @if(session('status'))
                    <div class="mb-6 font-medium text-sm text-green-600 bg-green-50 p-4 rounded-lg border-l-4 border-green-400 shadow-sm">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="/user/information" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Basic User Information Section -->
                        <div class="space-y-6 bg-gray-50 p-6 rounded-lg shadow-sm">
                            <h3 class="text-lg font-semibold text-gray-900 border-b pb-3 mb-4 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                {{ __('Basic Information') }}
                            </h3>
                            
                            <!-- First Name -->
                            <div>
                                <label for="firstname" class="block text-sm font-medium text-gray-700 mb-1">{{ __('First Name') }}</label>
                                <input id="firstname" name="firstname" type="text" value="{{ old('firstname', auth()->user()->firstname) }}" required autofocus
                                    class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-lg transition-all hover:border-blue-300">
                                @error('firstname')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Last Name -->
                            <div>
                                <label for="lastname" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Last Name') }}</label>
                                <input id="lastname" name="lastname" type="text" value="{{ old('lastname', auth()->user()->lastname) }}" required
                                    class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-lg transition-all hover:border-blue-300">
                                @error('lastname')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Email') }}</label>
                                <input id="email" name="email" type="email" value="{{ old('email', auth()->user()->email) }}" required
                                    class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-lg transition-all hover:border-blue-300">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Phone') }}</label>
                                <input id="phone" name="phone" type="text" value="{{ old('phone', auth()->user()->phone) }}" required
                                    class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-lg transition-all hover:border-blue-300">
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Profile Image -->
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Profile Image') }}</label>
                                <div class="mt-1 flex items-center">
                                    <span class="inline-block h-14 w-14 rounded-full overflow-hidden bg-gray-100 shadow-inner">
                                        @if(auth()->user()->image)
                                            <img src="{{ asset('storage/images/' . auth()->user()->image) }}" alt="Current profile image" class="h-full w-full object-cover">
                                        @else
                                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        @endif
                                    </span>
                                    <input type="file" id="image" name="image" class="ml-5 bg-white py-2 px-4 border border-gray-300 rounded-lg shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                                </div>
                                @error('image')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Location Information Section -->
                        <div class="space-y-6 bg-gray-50 p-6 rounded-lg shadow-sm">
                            <h3 class="text-lg font-semibold text-gray-900 border-b pb-3 mb-4 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                {{ __('Location Information') }}
                            </h3>
                            
                            <!-- City -->
                            <div>
                                <label for="ville" class="block text-sm font-medium text-gray-700 mb-1">{{ __('City') }}</label>
                                <select id="ville" name="position_id" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-lg transition-all hover:border-blue-300">
                                    @foreach($positions as $position)
                                        <option value="{{ $position->id }}" {{ old('ville', auth()->user()->position->ville ?? '') == $position->ville ? 'selected' : '' }}>
                                            {{ $position->ville }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('ville')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>



                            @if(!auth()->user()->est_service && !auth()->user()->become_mechanicien)
                                <div class="pt-4 mt-4 border-t border-gray-200">
                                    <div class="flex items-start hover:bg-gray-100 p-3 rounded-lg transition-colors">
                                       
                                        <div class="ml-3 text-sm">
                                            <a href="/BecomeFreelancer">
                                                <button type="button" name="become_mechanicien" value="1" class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                                                    {{ __('Apply to become a mechanic') }}
                                                </button>
                                            </a>
                                            <p class="text-gray-500 mt-1">{{ __('Click the button if you want to apply to become a mechanic.') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(auth()->user()->become_mechanicien && !auth()->user()->est_service)
                                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-4 rounded-r-lg shadow-sm">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-yellow-700">
                                                {{ __('Your application to become a mechanic is pending approval.') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    @if(auth()->user()->est_service && isset(auth()->user()->mechanicien))
                        <div class="mt-10 pt-8 border-t border-gray-200">
                            <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                {{ __('Mechanic Information') }}
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="bg-gray-50 p-6 rounded-lg shadow-sm space-y-6">
                                    <!-- Specialization -->
                                    <div>
                                        <label for="specialization" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Specialization') }}</label>
                                        <input id="specialization" name="specialization" type="text" value="{{ old('specialization', auth()->user()->mechanicien->specialization ?? '') }}"
                                            class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-lg transition-all hover:border-blue-300">
                                        @error('specialization')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Experience Years -->
                                    <div>
                                        <label for="experience_years" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Years of Experience') }}</label>
                                        <input id="experience_years" name="experience_years" type="text" value="{{ old('experience_years', auth()->user()->mechanicien->experience_years ?? '') }}"
                                            class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-lg transition-all hover:border-blue-300">
                                        @error('experience_years')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="certificat" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Certificate') }}</label>
                                        <div class="mt-1 flex items-center">
                                            @if(auth()->user()->mechanicien->certificat)
                                                <div class="flex items-center space-x-2 bg-white p-2 rounded-lg border border-gray-200">
                                                    <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">{{ __('Certificate uploaded') }}</span>
                                                    <a href="{{ asset('storage/certificates/' . auth()->user()->mechanicien->certificat) }}" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm underline">{{ __('View') }}</a>
                                                </div>
                                            @else
                                                <span class="text-sm text-gray-500 bg-white p-2 rounded-lg border border-gray-200">{{ __('No certificate uploaded') }}</span>
                                            @endif
                                            <input type="file" id="certificat" name="certificat" class="ml-4 bg-white py-2 px-4 border border-gray-300 rounded-lg shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                                        </div>
                                        @error('certificat')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg shadow-sm space-y-6">
                                    <div>
                                        <label for="variable_at" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Available From') }}</label>
                                        <input id="variable_at" name="variable_at" type="date" value="{{ old('variable_at', auth()->user()->mechanicien->variable_at ?? '') }}"
                                            class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-lg transition-all hover:border-blue-300">
                                        @error('variable_at')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="variable_to" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Available To') }}</label>
                                        <input id="variable_to" name="variable_to" type="date" value="{{ old('variable_to', auth()->user()->mechanicien->variable_to ?? '') }}"
                                            class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-lg transition-all hover:border-blue-300">
                                        @error('variable_to')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
                                        <div class="flex-1">
                                            <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('Status') }}</label>
                                            <div class="p-3 bg-white rounded-lg border border-gray-200">
                                                @if(auth()->user()->mechanicien->is_active)
                                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 shadow-sm">
                                                        <svg class="-ml-0.5 mr-1.5 h-3 w-3 text-green-500" fill="currentColor" viewBox="0 0 8 8">
                                                            <circle cx="4" cy="4" r="3" />
                                                        </svg>
                                                        {{ __('Active') }}
                                                    </span>
                                                @else
                                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800 shadow-sm">
                                                        <svg class="-ml-0.5 mr-1.5 h-3 w-3 text-red-500" fill="currentColor" viewBox="0 0 8 8">
                                                            <circle cx="4" cy="4" r="3" />
                                                        </svg>
                                                        {{ __('Inactive') }}
                                                    </span>
                                                @endif
                                                <p class="mt-2 text-xs text-gray-500">{{ __('Your active status is managed by administrators.') }}</p>
                                            </div>
                                        </div>

                                        <div class="flex-1">
                                            <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('Rating') }}</label>
                                            <div class="p-3 bg-white rounded-lg border border-gray-200">
                                                <div class="flex items-center">
                                                    @php
                                                        $rating = auth()->user()->rating ?? 0;
                                                        $fullStars = floor($rating);
                                                        $halfStar = $rating - $fullStars >= 0.5;
                                                        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                                    @endphp

                                                    @for($i = 0; $i < $fullStars; $i++)
                                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>
                                                    @endfor

                                                    @if($halfStar)
                                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>
                                                    @endif

                                                    @for($i = 0; $i < $emptyStars; $i++)
                                                        <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>
                                                    @endfor
                                                    <span class="ml-2 text-sm font-medium text-gray-700">{{ number_format($rating, 1) }} / 5.0</span>
                                                </div>
                                                <p class="mt-2 text-xs text-gray-500">{{ __('Based on client reviews') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="flex justify-end mt-10">
                        <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors transform hover:scale-105">
                            <svg class="-ml-1 mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            {{ __('Save Changes') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection