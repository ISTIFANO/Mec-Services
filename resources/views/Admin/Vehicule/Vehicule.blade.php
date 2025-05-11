@extends('layout.SideBar')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4 sm:mb-0 flex items-center">
                <span class="inline-block mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span> 
                Vehicle Dashboard
            </h1>
            <button id="openModal" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add Vehicle
            </button>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 mb-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Vehicles</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ count($Vehicules) }}</div>
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
                                <dt class="text-sm font-medium text-gray-500 truncate">Latest Model</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        @if(count($Vehicules) > 0)
                                            {{ $Vehicules->sortByDesc('year')->first()->year }}
                                        @else
                                            N/A
                                        @endif
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
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

        <!-- Search Bar -->
        <div class="mb-6">
            <div class="relative rounded-md shadow-sm max-w-md">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" id="searchInput" class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-12 py-3 sm:text-sm border-gray-300 rounded-md" placeholder="Search vehicles...">
            </div>
        </div>

        <!-- Table for vehicle data -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Model</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year of Manufacture</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="vehicleTableBody">
                        @foreach($Vehicules as $vehicule)
                        <tr class="hover:bg-gray-50 transition-colors duration-150 ease-in-out">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @if($vehicule->image)
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ url('storage/' . $vehicule->image) }}" alt="{{ $vehicule->name }}">
                                        @else
                                            <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                                <span class="text-blue-600 font-medium">{{ substr($vehicule->name, 0, 1) }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $vehicule->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $vehicule->model }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $vehicule->annee_fabrication }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $vehicule->year }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <button onclick="openEditModal({{ $vehicule->id }}, '{{ $vehicule->name }}', '{{ $vehicule->model }}', '{{ $vehicule->annee_fabrication }}', '{{ $vehicule->year }}')" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-yellow-700 bg-yellow-100 hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 mr-2 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Edit
                                </button>
                                <button onclick="confirmDelete({{ $vehicule->id }})" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Empty state -->
            @if(count($Vehicules) == 0)
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No vehicles</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new vehicle.</p>
                <div class="mt-6">
                    <button id="emptyStateAddBtn" type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Add Vehicle
                    </button>
                </div>
            </div>
            @endif
        </div>

        <!-- Pagination -->
        @if(count($Vehicules) > 0)
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6 mt-4 rounded-lg shadow">
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
                        Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($Vehicules) }}</span> of <span class="font-medium">{{ count($Vehicules) }}</span> results
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
                        <a href="#" aria-current="page" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
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
        @endif

        <!-- Add Vehicle Modal -->
        <div id="jobModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-md w-full mx-4 sm:mx-0">
                <div class="bg-blue-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Add New Vehicle</h3>
                    <button id="closeModalX" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="/admin/vehicule" method="POST" enctype="multipart/form-data" class="p-6">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" required placeholder="Enter vehicle name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="model" class="block text-sm font-medium text-gray-700">Model</label>
                            <input type="text" name="model" id="model" required placeholder="Enter vehicle model" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="annee_fabrication" class="block text-sm font-medium text-gray-700">Year of Manufacture</label>
                            <input type="date" name="annee_fabrication" id="annee_fabrication" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                            <input type="number" name="year" id="year" required placeholder="Enter year" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                            <div class="mt-1 flex items-center">
                                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                                <input type="file" name="image" id="image" required class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" id="closeModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Cancel
                        </button>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Add Vehicle
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Edit Vehicle Modal -->
        <div id="editModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-md w-full mx-4 sm:mx-0">
                <div class="bg-yellow-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Edit Vehicle</h3>
                    <button id="closeEditModalX" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form id="editForm" action="/admin/vehicule" method="POST" enctype="multipart/form-data" class="p-6">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editVehiculeId">
                    <div class="space-y-4">
                        <div>
                            <label for="editName" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="editName" required placeholder="Enter vehicle name" class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="editModel" class="block text-sm font-medium text-gray-700">Model</label>
                            <input type="text" name="model" id="editModel" required placeholder="Enter vehicle model" class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="editAnneeFabrication" class="block text-sm font-medium text-gray-700">Year of Manufacture</label>
                            <input type="date" name="annee_fabrication" id="editAnneeFabrication" required class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="editYear" class="block text-sm font-medium text-gray-700">Year</label>
                            <input type="number" name="year" id="editYear" required placeholder="Enter year" class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="editImage" class="block text-sm font-medium text-gray-700">Image (Leave empty to keep current image)</label>
                            <div class="mt-1 flex items-center">
                                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                                <input type="file" name="image" id="editImage" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" id="closeEditModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Cancel
                        </button>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Update Vehicle
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
                    <button id="closeDeleteModalX" class="text-white hover:text-gray-200 focus:outline-none">
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
                        <h3 class="text-lg font-medium text-gray-900">Delete Vehicle</h3>
                    </div>
                    <p class="text-sm text-gray-500 mb-4">Are you sure you want to delete this vehicle? This action cannot be undone and all associated data will be permanently removed.</p>
                    <form id="deleteForm" action="/admin/vehicule" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" id="deleteVehiculeId">
                        <div class="mt-6 flex justify-end space-x-3">
                            <button type="button" id="closeDeleteModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Cancel
                            </button>
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete Vehicle
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Modal elements
    const jobModal = document.getElementById("jobModal");
    const editModal = document.getElementById("editModal");
    const deleteModal = document.getElementById("deleteModal");
    
    // Open modal buttons
    const openModal = document.getElementById("openModal");
    const emptyStateAddBtn = document.getElementById("emptyStateAddBtn");
    
    // Close modal buttons
    const closeModal = document.getElementById("closeModal");
    const closeModalX = document.getElementById("closeModalX");
    const closeEditModal = document.getElementById("closeEditModal");
    const closeEditModalX = document.getElementById("closeEditModalX");
    const closeDeleteModal = document.getElementById("closeDeleteModal");
    const closeDeleteModalX = document.getElementById("closeDeleteModalX");
    
    // Search functionality
    const searchInput = document.getElementById("searchInput");
    
    // Add Vehicle Modal
    if (openModal) {
        openModal.addEventListener("click", () => {
            jobModal.classList.remove("hidden");
        });
    }
    
    if (emptyStateAddBtn) {
        emptyStateAddBtn.addEventListener("click", () => {
            jobModal.classList.remove("hidden");
        });
    }
    
    if (closeModal) {
        closeModal.addEventListener("click", () => {
            jobModal.classList.add("hidden");
        });
    }
    
    if (closeModalX) {
        closeModalX.addEventListener("click", () => {
            jobModal.classList.add("hidden");
        });
    }
    
    // Edit Modal
    if (closeEditModal) {
        closeEditModal.addEventListener("click", () => {
            editModal.classList.add("hidden");
        });
    }
    
    if (closeEditModalX) {
        closeEditModalX.addEventListener("click", () => {
            editModal.classList.add("hidden");
        });
    }
    
    // Delete Modal
    if (closeDeleteModal) {
        closeDeleteModal.addEventListener("click", () => {
            deleteModal.classList.add("hidden");
        });
    }
    
    if (closeDeleteModalX) {
        closeDeleteModalX.addEventListener("click", () => {
            deleteModal.classList.add("hidden");
        });
    }
    
    // Search functionality
    if (searchInput) {
        searchInput.addEventListener("keyup", function() {
            const filter = searchInput.value.toLowerCase();
            const tbody = document.getElementById("vehicleTableBody");
            const tr = tbody.getElementsByTagName("tr");
            
            for (let i = 0; i < tr.length; i++) {
                const nameTd = tr[i].getElementsByTagName("td")[0];
                const modelTd = tr[i].getElementsByTagName("td")[1];
                const yearTd = tr[i].getElementsByTagName("td")[3];
                
                if (nameTd && modelTd && yearTd) {
                    const nameValue = nameTd.textContent || nameTd.innerText;
                    const modelValue = modelTd.textContent || modelTd.innerText;
                    const yearValue = yearTd.textContent || yearTd.innerText;
                    
                    if (
                        nameValue.toLowerCase().indexOf(filter) > -1 ||
                        modelValue.toLowerCase().indexOf(filter) > -1 ||
                        yearValue.toLowerCase().indexOf(filter) > -1
                    ) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    }
    
    // Edit modal functionality
    function openEditModal(id, name, model, annee_fabrication, year) {
        document.getElementById("editVehiculeId").value = id;
        document.getElementById("editName").value = name;
        document.getElementById("editModel").value = model;
        document.getElementById("editAnneeFabrication").value = annee_fabrication;
        document.getElementById("editYear").value = year;
        editModal.classList.remove("hidden");
    }
    
    // Delete confirmation functionality
    function confirmDelete(id) {
        document.getElementById("deleteVehiculeId").value = id;
        deleteModal.classList.remove("hidden");
    }
    
    // Close modals when clicking outside
    window.addEventListener("click", function(event) {
        if (event.target === jobModal) {
            jobModal.classList.add("hidden");
        }
        if (event.target === editModal) {
            editModal.classList.add("hidden");
        }
        if (event.target === deleteModal) {
            deleteModal.classList.add("hidden");
        }
    });
</script>
@endsection