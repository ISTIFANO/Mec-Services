@extends('layout.SideBar')
@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="container mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4 sm:mb-0">
                <span class="inline-block mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </span>
                Category Dashboard
            </h1>
            <button id="openModal" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add Category
            </button>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 mb-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-indigo-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Categories</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ count($categories) }}</div>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Active Categories</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ count($categories) }}</div>
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

        <!-- Search Bar -->
        <div class="mb-6">
            <div class="relative rounded-md shadow-sm max-w-md">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" id="searchInput" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-12 py-3 sm:text-sm border-gray-300 rounded-md" placeholder="Search categories...">
            </div>
        </div>

        <!-- Table for category data -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="categoryTableBody">
                        @foreach($categories as $categorie)
                        <tr class="hover:bg-gray-50 transition-colors duration-150 ease-in-out">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full object-cover" src="{{ url('storage/' . $categorie->image) }}" alt="{{ $categorie->nom }}">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $categorie->nom }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500 max-w-xs truncate">{{ $categorie->description }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <button onclick="openEditModal({{ $categorie->id }}, '{{ $categorie->nom }}', '{{ $categorie->description }}')" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Edit
                                </button>
                                <button onclick="confirmDelete({{ $categorie->id }})" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-150">
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
            @if(count($categories) == 0)
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No categories</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new category.</p>
                <div class="mt-6">
                    <button id="emptyStateAddBtn" type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Add Category
                    </button>
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
                        Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($categories) }}</span> of <span class="font-medium">{{ count($categories) }}</span> results
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

        <!-- Add Category Modal -->
        <div id="jobModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-md w-full mx-4 sm:mx-0">
                <div class="bg-indigo-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Add New Category</h3>
                    <button id="closeModalX" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="/admin/categorie" enctype="multipart/form-data" method="POST" class="p-6">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="nom" id="title" required placeholder="Enter category title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="3" required placeholder="Enter category description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Category Image</label>
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
                    </div>
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" id="closeModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cancel
                        </button>
                        <input value=" Save Category" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                           
                    </div>
                </form>
            </div>
        </div>

        <!-- Edit Category Modal -->
        <div id="editModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow-xl max-w-md w-full mx-4 sm:mx-0">
                <div class="bg-yellow-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                    <h3 class="text-lg font-medium">Edit Category</h3>
                    <button id="closeEditModalX" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form id="editForm" action="/admin/categorie" method="POST" class="p-6">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editCategoryId">
                    <div class="space-y-4">
                        <div>
                            <label for="editTitle" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="nom" id="editTitle" required placeholder="Enter category title" class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="editDescription" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="editDescription" rows="3" required placeholder="Enter category description" class="mt-1 focus:ring-yellow-500 focus:border-yellow-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Category Image</label>
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
                    </div>
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" id="closeEditModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Cancel
                        </button>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Update Category
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
                        <h3 class="text-lg font-medium text-gray-900">Delete Category</h3>
                    </div>
                    <p class="text-sm text-gray-500 mb-4">Are you sure you want to delete this category? This action cannot be undone and all associated data will be permanently removed.</p>
                    <form id="deleteForm" action="/admin/categorie" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" id="deleteCategoryId">
                        <div class="mt-6 flex justify-end space-x-3">
                            <button type="button" id="closeDeleteModal" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Cancel
                            </button>
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete Category
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
    
    // Add Category Modal
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
            const tbody = document.getElementById("categoryTableBody");
            const tr = tbody.getElementsByTagName("tr");
            
            for (let i = 0; i < tr.length; i++) {
                const tdTitle = tr[i].getElementsByTagName("td")[0];
                const tdDesc = tr[i].getElementsByTagName("td")[1];
                
                if (tdTitle || tdDesc) {
                    const titleText = tdTitle.textContent || tdTitle.innerText;
                    const descText = tdDesc.textContent || tdDesc.innerText;
                    
                    if (titleText.toLowerCase().indexOf(filter) > -1 || descText.toLowerCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    }
    
    // Edit modal functionality
    function openEditModal(id, title, description) {
        document.getElementById("editCategoryId").value = id;
        document.getElementById("editTitle").value = title;
        document.getElementById("editDescription").value = description;
        editModal.classList.remove("hidden");
    }
    
    // Delete confirmation functionality
    function confirmDelete(id) {
        document.getElementById("deleteCategoryId").value = id;
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
    
    // Preview uploaded image
    const fileInput = document.getElementById('image');
    const editFileInput = document.getElementById('editImage');
    
    if (fileInput) {
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.createElement('img');
                    preview.src = e.target.result;
                    preview.className = 'mt-2 rounded-md h-20 w-auto';
                    
                    const container = fileInput.closest('div').querySelector('.space-y-1');
                    const existingPreview = container.querySelector('img:not([aria-hidden="true"])');
                    
                    if (existingPreview) {
                        container.removeChild(existingPreview);
                    }
                    
                    container.appendChild(preview);
                }
                reader.readAsDataURL(file);
            }
        });
    }
    
    if (editFileInput) {
        editFileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.createElement('img');
                    preview.src = e.target.result;
                    preview.className = 'mt-2 rounded-md h-20 w-auto';
                    
                    const container = editFileInput.closest('div').querySelector('.space-y-1');
                    const existingPreview = container.querySelector('img:not([aria-hidden="true"])');
                    
                    if (existingPreview) {
                        container.removeChild(existingPreview);
                    }
                    
                    container.appendChild(preview);
                }
                reader.readAsDataURL(file);
            }
        });
    }
</script>
@endsection