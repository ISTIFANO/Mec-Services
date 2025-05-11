<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord administratif - MécaConnect</title>
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
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-4 border-b border-gray-700">
                <a href="index.html" class="text-2xl font-bold text-white">
                    <span class="text-secondary-500">Méca</span>Connect
                </a>
                <p class="text-xs text-gray-400 mt-1">Panneau d'administration</p>
            </div>
            
            <div class="flex-1 overflow-y-auto py-4">
                <nav class="px-2">
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">
                            Tableau de bord
                        </p>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md bg-gray-900 text-white mb-1">
                            <i class="fas fa-tachometer-alt w-5 h-5 mr-2"></i>
                            Vue d'ensemble
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-chart-line w-5 h-5 mr-2"></i>
                            Statistiques
                        </a>
                    </div>
                    
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">
                            Gestion des utilisateurs
                        </p>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-users w-5 h-5 mr-2"></i>
                            Tous les utilisateurs
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-wrench w-5 h-5 mr-2"></i>
                            Mécaniciens
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-building w-5 h-5 mr-2"></i>
                            Entreprises
                        </a>
                    </div>
                    
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">
                            Gestion des offres
                        </p>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-clipboard-list w-5 h-5 mr-2"></i>
                            Toutes les offres
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-exclamation-circle w-5 h-5 mr-2"></i>
                            Offres urgentes
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-flag w-5 h-5 mr-2"></i>
                            Offres signalées
                        </a>
                    </div>
                    
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">
                            Catégories
                        </p>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-tags w-5 h-5 mr-2"></i>
                            Types de véhicules
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-tools w-5 h-5 mr-2"></i>
                            Types d'interventions
                        </a>
                    </div>
                    
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">
                            Finances
                        </p>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-money-bill-wave w-5 h-5 mr-2"></i>
                            Transactions
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-file-invoice-dollar w-5 h-5 mr-2"></i>
                            Factures
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-percentage w-5 h-5 mr-2"></i>
                            Commissions
                        </a>
                    </div>
                    
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">
                            Paramètres
                        </p>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-cog w-5 h-5 mr-2"></i>
                            Généraux
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-bell w-5 h-5 mr-2"></i>
                            Notifications
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                            <i class="fas fa-shield-alt w-5 h-5 mr-2"></i>
                            Sécurité
                        </a>
                    </div>
                </nav>
            </div>
            
            <div class="p-4 border-t border-gray-700">
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center mr-3">
                        <span class="font-bold text-white">A</span>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white">Admin</p>
                        <p class="text-xs text-gray-400">admin@mecaconnect.fr</p>
                    </div>
                    <button class="ml-auto text-gray-400 hover:text-white">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Main content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top header -->
            <header class="bg-white shadow-sm z-10">
                <div class="px-6 py-4 flex items-center justify-between">
                    <div class="flex items-center">
                        <button class="text-gray-500 focus:outline-none lg:hidden">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h1 class="text-2xl font-bold text-gray-800 ml-4">Tableau de bord</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute top-3 right-3 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">3</span>
                        </button>
                        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                            <i class="fas fa-cog text-xl"></i>
                        </button>
                    </div>
                </div>
            </header>
            
            <!-- Main content -->
            <main class="flex-1 overflow-y-auto bg-gray-100 p-6">
                <!-- Stats cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-primary-100 text-primary-600">
                                <i class="fas fa-users text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Utilisateurs totaux</p>
                                <p class="text-2xl font-semibold text-gray-800">1,284</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-center">
                                <span class="text-green-500 text-sm font-medium flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 12%
                                </span>
                                <span class="text-gray-500 text-sm ml-2">Depuis le mois dernier</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-secondary-100 text-secondary-600">
                                <i class="fas fa-clipboard-list text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Offres actives</p>
                                <p class="text-2xl font-semibold text-gray-800">342</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-center">
                                <span class="text-green-500 text-sm font-medium flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 8%
                                </span>
                                <span class="text-gray-500 text-sm ml-2">Depuis le mois dernier</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-600">
                                <i class="fas fa-check-circle text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Missions terminées</p>
                                <p class="text-2xl font-semibold text-gray-800">876</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-center">
                                <span class="text-green-500 text-sm font-medium flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 16%
                                </span>
                                <span class="text-gray-500 text-sm ml-2">Depuis le mois dernier</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                                <i class="fas fa-euro-sign text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Revenus (commissions)</p>
                                <p class="text-2xl font-semibold text-gray-800">24 680 €</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-center">
                                <span class="text-green-500 text-sm font-medium flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 10%
                                </span>
                                <span class="text-gray-500 text-sm ml-2">Depuis le mois dernier</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Charts section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-lg font-semibold text-gray-800">Activité mensuelle</h2>
                            <div class="flex items-center">
                                <select class="text-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                    <option>Cette année</option>
                                    <option>Année précédente</option>
                                </select>
                            </div>
                        </div>
                        <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                            <img src="https://placehold.co/600x300/075985/FFFFFF/png?text=Graphique+d'activité" alt="Graphique d'activité" class="max-h-full">
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-lg font-semibold text-gray-800">Répartition des interventions</h2>
                            <div class="flex items-center">
                                <select class="text-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                    <option>Ce mois</option>
                                    <option>Mois précédent</option>
                                </select>
                            </div>
                        </div>
                        <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                            <img src="https://placehold.co/600x300/075985/FFFFFF/png?text=Graphique+en+camembert" alt="Graphique en camembert" class="max-h-full">
                        </div>
                    </div>
                </div>
                
                <!-- Recent activity -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <div class="lg:col-span-2 bg-white rounded-lg shadow-md">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <h2 class="text-lg font-semibold text-gray-800">Offres récentes</h2>
                                <a href="#" class="text-primary-600 hover:text-primary-700 text-sm font-medium">Voir tout</a>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Titre</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Budget</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">Réparation moteur autocar Volvo</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Transports Martin</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Urgent</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">800€ - 1200€</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Il y a 2 heures</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-primary-600 hover:text-primary-900 mr-3">Voir</a>
                                            <a href="#" class="text-red-600 hover:text-red-900">Supprimer</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">Révision système de freinage Mercedes</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Voyages Express</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Cette semaine</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">400€ - 600€</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Il y a 1 jour</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-primary-600 hover:text-primary-900 mr-3">Voir</a>
                                            <a href="#" class="text-red-600 hover:text-red-900">Supprimer</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">Maintenance flotte de 3 minibus</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Transports Scolaires Dupont</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Planifié</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1500€ - 2000€</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Il y a 3 jours</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-primary-600 hover:text-primary-900 mr-3">Voir</a>
                                            <a href="#" class="text-red-600 hover:text-red-900">Supprimer</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">Réparation climatisation autocar</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Voyages Confort</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Urgent</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">300€ - 500€</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Il y a 5 heures</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-primary-600 hover:text-primary-900 mr-3">Voir</a>
                                            <a href="#" class="text-red-600 hover:text-red-900">Supprimer</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <h2 class="text-lg font-semibold text-gray-800">Nouveaux utilisateurs</h2>
                                <a href="#" class="text-primary-600 hover:text-primary-700 text-sm font-medium">Voir tout</a>
                            </div>
                        </div>
                        <div class="p-6">
                            <ul class="divide-y divide-gray-200">
                                <li class="py-4 flex">
                                    <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                                        <span class="font-bold text-gray-600">JD</span>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Jean Dupont</p>
                                        <p class="text-sm text-gray-500">Mécanicien • Lyon</p>
                                        <p class="text-xs text-gray-400">Inscrit il y a 2 heures</p>
                                    </div>
                                </li>
                                <li class="py-4 flex">
                                    <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                                        <span class="font-bold text-gray-600">ML</span>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Marie Leroy</p>
                                        <p class="text-sm text-gray-500">Mécanicienne • Paris</p>
                                        <p class="text-xs text-gray-400">Inscrite il y a 5 heures</p>
                                    </div>
                                </li>
                                <li class="py-4 flex">
                                    <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                                        <span class="font-bold text-gray-600">TE</span>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Transports Express</p>
                                        <p class="text-sm text-gray-500">Entreprise • Marseille</p>
                                        <p class="text-xs text-gray-400">Inscrit il y a 1 jour</p>
                                    </div>
                                </li>
                                <li class="py-4 flex">
                                    <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                                        <span class="font-bold text-gray-600">PB</span>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Pierre Blanc</p>
                                        <p class="text-sm text-gray-500">Mécanicien • Toulouse</p>
                                        <p class="text-xs text-gray-400">Inscrit il y a 2 jours</p>
                                    </div>
                                </li>
                                <li class="py-4 flex">
                                    <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                                        <span class="font-bold text-gray-600">VT</span>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Voyages Tourisme</p>
                                        <p class="text-sm text-gray-500">Entreprise • Nice</p>
                                        <p class="text-xs text-gray-400">Inscrit il y a 3 jours</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Types de véhicules section -->
                <div class="bg-white rounded-lg shadow-md mb-8">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <div class="flex justify-between items-center">
                            <h2 class="text-lg font-semibold text-gray-800">Types de véhicules</h2>
                            <button id="openVehicleModal" class="bg-primary-600 text-white px-4 py-2 rounded-md hover:bg-primary-700">+ Ajouter un type</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Offres actives</th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Autocar</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">Véhicule de transport collectif de personnes pour les longues distances</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="https://placehold.co/100x60/075985/FFFFFF/png?text=Autocar" alt="Autocar" class="h-10 w-auto">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">124</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-yellow-600 hover:text-yellow-900 mr-3" onclick="openEditVehicleModal(1)">Modifier</button>
                                        <button class="text-red-600 hover:text-red-900" onclick="confirmDeleteVehicle(1)">Supprimer</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Bus</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">Véhicule de transport en commun urbain et interurbain</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="https://placehold.co/100x60/075985/FFFFFF/png?text=Bus" alt="Bus" class="h-10 w-auto">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">98</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-yellow-600 hover:text-yellow-900 mr-3" onclick="openEditVehicleModal(2)">Modifier</button>
                                        <button class="text-red-600 hover:text-red-900" onclick="confirmDeleteVehicle(2)">Supprimer</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Minibus</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">Petit véhicule de transport collectif de 9 à 22 places</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="https://placehold.co/100x60/075985/FFFFFF/png?text=Minibus" alt="Minibus" class="h-10 w-auto">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">76</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-yellow-600 hover:text-yellow-900 mr-3" onclick="openEditVehicleModal(3)">Modifier</button>
                                        <button class="text-red-600 hover:text-red-900" onclick="confirmDeleteVehicle(3)">Supprimer</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Camion</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">Véhicule utilitaire destiné au transport de marchandises</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="https://placehold.co/100x60/075985/FFFFFF/png?text=Camion" alt="Camion" class="h-10 w-auto">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">44</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-yellow-600 hover:text-yellow-900 mr-3" onclick="openEditVehicleModal(4)">Modifier</button>
                                        <button class="text-red-600 hover:text-red-900" onclick="confirmDeleteVehicle(4)">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <!-- Add Vehicle Type Modal -->
    <div id="vehicleModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Ajouter un type de véhicule</h2>
            <form action="/admin/vehicle-types" enctype="multipart/form-data" method="POST" class="w-full">
                <div class="form-element mb-4">
                    <label for="title" class="block text-gray-700 mb-2">Nom</label>
                    <input type="text" name="nom" required placeholder="Nom du type de véhicule" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" />
                </div>
                <div class="form-element mb-4">
                    <label for="description" class="block text-gray-700 mb-2">Description</label>
                    <textarea name="description" required placeholder="Description du type de véhicule" rows="3" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"></textarea>
                </div>
                <div class="form-element mb-4">
                    <label for="image" class="block text-gray-700 mb-2">Image</label>
                    <input type="file" name="image" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" />
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" id="closeVehicleModal" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Annuler</button>
                    <input type="submit" class="bg-primary-600 text-white px-4 py-2 rounded-md hover:bg-primary-700" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
    
    <!-- Edit Vehicle Type Modal -->
    <div id="editVehicleModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Modifier un type de véhicule</h2>
            <form id="editVehicleForm" action="/admin/vehicle-types" method="POST" enctype="multipart/form-data" class="w-full">
                <input type="hidden" name="id" id="editVehicleId">
                <div class="form-element mb-4">
                    <label for="title" class="block text-gray-700 mb-2">Nom</label>
                    <input type="text" name="nom" id="editVehicleName" required placeholder="Nom du type de véhicule" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" />
                </div>
                <div class="form-element mb-4">
                    <label for="description" class="block text-gray-700 mb-2">Description</label>
                    <textarea name="description" id="editVehicleDescription" required placeholder="Description du type de véhicule" rows="3" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"></textarea>
                </div>
                <div class="form-element mb-4">
                    <label for="image" class="block text-gray-700 mb-2">Image actuelle</label>
                    <div class="mb-2">
                        <img id="currentVehicleImage" src="/placeholder.svg" alt="Image actuelle" class="h-16 w-auto">
                    </div>
                    <label for="newImage" class="block text-gray-700 mb-2">Nouvelle image (optionnel)</label>
                    <input type="file" name="image" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" />
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" id="closeEditVehicleModal" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Annuler</button>
                    <input type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded-md hover:bg-yellow-700" value="Mettre à jour">
                </div>
            </form>
        </div>
    </div>
    
    <!-- Delete Vehicle Type Modal -->
    <div id="deleteVehicleModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Confirmer la suppression</h2>
            <p class="mb-4">Êtes-vous sûr de vouloir supprimer ce type de véhicule ? Cette action est irréversible.</p>
            <form id="deleteVehicleForm" action="/admin/vehicle-types" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" id="deleteVehicleId">
                <div class="flex justify-end space-x-2">
                    <button type="button" id="closeDeleteVehicleModal" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Annuler</button>
                    <input type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700" value="Supprimer">
                </div>
            </form>
        </div>
    </div>

    <script>
        // Vehicle Type Modal
        const vehicleModal = document.getElementById("vehicleModal");
        const editVehicleModal = document.getElementById("editVehicleModal");
        const deleteVehicleModal = document.getElementById("deleteVehicleModal");
        const openVehicleModal = document.getElementById("openVehicleModal");
        const closeVehicleModal = document.getElementById("closeVehicleModal");
        const closeEditVehicleModal = document.getElementById("closeEditVehicleModal");
        const closeDeleteVehicleModal = document.getElementById("closeDeleteVehicleModal");

        openVehicleModal.addEventListener("click", () => {
            vehicleModal.classList.remove("hidden");
        });

        closeVehicleModal.addEventListener("click", () => {
            vehicleModal.classList.add("hidden");
        });

        closeEditVehicleModal.addEventListener("click", () => {
            editVehicleModal.classList.add("hidden");
        });

        closeDeleteVehicleModal.addEventListener("click", () => {
            deleteVehicleModal.classList.add("hidden");
        });

        function openEditVehicleModal(id) {
            // Dans un cas réel, vous récupéreriez les données du véhicule depuis une API
            const vehicleData = {
                1: { name: "Autocar", description: "Véhicule de transport collectif de personnes pour les longues distances", image: "https://placehold.co/100x60/075985/FFFFFF/png?text=Autocar" },
                2: { name: "Bus", description: "Véhicule de transport en commun urbain et interurbain", image: "https://placehold.co/100x60/075985/FFFFFF/png?text=Bus" },
                3: { name: "Minibus", description: "Petit véhicule de transport collectif de 9 à 22 places", image: "https://placehold.co/100x60/075985/FFFFFF/png?text=Minibus" },
                4: { name: "Camion", description: "Véhicule utilitaire destiné au transport de marchandises", image: "https://placehold.co/100x60/075985/FFFFFF/png?text=Camion" }
            };
            
            const vehicle = vehicleData[id];
            
            document.getElementById("editVehicleId").value = id;
            document.getElementById("editVehicleName").value = vehicle.name;
            document.getElementById("editVehicleDescription").value = vehicle.description;
            document.getElementById("currentVehicleImage").src = vehicle.image;
            
            editVehicleModal.classList.remove("hidden");
        }

        function confirmDeleteVehicle(id) {
            document.getElementById("deleteVehicleId").value = id;
            deleteVehicleModal.classList.remove("hidden");
        }
    </script>
</body>
</html>