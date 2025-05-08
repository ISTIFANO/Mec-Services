<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
    
    <title>Document</title>
</head>
<body>
    <div class="hidden h-screen md:flex md:flex-shrink-0">
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
                        Catégories & Tags
                    </p>
                    <a href="/admin/categorie" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                        <i class="fas fa-tags w-5 h-5 mr-2"></i>
                        Types de véhicules
                    </a>
                    <a href="/admin/tag" class="flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-1">
                        <i class="fas fa-tools w-5 h-5 mr-2"></i>
                        tags de véhicules
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
          
            </nav>
        </div>
        
        <div class="p-4 border-t border-gray-700">
            <div class="flex items-center">
                <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center mr-3">
                    <span class="font-bold text-white">A</span>
                </div>
                <div>
                    <p class="text-sm font-medium text-white">Admin</p>
                    <p class="text-xs text-gray-400">{{ Auth::user()->email }}</p>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="ml-auto">
                    @csrf
                    <button type="submit" class="text-gray-400 hover:text-white">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
        <div class="space-y-6 flex-grow">
            <div class="bg-white w-full p-6 rounded-xl shadow-sm">        
                @yield('content')
            </div>
        </div>
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const toggles = document.querySelectorAll('.dropdown-toggle');
      
          toggles.forEach(toggle => {
            toggle.addEventListener('click', function () {
              const key = this.getAttribute('data-toggle');
              const menu = document.querySelector(`[data-menu="${key}"]`);
              const icon = this.querySelector('i.fas.fa-chevron-down');
      
              // Toggle visibility
              menu.classList.toggle('hidden');
              icon.classList.toggle('rotate-180');
            });
          });
      
          // Optional: close dropdowns when clicking outside
          document.addEventListener('click', function (e) {
            toggles.forEach(toggle => {
              const key = toggle.getAttribute('data-toggle');
              const menu = document.querySelector(`[data-menu="${key}"]`);
              const icon = toggle.querySelector('i.fas.fa-chevron-down');
              if (!toggle.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add('hidden');
                icon.classList.remove('rotate-180');
              }
            });
          });
        });
      </script>
      
    
      
</body>
</html>