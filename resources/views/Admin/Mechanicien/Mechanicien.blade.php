@extends('layout.SideBar')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4 sm:mb-0 flex items-center">
                <span class="inline-block mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </span>
                Mechanic Management
            </h1>
            <button id="openModal" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add Mechanic
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
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Mechanics</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ count($mechanics) }}</div>
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
                                <dt class="text-sm font-medium text-gray-500 truncate">Active Mechanics</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        {{ $mechanics->where('is_active', true)->count() }}
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Certified Mechanics</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        {{ $mechanics->whereNotNull('certificat')->count() }}
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
                <input type="text" id="searchInput" class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-12 py-3 sm:text-sm border-gray-300 rounded-md" placeholder="Search mechanics...">
            </div>
            
            <div>
                <select id="filterStatus" class="block w-full pl-3 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                    <option value="all">All Mechanics</option>
                    <option value="active">Active Only</option>
                    <option value="inactive">Inactive Only</option>
                    <option value="certified">Certified Only</option>
                </select>
            </div>
            
            <div>
                <select id="filterSpecialization" class="block w-full pl-3 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                    <option value="all">All Specializations</option>
                    {{-- @foreach($specializations as $specialization)
                        <option value="{{ $specialization }}">{{ $specialization }}</option>
                    @endforeach --}}
                </select>
            </div>
        </div>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mechanic</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Specialization</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Experience</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Availability</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="mechanicTableBody">
                        @foreach($mechanics as $mechanic)
                        <tr class="hover:bg-gray-50 transition-colors duration-150 ease-in-out" 
                            data-mechanic-id="{{ $mechanic->id }}" 
                            data-status="{{ $mechanic->is_active ? 'active' : 'inactive' }}" 
                            data-certified="{{ $mechanic->certificat ? 'certified' : 'uncertified' }}"
                            data-specialization="{{ $mechanic->specialization }}">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @if($mechanic->user && $mechanic->user->image)
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ url('storage/' . $mechanic->user->image) }}" alt="{{ $mechanic->user->firstname }}">
                                        @else
                                            <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                                <span class="text-blue-600 font-medium">{{ $mechanic->user ? substr($mechanic->user->firstname, 0, 1) : 'M' }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $mechanic->user ? $mechanic->user->firstname . ' ' . $mechanic->user->lastname : 'Unknown User' }}</div>
                                        <div class="text-sm text-gray-500">ID: {{ $mechanic->id }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $mechanic->specialization ?? 'Not specified' }}</div>
                                @if($mechanic->certificat)
                                    <div class="flex items-center mt-1">
                                        <svg class="h-4 w-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <span class="text-xs text-gray-500 ml-1">Certified</span>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $mechanic->experience_years ?? 'Not specified' }} {{ $mechanic->experience_years ? 'years' : '' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($mechanic->variable_at && $mechanic->variable_to)
                                    <div class="text-sm text-gray-900">
                                        {{ \Carbon\Carbon::parse($mechanic->variable_at)->format('M d, Y') }} - 
                                        {{ \Carbon\Carbon::parse($mechanic->variable_to)->format('M d, Y') }}
                                    </div>
                                    <div class="text-xs text-gray-500">
                                        @php
                                            $now = \Carbon\Carbon::now();
                                            $from = \Carbon\Carbon::parse($mechanic->variable_at);
                                            $to = \Carbon\Carbon::parse($mechanic->variable_to);
                                            
                                            if($now->lt($from)) {
                                                echo 'Available in ' . $now->diffInDays($from) . ' days';
                                            } elseif($now->gt($to)) {
                                                echo 'Availability ended';
                                            } else {
                                                echo 'Currently available';
                                            }
                                        @endphp
                                    </div>
                                @else
                                    <span class="text-sm text-gray-500">Not specified</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($mechanic->is_active)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Inactive
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <button onclick="openViewModal({{ $mechanic->id }})" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    View
                                </button>
                               
                                <button onclick="toggleStatus({{ $mechanic->id }}, {{ $mechanic->is_active ? 'false' : 'true' }})" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md {{ $mechanic->is_active ? 'text-red-700 bg-red-100 hover:bg-red-200' : 'text-green-700 bg-green-100 hover:bg-green-200' }} focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ $mechanic->is_active ? 'red' : 'green' }}-500 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $mechanic->is_active ? 'M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z' : 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z' }}" />
                                    </svg>
                                    {{ $mechanic->is_active ? 'Deactivate' : 'Activate' }}
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                        @if(count($mechanics) == 0)
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No mechanics</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new mechanic.</p>
               
            </div>
            @endif
        </div>

        <!-- Pagination -->
        @if(count($mechanics) > 0)
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
                        Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($mechanics) }}</span> of <span class="font-medium">{{ count($mechanics) }}</span> results
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
    

        <div id="viewModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4 sm:mx-0">
                <div class="bg-blue-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Mechanic Details</h3>
                    <button id="closeViewModalX" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/3 flex flex-col items-center mb-6 md:mb-0">
                            <div id="viewMechanicImage" class="h-32 w-32 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                                <span class="text-blue-600 text-4xl font-medium" id="viewMechanicInitial"></span>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900" id="viewMechanicName"></h2>
                            <div class="mt-2 flex items-center">
                                <span id="viewMechanicStatus" class="px-2 py-1 text-xs font-semibold rounded-full"></span>
                            </div>
                        </div>
                        <div class="md:w-2/3 md:pl-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Specialization</h3>
                                    <p class="mt-1 text-sm text-gray-900" id="viewMechanicSpecialization"></p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Experience</h3>
                                    <p class="mt-1 text-sm text-gray-900" id="viewMechanicExperience"></p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Availability</h3>
                                    <p class="mt-1 text-sm text-gray-900" id="viewMechanicAvailability"></p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Certificate</h3>
                                    <p class="mt-1 text-sm text-gray-900" id="viewMechanicCertificate"></p>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <h3 class="text-sm font-medium text-gray-500">User Information</h3>
                                <div class="mt-2 space-y-2">
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <div>
                                            <p class="text-sm text-gray-900" id="viewMechanicUserId"></p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <div>
                                            <p class="text-sm text-gray-900" id="viewMechanicUserEmail"></p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <div>
                                            <p class="text-sm text-gray-900" id="viewMechanicUserPhone"></p>
                                        </div>
                                    </div>
                                </div>
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

     
    </div>
