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
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center">
                <a href="index.html" class="text-2xl font-bold text-primary-600">
                    <span class="text-secondary-500">Méca</span>Connect
                </a>
            </div>
            
            <nav class="hidden md:flex space-x-8">
                <a href="index.html" class="text-gray-600 hover:text-primary-600 transition">Accueil</a>
                <a href="#" class="text-primary-600 font-medium">Offres</a>
                <a href="#" class="text-gray-600 hover:text-primary-600 transition">Mon profil</a>
                <a href="#" class="text-gray-600 hover:text-primary-600 transition">Messages</a>
            </nav>
            
            <div class="flex items-center space-x-4">
                <div class="hidden md:flex items-center">
                    <span class="text-sm text-gray-600 mr-2">Bonjour, Thomas</span>
                    <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center text-primary-600">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <a href="#" class="hidden md:inline-block px-4 py-2 text-sm text-primary-600 hover:text-primary-700 font-medium">
                    <i class="fas fa-bell"></i>
                    <span class="ml-1">3</span>
                </a>
                
                <button class="md:hidden text-gray-600" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="md:hidden hidden bg-white pb-4 px-4" id="mobile-menu">
            <nav class="flex flex-col space-y-3">
                <a href="index.html" class="text-gray-600 hover:text-primary-600 transition py-2">Accueil</a>
                <a href="#" class="text-primary-600 font-medium py-2">Offres</a>
                <a href="#" class="text-gray-600 hover:text-primary-600 transition py-2">Mon profil</a>
                <a href="#" class="text-gray-600 hover:text-primary-600 transition py-2">Messages</a>
                <div class="flex items-center py-2">
                    <span class="text-sm text-gray-600 mr-2">Bonjour, Thomas</span>
                    <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center text-primary-600">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </nav>
        </div>
    </header>

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
                        <p class="text-gray-600">42 offres correspondent à vos critères</p>
                    </div>
                    
                    <div class="mt-4 md:mt-0 flex items-center">
                        <span class="text-sm text-gray-600 mr-2">Trier par:</span>
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
                    <!-- Job 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6">
                            <div class="flex flex-col md:flex-row justify-between">
                                <div>
                                    <div class="flex items-center mb-2">
                                        <span class="bg-red-100 text-red-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Urgent</span>
                                        <span class="bg-primary-100 text-primary-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Autocar</span>
                                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Réparation moteur</span>
                                    </div>
                                    <h2 class="text-xl font-bold mb-1">Réparation moteur autocar Volvo</h2>
                                    <p class="text-gray-600 mb-2">Transports Martin • Lyon, 69000</p>
                                </div>
                                <div class="mt-4 md:mt-0 text-right">
                                    <p class="text-xl font-bold text-primary-600">800€ - 1200€</p>
                                    <p class="text-sm text-gray-500">Publié il y a 2 heures</p>
                                </div>
                            </div>
                            
                            <p class="mt-4 text-gray-700">Notre autocar Volvo 9700 présente des problèmes de démarrage et une perte de puissance. Nous avons besoin d'un diagnostic complet et d'une réparation rapide car le véhicule est prévu pour un trajet important dans 3 jours.</p>
                            
                            <div class="mt-6 flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    <span>Intervention souhaitée: 12/05/2023</span>
                                </div>
                                <div class="mt-4 sm:mt-0 flex space-x-3">
                                    <button class="px-4 py-2 bg-white border border-primary-600 text-primary-600 rounded-md hover:bg-primary-50 transition">
                                        Détails
                                    </button>
                                    <button class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition">
                                        Postuler
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Job 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6">
                            <div class="flex flex-col md:flex-row justify-between">
                                <div>
                                    <div class="flex items-center mb-2">
                                        <span class="bg-yellow-100 text-yellow-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Cette semaine</span>
                                        <span class="bg-primary-100 text-primary-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Bus</span>
                                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Système de freinage</span>
                                    </div>
                                    <h2 class="text-xl font-bold mb-1">Révision système de freinage Mercedes</h2>
                                    <p class="text-gray-600 mb-2">Voyages Express • Marseille, 13000</p>
                                </div>
                                <div class="mt-4 md:mt-0 text-right">
                                    <p class="text-xl font-bold text-primary-600">400€ - 600€</p>
                                    <p class="text-sm text-gray-500">Publié il y a 1 jour</p>
                                </div>
                            </div>
                            
                            <p class="mt-4 text-gray-700">Nous avons besoin d'une révision complète du système de freinage sur notre bus Mercedes Citaro. Le véhicule émet un bruit suspect lors du freinage et nous souhaitons une vérification avant les contrôles techniques.</p>
                            
                            <div class="mt-6 flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    <span>Intervention souhaitée: 15/05/2023 - 19/05/2023</span>
                                </div>
                                <div class="mt-4 sm:mt-0 flex space-x-3">
                                    <button class="px-4 py-2 bg-white border border-primary-600 text-primary-600 rounded-md hover:bg-primary-50 transition">
                                        Détails
                                    </button>
                                    <button class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition">
                                        Postuler
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Job 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6">
                            <div class="flex flex-col md:flex-row justify-between">
                                <div>
                                    <div class="flex items-center mb-2">
                                        <span class="bg-green-100 text-green-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Planifié</span>
                                        <span class="bg-primary-100 text-primary-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Minibus</span>
                                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Maintenance préventive</span>
                                    </div>
                                    <h2 class="text-xl font-bold mb-1">Maintenance flotte de 3 minibus</h2>
                                    <p class="text-gray-600 mb-2">Transports Scolaires Dupont • Toulouse, 31000</p>
                                </div>
                                <div class="mt-4 md:mt-0 text-right">
                                    <p class="text-xl font-bold text-primary-600">1500€ - 2000€</p>
                                    <p class="text-sm text-gray-500">Publié il y a 3 jours</p>
                                </div>
                            </div>
                            
                            <p class="mt-4 text-gray-700">Nous recherchons un mécanicien pour effectuer la maintenance préventive sur notre flotte de 3 minibus Iveco Daily avant la rentrée scolaire. Vidange, filtres, contrôle des niveaux, vérification des freins et pneumatiques.</p>
                            
                            <div class="mt-6 flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    <span>Intervention souhaitée: 01/06/2023 - 15/06/2023</span>
                                </div>
                                <div class="mt-4 sm:mt-0 flex space-x-3">
                                    <button class="px-4 py-2 bg-white border border-primary-600 text-primary-600 rounded-md hover:bg-primary-50 transition">
                                        Détails
                                    </button>
                                    <button class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition">
                                        Postuler
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Job 4 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6">
                            <div class="flex flex-col md:flex-row justify-between">
                                <div>
                                    <div class="flex items-center mb-2">
                                        <span class="bg-red-100 text-red-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Urgent</span>
                                        <span class="bg-primary-100 text-primary-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Autocar</span>
                                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Climatisation</span>
                                    </div>
                                    <h2 class="text-xl font-bold mb-1">Réparation climatisation autocar</h2>
                                    <p class="text-gray-600 mb-2">Voyages Confort • Nice, 06000</p>
                                </div>
                                <div class="mt-4 md:mt-0 text-right">
                                    <p class="text-xl font-bold text-primary-600">300€ - 500€</p>
                                    <p class="text-sm text-gray-500">Publié il y a 5 heures</p>
                                </div>
                            </div>
                            
                            <p class="mt-4 text-gray-700">La climatisation de notre autocar Setra ne fonctionne plus. Avec les chaleurs qui arrivent, nous avons besoin d'une intervention rapide pour diagnostiquer et réparer le système avant un voyage prévu la semaine prochaine.</p>
                            
                            <div class="mt-6 flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    <span>Intervention souhaitée: 13/05/2023 - 14/05/2023</span>
                                </div>
                                <div class="mt-4 sm:mt-0 flex space-x-3">
                                    <button class="px-4 py-2 bg-white border border-primary-600 text-primary-600 rounded-md hover:bg-primary-50 transition">
                                        Détails
                                    </button>
                                    <button class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition">
                                        Postuler
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Job 5 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6">
                            <div class="flex flex-col md:flex-row justify-between">
                                <div>
                                    <div class="flex items-center mb-2">
                                        <span class="bg-yellow-100 text-yellow-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Cette semaine</span>
                                        <span class="bg-primary-100 text-primary-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Bus</span>
                                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Électronique/Diagnostic</span>
                                    </div>
                                    <h2 class="text-xl font-bold mb-1">Diagnostic électronique MAN Lion's City</h2>
                                    <p class="text-gray-600 mb-2">Transports Urbains • Bordeaux, 33000</p>
                                </div>
                                <div class="mt-4 md:mt-0 text-right">
                                    <p class="text-xl font-bold text-primary-600">200€ - 350€</p>
                                    <p class="text-sm text-gray-500">Publié il y a 2 jours</p>
                                </div>
                            </div>
                            
                            <p class="mt-4 text-gray-700">Notre bus MAN Lion's City affiche plusieurs voyants d'erreur sur le tableau de bord. Nous avons besoin d'un diagnostic électronique complet pour identifier les problèmes et planifier les réparations nécessaires.</p>
                            
                            <div class="mt-6 flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    <span>Intervention souhaitée: 16/05/2023 - 18/05/2023</span>
                                </div>
                                <div class="mt-4 sm:mt-0 flex space-x-3">
                                    <button class="px-4 py-2 bg-white border border-primary-600 text-primary-600 rounded-md hover:bg-primary-50 transition">
                                        Détails
                                    </button>
                                    <button class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition">
                                        Postuler
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center space-x-1">
                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-500 hover:bg-gray-100">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium bg-primary-600 text-white">1</a>
                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100">2</a>
                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100">3</a>
                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100">4</a>
                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100">5</a>
                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-500 hover:bg-gray-100">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
                
                <!-- No results message (hidden by default) -->
                <div class="hidden mt-8 text-center py-12 px-4">
                    <div class="text-gray-400 mb-4">
                        <i class="fas fa-search text-5xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Aucune offre ne correspond à vos critères</h3>
                    <p class="text-gray-600 mb-6">Essayez de modifier vos filtres ou d'élargir votre zone de recherche</p>
                    <button class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition">
                        Réinitialiser les filtres
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo et description -->
                <div class="md:col-span-1">
                    <a href="#" class="text-2xl font-bold mb-4 inline-block">
                        <span class="text-secondary-500">Méca</span>Connect
                    </a>
                    <p class="text-gray-400 mt-2">La plateforme qui révolutionne la maintenance des véhicules de transport.</p>
                </div>
                
                <!-- Liens rapides -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Liens rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="index.html" class="text-gray-400 hover:text-white transition">Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Offres</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Mon profil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Messages</a></li>
                    </ul>
                </div>
                
                <!-- Légal -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Informations légales</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Conditions d'utilisation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Politique de confidentialité</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Mentions légales</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">CGV</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Contact</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-gray-400 mt-1 mr-3"></i>
                            <span class="text-gray-400">contact@mecaconnect.fr</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone text-gray-400 mt-1 mr-3"></i>
                            <span class="text-gray-400">+33 1 23 45 67 89</span>
                        </li>
                    </ul>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 MécaConnect. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

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