@extends('layout.App')

@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres des clients - MécaConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#fff7ed',
                            100: '#ffedd5',
                            200: '#fed7aa',
                            300: '#fdba74',
                            400: '#fb923c',
                            500: '#f97316',
                            600: '#ea580c',
                            700: '#c2410c',
                            800: '#9a3412',
                            900: '#7c2d12',
                        },
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50">


    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Sidebar with filters -->
            <div class="w-full md:w-1/4 lg:w-1/5">
                <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                    <h2 class="text-xl font-bold mb-4">Filtres</h2>
                    
                    <div class="space-y-6">
                        <!-- Location filter -->
                        <div>
                            <h3 class="font-medium mb-2">Localisation</h3>
                            <div class="relative">
                                <input type="text" placeholder="Ville ou code postal" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                <div class="absolute right-3 top-2.5 text-gray-400">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="mt-2">
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2">Dans un rayon de</span>
                                </label>
                                <select class="mt-1 w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                    <option value="10">10 km</option>
                                    <option value="25">25 km</option>
                                    <option value="50" selected>50 km</option>
                                    <option value="100">100 km</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Type of vehicle -->
                        <div>
                            <h3 class="font-medium mb-2">Type de véhicule</h3>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Autocar</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Bus</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Minibus</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Camion</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Autre</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Type of service -->
                        <div>
                            <h3 class="font-medium mb-2">Type d'intervention</h3>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Réparation moteur</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Système de freinage</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Électronique/Diagnostic</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Maintenance préventive</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Climatisation</span>
                                </label>
                            </div>
                            <button class="text-primary-600 text-sm mt-1 hover:underline">Voir plus</button>
                        </div>
                        
                        <!-- Urgency level -->
                        <div>
                            <h3 class="font-medium mb-2">Niveau d'urgence</h3>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Urgent (24h)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Cette semaine</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary-600 rounded focus:ring-primary-500">
                                    <span class="ml-2 text-sm">Planifié</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Budget range -->
                        <div>
                            <h3 class="font-medium mb-2">Budget (€)</h3>
                            <div class="flex items-center space-x-2">
                                <input type="number" placeholder="Min" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                <span>-</span>
                                <input type="number" placeholder="Max" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            </div>
                        </div>
                        
                        <!-- Apply filters button -->
                        <button class="w-full bg-primary-600 text-white py-2 px-4 rounded-md hover:bg-primary-700 transition">
                            Appliquer les filtres
                        </button>
                        
                        <!-- Reset filters -->
                        <button class="w-full text-gray-600 text-sm hover:text-primary-600 transition">
                            Réinitialiser les filtres
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Main content with job listings -->
            <div class="w-full md:w-3/4 lg:w-4/5">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                    <div>
                        <h1 class="text-2xl font-bold">Offres disponibles</h1>
<p class="text-gray-600"> 11 offres correspondent à vos critères</p>
                    </div>
                    
                    <div class="mt-4 md:mt-0 flex items-center">
                        <span class="text-sm text-gray-600 mr-2"    >Trier par:</span>
                        <select class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            <option value="recent">Plus récentes</option>
                            <option value="urgent">Urgence</option>
                            <option value="budget-high">Budget (élevé à bas)</option>
                            <option value="budget-low">Budget (bas à élevé)</option>
                            <option value="distance">Distance</option>
                        </select>
                    </div>
                </div>
                
                <!-- Job listings -->
                <div class="space-y-6">
                    @forelse($offres as $offre)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6">
                            <div class="flex flex-col md:flex-row justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center mb-2">
                                        @if($offre->duree_disponibilite && \Carbon\Carbon::parse($offre->duree_disponibilite)->diffInDays(now()) <= 2)
                                            <span class="bg-red-100 text-red-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Urgent</span>
                                        @elseif($offre->duree_disponibilite && \Carbon\Carbon::parse($offre->duree_disponibilite)->diffInDays(now()) <= 7)
                                            <span class="bg-yellow-100 text-yellow-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Cette semaine</span>
                                        @else
                                            <span class="bg-green-100 text-green-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Planifié</span>
                                        @endif
                                        
                                        @if($offre->vehicule)
                                            <span class="bg-primary-100 text-primary-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">{{ $offre->vehicule->name }}</span>
                                        @endif
                                        
                                        @if($offre->categorie)
                                            <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">{{ $offre->categorie->nom }}</span>
                                        @endif
                                    </div>
                                    <h2 class="text-xl font-bold mb-1">{{ $offre->titre }}</h2>
                                    <p class="text-gray-600 mb-2">
                                        {{ $offre->client->firstname ?? 'Client' }} {{ $offre->client->lastname ?? '' }}
                                        @if(isset($offre->client->position))
                                            • {{ $offre->client->position->ville ?? 'N/A' }}, {{ $offre->client->position->zipcode ?? 'N/A' }}
                                        @endif
                                    </p>
                                </div>
                                <div class="mt-4 md:mt-0 text-right">
                                    <p class="text-xl font-bold text-primary-600">{{ $offre->budjet }}€</p>
                                    <p class="text-sm text-gray-500">Publié {{ \Carbon\Carbon::parse($offre->created_at)->diffForHumans() }}</p>
                                </div>
                                @if($offre->image)
                                <div class="w-full md:w-1/4 lg:w-1/5 md:ml-4">
                                    <img src="{{ asset('storage/' . $offre->image) }}" alt="Image de l'offre" class="rounded-lg object-cover w-full h-32 md:h-24">
                                </div>
                                @endif
                               
                            </div>
                            
                            <p class="mt-4 text-gray-700">
                                {{ \Illuminate\Support\Str::limit($offre->description, 150) }}
                            </p>
                            
                            <div class="mt-6 flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    <span>Intervention souhaitée: {{ $offre->duree_disponibilite ? \Carbon\Carbon::parse($offre->duree_disponibilite)->format('d/m/Y') : 'Non spécifiée' }}</span>
                                </div>
                                <div class="mt-4 sm:mt-0 flex space-x-3">
                                    <form action="/mechanicien/OffreDetails" method="POST">
                                        @csrf

                                        @method('POST')
                                            <input type="hidden" name="id" value="{{ $offre->id }}">

                                        <input value="Détails" type="submit" class="px-4 py-2 bg-white border border-primary-600 text-primary-600 rounded-md hover:bg-primary-50 transition">
                                            
                                    </form>
                                    <form action="/mechanicien/Postuler" method="POST">
                                        @csrf
                                        <input type="hidden" name="offre_id" value="{{ $offre->id }}">
                                        <input type="hidden" name="client_id" value="{{ $offre->client_id }}">
                                        <input type="hidden" name="mechanicien_id" value="{{ Auth::user()->id }}">

                                        <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition">
                                            Postuler
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="mt-8 text-center py-12 px-4">
                        <div class="text-gray-400 mb-4">
                            <i class="fas fa-search text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Aucune offre ne correspond à vos critères</h3>
                        <p class="text-gray-600 mb-6">Essayez de modifier vos filtres ou d'élargir votre zone de recherche</p>
                        <button class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition">
                            Réinitialiser les filtres
                        </button>
                    </div>
                    @endforelse
                </div>
                
                <!-- Pagination -->
                @if(count($offres->toArray()) > 0)
                <div class="mt-8 flex justify-center">
                    {{ $offres->links() }}
                </div>
                @endif
            </div>
        </div>
    </main>


    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
@endsection