</div>

<script>
    // Modal elements
    const jobModal = document.getElementById("jobModal");
    const viewModal = document.getElementById("viewModal");
    
    // Open modal buttons
    const openModal = document.getElementById("openModal");
    const emptyStateAddBtn = document.getElementById("emptyStateAddBtn");
    
    // Close modal buttons
    const closeModal = document.getElementById("closeModal");
    const closeModalX = document.getElementById("closeModalX");
    const closeViewModal = document.getElementById("closeViewModal");
    const closeViewModalX = document.getElementById("closeViewModalX");
  
    
    // Filter and search elements
    const searchInput = document.getElementById("searchInput");
    const filterStatus = document.getElementById("filterStatus");
    const filterSpecialization = document.getElementById("filterSpecialization");
    
    // Add Mechanic Modal
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
    

    
   
    
   
    
    
    // View mechanic details
    function openViewModal(mechanicId) {
        // In a real application, you would fetch mechanic details from the server
        // For this example, we'll simulate it by finding the mechanic in the table
        const mechanicRow = document.querySelector(`tr[data-mechanic-id="${mechanicId}"]`);
        
        if (mechanicRow) {
            const name = mechanicRow.querySelector("td:nth-child(1) .text-sm.font-medium").textContent;
            const specialization = mechanicRow.querySelector("td:nth-child(2) .text-sm.text-gray-900").textContent;
            const experience = mechanicRow.querySelector("td:nth-child(3) .text-sm.text-gray-900").textContent;
            const availability = mechanicRow.querySelector("td:nth-child(4) .text-sm.text-gray-900").textContent;
            const status = mechanicRow.getAttribute("data-status");
            const certified = mechanicRow.getAttribute("data-certified");
            
            // Set values in the view modal
            document.getElementById("viewMechanicName").textContent = name;
            document.getElementById("viewMechanicSpecialization").textContent = specialization;
            document.getElementById("viewMechanicExperience").textContent = experience;
            document.getElementById("viewMechanicAvailability").textContent = availability;
            document.getElementById("viewMechanicInitial").textContent = name.charAt(0);
            
            // Set certificate info
            document.getElementById("viewMechanicCertificate").textContent = certified === "certified" ? "Certified" : "Not certified";
            
            // Set status badge
            const statusBadge = document.getElementById("viewMechanicStatus");
            if (status === "active") {
                statusBadge.className = "px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800";
                statusBadge.textContent = "Active";
            } else {
                statusBadge.className = "px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800";
                statusBadge.textContent = "Inactive";
            }
            
            // Set user information (in a real app, you would fetch this from the server)
            document.getElementById("viewMechanicUserId").textContent = "User ID: " + mechanicRow.querySelector("td:nth-child(1) .text-sm.text-gray-500").textContent.split(": ")[1];
            document.getElementById("viewMechanicUserEmail").textContent = "Email not available in this view";
            document.getElementById("viewMechanicUserPhone").textContent = "Phone not available in this view";
            
            // Show the modal
            viewModal.classList.remove("hidden");
        }
    }
    
 
    function toggleStatus(mechanicId, newStatus) {
        // In a real application, you would send an AJAX request to update the status
        // For this example, we'll simulate it by updating the UI
        const mechanicRow = document.querySelector(`tr[data-mechanic-id="${mechanicId}"]`);
        
        if (mechanicRow) {
            // Update the data attribute
            mechanicRow.setAttribute("data-status", newStatus === true ? "active" : "inactive");
            
            // Update the status badge
            const statusBadge = mechanicRow.querySelector("td:nth-child(5) span");
            if (newStatus === true) {
                statusBadge.className = "px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800";
                statusBadge.textContent = "Active";
            } else {
                statusBadge.className = "px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800";
                statusBadge.textContent = "Inactive";
            }
            
            // Update the toggle button
            const toggleButton = mechanicRow.querySelector("td:nth-child(6) button:last-child");
            if (newStatus === true) {
                toggleButton.className = "inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-150";
                toggleButton.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Deactivate
                `;
                toggleButton.setAttribute("onclick", `toggleStatus(${mechanicId}, false)`);
            } else {
                toggleButton.className = "inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-green-700 bg-green-100 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-150";
                toggleButton.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Activate
                `;
                toggleButton.setAttribute("onclick", `toggleStatus(${mechanicId}, true)`);
            }
            
           
        }
    }
    
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
    });
    
    document.addEventListener("DOMContentLoaded", function() {
        // Add data-mechanic-id attribute to all mechanic rows for easier reference
        const tbody = document.getElementById("mechanicTableBody");
        if (tbody) {
            const rows = tbody.getElementsByTagName("tr");
            for (let i = 0; i < rows.length; i++) {
                const mechanicId = rows[i].querySelector("td:nth-child(1) .text-sm.text-gray-500").textContent.split(": ")[1];
                rows[i].setAttribute("data-mechanic-id", mechanicId);
            }
        }
    });
</script>
@endsection