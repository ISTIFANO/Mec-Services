@extends('layout.SideBar')

@section('content') <!-- Main content -->
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
        @endsection
