@extends('layout.SideBar')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4 sm:mb-0 flex items-center">
                <span class="inline-block mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </span>
                Contract Management
            </h1>
            <div class="flex space-x-3">
                <button id="exportBtn" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Export
                </button>
                <button id="printBtn" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                    </svg>
                    Print
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Contracts</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ count($contracts) }}</div>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Unique Clients</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        {{ $contracts->unique('client_id')->count() }}
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Active Mechanics</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        {{ $contracts->unique('mechanicien_id')->count() }}
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Service Types</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        {{ $contracts->unique('service_id')->count() }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Table for contract data -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contract</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Service</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mechanic</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="contractTableBody">
                        @foreach($contracts as $contract)
                        <tr class="hover:bg-gray-50 transition-colors duration-150 ease-in-out" 
                            data-contract-id="{{ $contract->id }}" 
                            data-mechanic-id="{{ $contract->mechanicien_id }}" 
                            data-client-id="{{ $contract->client_id }}"
                            data-service-id="{{ $contract->service_id }}">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @if($contract->logo && $contract->logo != "logoTa3Charika.png")
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ url('storage/logos/' . $contract->logo) }}" alt="{{ $contract->titre }}">
                                        @else
                                            <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                                <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $contract->titre ?? 'Contract #' . $contract->id }}</div>
                                        <div class="text-sm text-gray-500">ID: {{ $contract->id }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $contract->service->titre ?? 'Service #' . $contract->service_id }}</div>
                                <div class="text-xs text-gray-500">{{ $contract->service->description ?? '' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $contract->service->mechanicien->user->firstname ?? '' }} {{ $contract->service->mechanicien->user->lastname ?? '' }}
                                </div>
                                <div class="text-xs text-gray-500">{{ $contract->service->mechanicien->specialization ?? 'mechanicien #' . $contract->mechanicien_id }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $contract->service->user->firstname ?? '' }} {{ $contract->service->user->lastname ?? '' }}
                                </div>
                                <div class="text-xs text-gray-500">{{ $contract->service->user->email ?? '' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ \Carbon\Carbon::parse($contract->created_at)->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                              
                                <form action="{{ route('contracts.print') }}" method="POST" class="inline">
                                    @csrf
                                    <input type="hidden" value="{{$contract->service->mechanicien->id}}" name="mechanicien_id">
                                    <input type="hidden" value="{{$contract->service->user->id}}" name="client_id">
                                    <input type="hidden" value="{{$contract->service->id}}" name="service_id">

                                    <button type="submit" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-colors duration-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                        </svg>
                                        Print
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Empty state -->
            @if(count($contracts) == 0)
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No contracts</h3>
                <p class="mt-1 text-sm text-gray-500">No contracts have been created yet.</p>
            </div>
            @endif
        </div>

        <!-- Pagination -->
        @if(count($contracts) > 0)
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
                        Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($contracts) }}</span> of <span class="font-medium">{{ count($contracts) }}</span> results
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

        <!-- View Contract Modal -->
        <div id="viewModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-4xl w-full mx-4 sm:mx-0">
                <div class="bg-blue-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Contract Details</h3>
                    <button id="closeViewModalX" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/3 flex flex-col items-center mb-6 md:mb-0">
                            <div id="viewContractLogo" class="h-32 w-32 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                                <svg class="h-16 w-16 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900" id="viewContractTitle"></h2>
                            <p class="text-sm text-gray-500 mt-1" id="viewContractId"></p>
                            <p class="text-sm text-gray-500 mt-1" id="viewContractDate"></p>
                        </div>
                        <div class="md:w-2/3 md:pl-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Service Information</h3>
                                    <div class="mt-2 space-y-2">
                                        <div class="flex items-start">
                                            <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900" id="viewServiceName"></p>
                                                <p class="text-sm text-gray-500" id="viewServiceDescription"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Mechanic Information</h3>
                                    <div class="mt-2 space-y-2">
                                        <div class="flex items-start">
                                            <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900" id="viewMechanicName"></p>
                                                <p class="text-sm text-gray-500" id="viewMechanicSpecialization"></p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                            <div>
                                                <p class="text-sm text-gray-900" id="viewMechanicContact"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Client Information</h3>
                                    <div class="mt-2 space-y-2">
                                        <div class="flex items-start">
                                            <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900" id="viewClientName"></p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                            <div>
                                                <p class="text-sm text-gray-900" id="viewClientEmail"></p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                            <div>
                                                <p class="text-sm text-gray-900" id="viewClientPhone"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Contract Timeline</h3>
                                    <div class="mt-2 space-y-2">
                                        <div class="flex items-start">
                                            <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">Created</p>
                                                <p class="text-sm text-gray-500" id="viewContractCreated"></p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">Last Updated</p>
                                                <p class="text-sm text-gray-500" id="viewContractUpdated"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex justify-end">
                        <button type="button" id="printViewBtn" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                            </svg>
                            Print
                        </button>
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
    const viewModal = document.getElementById("viewModal");
    
    // Close modal buttons
    const closeViewModal = document.getElementById("closeViewModal");
    const closeViewModalX = document.getElementById("closeViewModalX");
    const printViewBtn = document.getElementById("printViewBtn");
    
    // Filter and search elements
    const searchInput = document.getElementById("searchInput");
    const filterMechanic = document.getElementById("filterMechanic");
    const filterClient = document.getElementById("filterClient");
    const filterService = document.getElementById("filterService");
    const exportBtn = document.getElementById("exportBtn");
    const printBtn = document.getElementById("printBtn");
    
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
    
    if (printViewBtn) {
        printViewBtn.addEventListener("click", () => {
            // Get the current contract ID from the modal
            const contractId = viewModal.getAttribute("data-contract-id");
            if (contractId) {
                printContract(contractId);
            }
        });
    }
    
    // Search and filter functionality
    if (searchInput) {
        searchInput.addEventListener("keyup", filterContracts);
    }
    
    if (filterMechanic) {
        filterMechanic.addEventListener("change", filterContracts);
    }
    
    if (filterClient) {
        filterClient.addEventListener("change", filterContracts);
    }
    
    if (filterService) {
        filterService.addEventListener("change", filterContracts);
    }
    
    // Export functionality
    if (exportBtn) {
        exportBtn.addEventListener("click", exportContracts);
    }
    
    // Print all contracts
    if (printBtn) {
        printBtn.addEventListener("click", printAllContracts);
    }
    
    function filterContracts() {
        const filter = searchInput.value.toLowerCase();
        const mechanicFilter = filterMechanic.value;
        const clientFilter = filterClient.value;
        const serviceFilter = filterService.value;
        const tbody = document.getElementById("contractTableBody");
        const tr = tbody.getElementsByTagName("tr");
        
        for (let i = 0; i < tr.length; i++) {
            const contractTd = tr[i].getElementsByTagName("td")[0];
            const serviceTd = tr[i].getElementsByTagName("td")[1];
            const mechanicTd = tr[i].getElementsByTagName("td")[2];
            const clientTd = tr[i].getElementsByTagName("td")[3];
            
            const mechanicId = tr[i].getAttribute("data-mechanic-id");
            const clientId = tr[i].getAttribute("data-client-id");
            const serviceId = tr[i].getAttribute("data-service-id");
            
            if (contractTd && serviceTd && mechanicTd && clientTd) {
                const contractValue = contractTd.textContent || contractTd.innerText;
                const serviceValue = serviceTd.textContent || serviceTd.innerText;
                const mechanicValue = mechanicTd.textContent || mechanicTd.innerText;
                const clientValue = clientTd.textContent || clientTd.innerText;
                
                const matchesSearch = contractValue.toLowerCase().indexOf(filter) > -1 || 
                                     serviceValue.toLowerCase().indexOf(filter) > -1 ||
                                     mechanicValue.toLowerCase().indexOf(filter) > -1 ||
                                     clientValue.toLowerCase().indexOf(filter) > -1;
                                     
                const matchesMechanic = mechanicFilter === "all" || mechanicId === mechanicFilter;
                const matchesClient = clientFilter === "all" || clientId === clientFilter;
                const matchesService = serviceFilter === "all" || serviceId === serviceFilter;
                
                if (matchesSearch && matchesMechanic && matchesClient && matchesService) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    
    // View contract details
    function openViewModal(contractId) {
        // In a real application, you would fetch contract details from the server
        // For this example, we'll simulate it by finding the contract in the table
        const contractRow = document.querySelector(`tr[data-contract-id="${contractId}"]`);
        
        if (contractRow) {
            const title = contractRow.querySelector("td:nth-child(1) .text-sm.font-medium").textContent;
            const id = contractRow.querySelector("td:nth-child(1) .text-sm.text-gray-500").textContent;
            const service = contractRow.querySelector("td:nth-child(2) .text-sm.text-gray-900").textContent;
            const serviceDesc = contractRow.querySelector("td:nth-child(2) .text-xs.text-gray-500").textContent;
            const mechanic = contractRow.querySelector("td:nth-child(3) .text-sm.text-gray-900").textContent;
            const mechanicSpec = contractRow.querySelector("td:nth-child(3) .text-xs.text-gray-500").textContent;
            const client = contractRow.querySelector("td:nth-child(4) .text-sm.text-gray-900").textContent;
            const clientEmail = contractRow.querySelector("td:nth-child(4) .text-xs.text-gray-500").textContent;
            const createdDate = contractRow.querySelector("td:nth-child(5)").textContent;
            
            // Set values in the view modal
            document.getElementById("viewContractTitle").textContent = title;
            document.getElementById("viewContractId").textContent = id;
            document.getElementById("viewContractDate").textContent = "Created on " + createdDate;
            document.getElementById("viewServiceName").textContent = service;
            document.getElementById("viewServiceDescription").textContent = serviceDesc;
            document.getElementById("viewMechanicName").textContent = mechanic;
            document.getElementById("viewMechanicSpecialization").textContent = mechanicSpec;
            document.getElementById("viewMechanicContact").textContent = "Contact information not available";
            document.getElementById("viewClientName").textContent = client;
            document.getElementById("viewClientEmail").textContent = clientEmail;
            document.getElementById("viewClientPhone").textContent = "Phone information not available";
            document.getElementById("viewContractCreated").textContent = createdDate;
            document.getElementById("viewContractUpdated").textContent = "Not available";
            
            // Store the contract ID in the modal for printing
            viewModal.setAttribute("data-contract-id", contractId);
            
            // Show the modal
            viewModal.classList.remove("hidden");
        }
    }
    
    // Print contract
    function printContract(contractId) {
        // In a real application, you would redirect to a print-friendly version or use a print API
        // For this example, we'll simulate it with an alert
        alert(`Printing contract #${contractId}`);
        
        // In a real application, you would do something like:
        // window.open(`/admin/contracts/${contractId}/print`, '_blank');
    }
    
    // Print all contracts
    function printAllContracts() {
        // In a real application, you would redirect to a print-friendly version of all contracts
        alert('Printing all contracts');
        
        // In a real application, you would do something like:
        // window.open('/admin/contracts/print-all', '_blank');
    }
    
    // Export contracts
    function exportContracts() {
        // In a real application, you would trigger a download of contracts data
        alert('Exporting contracts data');
        
        // In a real application, you would do something like:
        // window.location.href = '/admin/contracts/export';
    }
    
    // Close modals when clicking outside
    window.addEventListener("click", function(event) {
        if (event.target === viewModal) {
            viewModal.classList.add("hidden");
        }
    });
</script>
@endsection