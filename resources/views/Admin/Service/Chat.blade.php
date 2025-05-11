@extends('layout.app')

@section('content')
<div class="font-sans antialiased text-gray-800 bg-gray-50">
    <main class="container mx-auto px-4 py-4 w-full">
        <h1 class="text-2xl font-bold mb-6">Messagerie</h1>
        
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
                </div>
            </div>
          <div class="w-full md:w-2/4 lg:w-2/5 bg-white rounded-lg shadow-md overflow-hidden flex flex-col mb-4 md:mb-0">
                <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                    <div class="flex items-center">
                        <img src="{{ url('storage/' . $receiver->user->image) }}" alt="{{ $receiver->user->firstname }}" class="w-10 h-10 rounded-full">
                        <div class="ml-3">
                            <h3 class="font-bold">{{ $receiver->user->lastname }}</h3>
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
                    <div class="flex justify-center mb-4">
                        <span class="bg-gray-200 text-gray-600 text-xs font-medium px-3 py-1 rounded-full">Aujourd'hui</span>
                    </div>
                    
                    <div class="flex justify-center mb-4">
                        <span class="bg-gray-200 text-gray-600 text-xs font-medium px-3 py-1 rounded-full">
                            Vous avez postulé à cette offre
                        </span>
                    </div>
                    
                    @foreach ($messages as $message)
                        <div class="mb-2 flex {{ $message->sender_id == auth()->id() ? 'justify-end' : 'justify-start' }}">
                            <div class="px-4 py-2 rounded-lg {{ $message->sender_id == auth()->id() ? 'bg-primary-600 text-white' : 'bg-gray-200 text-gray-800' }}">
                                {{ $message->message }}
                            </div>
                        </div>
                    @endforeach
                </div>

   <div class="p-3 border-t border-gray-200 bg-white">
                    <div id="typing-indicator" class="mb-2 text-gray-500 text-sm" style="display: none;">{{ $receiver->firstname }} est en train d'écrire...</div>
                    <form id="message-form" method="POST" action="/chat/send">
                        @csrf
                        <div class="flex items-center space-x-2">
                            <button type="button" class="text-gray-500 hover:text-gray-700 p-2">
                                <i class="fas fa-smile"></i>
                            </button>
                            <input type="text" id="message-input" name="message" class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" placeholder="Écrivez votre message...">
                            <button type="submit" value="Sent" class="bg-primary-600 text-white p-2 rounded-full hover:bg-primary-700">
                               
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-full md:w-1/4 lg:w-2/5 bg-white rounded-lg shadow-md overflow-hidden md:ml-4 hidden md:block" id="job-details-panel">
                <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                    <h3 class="font-bold">Détails de l'offre</h3>
                    <div class="flex items-center">
                        <span class="bg-blue-100 text-blue-600 text-xs font-medium px-2.5 py-0.5 rounded-full">En discussion</span>
                    </div>
                </div>
              <div class="p-4 overflow-y-auto h-[calc(100%-60px)]">
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

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
        
        // Mobile details toggle
        const detailsToggle = document.getElementById('details-toggle');
        const jobDetailsPanel = document.getElementById('job-details-panel');
        
        if (detailsToggle && jobDetailsPanel) {
            detailsToggle.addEventListener('click', () => {
                jobDetailsPanel.classList.toggle('hidden');
                jobDetailsPanel.classList.toggle('md:block');
                jobDetailsPanel.classList.toggle('fixed');
                jobDetailsPanel.classList.toggle('inset-0');
                jobDetailsPanel.classList.toggle('z-50');
            });
        }
    </script>
</div>
@endsection