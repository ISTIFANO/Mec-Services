@extends('layout.SideBar')
@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="container mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4 sm:mb-0">
                <span class="inline-block mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </span>
                Services Dashboard
            </h1>
            <a href="/admin/services/create" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Create Service
            </a>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Services</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ count($services) }}</div>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Active Services</dt>
                                <dd class="flex items-baseline">
                                    {{-- <div class="text-2xl font-semibold text-gray-900">{{ $activeCount }}</div> --}}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-yellow-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Pending Services</dt>
                                <dd class="flex items-baseline">
                                    {{-- <div class="text-2xl font-semibold text-gray-900">{{ $pendingCount }}</div> --}}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-red-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Cancelled Services</dt>
                                <dd class="flex items-baseline">
                                    {{-- <div class="text-2xl font-semibold text-gray-900">{{ $cancelledCount }}</div> --}}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Filter Controls -->
        <div class="mb-6 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" id="searchInput" class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-12 py-3 sm:text-sm border-gray-300 rounded-md" placeholder="Search services...">
            </div>
            
            <div>
                <select id="statusFilter" class="focus:ring-blue-500 focus:border-blue-500 block w-full py-3 pl-3 pr-10 sm:text-sm border-gray-300 rounded-md">
                    <option value="all">All Statuses</option>
                    <option value="en_cours">In Progress</option>
                    <option value="terminé">Completed</option>
                    <option value="postulee">Pending</option>
                    <option value="annulé">Cancelled</option>
                </select>
            </div>
            
            <div>
                <select id="dateFilter" class="focus:ring-blue-500 focus:border-blue-500 block w-full py-3 pl-3 pr-10 sm:text-sm border-gray-300 rounded-md">
                    <option value="all">All Dates</option>
                    <option value="today">Today</option>
                    <option value="week">This Week</option>
                    <option value="month">This Month</option>
                </select>
            </div>
        </div> --}}
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Service</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mechanic</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="serviceTableBody">
                        @foreach($services as $service)
                        <tr class="hover:bg-gray-50 transition-colors duration-150 ease-in-out">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="
                                
                                items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @if($service->offre && $service->offre->image)
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ url('storage/' . $service->offre->image) }}" alt="">
                                        @elseif($service->offre && $service->offre->categorie && $service->offre->categorie->image)
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ url('storage/' . $service->offre->categorie->image) }}" alt="">
                                        @else
                                            <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                                <span class="text-blue-600 font-medium">{{ substr($service->titre, 0, 1) }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $service->titre }}</div>
                                        <div class="text-sm text-gray-500">ID: #{{ $service->id }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $service->user->firstname ?? 'N/A' }}</div>
                                <div class="text-sm text-gray-500">{{ $service->user->email ?? '' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $service->mechanicien->user->firstname ?? 'Not Assigned' }}</div>
                                @if($service->mechanicien)
                                <div class="text-sm text-gray-500">{{ $service->mechanicien->user->email ?? '' }}</div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($service->status == "en_cours")
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        In Progress
                                    </span>
                                @elseif($service->status == "terminé")
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        Completed
                                    </span>
                                @elseif($service->status == "postulee")
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Pending
                                    </span>
                                @elseif($service->status == "annulé")
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Cancelled
                                    </span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        {{ $service->status }}
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $service->created_at->format('d/m/Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <button onclick="openStatusModal({{ $service->id }}, '{{ $service->status }}')" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    Status
                                </button>
                                <form action="/admin/ServiceDetails" method="POST" class="inline">
                                    @csrf
                                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                                    <button type="submit" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2 transition-colors duration-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        View
                                    </button>
                                </form>
                                <form action="/admin/Service" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                                    <button type="submit" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Empty state -->
            @if(count($services) == 0)
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No services</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new service.</p>
                <div class="mt-6">
                    <a href="/admin/services/create" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Create Service
                    </a>
                </div>
            </div>
            @endif
        </div>

        <!-- Pagination -->
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
                        Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($services) }}</span> of <span class="font-medium">{{ count($services) }}</span> results
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

        <!-- Change Status Modal -->
        <div id="statusModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-md w-full mx-4 sm:mx-0">
                <div class="bg-blue-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Change Service Status</h3>
                    <button id="closeStatusModalX" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form id="statusForm" action="/admin/Service" method="POST" class="p-6">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="service_id" id="statusServiceId">
                    <div class="space-y-4">
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" id="statusSelect" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="en cours">In Progress</option>
                                <option value="terminé">Completed</option>
                                <option value="postulee">Pending</option>
                                <option value="annulé">Cancelled</option>
                            </select>
                        </div>
                       
                    </div>
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" id="closeStatusModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Cancel
                        </button>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update Status
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
                        <h3 class="text-lg font-medium text-gray-900">Delete Service</h3>
                    </div>
                    <p class="text-sm text-gray-500 mb-4">Are you sure you want to delete this service? This action cannot be undone and all associated data will be permanently removed.</p>
                    <form id="deleteForm" action="/admin/services" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="service_id" id="deleteServiceId">
                        <div class="mt-6 flex justify-end space-x-3">
                            <button type="button" id="closeDeleteModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Cancel
                            </button>
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete Service
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
    const statusModal = document.getElementById("statusModal");
    const deleteModal = document.getElementById("deleteModal");
    
    // Close modal buttons
    const closeStatusModal = document.getElementById("closeStatusModal");
    const closeStatusModalX = document.getElementById("closeStatusModalX");
    const closeDeleteModal = document.getElementById("closeDeleteModal");
    const closeDeleteModalX = document.getElementById("closeDeleteModalX");
    
    // Search and filter functionality
    const searchInput = document.getElementById("searchInput");
    const statusFilter = document.getElementById("statusFilter");
    const dateFilter = document.getElementById("dateFilter");
    
    // Status Modal
    if (closeStatusModal) {
        closeStatusModal.addEventListener("click", () => {
            statusModal.classList.add("hidden");
        });
    }
    
    if (closeStatusModalX) {
        closeStatusModalX.addEventListener("click", () => {
            statusModal.classList.add("hidden");
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
            filterServices();
        });
    }
    
    // Status filter
    if (statusFilter) {
        statusFilter.addEventListener("change", function() {
            filterServices();
        });
    }
    
    // Date filter
    if (dateFilter) {
        dateFilter.addEventListener("change", function() {
            filterServices();
        });
    }
    
    // Filter services based on search and filters
    function filterServices() {
        const filter = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value;
        const dateValue = dateFilter.value;
        const tbody = document.getElementById("serviceTableBody");
        const tr = tbody.getElementsByTagName("tr");
        
        for (let i = 0; i < tr.length; i++) {
            const serviceTd = tr[i].getElementsByTagName("td")[0];
            const clientTd = tr[i].getElementsByTagName("td")[1];
            const mechanicTd = tr[i].getElementsByTagName("td")[2];
            const statusTd = tr[i].getElementsByTagName("td")[3];
            const dateTd = tr[i].getElementsByTagName("td")[4];
            
            if (serviceTd && clientTd && mechanicTd && statusTd && dateTd) {
                const serviceText = serviceTd.textContent || serviceTd.innerText;
                const clientText = clientTd.textContent || clientTd.innerText;
                const mechanicText = mechanicTd.textContent || mechanicTd.innerText;
                const statusText = statusTd.textContent || statusTd.innerText;
                const dateText = dateTd.textContent || dateTd.innerText;
                
                // Check search filter
                const matchesSearch = 
                    serviceText.toLowerCase().indexOf(filter) > -1 ||
                    clientText.toLowerCase().indexOf(filter) > -1 ||
                    mechanicText.toLowerCase().indexOf(filter) > -1;
                
                // Check status filter
                let matchesStatus = true;
                if (statusValue !== 'all') {
                    // This is a simplified check - you might need to adjust based on your actual status values
                    matchesStatus = statusTd.innerHTML.indexOf(statusValue) > -1;
                }
                
                // Check date filter (simplified - you might need more complex date logic)
                let matchesDate = true;
                if (dateValue !== 'all') {
                    const today = new Date();
                    const serviceDate = new Date(dateText);
                    
                    if (dateValue === 'today') {
                        matchesDate = serviceDate.toDateString() === today.toDateString();
                    } else if (dateValue === 'week') {
                        const weekAgo = new Date();
                        weekAgo.setDate(today.getDate() - 7);
                        matchesDate = serviceDate >= weekAgo;
                    } else if (dateValue === 'month') {
                        const monthAgo = new Date();
                        monthAgo.setMonth(today.getMonth() - 1);
                        matchesDate = serviceDate >= monthAgo;
                    }
                }
                
                if (matchesSearch && matchesStatus && matchesDate) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    
    // Open status modal
    function openStatusModal(id, currentStatus) {
        document.getElementById("statusServiceId").value = id;
        document.getElementById("statusSelect").value = currentStatus;
        statusModal.classList.remove("hidden");
    }
    
    // Delete confirmation
    function confirmDelete(id) {
        document.getElementById("deleteServiceId").value = id;
        deleteModal.classList.remove("hidden");
    }
    
    // Close modals when clicking outside
    window.addEventListener("click", function(event) {
        if (event.target === statusModal) {
            statusModal.classList.add("hidden");
        }
        if (event.target === deleteModal) {
            deleteModal.classList.add("hidden");
        }
    });
</script>
@endsection