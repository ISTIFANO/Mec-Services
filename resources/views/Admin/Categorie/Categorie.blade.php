@extends('layout.SideBar')

@section('content')

<!-- Font Awesome (only include here if it's not in layout.SideBar) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" />



<div id="categories-section" class="px-6 py-4 bg-gray-100">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-900">Categories</h2>
        <button class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Add Category
        </button>
    </div>

    <!-- Categories Grid -->
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Card 1 -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-indigo-500 rounded-md p-3">
                        <i class="fas fa-car text-white text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <h3 class="text-lg font-medium text-gray-900">Car Mechanics</h3>
                        <p class="mt-1 text-sm text-gray-500">12 mechanics</p>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2"><i class="fas fa-edit"></i></a>
                        <a href="#" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-sm text-gray-500">Specialists in car repair and maintenance services.</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                        <i class="fas fa-motorcycle text-white text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <h3 class="text-lg font-medium text-gray-900">Motorcycle Mechanics</h3>
                        <p class="mt-1 text-sm text-gray-500">8 mechanics</p>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2"><i class="fas fa-edit"></i></a>
                        <a href="#" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-sm text-gray-500">Experts in motorcycle repair and customization.</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                        <i class="fas fa-truck text-white text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <h3 class="text-lg font-medium text-gray-900">Truck Mechanics</h3>
                        <p class="mt-1 text-sm text-gray-500">4 mechanics</p>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2"><i class="fas fa-edit"></i></a>
                        <a href="#" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-sm text-gray-500">Specialized in heavy-duty truck repairs and maintenance.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Category Form -->
    <div class="mt-10 bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Add New Category</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Create a new category for mechanics.</p>
        </div>
        <div class="border-t border-gray-200">
            <div class="px-4 py-5 sm:p-6">
                <form method="POST"      class="space-y-6">
                    @csrf

                    <div>
                        <label for="category_name" class="block text-sm font-medium text-gray-700">Category Name</label>
                        <input type="text" name="category_name" id="category_name" placeholder="e.g. Boat Mechanics"
                               class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div>
                        <label for="category_description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="category_description" name="category_description" rows="3"
                                  placeholder="Describe this category"
                                  class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>

                    <div>
                        <label for="category_icon" class="block text-sm font-medium text-gray-700">Icon</label>
                        <div class="mt-1 flex items-center">
                            <span class="inline-block h-12 w-12 rounded-md overflow-hidden bg-gray-100">
                                <i class="fas fa-ship text-gray-400 text-2xl flex items-center justify-center h-full"></i>
                            </span>
                            <button type="button"
                                    class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Choose Icon
                            </button>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    @endsection


