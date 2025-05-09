@extends('layout.SideBar')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4 sm:mb-0 flex items-center">
                <span class="inline-block mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </span>
                User Management
            </h1>
            <button id="openModal" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add User
            </button>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Users</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ count($users) }}</div>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Service Providers</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        {{ $users->where('est_service', true)->count() }}
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
                        <div class="flex-shrink-0 bg-yellow-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Mechanic Requests</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        {{ $users->where('become_mechanicien', true)->count() }}
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Average Rating</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        @php
                                            $ratedUsers = $users->whereNotNull('rating');
                                            $avgRating = $ratedUsers->count() > 0 ? round($ratedUsers->sum('rating') / $ratedUsers->count(), 1) : 'N/A';
                                        @endphp
                                        {{ $avgRating }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters and Search -->
        <div class="mb-6 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <div class="relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" id="searchInput" class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-12 py-3 sm:text-sm border-gray-300 rounded-md" placeholder="Search users...">
            </div>
            
            <div>
                <select id="filterRole" class="block w-full pl-3 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                    <option value="all">All Users</option>
                    <option value="service">Service Providers</option>
                    <option value="mechanic">Mechanic Requests</option>
                    <option value="regular">Regular Users</option>
                </select>
            </div>
            
            <div>
                <select id="sortBy" class="block w-full pl-3 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                    <option value="name">Sort by Name</option>
                    <option value="rating">Sort by Rating</option>
                    <option value="newest">Sort by Newest</option>
                    <option value="oldest">Sort by Oldest</option>
                </select>
            </div>
        </div>

        <!-- Table for user data -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="userTableBody">
                        @foreach($users as $user)
                        <tr class="hover:bg-gray-50 transition-colors duration-150 ease-in-out" data-user-type="{{ $user->est_service ? 'service' : ($user->become_mechanicien ? 'mechanic' : 'regular') }}">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @if($user->image)
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ url('storage/' . $user->image) }}" alt="{{ $user->firstname }}">
                                        @else
                                            <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                                <span class="text-blue-600 font-medium">{{ substr($user->firstname, 0, 1) }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $user->firstname }} {{ $user->lastname }}</div>
                                        <div class="text-sm text-gray-500">ID: {{ $user->id }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $user->email }}</div>
                                <div class="text-sm text-gray-500">{{ $user->phone }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($user->rating)
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= floor($user->rating))
                                                    <svg class="h-4 w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    </svg>
                                                @elseif($i - 0.5 <= $user->rating)
                                                    <svg class="h-4 w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                        <path d="M12 17.27V2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z" fill="currentColor"></path>
                                                    </svg>
                                                @else
                                                    <svg class="h-4 w-4 text-gray-300 fill-current" viewBox="0 0 24 24">
                                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    </svg>
                                                @endif
                                            @endfor
                                        </div>
                                        <span class="ml-2 text-sm text-gray-600">{{ $user->rating }}</span>
                                    </div>
                                @else
                                    <span class="text-sm text-gray-500">Not rated</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex flex-col space-y-1">
                                    @if($user->est_service)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Service Provider
                                        </span>
                                    @endif
                                    
                                    @if($user->become_mechanicien)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Mechanic Request
                                        </span>
                                    @endif
                                    
                                    @if(!$user->est_service && !$user->become_mechanicien)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                            Regular User
                                        </span>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <button onclick="openViewModal({{ $user->id }})" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    View
                                </button>
                                <button onclick="openEditModal({{ $user->id }}, '{{ $user->firstname }}', '{{ $user->lastname }}', '{{ $user->email }}', '{{ $user->phone }}', {{ $user->rating ?? 'null' }}, {{ $user->est_service ? 'true' : 'false' }}, {{ $user->become_mechanicien ? 'true' : 'false' }})" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-yellow-700 bg-yellow-100 hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 mr-2 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Edit
                                </button>
                                <button onclick="confirmDelete({{ $user->id }})" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-150">
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
            @if(count($users) == 0)
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No users</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new user.</p>
                <div class="mt-6">
                    <button id="emptyStateAddBtn" type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Add User
                    </button>
                </div>
            </div>
            @endif
        </div>

        <!-- Pagination -->
        @if(count($users) > 0)
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
                        Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($users) }}</span> of <span class="font-medium">{{ count($users) }}</span> results
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

        <!-- Add User Modal -->
        <div id="jobModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-md w-full mx-4 sm:mx-0">
                <div class="bg-blue-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Add New User</h3>
                    <button id="closeModalX" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="/admin/users" method="POST" enctype="multipart/form-data" class="p-6">
                    @csrf
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="firstname" class="block text-sm font-medium text-gray-700">First Name</label>
                                <input type="text" name="firstname" id="firstname" required placeholder="Enter first name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" name="lastname" id="lastname" required placeholder="Enter last name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" required placeholder="Enter email address" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="tel" name="phone" id="phone" required placeholder="Enter phone number" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" name="password" id="password" required placeholder="Enter password" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700">Profile Image</label>
                            <div class="mt-1 flex items-center">
                                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                                <input type="file" name="image" id="image" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" name="est_service" id="est_service" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="est_service" class="ml-2 block text-sm text-gray-700">Service Provider</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="become_mechanicien" id="become_mechanicien" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="become_mechanicien" class="ml-2 block text-sm text-gray-700">Mechanic Request</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" id="closeModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Cancel
                        </button>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Add User
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- View User Modal -->
        <div id="viewModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4 sm:mx-0">
                <div class="bg-blue-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">User Details</h3>
                    <button id="closeViewModalX" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/3 flex flex-col items-center mb-6 md:mb-0">
                            <div id="viewUserImage" class="h-32 w-32 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                                <span class="text-blue-600 text-4xl font-medium" id="viewUserInitial"></span>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900" id="viewUserName"></h2>
                            <div class="mt-2 flex items-center" id="viewUserRatingContainer">
                                <div class="flex items-center" id="viewUserRatingStars"></div>
                                <span class="ml-2 text-sm text-gray-600" id="viewUserRatingValue"></span>
                            </div>
                        </div>
                        <div class="md:w-2/3 md:pl-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Email</h3>
                                    <p class="mt-1 text-sm text-gray-900" id="viewUserEmail"></p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Phone</h3>
                                    <p class="mt-1 text-sm text-gray-900" id="viewUserPhone"></p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">User ID</h3>
                                    <p class="mt-1 text-sm text-gray-900" id="viewUserId"></p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Joined</h3>
                                    <p class="mt-1 text-sm text-gray-900" id="viewUserJoined"></p>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <h3 class="text-sm font-medium text-gray-500">Status</h3>
                                <div class="mt-2 flex flex-wrap gap-2" id="viewUserStatus"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex justify-end">
                        <button type="button" id="closeViewModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit User Modal -->
        <div id="editModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-md w-full mx-4 sm:mx-0">
                <div class="bg-yellow-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Edit User</h3>
                    <button id="closeEditModalX" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form id="editForm" action="/admin/users" method="POST" enctype="multipart/form-data" class="p-6">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editUserId">
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="editFirstname" class="block text-sm font-medium text-gray-700">First Name</label>
                                <input type="text" name="firstname" id="editFirstname" required placeholder="Enter first name" class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="editLastname" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" name="lastname" id="editLastname" required placeholder="Enter last name" class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div>
                            <label for="editEmail" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="editEmail" required placeholder="Enter email address" class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="editPhone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="tel" name="phone" id="editPhone" required placeholder="Enter phone number" class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="editPassword" class="block text-sm font-medium text-gray-700">Password (Leave empty to keep current)</label>
                            <input type="password" name="password" id="editPassword" placeholder="Enter new password" class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="editRating" class="block text-sm font-medium text-gray-700">Rating (0-5)</label>
                            <input type="number" name="rating" id="editRating" min="0" max="5" step="0.1" placeholder="Enter rating" class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="editImage" class="block text-sm font-medium text-gray-700">Profile Image (Leave empty to keep current)</label>
                            <div class="mt-1 flex items-center">
                                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                                <input type="file" name="image" id="editImage" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" name="est_service" id="editEstService" class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded">
                                <label for="editEstService" class="ml-2 block text-sm text-gray-700">Service Provider</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="become_mechanicien" id="editBecomeMechanicien" class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded">
                                <label for="editBecomeMechanicien" class="ml-2 block text-sm text-gray-700">Mechanic Request</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" id="closeEditModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Cancel
                        </button>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Update User
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
                        <h3 class="text-lg font-medium text-gray-900">Delete User</h3>
                    </div>
                    <p class="text-sm text-gray-500 mb-4">Are you sure you want to delete this user? This action cannot be undone and all associated data will be permanently removed.</p>
                    <form id="deleteForm" action="/admin/users" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" id="deleteUserId">
                        <div class="mt-6 flex justify-end space-x-3">
                            <button type="button" id="closeDeleteModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Cancel
                            </button>
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete User
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
    const viewModal = document.getElementById("viewModal");
    const editModal = document.getElementById("editModal");
    const deleteModal = document.getElementById("deleteModal");
    
    // Open modal buttons
    const openModal = document.getElementById("openModal");
    const emptyStateAddBtn = document.getElementById("emptyStateAddBtn");
    
    // Close modal buttons
    const closeModal = document.getElementById("closeModal");
    const closeModalX = document.getElementById("closeModalX");
    const closeViewModal = document.getElementById("closeViewModal");
    const closeViewModalX = document.getElementById("closeViewModalX");
    const closeEditModal = document.getElementById("closeEditModal");
    const closeEditModalX = document.getElementById("closeEditModalX");
    const closeDeleteModal = document.getElementById("closeDeleteModal");
    const closeDeleteModalX = document.getElementById("closeDeleteModalX");
    
    // Filter and search elements
    const searchInput = document.getElementById("searchInput");
    const filterRole = document.getElementById("filterRole");
    const sortBy = document.getElementById("sortBy");
    
    // Add User Modal
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
    
    // View Modal
    if (closeViewModal) {
        closeViewModal.addEventListener("click", () => {
            viewModal.classList.add("hidden");
        });
    }
    
    if (closeViewModalX) {
        closeViewModalX.addEventListener("click", () => {
            viewModal.classList.add("hidden");
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
    
    // Search and filter functionality
    if (searchInput) {
        searchInput.addEventListener("keyup", filterUsers);
    }
    
    if (filterRole) {
        filterRole.addEventListener("change", filterUsers);
    }
    
    if (sortBy) {
        sortBy.addEventListener("change", sortUsers);
    }
    
    function filterUsers() {
        const filter = searchInput.value.toLowerCase();
        const roleFilter = filterRole.value;
        const tbody = document.getElementById("userTableBody");
        const tr = tbody.getElementsByTagName("tr");
        
        for (let i = 0; i < tr.length; i++) {
            const nameTd = tr[i].getElementsByTagName("td")[0];
            const contactTd = tr[i].getElementsByTagName("td")[1];
            const userType = tr[i].getAttribute("data-user-type");
            
            if (nameTd && contactTd) {
                const nameValue = nameTd.textContent || nameTd.innerText;
                const contactValue = contactTd.textContent || contactTd.innerText;
                
                const matchesSearch = nameValue.toLowerCase().indexOf(filter) > -1 || 
                                     contactValue.toLowerCase().indexOf(filter) > -1;
                                     
                const matchesRole = roleFilter === "all" || userType === roleFilter;
                
                if (matchesSearch && matchesRole) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    
    function sortUsers() {
        const sortValue = sortBy.value;
        const tbody = document.getElementById("userTableBody");
        const rows = Array.from(tbody.getElementsByTagName("tr"));
        
        // Sort rows based on selected criteria
        rows.sort((a, b) => {
            if (sortValue === "name") {
                const nameA = a.getElementsByTagName("td")[0].textContent.trim().toLowerCase();
                const nameB = b.getElementsByTagName("td")[0].textContent.trim().toLowerCase();
                return nameA.localeCompare(nameB);
            } else if (sortValue === "rating") {
                const ratingA = parseFloat(a.getElementsByTagName("td")[2].textContent.trim()) || 0;
                const ratingB = parseFloat(b.getElementsByTagName("td")[2].textContent.trim()) || 0;
                return ratingB - ratingA; // Higher ratings first
            }
            // Add more sorting options as needed
            return 0;
        });
        
        // Reattach sorted rows to the table
        rows.forEach(row => tbody.appendChild(row));
    }
    
    // View user details
    function openViewModal(userId) {
        // In a real application, you would fetch user details from the server
        // For this example, we'll simulate it by finding the user in the table
        const userRow = document.querySelector(`tr[data-user-id="${userId}"]`);
        
        if (userRow) {
            const name = userRow.querySelector("td:nth-child(1) .text-sm.font-medium").textContent;
            const email = userRow.querySelector("td:nth-child(2) .text-sm.text-gray-900").textContent;
            const phone = userRow.querySelector("td:nth-child(2) .text-sm.text-gray-500").textContent;
            const rating = userRow.querySelector("td:nth-child(3) .ml-2") ? 
                          userRow.querySelector("td:nth-child(3) .ml-2").textContent : null;
            
            // Set values in the view modal
            document.getElementById("viewUserName").textContent = name;
            document.getElementById("viewUserEmail").textContent = email;
            document.getElementById("viewUserPhone").textContent = phone;
            document.getElementById("viewUserId").textContent = userId;
            document.getElementById("viewUserInitial").textContent = name.charAt(0);
            
            // Set rating stars if available
            const ratingContainer = document.getElementById("viewUserRatingContainer");
            const ratingStars = document.getElementById("viewUserRatingStars");
            const ratingValue = document.getElementById("viewUserRatingValue");
            
            if (rating) {
                ratingContainer.classList.remove("hidden");
                ratingStars.innerHTML = '';
                const ratingNum = parseFloat(rating);
                
                for (let i = 1; i <= 5; i++) {
                    const star = document.createElement("svg");
                    star.classList.add("h-5", "w-5");
                    
                    if (i <= Math.floor(ratingNum)) {
                        star.classList.add("text-yellow-500");
                        star.innerHTML = '<path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>';
                    } else if (i - 0.5 <= ratingNum) {
                        star.classList.add("text-yellow-500");
                        star.innerHTML = '<path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path d="M12 17.27V2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z" fill="currentColor"></path>';
                    } else {
                        star.classList.add("text-gray-300");
                        star.innerHTML = '<path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>';
                    }
                    
                    ratingStars.appendChild(star);
                }
                
                ratingValue.textContent = rating;
            } else {
                ratingContainer.classList.add("hidden");
            }
            
            // Set user status badges
            const statusContainer = document.getElementById("viewUserStatus");
            statusContainer.innerHTML = '';
            
            const userType = userRow.getAttribute("data-user-type");
            
            if (userType === "service") {
                const badge = document.createElement("span");
                badge.className = "px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800";
                badge.textContent = "Service Provider";
                statusContainer.appendChild(badge);
            }
            
            if (userType === "mechanic") {
                const badge = document.createElement("span");
                badge.className = "px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800";
                badge.textContent = "Mechanic Request";
                statusContainer.appendChild(badge);
            }
            
            if (userType === "regular") {
                const badge = document.createElement("span");
                badge.className = "px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800";
                badge.textContent = "Regular User";
                statusContainer.appendChild(badge);
            }
            
            // Show the modal
            viewModal.classList.remove("hidden");
        }
    }
    
    // Edit user functionality
    function openEditModal(id, firstname, lastname, email, phone, rating, estService, becomeMechanicien) {
        document.getElementById("editUserId").value = id;
        document.getElementById("editFirstname").value = firstname;
        document.getElementById("editLastname").value = lastname;
        document.getElementById("editEmail").value = email;
        document.getElementById("editPhone").value = phone;
        document.getElementById("editRating").value = rating !== null ? rating : '';
        document.getElementById("editEstService").checked = estService;
        document.getElementById("editBecomeMechanicien").checked = becomeMechanicien;
        
        editModal.classList.remove("hidden");
    }
    
    // Delete confirmation
    function confirmDelete(id) {
        document.getElementById("deleteUserId").value = id;
        deleteModal.classList.remove("hidden");
    }
    
    // Close modals when clicking outside
    window.addEventListener("click", function(event) {
        if (event.target === jobModal) {
            jobModal.classList.add("hidden");
        }
        if (event.target === viewModal) {
            viewModal.classList.add("hidden");
        }
        if (event.target === editModal) {
            editModal.classList.add("hidden");
        }
        if (event.target === deleteModal) {
            deleteModal.classList.add("hidden");
        }
    });
    
    // Initialize the page
    document.addEventListener("DOMContentLoaded", function() {
        // Add data-user-id attribute to all user rows for easier reference
        const tbody = document.getElementById("userTableBody");
        if (tbody) {
            const rows = tbody.getElementsByTagName("tr");
            for (let i = 0; i < rows.length; i++) {
                const userId = rows[i].querySelector("td:nth-child(1) .text-sm.text-gray-500").textContent.split(": ")[1];
                rows[i].setAttribute("data-user-id", userId);
            }
        }
    });
</script>
@endsection