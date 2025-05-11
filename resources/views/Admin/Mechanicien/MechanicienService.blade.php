@extends('layout.App')

@section('content')
<div class="bg-gradient-to-b from-gray-50 to-white min-h-screen">
    <div class="container mx-auto py-8 px-4 md:px-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <div class="space-y-1">
                <h1 class="text-3xl font-bold text-gray-900 tracking-tight">Mes Services</h1>
                <p class="text-gray-500">Consultez tous vos services en cours et passés</p>
            </div>
      
            <div class="mt-4 md:mt-0">
                <a href="/Offres" class="inline-flex items-center px-5 py-2.5 bg-blue-600 border border-transparent rounded-lg font-medium text-sm text-white shadow-sm hover:bg-blue-700 transition-all duration-200 transform hover:translate-y-[-1px] hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Nouvelle demande
                </a>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="mb-8 border-b border-gray-200">
            <nav class="flex space-x-8" aria-label="Tabs">
                <a href="/Offres" class="group inline-flex items-center py-4 px-1 border-b-2 border-transparent font-medium text-sm hover:text-blue-600 hover:border-blue-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    Offres
                </a>
            
                <a href="/client/ServiceDetails" class="group inline-flex items-center py-4 px-1 border-b-2 border-blue-600 font-medium text-sm text-blue-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Services
                </a>
            </nav>
        </div>

        @if(!$services)
            <div class="bg-white rounded-xl shadow-sm p-8 text-center max-w-md mx-auto border border-gray-100">
                <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Aucun service trouvé</h3>
                <p class="text-gray-500 mb-6">Commencez par créer une nouvelle demande de service pour trouver un mécanicien qualifié.</p>
                <a href="" class="inline-flex items-center px-5 py-2.5 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:translate-y-[-1px]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Nouvelle demande
                </a>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($services as $service)
                <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-all duration-300 border border-gray-100 flex flex-col">
                    <div class="relative">
                        @if($service->offre && $service->offre->image)
                            <img src="{{ url('storage/' . $service->offre->image) }}" alt="{{ $service->titre }}" class="w-full h-52 object-cover">
                        @elseif($service->offre && $service->offre->categorie && $service->offre->categorie->image)
                            <img src="{{ url('storage/' . $service->offre->categorie->image) }}" alt="{{ $service->titre }}" class="w-full h-52 object-cover">
                        @else
                            <div class="w-full h-52 bg-gradient-to-r from-blue-50 to-gray-50 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                        @endif
                        
                        <!-- Status Badge -->
                        <div class="absolute top-4 right-4">
                            @if($service->status == "en_cours")
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-50 text-green-700 border border-green-200 shadow-sm">
                                    <span class="w-2 h-2 rounded-full bg-green-500 mr-1.5 animate-pulse"></span>
                                    En cours
                                </span>
                            @elseif($service->status == "terminé")
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-200 shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Terminé
                                </span>
                            @elseif($service->status == "postulee")
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-50 text-yellow-700 border border-yellow-200 shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    En attente
                                </span>
                            @elseif($service->status == "annulé")
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-50 text-red-700 border border-red-200 shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    Annulé
                                </span>
                            @else
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-50 text-gray-700 border border-gray-200 shadow-sm">
                                    {{ $service->status }}
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Card Content -->
                    <div class="p-5 flex-grow">
                        <div class="flex items-start justify-between">
                            <h3 class="text-lg font-semibold text-gray-900 mb-1 line-clamp-1">{{ $service->titre }}</h3>
                            <span class="text-sm font-medium text-gray-500 bg-gray-50 px-2 py-0.5 rounded">
                                #{{ $service->id }}
                            </span>
                        </div>
                        
                        <p class="text-sm text-gray-500 mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Créé le {{ $service->created_at->format('d/m/Y') }}
                        </p>
                        
                        <!-- Category -->
                        @if($service->offre && $service->offre->categorie)
                        <div class="flex items-center mb-4">
                            <div class="h-9 w-9 rounded-full bg-blue-100 flex items-center justify-center mr-2.5 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-700">{{ $service->offre->categorie->nom }}</span>
                        </div>
                        @endif
                        
                        <!-- Mechanic Info -->
                        @if($service->mechanicien && $service->mechanicien->user)
                        <div class="flex items-center mb-4 bg-gray-50 p-3 rounded-lg">
                            <div class="h-10 w-10 rounded-full overflow-hidden mr-3 border-2 border-white shadow-sm">
                                @if($service->mechanicien->user->avatar)
                                    <img src="{{ asset($service->mechanicien->user->image) }}" alt="{{ $service->mechanicien->user->firstname }}" class="h-full w-full object-cover">
                                @else
                                    <div class="h-full w-full bg-blue-100 flex items-center justify-center">
                                        <span class="text-sm font-medium text-blue-600">{{ substr($service->mechanicien->user->firstname, 0, 2) }}</span>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-900">{{ $service->mechanicien->user->firstname }}</p>
                                <p class="text-xs text-gray-500 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Mécanicien
                                </p>
                            </div>
                        </div>
                        @endif
                        
                        <!-- Tags -->
                        @if($service->offre && $service->offre->tags && $service->offre->tags->count() > 0)
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($service->offre->tags->take(3) as $tag)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200">
                                    {{ $tag->name }}
                                </span>
                            @endforeach
                            @if($service->offre->tags->count() > 3)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200">
                                    +{{ $service->offre->tags->count() - 3 }}
                                </span>
                            @endif
                        </div>
                        @endif
                        
                        <!-- Budget -->
                        @if($service->offre && $service->offre->budjet)
                        <div class="flex items-center justify-between mt-2 p-3 bg-blue-50 rounded-lg">
                            <div class="text-sm font-medium text-gray-700">Budget</div>
                            <div class="font-bold text-blue-700">{{ number_format($service->offre->budjet, 2, ',', ' ') }} €</div>
                        </div>
                        @endif
                    </div>
                    
                    <!-- Card Footer -->
                    @if($service->status == "postulee")
                    <form action="/Service/postulee" method="POST" class="px-5 py-4 bg-gray-50 border-t border-gray-100">
                        @csrf
                        <input type="hidden" name="offer_id" value="{{ $service->offer_id }}">
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <button type="submit" class="w-full text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center justify-center bg-white py-2.5 px-4 rounded-lg border border-gray-200 hover:bg-blue-50 transition-colors shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            En attente
                        </button>
                    </form>
                    @elseif($service->status == "annulé")
                    <div class="px-5 py-4 bg-gray-50 border-t border-gray-100 flex justify-center">
                        <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-medium bg-red-50 text-red-700 border border-red-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Service annulé
                        </span>
                    </div>
                    @else
                    <form action="/Service/details" method="POST" class="px-5 py-4 bg-gray-50 border-t border-gray-100">
                        @csrf
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <button type="submit" class="w-full text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center justify-center bg-white py-2.5 px-4 rounded-lg border border-gray-200 hover:bg-blue-50 transition-colors shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Voir les détails
                        </button>
                    </form>
                    @endif
                </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection