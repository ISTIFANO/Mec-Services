@extends('layout.app')

@section('content')
<div class="container mx-auto py-6 px-4 md:px-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Mes Services</h1>
            <p class="mt-1 text-sm text-gray-500">Consultez tous vos services en cours et passés</p>
        </div>
  
        <div class="mt-4 md:mt-0">
            <a href="/Offres" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:border-blue-800 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Nouvelle demande
            </a>
        </div>
    </div>

    <section>
        <div class="hidden sm:ml-6 sm:flex sm:space-x-8 h-[122px]">
            <a href="client/ClientOffre" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Offres</a>
            <a href="/client/Allvehicules" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Mes Véhicules</a>
            <a href="/AjouterVehicule" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Ajouter Véhicules </a>
            <a href="/client/ServiceDetails" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm"> Services </a>
        </div>
    </section>
    @if(!$services)
        <div class="bg-white rounded-lg shadow-sm p-6 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">Aucun service trouvé</h3>
            <p class="mt-1 text-sm text-gray-500">Commencez par créer une nouvelle demande de service.</p>
            <div class="mt-6">
                <a href="" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Nouvelle demande
                </a>
            </div>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($services as $service)
            <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300">
                <div class="relative">
                    @if($service->offre && $service->offre->image)
                        <img src="{{ url('storage/' . $service->offre->image) }}" alt="{{ $service->titre }}" class="w-full h-48 object-cover">
                    @elseif($service->offre && $service->offre->categorie && $service->offre->categorie->image)
                        <img src="{{ url('storage/' . $service->offre->categorie->image) }}" alt="{{ $service->titre }}" class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                    @endif
                    <div class="absolute top-4 right-4">
                        @include('admin.service.components.status', ['status' => $service->status])
                    </div>
                </div>
                
                <div class="p-4">
                    <div class="flex items-start justify-between">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">{{ $service->titre }}</h3>
                        <span class="text-sm text-gray-500">
                            #{{ $service->id }}
                        </span>
                    </div>
                    
                    <p class="text-sm text-gray-500 mb-4">
                        Créé le {{ $service->created_at->format('d/m/Y') }}
                    </p>
                    
                    @if($service->offre && $service->offre->categorie)
                    <div class="flex items-center mb-3">
                        <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium">{{ $service->offre->categorie->nom }}</span>
                    </div>
                    @endif
                    
                    @if($service->mechanicien && $service->mechanicien->user)
                    <div class="flex items-center mb-4">
                        <div class="h-8 w-8 rounded-full overflow-hidden mr-2">
                            @if($service->mechanicien->user->avatar)
                                <img src="{{ asset($service->mechanicien->user->image) }}" alt="{{ $service->mechanicien->user->firstname }}" class="h-full w-full object-cover">
                            @else
                                <div class="h-full w-full bg-gray-300 flex items-center justify-center">
                                    <span class="text-xs text-gray-600">{{ substr($service->mechanicien->user->firstname, 0, 2) }}</span>
                                </div>
                            @endif
                        </div>
                        <div>
                            <p class="text-sm font-medium">{{ $service->mechanicien->user->firstname }}</p>
                            <p class="text-xs text-gray-500">Mécanicien</p>
                        </div>
                    </div>
                    @endif
                    
                    @if($service->offre && $service->offre->tags && $service->offre->tags->count() > 0)
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($service->offre->tags->take(3) as $tag)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                        @if($service->offre->tags->count() > 3)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                +{{ $service->offre->tags->count() - 3 }}
                            </span>
                        @endif
                    </div>
                    @endif
                    
                    @if($service->offre && $service->offre->budjet)
                    <div class="flex items-center justify-between mt-2">
                        <div class="text-sm text-gray-500">Budget</div>
                        <div class="font-semibold">{{ number_format($service->offre->budjet, 2, ',', ' ') }} €</div>
                    </div>
                    @endif
                </div>
                
                <form action="/client/Service" method="POST" class="px-4 py-3 bg-gray-50 border-t border-gray-200">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <button type="submit" class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center justify-center">
                        Voir les détails
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>
            </div>
            @endforeach
        </div>
        
    
    @endif
</div>
@endsection