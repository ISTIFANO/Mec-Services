<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie - MécaConnect</title>
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
                <a href="offres-clients.html" class="text-gray-600 hover:text-primary-600 transition">Offres</a>
                <a href="#" class="text-gray-600 hover:text-primary-600 transition">Mon profil</a>
                <a href="#" class="text-primary-600 font-medium">Messages</a>
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
                <a href="offres-clients.html" class="text-gray-600 hover:text-primary-600 transition py-2">Offres</a>
                <a href="#" class="text-gray-600 hover:text-primary-600 transition py-2">Mon profil</a>
                <a href="#" class="text-primary-600 font-medium py-2">Messages</a>
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
        <h1 class="text-2xl font-bold mb-6">Messagerie</h1>
        
        <!-- Mobile view tabs -->
        <div class="md:hidden mb-6">
            <div class="flex border-b border-gray-200">
                <button class="flex-1 py-2 px-4 text-center border-b-2 border-primary-600 text-primary-600 font-medium">
                    Conversations
                </button>
                <button class="flex-1 py-2 px-4 text-center text-gray-500">
                    Messages
                </button>
                <button class="flex-1 py-2 px-4 text-center text-gray-500">
                    Détails
                </button>
            </div>
        </div>
        
        <div class="flex flex-col md:flex-row h-[calc(100vh-180px)]">
            <!-- Conversations list (left sidebar) -->
            <div class="w-full md:w-1/4 lg:w-1/5 bg-white rounded-lg shadow-md overflow-hidden md:mr-4 mb-4 md:mb-0">
                <div class="p-4 border-b border-gray-200">
                    <div class="relative">
                        <input type="text" placeholder="Rechercher une conversation..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
                
                <div class="overflow-y-auto h-[calc(100%-60px)]">
                    <!-- Active conversation -->
                    <div class="p-4 bg-primary-50 border-l-4 border-primary-600 cursor-pointer">
                        <div class="flex items-start">
                            <div class="relative mr-3">
                                <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                                    <span class="font-bold text-gray-600">TM</span>
                                </div>
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold truncate">Transports Martin</h3>
                                    <span class="text-xs text-gray-500 whitespace-nowrap ml-2">10:23</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Parfait, merci pour ces précisions. Pouvez-vous me confirmer si vous...</p>
                                <div class="flex items-center mt-1">
                                    <span class="bg-red-100 text-red-600 text-xs font-medium px-2 py-0.5 rounded-full">Urgent</span>
                                    <span class="ml-2 text-xs text-gray-500">Réparation moteur autocar Volvo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Unread conversation -->
                    <div class="p-4 hover:bg-gray-50 cursor-pointer border-b border-gray-100">
                        <div class="flex items-start">
                            <div class="relative mr-3">
                                <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                                    <span class="font-bold text-gray-600">VE</span>
                                </div>
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-gray-300 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold truncate">Voyages Express</h3>
                                    <span class="text-xs text-gray-500 whitespace-nowrap ml-2">Hier</span>
                                </div>
                                <p class="text-sm font-semibold text-gray-800 truncate">Bonjour, nous avons bien reçu votre candidature pour...</p>
                                <div class="flex items-center mt-1">
                                    <span class="bg-yellow-100 text-yellow-600 text-xs font-medium px-2 py-0.5 rounded-full">Cette semaine</span>
                                    <span class="ml-2 text-xs text-gray-500">Révision système de freinage</span>
                                </div>
                                <div class="mt-1">
                                    <span class="inline-flex items-center justify-center w-5 h-5 bg-primary-600 text-white text-xs font-medium rounded-full">2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Regular conversation -->
                    <div class="p-4 hover:bg-gray-50 cursor-pointer border-b border-gray-100">
                        <div class="flex items-start">
                            <div class="relative mr-3">
                                <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                                    <span class="font-bold text-gray-600">TS</span>
                                </div>
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold truncate">Transports Scolaires Dupont</h3>
                                    <span class="text-xs text-gray-500 whitespace-nowrap ml-2">Lun</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Merci pour votre intervention rapide. Nous sommes très satisfaits...</p>
                                <div class="flex items-center mt-1">
                                    <span class="bg-green-100 text-green-600 text-xs font-medium px-2 py-0.5 rounded-full">Terminé</span>
                                    <span class="ml-2 text-xs text-gray-500">Maintenance flotte minibus</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Regular conversation -->
                    <div class="p-4 hover:bg-gray-50 cursor-pointer border-b border-gray-100">
                        <div class="flex items-start">
                            <div class="relative mr-3">
                                <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                                    <span class="font-bold text-gray-600">VC</span>
                                </div>
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-gray-300 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold truncate">Voyages Confort</h3>
                                    <span class="text-xs text-gray-500 whitespace-nowrap ml-2">23/04</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Nous avons décidé de retenir un autre candidat pour cette mission...</p>
                                <div class="flex items-center mt-1">
                                    <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-0.5 rounded-full">Refusé</span>
                                    <span class="ml-2 text-xs text-gray-500">Réparation climatisation</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Regular conversation -->
                    <div class="p-4 hover:bg-gray-50 cursor-pointer border-b border-gray-100">
                        <div class="flex items-start">
                            <div class="relative mr-3">
                                <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                                    <span class="font-bold text-gray-600">TU</span>
                                </div>
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-gray-300 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold truncate">Transports Urbains</h3>
                                    <span class="text-xs text-gray-500 whitespace-nowrap ml-2">15/04</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Votre devis a été accepté. Pouvez-vous intervenir comme prévu...</p>
                                <div class="flex items-center mt-1">
                                    <span class="bg-blue-100 text-blue-600 text-xs font-medium px-2 py-0.5 rounded-full">En cours</span>
                                    <span class="ml-2 text-xs text-gray-500">Diagnostic électronique MAN</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Chat area (middle) -->
            <div class="w-full md:w-2/4 lg:w-2/5 bg-white rounded-lg shadow-md overflow-hidden flex flex-col mb-4 md:mb-0">
                <!-- Chat header -->
                <div class="p-4 border-b border-gray-200 flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                            <span class="font-bold text-gray-600">TM</span>
                        </div>
                        <div>
                            <h3 class="font-bold">Transports Martin</h3>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                <span class="text-xs text-gray-500">En ligne</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <button class="text-gray-500 hover:text-gray-700 p-2">
                            <i class="fas fa-phone"></i>
                        </button>
                        <button class="text-gray-500 hover:text-gray-700 p-2">
                            <i class="fas fa-video"></i>
                        </button>
                        <button class="text-gray-500 hover:text-gray-700 p-2 md:hidden" id="details-toggle">
                            <i class="fas fa-info-circle"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Chat messages -->
                <div class="flex-1 overflow-y-auto p-4 bg-gray-50" id="chat-messages">
                    <!-- Date separator -->
                    <div class="flex justify-center mb-4">
                        <span class="bg-gray-200 text-gray-600 text-xs font-medium px-3 py-1 rounded-full">Aujourd'hui</span>
                    </div>
                    
                    <!-- System message -->
                    <div class="flex justify-center mb-4">
                        <div class="bg-gray-200 text-gray-600 text-xs font-medium px-3 py-1 rounded-full">
                            Vous avez postulé à cette offre
                        </div>
                    </div>
                    
                    <!-- Received message -->
                    <div class="flex mb-4">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center mr-2 mt-1 flex-shrink-0">
                            <span class="font-bold text-gray-600 text-xs">TM</span>
                        </div>
                        <div class="max-w-[75%]">
                            <div class="bg-white rounded-lg p-3 shadow-sm">
                                <p class="text-gray-800">Bonjour Thomas, merci pour votre candidature concernant la réparation de notre autocar Volvo. Avez-vous déjà travaillé sur ce modèle spécifique (Volvo 9700) ?</p>
                            </div>
                            <div class="text-xs text-gray-500 mt-1">09:45</div>
                        </div>
                    </div>
                    
                    <!-- Sent message -->
                    <div class="flex justify-end mb-4">
                        <div class="max-w-[75%]">
                            <div class="bg-primary-600 rounded-lg p-3 shadow-sm text-white">
                                <p>Bonjour, oui j'ai une bonne expérience avec les Volvo 9700. J'ai travaillé pendant 5 ans chez un concessionnaire Volvo et j'ai réparé plusieurs problèmes similaires sur ce modèle.</p>
                            </div>
                            <div class="text-xs text-gray-500 mt-1 text-right">09:48 <i class="fas fa-check-double ml-1"></i></div>
                        </div>
                    </div>
                    
                    <!-- Sent message with image -->
                    <div class="flex justify-end mb-4">
                        <div class="max-w-[75%]">
                            <div class="bg-primary-600 rounded-lg p-3 shadow-sm text-white">
                                <p class="mb-2">Voici un exemple d'une réparation similaire que j'ai effectuée le mois dernier sur un Volvo 9700 :</p>
                                <div class="rounded-md overflow-hidden">
                                    <img src="https://placehold.co/600x400/075985/FFFFFF/png?text=Réparation+Volvo" alt="Réparation précédente" class="w-full">
                                </div>
                            </div>
                            <div class="text-xs text-gray-500 mt-1 text-right">09:50 <i class="fas fa-check-double ml-1"></i></div>
                        </div>
                    </div>
                    
                    <!-- Received message -->
                    <div class="flex mb-4">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center mr-2 mt-1 flex-shrink-0">
                            <span class="font-bold text-gray-600 text-xs">TM</span>
                        </div>
                        <div class="max-w-[75%]">
                            <div class="bg-white rounded-lg p-3 shadow-sm">
                                <p class="text-gray-800">C'est très intéressant. Disposez-vous de l'équipement de diagnostic spécifique pour les moteurs D13K ? Notre véhicule affiche plusieurs codes d'erreur liés au système d'injection.</p>
                            </div>
                            <div class="text-xs text-gray-500 mt-1">10:05</div>
                        </div>
                    </div>
                    
                    <!-- Sent message -->
                    <div class="flex justify-end mb-4">
                        <div class="max-w-[75%]">
                            <div class="bg-primary-600 rounded-lg p-3 shadow-sm text-white">
                                <p>Oui, j'ai l'équipement de diagnostic Volvo Tech Tool qui permet d'accéder à tous les systèmes du D13K. Je peux lire et interpréter les codes d'erreur spécifiques, ainsi que réaliser les tests nécessaires sur le système d'injection.</p>
                            </div>
                            <div class="text-xs text-gray-500 mt-1 text-right">10:12 <i class="fas fa-check-double ml-1"></i></div>
                        </div>
                    </div>
                    
                    <!-- Received message -->
                    <div class="flex mb-4">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center mr-2 mt-1 flex-shrink-0">
                            <span class="font-bold text-gray-600 text-xs">TM</span>
                        </div>
                        <div class="max-w-[75%]">
                            <div class="bg-white rounded-lg p-3 shadow-sm">
                                <p class="text-gray-800">Parfait, merci pour ces précisions. Pouvez-vous me confirmer si vous êtes disponible pour intervenir le 12/05 comme indiqué dans l'offre ? Nous avons vraiment besoin que le véhicule soit opérationnel pour le 15/05 au plus tard.</p>
                            </div>
                            <div class="text-xs text-gray-500 mt-1">10:23</div>
                        </div>
                    </div>
                    
                    <!-- Typing indicator -->
                    <div class="flex mb-4">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center mr-2 mt-1 flex-shrink-0">
                            <span class="font-bold text-gray-600 text-xs">TM</span>
                        </div>
                        <div class="max-w-[75%]">
                            <div class="bg-white rounded-lg p-3 shadow-sm">
                                <div class="flex space-x-1">
                                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Chat input -->
                <div class="p-4 border-t border-gray-200">
                    <div class="flex items-end">
                        <button class="text-gray-500 hover:text-gray-700 p-2">
                            <i class="fas fa-paperclip"></i>
                        </button>
                        <button class="text-gray-500 hover:text-gray-700 p-2">
                            <i class="fas fa-image"></i>
                        </button>
                        <div class="flex-1 mx-2">
                            <textarea rows="1" placeholder="Écrivez votre message..." class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent resize-none"></textarea>
                        </div>
                        <button class="bg-primary-600 text-white p-2 rounded-full hover:bg-primary-700">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Job details (right sidebar) -->
            <div class="w-full md:w-1/4 lg:w-2/5 bg-white rounded-lg shadow-md overflow-hidden md:ml-4 hidden md:block" id="job-details-panel">
                <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                    <h3 class="font-bold">Détails de l'offre</h3>
                    <div class="flex items-center">
                        <span class="bg-blue-100 text-blue-600 text-xs font-medium px-2.5 py-0.5 rounded-full">En discussion</span>
                    </div>
                </div>
                
                <div class="p-4 overflow-y-auto h-[calc(100%-60px)]">
                    <!-- Job summary -->
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-red-100 text-red-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Urgent</span>
                            <span class="bg-primary-100 text-primary-600 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Autocar</span>
                        </div>
                        <h2 class="text-xl font-bold mb-2">Réparation moteur autocar Volvo</h2>
                        <p class="text-gray-600 mb-4">Transports Martin • Lyon, 69000</p>
                        <a href="details-offre.html" class="text-primary-600 hover:text-primary-700 font-medium flex items-center">
                            Voir l'offre complète
                            <i class="fas fa-external-link-alt ml-1 text-xs"></i>
                        </a>
                    </div>
                    
                    <!-- Job details -->
                    <div class="mb-6">
                        <h3 class="font-bold mb-3">Résumé de la mission</h3>
                        <p class="text-gray-700 mb-4">Autocar Volvo 9700 présentant des problèmes de démarrage et une perte de puissance. Diagnostic complet et réparation nécessaires.</p>
                        
                        <div class="grid grid-cols-1 gap-4 mb-4">
                            <div class="bg-gray-50 p-3 rounded-md">
                                <div class="flex items-center mb-1">
                                    <i class="fas fa-calendar-day text-primary-600 mr-2"></i>
                                    <span class="font-medium">Date d'intervention</span>
                                </div>
                                <p class="text-gray-700 pl-6">12/05/2023</p>
                            </div>
                            
                            <div class="bg-gray-50 p-3 rounded-md">
                                <div class="flex items-center mb-1">
                                    <i class="fas fa-map-marker-alt text-primary-600 mr-2"></i>
                                    <span class="font-medium">Lieu</span>
                                </div>
                                <p class="text-gray-700 pl-6">Sur site (Lyon)</p>
                            </div>
                            
                            <div class="bg-gray-50 p-3 rounded-md">
                                <div class="flex items-center mb-1">
                                    <i class="fas fa-tag text-primary-600 mr-2"></i>
                                    <span class="font-medium">Budget proposé</span>
                                </div>
                                <p class="text-gray-700 pl-6">800€ - 1200€</p>
                            </div>
                            
                            <div class="bg-gray-50 p-3 rounded-md">
                                <div class="flex items-center mb-1">
                                    <i class="fas fa-clock text-primary-600 mr-2"></i>
                                    <span class="font-medium">Statut</span>
                                </div>
                                <p class="text-gray-700 pl-6">En discussion (expire dans 2 jours)</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Vehicle details -->
                    <div class="mb-6">
                        <h3 class="font-bold mb-3">Véhicule concerné</h3>
                        
                        <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden mb-4">
                            <img src="https://placehold.co/800x450/075985/FFFFFF/png?text=Volvo+9700" alt="Volvo 9700" class="w-full h-full object-cover">
                        </div>
                        
                        <div class="grid grid-cols-2 gap-3 mb-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Marque</p>
                                <p class="font-medium">Volvo</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Modèle</p>
                                <p class="font-medium">9700</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Année</p>
                                <p class="font-medium">2018</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Motorisation</p>
                                <p class="font-medium">D13K 460 Euro 6</p>
                            </div>
                        </div>
                        
                        <a href="#" class="text-primary-600 hover:text-primary-700 text-sm flex items-center">
                            Voir les détails complets du véhicule
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>
                    
                    <!-- Your application -->
                    <div class="mb-6">
                        <h3 class="font-bold mb-3">Votre candidature</h3>
                        
                        <div class="bg-gray-50 p-3 rounded-md mb-4">
                            <div class="flex items-center mb-1">
                                <i class="fas fa-euro-sign text-primary-600 mr-2"></i>
                                <span class="font-medium">Votre tarif proposé</span>
                            </div>
                            <p class="text-gray-700 pl-6">950€</p>
                        </div>
                        
                        <div class="bg-gray-50 p-3 rounded-md">
                            <div class="flex items-center mb-1">
                                <i class="fas fa-comment-alt text-primary-600 mr-2"></i>
                                <span class="font-medium">Votre message</span>
                            </div>
                            <p class="text-gray-700 pl-6 text-sm">Bonjour, je suis spécialisé dans les moteurs Volvo et j'ai l'équipement nécessaire pour diagnostiquer et réparer votre autocar. J'ai plus de 10 ans d'expérience sur ce type de véhicule et je peux intervenir à la date demandée...</p>
                        </div>
                    </div>
                    
                    <!-- Actions -->
                    <div>
                        <h3 class="font-bold mb-3">Actions</h3>
                        
                        <div class="space-y-3">
                            <button class="w-full bg-primary-600 text-white py-2 px-4 rounded-md hover:bg-primary-700 transition flex items-center justify-center">
                                <i class="fas fa-check-circle mr-2"></i>
                                Accepter l'offre
                            </button>
                            
                            <button class="w-full bg-white border border-primary-600 text-primary-600 py-2 px-4 rounded-md hover:bg-primary-50 transition flex items-center justify-center">
                                <i class="fas fa-file-invoice-dollar mr-2"></i>
                                Modifier mon devis
                            </button>
                            
                            <button class="w-full bg-white border border-gray-300 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-50 transition flex items-center justify-center">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                Proposer une autre date
                            </button>
                            
                            <button class="w-full bg-white border border-red-600 text-red-600 py-2 px-4 rounded-md hover:bg-red-50 transition flex items-center justify-center">
                                <i class="fas fa-times-circle mr-2"></i>
                                Retirer ma candidature
                            </button>
                        </div>
                    </div>
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
                        <li><a href="offres-clients.html" class="text-gray-400 hover:text-white transition">Offres</a></li>
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
        
        // Mobile details toggle
        const detailsToggle = document.getElementById('details-toggle');
        const jobDetailsPanel = document.getElementById('job-details-panel');
        
        if (detailsToggle) {
            detailsToggle.addEventListener('click', () => {
                jobDetailsPanel.classList.toggle('hidden');
                jobDetailsPanel.classList.toggle('md:block');
                jobDetailsPanel.classList.toggle('fixed');
                jobDetailsPanel.classList.toggle('inset-0');
                jobDetailsPanel.classList.toggle('z-50');
            });
        }
    </script>
</body>
</html>