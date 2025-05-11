@extends('layout.SideBar')
@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="container mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4 sm:mb-0">
                <span class="inline-block mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </span>
                Offres Dashboard
            </h1>
            <button id="openModal" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add Offre
            </button>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-indigo-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Offres</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ count($offres) }}</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Budget</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        {{ $offres->sum('budjet') }} €
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Categories</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        {{ $categories->count() }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-purple-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Last Updated</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ date('d M Y') }}</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search and Filter Bar -->
        <div class="mb-6 flex flex-col sm:flex-row gap-4">
            <div class="relative rounded-md shadow-sm flex-grow max-w-md">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" id="searchInput" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-12 py-3 sm:text-sm border-gray-300 rounded-md" placeholder="Search offres...">
            </div>
            
            <div class="flex gap-2">
                <select id="categoryFilter" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full py-3 pl-3 pr-10 text-base border-gray-300 rounded-md">
                    <option value="">All Categories</option>
                    @foreach($categories as $categorie)
                        <option value="{{$categorie->nom}}">{{$categorie->nom}}</option>
                    @endforeach
                </select>
                
                <select id="vehicleFilter" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full py-3 pl-3 pr-10 text-base border-gray-300 rounded-md">
                    <option value="">All Vehicles</option>
                    @foreach($vehicules as $vehicule)
                        <option value="{{$vehicule->name}}">{{$vehicule->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Table for offres data -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200" id="offresTable">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Titre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Budget</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Durée</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Catégorie</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Véhicule</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tags</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($offres as $offre)
                        <tr class="hover:bg-gray-50 transition-colors" data-category="{{$offre->categorie->nom}}" data-vehicle="{{$offre->vehicule->name}}">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex-shrink-0 h-16 w-16">
                                    <img src="{{ url('storage/' . $offre->image) }}" alt="Offre Image" class="h-16 w-16 object-cover rounded-md shadow">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">{{$offre->titre}}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500 max-w-xs truncate">{{$offre->description}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">{{$offre->budjet}} €</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{$offre->duree_disponibilite}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                    {{$offre->categorie->nom}}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{$offre->vehicule->name}}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex flex-wrap gap-1">
                                    @foreach($offre->tags as $tag)
                                        <span class="px-2 py-1 text-xs rounded-md bg-gray-200 text-gray-700">{{$tag->name}}</span>
                                    @endforeach
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-2">
                                    <button 
                                        class="edit-button inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-150"
                                        data-id="{{$offre->id}}"
                                        data-titre="{{$offre->titre}}"
                                        data-description="{{$offre->description}}"
                                        data-budjet="{{$offre->budjet}}"
                                        data-duree="{{$offre->duree_disponibilite}}"
                                        data-categorie="{{$offre->categorie->id}}"
                                        data-vehicule="{{$offre->vehicule->id}}"
                                        data-tags="{{implode(',', $offre->tags->pluck('id')->toArray())}}"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Edit
                                    </button>
                                    <form action="/admin/offre" method="POST" class="inline-block delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$offre->id}}">
                                        <button type="button" class="delete-button inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-150">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Empty state -->
            @if(count($offres) == 0)
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No offres</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new offre.</p>
                <div class="mt-6">
                    <button id="emptyStateAddBtn" type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Add Offre
                    </button>
                </div>
            </div>
            @endif
        </div>

        <!-- Pagination -->
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6 rounded-lg shadow">
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Previous
                </a>
                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Next
                </a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($offres) }}</span> of <span class="font-medium">{{ count($offres) }}</span> results
                    </p>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            1
                        </a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Next</span>
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Add Offre Modal -->
        <div id="offreModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-3xl w-full mx-4 sm:mx-0">
                <div class="bg-indigo-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Add New Offre</h3>
                    <button id="closeModalX" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="/admin/offre" method="POST" enctype="multipart/form-data" class="p-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-element">
                            <label for="titre" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                            <input type="text" name="titre" required placeholder="Titre de l'offre" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 shadow-sm" />
                        </div>
                        
                        <div class="form-element">
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="image" name="image" type="file" class="sr-only" required>
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-element md:col-span-2">
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                            <textarea name="description" required placeholder="Description de l'offre" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 shadow-sm" rows="3"></textarea>
                        </div>
                        
                        <div class="form-element">
                            <label for="budjet" class="block text-sm font-medium text-gray-700 mb-1">Budget (€)</label>
                            <input type="number" name="budjet" required placeholder="Budget" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 shadow-sm" />
                        </div>
                        
                        <div class="form-element">
                            <label for="duree_disponibilite" class="block text-sm font-medium text-gray-700 mb-1">Durée</label>
                            <input type="date" name="duree_disponibilite" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 shadow-sm" />
                        </div>
                        
                        <div class="form-element">
                            <label for="categorie" class="block text-sm font-medium text-gray-700 mb-1">Catégorie</label>
                            <select name="categorie" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 shadow-sm">
                                <option value="">Sélectionner une catégorie</option>
                                @foreach($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-element">
                            <label for="vehicule" class="block text-sm font-medium text-gray-700 mb-1">Véhicule</label>
                            <select name="vehicule" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 shadow-sm">
                                <option value="">Sélectionner un véhicule</option>
                                @foreach($vehicules as $vehicule)
                                    <option value="{{$vehicule->id}}">{{$vehicule->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-element md:col-span-2">
                            <label for="tags" class="block text-sm font-medium text-gray-700 mb-1">Tags</label>
                            <select name="tags[]" multiple required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 shadow-sm">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                            <p class="text-xs text-gray-500 mt-1">Maintenez la touche Ctrl (ou Cmd) pour sélectionner plusieurs tags</p>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" class="cancel-modal-btn inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Annuler
                        </button>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Ajouter
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Edit Offre Modal -->
        <div id="editModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-3xl w-full mx-4 sm:mx-0">
                <div class="bg-yellow-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Edit Offre</h3>
                    <button id="closeEditModal" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="/admin/offre" method="POST" enctype="multipart/form-data" class="p-6">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editOffreId" name="id">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-element">
                            <label for="editTitre" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                            <input type="text" id="editTitre" name="titre" required placeholder="Titre de l'offre" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm" />
                        </div>
                        
                        <div class="form-element">
                            <label for="editImage" class="block text-sm font-medium text-gray-700 mb-1">Image (laisser vide pour conserver l'image actuelle)</label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="editImage" class="relative cursor-pointer bg-white rounded-md font-medium text-yellow-600 hover:text-yellow-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-yellow-500">
                                            <span>Upload a new file</span>
                                            <input id="editImage" name="image" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                    <p class="text-xs text-gray-500">Leave empty to keep current image</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-element md:col-span-2">
                            <label for="editDescription" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                            <textarea id="editDescription" name="description" required placeholder="Description de l'offre" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm" rows="3"></textarea>
                        </div>
                        
                        <div class="form-element">
                            <label for="editBudjet" class="block text-sm font-medium text-gray-700 mb-1">Budget (€)</label>
                            <input type="number" id="editBudjet" name="budjet" required placeholder="Budget" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm" />
                        </div>
                        
                        <div class="form-element">
                            <label for="editDuree" class="block text-sm font-medium text-gray-700 mb-1">Durée</label>
                            <input type="date" id="editDuree" name="duree_disponibilite" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm" />
                        </div>
                        
                        <div class="form-element">
                            <label for="editCategorie" class="block text-sm font-medium text-gray-700 mb-1">Catégorie</label>
                            <select id="editCategorie" name="categorie" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
                                @foreach($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-element">
                            <label for="editVehicule" class="block text-sm font-medium text-gray-700 mb-1">Véhicule</label>
                            <select id="editVehicule" name="vehicule" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
                                @foreach($vehicules as $vehicule)
                                    <option value="{{$vehicule->id}}">{{$vehicule->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-element">
                            <label for="editStatus" class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                            <select id="status" name="status" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
                                <option value="pending">Pending</option>
                                <option value="approved">Approved</option>
                                <option value="rejected">Rejected</option>
                            </select>
                        </div>
                        
                        <div class="form-element">
                            <label for="editUser" class="block text-sm font-medium text-gray-700 mb-1">Utilisateur</label>
                            <select id="editUser" name="user" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->firstname}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-element md:col-span-2">
                            <label for="editTags" class="block text-sm font-medium text-gray-700 mb-1">Tags</label>
                            <select id="editTags" name="tags[]" multiple required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                            <p class="text-xs text-gray-500 mt-1">Maintenez la touche Ctrl (ou Cmd) pour sélectionner plusieurs tags</p>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" class="cancel-modal-btn inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Annuler
                        </button>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Mettre à jour
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div id="deleteModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-md w-full mx-4 sm:mx-0">
                <div class="bg-red-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Confirm Delete</h3>
                    <button id="closeDeleteModal" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 bg-red-100 rounded-full p-2 mr-3">
                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Delete Offre</h3>
                    </div>
                    <p class="text-sm text-gray-500 mb-4">Are you sure you want to delete this offre? This action cannot be undone and all associated data will be permanently removed.</p>
                    <form id="deleteForm" action="/admin/offre" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" id="deleteOffreId">
                        <div class="mt-6 flex justify-end space-x-3">
                            <button type="button" id="cancelDelete" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Cancel
                            </button>
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete Offre
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Add JavaScript for modal handling -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Modal elements
                const offreModal = document.getElementById("offreModal");
                const editModal = document.getElementById("editModal");
                const deleteModal = document.getElementById("deleteModal");
                
                // Open modal buttons
                const openModalBtn = document.getElementById("openModal");
                const emptyStateAddBtn = document.getElementById("emptyStateAddBtn");
                
                // Close modal buttons
                const closeModalBtn = document.getElementById("closeModal");
                const closeModalX = document.getElementById("closeModalX");
                const closeEditModalBtn = document.getElementById("closeEditModal");
                const cancelBtns = document.querySelectorAll(".cancel-modal-btn");
                const closeDeleteModal = document.getElementById("closeDeleteModal");
                const cancelDelete = document.getElementById("cancelDelete");
                
                // Search and filter elements
                const searchInput = document.getElementById("searchInput");
                const categoryFilter = document.getElementById("categoryFilter");
                const vehicleFilter = document.getElementById("vehicleFilter");
                
                // Open Add modal
                if (openModalBtn) {
                    openModalBtn.addEventListener("click", () => {
                        offreModal.classList.remove("hidden");
                    });
                }
                
                // Open Add modal from empty state
                if (emptyStateAddBtn) {
                    emptyStateAddBtn.addEventListener("click", () => {
                        offreModal.classList.remove("hidden");
                    });
                }
                
                // Close Add modal
                if (closeModalBtn) {
                    closeModalBtn.addEventListener("click", () => {
                        offreModal.classList.add("hidden");
                    });
                }
                
                if (closeModalX) {
                    closeModalX.addEventListener("click", () => {
                        offreModal.classList.add("hidden");
                    });
                }
                
                // Close Edit modal
                if (closeEditModalBtn) {
                    closeEditModalBtn.addEventListener("click", () => {
                        editModal.classList.add("hidden");
                    });
                }
                
                // Close Delete modal
                if (closeDeleteModal) {
                    closeDeleteModal.addEventListener("click", () => {
                        deleteModal.classList.add("hidden");
                    });
                }
                
                if (cancelDelete) {
                    cancelDelete.addEventListener("click", () => {
                        deleteModal.classList.add("hidden");
                    });
                }
                
                // Cancel buttons for both modals
                cancelBtns.forEach(btn => {
                    btn.addEventListener("click", () => {
                        offreModal.classList.add("hidden");
                        editModal.classList.add("hidden");
                    });
                });
                
                // Setup edit button handlers
                const editButtons = document.querySelectorAll('.edit-button');
                editButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const id = this.getAttribute('data-id');
                        const titre = this.getAttribute('data-titre');
                        const description = this.getAttribute('data-description');
                        const budjet = this.getAttribute('data-budjet');
                        const duree = this.getAttribute('data-duree');
                        const categorie = this.getAttribute('data-categorie');
                        const vehicule = this.getAttribute('data-vehicule');
                        const tags = this.getAttribute('data-tags').split(',');
                        
                        // Populate edit form
                        document.getElementById('editOffreId').value = id;
                        document.getElementById('editTitre').value = titre;
                        document.getElementById('editDescription').value = description;
                        document.getElementById('editBudjet').value = budjet;
                        document.getElementById('editDuree').value = duree;
                        document.getElementById('editCategorie').value = categorie;
                        document.getElementById('editVehicule').value = vehicule;
                        
                        // Handle tags selection
                        const tagSelect = document.getElementById('editTags');
                        Array.from(tagSelect.options).forEach(option => {
                            option.selected = tags.includes(option.value);
                        });
                        
                        // Show edit modal
                        editModal.classList.remove('hidden');
                    });
                });
                
                // Setup delete button handlers
                const deleteButtons = document.querySelectorAll('.delete-button');
                deleteButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const form = this.closest('form');
                        const offreId = form.querySelector('input[name="id"]').value;
                        
                        // Set the offre ID in the delete confirmation modal
                        document.getElementById('deleteOffreId').value = offreId;
                        
                        // Show delete modal
                        deleteModal.classList.remove('hidden');
                    });
                });
                
                // Search functionality
                if (searchInput) {
                    searchInput.addEventListener('keyup', function() {
                        const searchTerm = this.value.toLowerCase();
                        const rows = document.querySelectorAll('#offresTable tbody tr');
                        
                        rows.forEach(row => {
                            const title = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                            const description = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                            const category = row.getAttribute('data-category').toLowerCase();
                            const vehicle = row.getAttribute('data-vehicle').toLowerCase();
                            
                            if (title.includes(searchTerm) || description.includes(searchTerm) || 
                                category.includes(searchTerm) || vehicle.includes(searchTerm)) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        });
                    });
                }
                
                // Category filter
                if (categoryFilter) {
                    categoryFilter.addEventListener('change', function() {
                        filterTable();
                    });
                }
                
                // Vehicle filter
                if (vehicleFilter) {
                    vehicleFilter.addEventListener('change', function() {
                        filterTable();
                    });
                }
                
                function filterTable() {
                    const categoryValue = categoryFilter.value.toLowerCase();
                    const vehicleValue = vehicleFilter.value.toLowerCase();
                    const rows = document.querySelectorAll('#offresTable tbody tr');
                    
                    rows.forEach(row => {
                        const category = row.getAttribute('data-category').toLowerCase();
                        const vehicle = row.getAttribute('data-vehicle').toLowerCase();
                        
                        const categoryMatch = categoryValue === '' || category === categoryValue;
                        const vehicleMatch = vehicleValue === '' || vehicle === vehicleValue;
                        
                        if (categoryMatch && vehicleMatch) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }
                
                // Close modals when clicking outside
                window.addEventListener('click', (e) => {
                    if (e.target === offreModal) {
                        offreModal.classList.add('hidden');
                    }
                    if (e.target === editModal) {
                        editModal.classList.add('hidden');
                    }
                    if (e.target === deleteModal) {
                        deleteModal.classList.add('hidden');
                    }
                });
                
                // Preview uploaded image
                const fileInput = document.querySelector('input[name="image"]');
                const editFileInput = document.getElementById('editImage');
                
                if (fileInput) {
                    fileInput.addEventListener('change', function(e) {
                        previewImage(this);
                    });
                }
                
                if (editFileInput) {
                    editFileInput.addEventListener('change', function(e) {
                        previewImage(this);
                    });
                }
                
                function previewImage(input) {
                    if (input.files && input.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const preview = document.createElement('img');
                            preview.src = e.target.result;
                            preview.className = 'mt-2 rounded-md h-20 w-auto';
                            
                            const container = input.closest('.form-element').querySelector('.space-y-1');
                            const existingPreview = container.querySelector('img:not([aria-hidden="true"])');
                            
                            if (existingPreview) {
                                container.removeChild(existingPreview);
                            }
                            
                            container.appendChild(preview);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
            });
        </script>
    </div>
</div>
@endsection