@extends('layout.App')


@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumbs -->
    <div class="mb-6">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="admin.dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600">
                        <i class="fas fa-home mr-2"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                        <a href="admin.offres.index') }}" class="text-sm font-medium text-gray-700 hover:text-primary-600">Offres</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                        <span class="text-sm font-medium text-gray-500">{{ $offre->titre }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Back button -->
    <div class="mb-6">
        <a href="admin.offres.index') }}" class="inline-flex items-center text-primary-600 hover:text-primary-700">
            <i class="fas fa-arrow-left mr-2"></i>
            Retour aux offres
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main content - 2/3 width on large screens -->
        <div class="lg:col-span-2">
           
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="flex flex-wrap items-center gap-2 mb-4">
                    @if($offre->duree_disponibilite && \Carbon\Carbon::parse($offre->duree_disponibilite)->isPast())
                        <span class="bg-red-100 text-red-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Expiré</span>
                    @elseif($offre->duree_disponibilite && \Carbon\Carbon::parse($offre->duree_disponibilite)->diffInDays(now()) <= 3)
                        <span class="bg-red-100 text-red-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Urgent</span>
                    @endif
                    
                    @if($offre->categorie)
                        <span class="bg-primary-100 text-primary-600 text-xs font-medium px-2.5 py-0.5 rounded-full">{{ $offre->categorie->nom }}</span>
                    @endif
                    
                    @foreach($offre->tags as $tag)
                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full">{{ $tag->name }}</span>
                    @endforeach
                </div>
              
                <h1 class="text-2xl md:text-3xl font-bold mb-2">{{ $offre->titre }}</h1>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                    <div class="flex items-center mb-2 md:mb-0">
                        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                            @if($user->image)
                                <img src="{{ url('storage/' . $user->image) }}" alt="{{ $user->firstname }}" class="w-10 h-10 rounded-full object-cover">
                            @else
                                <span class="font-bold text-gray-600">{{ substr($user->firstname, 0, 1) }}{{ substr($user->lastname, 0, 1) }}</span>
                            @endif
                        </div>
                        <div>
                            <p class="font-medium">{{ $user->firstname }} {{ $user->lastname }}</p>
                            <p class="text-sm text-gray-600">
                                @if(isset($user->position))
                                    {{ $user->position->ville }}, {{ $user->position->zipcode }}
                                @else
                                    Localisation non spécifiée
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        @if($user->rating)
                            <div class="text-yellow-400 mr-2">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $user->rating)
                                        <i class="fas fa-star"></i>
                                    @elseif($i - 0.5 <= $user->rating)
                                        <i class="fas fa-star-half-alt"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                            <span class="text-sm text-gray-600">{{ $user->rating }}/5</span>
                        @else
                            <span class="text-sm text-gray-600">Aucune évaluation</span>
                        @endif
                    </div>
                </div>
                
                <div class="flex flex-wrap justify-between items-center py-3 border-t border-b border-gray-200">
                    <div class="flex items-center mr-4 mb-2 md:mb-0">
                        <i class="fas fa-calendar-alt text-gray-500 mr-2"></i>
                        <span class="text-sm">Publié {{ $offre->created_at->diffForHumans() }}</span>
                    </div>
                    @if($offre->duree_disponibilite)
                        <div class="flex items-center mb-2 md:mb-0">
                            <i class="fas fa-clock text-gray-500 mr-2"></i>
                            <span class="text-sm">
                                @if(\Carbon\Carbon::parse($offre->duree_disponibilite)->isPast())
                                    Expiré depuis {{ \Carbon\Carbon::parse($offre->duree_disponibilite)->diffForHumans() }}
                                @else
                                    Expire {{ \Carbon\Carbon::parse($offre->duree_disponibilite)->diffForHumans() }}
                                @endif
                            </span>
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Offer details -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h2 class="text-xl font-bold mb-4">Description de la mission</h2>
                
                <div class="prose max-w-none mb-6">
                    {!! nl2br(e($offre->description)) !!}
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h3 class="font-bold mb-2">Détails de l'offre</h3>
                        <div class="bg-gray-50 p-4 rounded-md">
                            @if($offre->duree_disponibilite)
                                <div class="flex items-center mb-2">
                                    <i class="fas fa-calendar-day text-primary-600 mr-2"></i>
                                    <span>Date limite: {{ \Carbon\Carbon::parse($offre->duree_disponibilite)->format('d/m/Y') }}</span>
                                </div>
                            @endif
                            <div class="flex items-center mb-2">
                                <i class="fas fa-tag text-primary-600 mr-2"></i>
                                <span>Budget: {{ $offre->budjet }}€</span>
                            </div>
                            @if($offre->categorie)
                                <div class="flex items-center mb-2">
                                    <i class="fas fa-folder text-primary-600 mr-2"></i>
                                    <span>Catégorie: {{ $offre->categorie->nom }}</span>
                                </div>
                            @endif
                            @if(isset($user->position))
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary-600 mr-2"></i>
                                    <span>Lieu: {{ $user->position->ville }}, {{ $user->position->zipcode }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="font-bold mb-2">Tags associés</h3>
                        <div class="flex flex-wrap gap-2">
                            @forelse($offre->tags as $tag)
                                <span class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full">{{ $tag->name }}</span>
                            @empty
                                <span class="text-gray-500">Aucun tag associé</span>
                            @endforelse
                        </div>
                    </div>
                </div>
                
                @if($offre->image)
                    <div class="mb-6">
                        <h3 class="font-bold mb-2">Image de l'offre</h3>
                        <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{ url('storage/' . $offre->image) }}" alt="{{ $offre->titre }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                @endif
            </div>
            
            <!-- Vehicle details -->
            @if($offre->vehicule)
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h2 class="text-xl font-bold mb-4">Détails du véhicule</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
                    <div>
                        <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden mb-4">
                            @if($offre->vehicule->image)
                                <img src="{{ url('storage/' . $offre->vehicule->image) }}" alt="{{ $offre->vehicule->name }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-300 text-gray-600">
                                    <span>Aucune image disponible</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Marque</p>
                                <p class="font-medium">{{ $offre->vehicule->name }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Modèle</p>
                                <p class="font-medium">{{ $offre->vehicule->model ?? 'Non spécifié' }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Année</p>
                                <p class="font-medium">{{ $offre->vehicule->year ?? ($offre->vehicule->annee_fabrication ? \Carbon\Carbon::parse($offre->vehicule->annee_fabrication)->format('Y') : 'Non spécifiée') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            
            <!-- Location -->
            @if(isset($user->position))
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h2 class="text-xl font-bold mb-4">Localisation</h2>
                
                <div class="flex items-start">
                    <i class="fas fa-map-marker-alt text-primary-600 mt-1 mr-3"></i>
                    <div>
                        <p class="font-medium">{{ $user->firstname }} {{ $user->lastname }}</p>
                        <p class="text-gray-600">{{ $user->position->ville }}, {{ $user->position->zipcode }}</p>
                    </div>
                </div>
            </div>
            @endif
        </div>
        
        <!-- Sidebar - 1/3 width on large screens -->
        <div class="lg:col-span-1">
            <!-- Client info -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h2 class="text-xl font-bold mb-4">À propos du client</h2>
                
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                        @if($user->image)
                            <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->firstname }}" class="w-12 h-12 rounded-full object-cover">
                        @else
                            <span class="font-bold text-gray-600">{{ substr($user->firstname, 0, 1) }}{{ substr($user->lastname, 0, 1) }}</span>
                        @endif
                    </div>
                    <div>
                        <p class="font-medium">{{ $user->firstname }} {{ $user->lastname }}</p>
                        <p class="text-sm text-gray-600">Client depuis {{ $user->created_at->format('F Y') }}</p>
                    </div>
                </div>
                
                <div class="mb-4">
                    @if($user->rating)
                        <div class="flex items-center mb-2">
                            <div class="text-yellow-400 mr-2">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $user->rating)
                                        <i class="fas fa-star"></i>
                                    @elseif($i - 0.5 <= $user->rating)
                                        <i class="fas fa-star-half-alt"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                            <span class="text-sm text-gray-600">{{ $user->rating }}/5</span>
                        </div>
                    @endif
                    
                    <div class="flex items-center mb-2">
                        <i class="fas fa-phone text-gray-500 mr-2"></i>
                        <span class="text-sm">{{ $user->phone }}</span>
                    </div>
                    
                    <div class="flex items-center mb-2">
                        <i class="fas fa-envelope text-gray-500 mr-2"></i>
                        <span class="text-sm">{{ $user->email }}</span>
                    </div>
                    
                    @if($user->est_service)
                        <div class="flex items-center">
                            <i class="fas fa-briefcase text-gray-500 mr-2"></i>
                            <span class="text-sm">Compte professionnel</span>
                        </div>
                    @endif
                    
                    @if($user->become_mechanicien)
                        <div class="flex items-center mt-2">
                            <i class="fas fa-wrench text-gray-500 mr-2"></i>
                            <span class="text-sm">Mécanicien</span>
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Admin actions -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Actions administrateur</h2>
                
                <div class="space-y-3">
                    <a href="admin.offres.edit', $offre->id) }}" class="w-full bg-primary-600 text-white py-2 px-4 rounded-md hover:bg-primary-700 transition font-medium flex items-center justify-center">
                        <i class="fas fa-edit mr-2"></i> Modifier l'offre
                    </a>
                    
                    <button type="button" class="w-full bg-yellow-500 text-white py-2 px-4 rounded-md hover:bg-yellow-600 transition font-medium flex items-center justify-center">
                        <i class="fas fa-ban mr-2"></i> Suspendre l'offre
                    </button>
                    
                    <form action="admin.offres.destroy', $offre->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette offre?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 transition font-medium flex items-center justify-center">
                            <i class="fas fa-trash-alt mr-2"></i> Supprimer l'offre
                        </button>
                    </form>
                    
                    <a href="admin.users.show', $user->id) }}" class="w-full bg-gray-600 text-white py-2 px-4 rounded-md hover:bg-gray-700 transition font-medium flex items-center justify-center">
                        <i class="fas fa-user mr-2"></i> Voir le profil client
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection