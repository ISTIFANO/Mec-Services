<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MécaConnect - Plateforme de connexion pour mécaniciens freelances</title>
  
</head>
@extends('layout.app')
@section('content')
<body class="font-sans antialiased text-gray-800">


    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary-600 to-primary-700 text-white py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Connectez <span class="text-secondary-400">mécaniciens</span> et <span class="text-secondary-400">transporteurs</span> en quelques clics</h1>
                    <p class="text-xl mb-8">La première plateforme qui met en relation des mécaniciens freelances 🔧 avec des entreprises de transport et propriétaires d'autocars 🚌</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#" class="px-6 py-3 bg-secondary-500 text-white rounded-md hover:bg-secondary-600 transition text-center font-medium">Je suis mécanicien</a>
                        <a href="#" class="px-6 py-3 bg-white text-primary-700 rounded-md hover:bg-gray-100 transition text-center font-medium">Je cherche un mécanicien</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="{{ asset('storage/images/img/mechanicien.webp') }}" alt="Mécanicien travaillant sur un autocar" class="rounded-lg  max-w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Nos Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Une solution complète pour connecter l'offre et la demande dans le secteur de la maintenance mécanique</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Services pour mécaniciens -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="bg-primary-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-wrench text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Pour les mécaniciens 🔧</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Créez et gérez votre profil professionnel</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Définissez vos disponibilités et zones d'intervention</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Fixez vos tarifs et conditions</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Recevez des demandes d'intervention en temps réel</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Gérez votre planning et vos paiements</span>
                        </li>
                    </ul>
                    <a href="#" class="mt-8 inline-block px-6 py-3 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition font-medium">Devenir mécanicien partenaire</a>
                </div>
                
                <!-- Services pour entreprises -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="bg-secondary-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bus text-2xl text-secondary-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Pour les transporteurs 🚌</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Trouvez rapidement un mécanicien qualifié</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Réservez des interventions d'urgence ou planifiées</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Recevez des devis détaillés</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Effectuez des paiements sécurisés 💳</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Évaluez les services et suivez l'historique</span>
                        </li>
                    </ul>
                    <a href="#" class="mt-8 inline-block px-6 py-3 bg-secondary-500 text-white rounded-md hover:bg-secondary-600 transition font-medium">Trouver un mécanicien</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Comment ça marche -->
    <section id="fonctionnement" class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Comment ça marche</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Un processus simple et efficace pour tous les utilisateurs</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-primary-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl font-bold text-primary-600">1</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Inscription</h3>
                    <p class="text-gray-600">Créez votre compte en tant que mécanicien ou entreprise de transport et complétez votre profil.</p>
                </div>
                                <div class="text-center">
                    <div class="bg-primary-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl font-bold text-primary-600">2</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Connexion</h3>
                    <p class="text-gray-600">Les transporteurs recherchent et contactent les mécaniciens disponibles selon leurs besoins.</p>
                </div>
                
                <!-- Étape 3 -->
                <div class="text-center">
                    <div class="bg-primary-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl font-bold text-primary-600">3</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Intervention</h3>
                    <p class="text-gray-600">Le service est réalisé, évalué et payé en toute sécurité via notre plateforme.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="avantages" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Pourquoi choisir MécaConnect</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Des avantages uniques pour tous les utilisateurs de notre plateforme</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Avantage 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="text-primary-600 mb-4">
                        <i class="fas fa-bolt text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Rapidité</h3>
                    <p class="text-gray-600">Trouvez un mécanicien ou une mission en quelques minutes seulement.</p>
                </div>
                
                <!-- Avantage 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="text-primary-600 mb-4">
                        <i class="fas fa-shield-alt text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Sécurité</h3>
                    <p class="text-gray-600">Paiements sécurisés et vérification des profils professionnels.</p>
                </div>
                
                <!-- Avantage 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="text-primary-600 mb-4">
                        <i class="fas fa-star text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Qualité</h3>
                    <p class="text-gray-600">Système d'évaluation transparent pour garantir des services de qualité.</p>
                </div>
                
                <!-- Avantage 4 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="text-primary-600 mb-4">
                        <i class="fas fa-euro-sign text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Économies</h3>
                    <p class="text-gray-600">Tarifs compétitifs et absence d'intermédiaires coûteux.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section id="temoignages" class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Ce qu'ils disent de nous</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Découvrez les témoignages de nos utilisateurs satisfaits</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Témoignage 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold">Pierre Durand</h4>
                            <p class="text-sm text-gray-500">Mécanicien freelance</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Grâce à MécaConnect, j'ai pu développer mon activité et trouver de nouveaux clients facilement. La plateforme est intuitive et les paiements sont rapides."</p>
                    <div class="text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <!-- Témoignage 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold">Sophie Martin</h4>
                            <p class="text-sm text-gray-500">Directrice, Transports Express</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Un service qui a révolutionné notre gestion de maintenance. Nous trouvons des mécaniciens qualifiés rapidement, même en urgence. Un gain de temps et d'argent considérable."</p>
                    <div class="text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                
                <!-- Témoignage 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold">Jean Petit</h4>
                            <p class="text-sm text-gray-500">Propriétaire d'autocars</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"En tant que petit propriétaire, trouver des mécaniciens fiables était un défi. MécaConnect m'a permis d'accéder à un réseau de professionnels compétents près de chez moi."</p>
                    <div class="text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-primary-600 to-primary-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à rejoindre la révolution MécaConnect ?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Inscrivez-vous dès aujourd'hui et découvrez comment notre plateforme peut transformer votre activité.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="px-8 py-4 bg-white text-primary-700 rounded-md hover:bg-gray-100 transition font-medium">Créer un compte</a>
                <a href="#" class="px-8 py-4 bg-secondary-500 text-white rounded-md hover:bg-secondary-600 transition font-medium">En savoir plus</a>
            </div>
        </div>
    </section>


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
