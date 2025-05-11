<div class="max-w-4xl mx-auto py-8 px-4 w-screen">
    <h1 class="text-2xl font-bold mb-6">Validation des Candidatures de Mécaniciens</h1>
    
    @if($service->count() > 0)
        {{-- Content for services --}}
    @endif
            @foreach($service as $mechanic)
            <div class="bg-white rounded-lg shadow overflow-hidden">
                {{-- Content of each mechanic --}}
            @endforeach
            @foreach($service as $mechanic)
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 border-b">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold">Mécanicien</h3>
                        <div class="flex items-center space-x-2">
                            @if($mechanic->is_active)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 border border-green-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Actif
                                </span>
                            @endif
                            @if($mechanic->user->rating)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-50 text-yellow-700 border border-yellow-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                    {{ number_format($mechanic->user->rating, 1) }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex flex-col items-center text-center mb-4">
                        <div class="h-24 w-24 relative mb-3">
                            @if($mechanic->user->image)
                                @if(Str::startsWith($mechanic->user->image, 'http'))
                                    <img src="{{ $mechanic->user->image }}" 
                                         alt="{{ $mechanic->user->firstname }}" 
                                         class="w-full h-full object-cover rounded-full">
                                @else
                                    <img src="{{ url('storage/' . $mechanic->user->image) }}" 
                                         alt="{{ $mechanic->user->firstname }}" 
                                         class="w-full h-full object-cover rounded-full">
                                @endif
                            @else
                                <img src="{{ asset('images/placeholder.jpg') }}" 
                                     alt="{{ $mechanic->user->firstname }}" 
                                     class="w-full h-full object-cover rounded-full">
                            @endif
                            @if($mechanic->user->est_service)
                                <span class="absolute bottom-0 right-0 bg-blue-500 p-1 rounded-full border-2 border-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            @endif
                        </div>
                        <h3 class="font-bold text-lg">{{ $mechanic->user->firstname }} {{ $mechanic->user->lastname }}</h3>
                        <p class="text-gray-500">{{ $mechanic->user->email }}</p>
                    </div>

                    <div class="space-y-3 mt-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <p class="text-sm font-medium">Spécialisation</p>
                                <p>{{ $mechanic->specialization }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <div>
                                <p class="text-sm font-medium">Expérience</p>
                                <p>{{ is_numeric($mechanic->experience_years) && $mechanic->experience_years > 1000 
                                      ? now()->year - $mechanic->experience_years . ' ans' 
                                      : $mechanic->experience_years . ' ans' }}</p>
                            </div>
                        </div>
                        @if($mechanic->certificat)
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <p class="text-sm font-medium">Certification</p>
                                <div class="flex items-center">
                                    <p class="truncate max-w-xs">{{ basename($mechanic->certificat) }}</p>
                                    <a href="{{ Str::startsWith($mechanic->certificat, 'http') ? $mechanic->certificat : url('storage/' . $mechanic->certificat) }}" 
                                       target="_blank" 
                                       class="ml-2 text-blue-600 hover:underline text-sm">
                                        Voir
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($mechanic->variable_at && $mechanic->variable_to)
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <p class="text-sm font-medium">Disponibilité</p>
                                <p>
                                    Du {{ \Carbon\Carbon::parse($mechanic->variable_at)->format('d/m/Y') }} 
                                    au {{ \Carbon\Carbon::parse($mechanic->variable_to)->format('d/m/Y') }}
                                    @if(\Carbon\Carbon::parse($mechanic->variable_to)->isPast())
                                        <span class="text-red-500 text-sm ml-2">(Expiré)</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        @endif
                        @if($mechanic->user->phone)
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>
                                <p class="text-sm font-medium">Téléphone</p>
                                <p>{{ $mechanic->user->phone }}</p>
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="mt-6 space-y-2">
                        <a href="mailto:{{ $mechanic->user->email }}" class="block w-full px-4 py-2 bg-white text-gray-700 text-center rounded-md border hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Contacter
                        </a>
                        @if($mechanic->user->phone)
                        <a href="tel:{{ $mechanic->user->phone }}" class="block w-full px-4 py-2 bg-blue-600 text-white text-center rounded-md hover:bg-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Appeler
                        </a>
                        @endif
                        <form action="/Mechanic" method="POST" class="block w-full">
                            @csrf
                            <input type="hidden" name="mechanicien_id" value="{{ $mechanic->id }}">
                            <input type="submit" value="Voir Profil" class="w-full px-4 py-2 bg-yellow-500 text-white text-center rounded-md hover:bg-yellow-600">
                        </form>
                            <div class="grid grid-cols-2 gap-2">
                                <form action="/service/Approuver" method="POST">
                                    @csrf
                                    <input type="hidden" name="serviceId" value="{{ $serviceId }}">
                                    <button type="submit" class="px-4 py-2 bg-green-600 text-white text-center rounded-md hover:bg-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Approuver
                                    </button>
                                </form>
                                <form action="/service/Rejected" method="POST">
                                    @csrf
                                    <input type="hidden" name="serviceId" value="{{ $serviceId }}">
                                    <input type="hidden" name="mechanic_id" value="{{ $mechanic->id }}">
                                    <button type="submit" class="px-12 py-2 bg-red-600 text-white text-center rounded-md hover:bg-red-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                        Rejeter
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                            @endforeach
