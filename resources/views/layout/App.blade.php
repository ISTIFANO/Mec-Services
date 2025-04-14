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
<body class="text-gray-800">
<nav class="bg-gray-900 text-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="index.html" class="flex-shrink-0 flex items-center">
                    <h1 class="text-xl font-bold text-red-500 cursor-pointer font-sans">AUTO<span class="text-gray-200">EXPERT</span></h1>
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
                <a class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium" href="/mon-compte">Mon compte</a>
                <a class="bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-red-700 transition-colors" href="/rdv">Prendre RDV</a>
                <a class="bg-yellow-500 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-yellow-600 transition-colors" href="/devis">Devis gratuit</a>
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
                <a href="/mon-compte" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Mon compte</a>
                <a href="/rdv" class="block text-center bg-red-600 text-white px-4 py-2 rounded-md text-base font-medium hover:bg-red-700 transition-colors mx-3">Prendre RDV</a>
                <a href="/devis" class="block text-center bg-yellow-500 text-white px-4 py-2 rounded-md text-base font-medium hover:bg-yellow-600 transition-colors mx-3">Devis gratuit</a>
            </div>
        </div>
    </div>
</nav>
    @yield('content')


    <footer class="bg-gray-900 text-white mt-10">
        <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-1">
                    <h1 class="text-xl font-bold text-red-500 cursor-pointer font-sans">AUTO<span class="text-gray-200">EXPERT</span></h1>
                    <p class="mt-2 text-sm text-gray-300">Votre garage automobile de confiance depuis 1995. Expertise, qualité et service personnalisé.</p>
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