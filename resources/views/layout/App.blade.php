<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fc;
        }
        .hero-bg {
            background-image: url('https://images.unsplash.com/photo-1664575602276-acd073f104c1?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
        /* CSS-only animations */
        .fade-in {
            opacity: 0;
            animation: fadeIn 0.8s ease-in-out forwards;
        }
        .slide-in {
            opacity: 0;
            animation: slideIn 0.6s ease-in-out forwards;
        }
        .scale-in {
            opacity: 0;
            animation: scaleIn 0.7s ease-in-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideIn {
            from { transform: translateX(-30px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes scaleIn {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        /* Delayed animations for staggered effect */
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }
    </style>
</head>
@if (session('error'))
<div class="fixed top-4 right-4 z-50">
    <div class="bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg flex items-center animate-fade-in-up animate-out fade-out-down animate-duration-300">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
        {{ session('error') }}
        <button onclick="this.parentElement.parentElement.remove()" class="ml-4">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>
@endif

    @if (session('message'))
    <div class="fixed top-4 right-4 z-50">
        <div class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center animate-fade-in-up animate-out fade-out-down animate-duration-300">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            {{ session('message') }}
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
@endif
<body class="text-gray-800">
    <nav class="bg-gray-900 h-[141px] flex items-center text-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.html" class="flex-shrink-0 flex items-center">
                        <a href="#" class="text-2xl font-bold text-primary-600">
                            <span class="text-secondary-500">Méca</span>Connect
                        </a>
                    </a>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="/" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium">Accueil</a>
                        <a href="/services" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium">Services</a>
                        <a href="/reparations" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium">Réparations</a>
                        <a href="/entretien" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium">Entretien</a>
                        <a href="/diagnostic" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium">Diagnostic</a>
                        <a href="/contact" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium">Contact</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center sm:space-x-4">
                    @guest
                    <a class="bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-red-700 transition-colors" href="/seConnect">Connexion</a>
                    <a class="bg-yellow-500 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-yellow-600 transition-colors" href="/inscription">Inscription</a>
                    @else
                        <a class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium" href="/profile">Mon compte</a>
                    @endguest
                    
                </div>
                <div class="flex items-center sm:hidden">
                    <button type="button" class="text-gray-300 hover:text-white focus:outline-none" id="mobile-menu-button">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="index.html" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Accueil</a>
                <a href="services.html" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Services</a>
                <a href="reparations.html" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Réparations</a>
                <a href="entretien.html" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Entretien</a>
                <a href="diagnostic.html" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Diagnostic</a>
                <a href="contact.html" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Contact</a>
                <div class="flex flex-col space-y-2 mt-4">
                    @guest
                        <a href="seConnect" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Connexion</a>
                        <a href="/inscription" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Inscription</a>
                    @else
                        <a href="/mon-compte" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Mon compte</a>
                        <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="block">
                            @csrf
                            <button type="submit" class="w-full text-left pl-3 pr-4 py-2 text-base font-medium text-red-500 hover:bg-red-700 hover:text-white">
                                Déconnexion
                            </button>
                        </form>
                    @endguest
                    <a href="/rdv" class="block text-center bg-red-600 text-white px-4 py-2 rounded-md text-base font-medium hover:bg-red-700 transition-colors mx-3">Prendre RDV</a>
                    <a href="/devis" class="block text-center bg-yellow-500 text-white px-4 py-2 rounded-md text-base font-medium hover:bg-yellow-600 transition-colors mx-3">Devis gratuit</a>
                </div>
            </div>
        </div>
        
        @auth
        <div class="flex items-center space-x-4">
            <form id="logout-form" action="" method="POST" style="display: none;">
                @csrf
            </form>
            <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="block">
                @csrf
                <button type="submit" class="w-full text-left pl-3 pr-4 py-2 text-base font-medium text-red-500 hover:bg-red-700 hover:text-white">
                    Déconnexion
                </button>
            </form>
            <div class="relative">
               <a href="/Profile"> <button class="flex items-center text-gray-300 hover:text-white focus:outline-none">
                    <img src="{{ url('storage/' . auth()->user()->image) }}" alt="Photo de profil" class="w-8 h-8 rounded-full object-cover">
                    <span class="ml-1">{{ auth()->user()->first_name }}</span>
                    <i class="fas fa-chevron-down ml-1 text-xs"></i>
                </button>
                </a>
            </div>
        </div>
        @endauth
    </nav>
    <div>
    @yield('content')
</div>

    <footer class="bg-gray-900 text-white mt-10">
        <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-1">
                    <a href="#" class="text-2xl font-bold text-primary-600">
                        <span class="text-secondary-500">Méca</span>Connect
                    </a>                    <p class="mt-2 text-sm text-gray-300">Votre garage automobile de confiance depuis 1995. Expertise, qualité et service personnalisé.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>    
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-200 uppercase tracking-wider">Nos services</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-sm text-gray-400 hover:text-red-400">Réparation moteur</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-red-400">Révision</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-red-400">Freinage</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-red-400">Pneumatiques</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-red-400">Vidange</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-200 uppercase tracking-wider">Horaires</h3>
                    <ul class="mt-4 space-y-2">
                        <li class="text-sm text-gray-400">Lundi - Vendredi: 8h - 19h</li>
                        <li class="text-sm text-gray-400">Samedi: 9h - 17h</li>
                        <li class="text-sm text-gray-400">Dimanche: Fermé</li>
                        <li class="text-sm text-gray-400 mt-4">Urgence dépannage 24/7:</li>
                        <li class="text-sm text-white font-bold">06 XX XX XX XX</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-200 uppercase tracking-wider">Informations</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-sm text-gray-400 hover:text-red-400">Mentions légales</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-red-400">Politique de confidentialité</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-red-400">CGV</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-red-400">Plan d'accès</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-red-400">Recrutement</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 mt-8 text-center">
                <p class="text-sm text-gray-400">&copy; 2025 AUTOEXPERT. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle mobile menu
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    </body>
    </html>