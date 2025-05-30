@extends('layout.app')

@section('content')
<div class="container mx-auto py-6 px-4 md:px-6">
    <div class="flex items-center mb-6">
        <a href="" class="flex items-center text-gray-500 hover:text-gray-700 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Retour aux services
        </a>
        <h1 class="text-2xl font-bold">Détail du Service #{{ $service->id }}</h1>
        <div class="ml-auto">
            @include('Admin.Service.components.status', ['status' => $service->status])
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-2 space-y-6">
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 border-b">
                    <h2 class="text-xl font-bold">{{ $service->titre }}</h2>
                    <div class="flex items-center space-x-2 text-sm text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Créé le {{ $service->created_at }}</span>
                        <span>•</span>
                        <span>Mis à jour le {{$service->updated_at }}</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-medium mb-2">Détails de l'offre</h3>
                            <div class="bg-white rounded-lg border overflow-hidden">
                                <div class="px-6 py-4 border-b">
                                    <h4 class="text-xl font-bold">{{ $service->offre->titre }}</h4>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        @foreach($service->offre->tags as $tag)
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                            {{ $tag->name }}
                                        </span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="aspect-video relative mb-4 rounded-md overflow-hidden">
                                        <img src="{{ $service->offre->image ?  url('storage/' .$service->offre->image) : asset('images/placeholder.jpg') }}" 
                                             alt="{{ $service->offre->titre }}" 
                                             class="w-full h-full object-cover">
                                    </div>
                                    <p class="text-gray-600 mb-4">{{ $service->offre->description }}</p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <div>
                                                <p class="text-sm font-medium">Disponible jusqu'au</p>
                                                <p>{{ $service->offre->duree_disponibilite}}</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center mr-2">
                                                <span class="text-green-700 font-bold">{{ $service->offre->budjet }}€</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium">Budget</p>
                                                <p>{{ number_format($service->offre->budjet, 2) }} €</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                        

                            <div class="bg-white rounded-lg border overflow-hidden">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        @if($service->offre && $service->offre->vehicule && $service->offre->vehicule->image)
                                            <img src="{{ url('storage/' . $service->offre->vehicule->image) }}" 
                                                 alt="{{ $service->offre->vehicule->name }}" 
                                                 class="h-16 w-16 object-cover rounded-full mr-4">
                                        @endif
                                        <div>
                                            @if($service->offre && $service->offre->vehicule)
                                                <p class="font-medium">
                                                    {{ $service->offre->vehicule->name }} {{ $service->offre->vehicule->model }}
                                                </p>
                                                <p class="text-gray-500">Année: {{ $service->offre->vehicule->year }}</p>
                                            @else
                                                <p class="text-gray-500">Véhicule non disponible</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium mb-2">Catégorie</h3>
                            <div class="bg-white rounded-lg border overflow-hidden">
                                <div class="p-6">
                                    @if($service->offre && $service->offre->categorie)
                                    <div class="flex items-center">
                                        <div class="h-12 w-12 relative mr-4">
                                            <img src="{{ url('storage/' . $service->offre->categorie->image) }}" 
                                                 alt="{{ $service->offre->categorie->nom }}" 
                                                 class="w-full h-full object-cover rounded-md">
                                        </div>
                                        
                                        <div>
                                            <p class="font-medium">{{ $service->offre->categorie->nom }}</p>
                                            <p class="text-gray-500">{{ $service->offre->categorie->description }}</p>
                                        </div>
                                    </div>
                                    @else
                                    <p class="text-gray-500">Catégorie non disponible</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4 bg-gray-50 border-t flex justify-between">
                    <form action="/pdf" method="POST">
                        @csrf
                        @method('POST')
                        <input type="hidden" value="{{ $service->mechanicien->id }}" name="mechanicien_id">
                        <input type="hidden" value="{{ $service->id }}" name="service_id">
                        <input type="hidden" value="{{ $service->user->id }}" name="client_id">

                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 100-4H7a2 2 0 100 4m12 0v6a2 2 0 01-2 2H7a2 2 0 01-2-2v-6m16 0H5" />
                            </svg>
                            Voir Contrat
                        </button>
                    </form>

                    <form action="" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Marquer comme terminé</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            @include('Admin.Service.components.mechanicien', ['mechanic' => $service->mechanicien])
            <div class="bg-white rounded-lg shadow p-6">
                <form action="/conversation" method="POST">
                  @csrf
                  <input type="hidden" value="{{ $service->mechanicien->id }}" name="mechanicien_id">
                  <input type="hidden" value="{{ $service->id }}" name="service_id">
                  <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6m-7-4a9 9 0 1118 0 9 9 0 01-18 0z" />
                  </svg>
                  Contacter le mécanicien
                  </button>
                </form>
              </div>
            @include('Admin.Service.components.client', ['client' => $service->user])

            <div class="bg-white rounded-lg shadow p-6">
              <form action="/Payement" method="POST">
                @csrf
                <input type="hidden" value="{{ $service->id }}" name="service_id">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a4 4 0 00-8 0v2m-2 0a6 6 0 0112 0v2a2 2 0 01-2 2H7a2 2 0 01-2-2v-2m12 0H5" />
                </svg>
                Payer le service
                </button>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection