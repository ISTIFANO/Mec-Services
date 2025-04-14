<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanics Management Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gray-800">
                <div class="flex items-center justify-center h-16 bg-gray-900">
                    <span class="text-white font-bold text-lg">Mechanics Admin</span>
                </div>
                <div class="flex flex-col flex-grow overflow-y-auto">
                    <nav class="flex-1 px-2 py-4 space-y-1">
                        <a href="#dashboard" class="flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-700 rounded-md">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            Dashboard
                        </a>
                        <a href="#mechanics" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-wrench mr-3"></i>
                            Mechanics
                        </a>
                        <a href="#categories" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-tags mr-3"></i>
                            Categories
                        </a>
                        <a href="#tags" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-tag mr-3"></i>
                            Tags
                        </a>
                        <a href="#services" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-cogs mr-3"></i>
                            Services
                        </a>
                        <a href="#offers" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-percentage mr-3"></i>
                            Offers
                        </a>
                        <a href="#payments" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-credit-card mr-3"></i>
                            Payments
                        </a>
                        <a href="#users" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-users mr-3"></i>
                            Users
                        </a>
                        <a href="#settings" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-cog mr-3"></i>
                            Settings
                        </a>
                    </nav>
                </div>
                <div class="flex-shrink-0 flex border-t border-gray-700 p-4">
                    <div class="flex items-center">
                        <div>
                            <img class="h-8 w-8 rounded-full" src="/placeholder.svg?height=32&width=32" alt="Admin">
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-white">Admin User</p>
                            <a href="#" class="text-xs font-medium text-gray-300 hover:text-gray-200">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile sidebar -->
        <div class="md:hidden fixed inset-0 z-40 flex" id="mobile-menu" style="display: none;">
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true" id="mobile-backdrop"></div>
            <div class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800">
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" id="close-sidebar">
                        <span class="sr-only">Close sidebar</span>
                        <i class="fas fa-times text-white"></i>
                    </button>
                </div>
                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                    <div class="flex-shrink-0 flex items-center px-4">
                        <span class="text-white font-bold text-lg">Mechanics Admin</span>
                    </div>
                    <nav class="mt-5 px-2 space-y-1">
                        <a href="#dashboard" class="flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-700 rounded-md">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            Dashboard
                        </a>
                        <a href="#mechanics" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-wrench mr-3"></i>
                            Mechanics
                        </a>
                        <a href="#categories" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-tags mr-3"></i>
                            Categories
                        </a>
                        <a href="#tags" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-tag mr-3"></i>
                            Tags
                        </a>
                        <a href="#services" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-cogs mr-3"></i>
                            Services
                        </a>
                        <a href="#offers" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-percentage mr-3"></i>
                            Offers
                        </a>
                        <a href="#payments" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-credit-card mr-3"></i>
                            Payments
                        </a>
                        <a href="#users" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-users mr-3"></i>
                            Users
                        </a>
                        <a href="#settings" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-cog mr-3"></i>
                            Settings
                        </a>
                    </nav>
                </div>
                <div class="flex-shrink-0 flex border-t border-gray-700 p-4">
                    <div class="flex items-center">
                        <div>
                            <img class="h-8 w-8 rounded-full" src="/placeholder.svg?height=32&width=32" alt="Admin">
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-white">Admin User</p>
                            <a href="#" class="text-xs font-medium text-gray-300 hover:text-gray-200">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 w-14"></div>
        </div>

        <!-- Main content -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                <button type="button" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" id="open-sidebar">
                    <span class="sr-only">Open sidebar</span>
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Header -->
            <div class="flex-shrink-0 flex h-16 bg-white shadow">
                <div class="flex-1 px-4 flex justify-between">
                    <div class="flex-1 flex items-center">
                        <h1 class="text-2xl font-semibold text-gray-900" id="page-title">Dashboard</h1>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <button class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="sr-only">View notifications</span>
                            <i class="fas fa-bell"></i>
                        </button>
                        <div class="ml-3 relative">
                            <div>
                                <button type="button" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="/placeholder.svg?height=32&width=32" alt="User">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content area -->
            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                <div class="py-6">
                    <!-- Dashboard section -->
                    <div id="dashboard-section" class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                            <!-- Card 1 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-indigo-500 rounded-md p-3">
                                            <i class="fas fa-wrench text-white text-xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Total Mechanics</dt>
                                                <dd class="flex items-baseline">
                                                    <div class="text-2xl font-semibold text-gray-900">24</div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <a href="#mechanics" class="font-medium text-indigo-600 hover:text-indigo-500">View all</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                                            <i class="fas fa-cogs text-white text-xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Total Services</dt>
                                                <dd class="flex items-baseline">
                                                    <div class="text-2xl font-semibold text-gray-900">48</div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <a href="#services" class="font-medium text-green-600 hover:text-green-500">View all</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                                            <i class="fas fa-users text-white text-xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Total Users</dt>
                                                <dd class="flex items-baseline">
                                                    <div class="text-2xl font-semibold text-gray-900">156</div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <a href="#users" class="font-medium text-yellow-600 hover:text-yellow-500">View all</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-red-500 rounded-md p-3">
                                            <i class="fas fa-credit-card text-white text-xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Total Revenue</dt>
                                                <dd class="flex items-baseline">
                                                    <div class="text-2xl font-semibold text-gray-900">$12,456</div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <a href="#payments" class="font-medium text-red-600 hover:text-red-500">View all</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Activity -->
                        <div class="mt-8">
                            <h2 class="text-lg leading-6 font-medium text-gray-900">Recent Activity</h2>
                            <div class="mt-2 bg-white shadow overflow-hidden sm:rounded-md">
                                <ul class="divide-y divide-gray-200">
                                    <li>
                                        <div class="px-4 py-4 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-indigo-600 truncate">New mechanic registered</p>
                                                <div class="ml-2 flex-shrink-0 flex">
                                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">New</p>
                                                </div>
                                            </div>
                                            <div class="mt-2 sm:flex sm:justify-between">
                                                <div class="sm:flex">
                                                    <p class="flex items-center text-sm text-gray-500">
                                                        <i class="fas fa-user flex-shrink-0 mr-1.5 text-gray-400"></i>
                                                        John Doe
                                                    </p>
                                                </div>
                                                <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                                    <i class="fas fa-clock flex-shrink-0 mr-1.5 text-gray-400"></i>
                                                    <p>2 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="px-4 py-4 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-indigo-600 truncate">Service completed</p>
                                                <div class="ml-2 flex-shrink-0 flex">
                                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Completed</p>
                                                </div>
                                            </div>
                                            <div class="mt-2 sm:flex sm:justify-between">
                                                <div class="sm:flex">
                                                    <p class="flex items-center text-sm text-gray-500">
                                                        <i class="fas fa-cog flex-shrink-0 mr-1.5 text-gray-400"></i>
                                                        Oil Change
                                                    </p>
                                                </div>
                                                <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                                    <i class="fas fa-clock flex-shrink-0 mr-1.5 text-gray-400"></i>
                                                    <p>5 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="px-4 py-4 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-indigo-600 truncate">Payment received</p>
                                                <div class="ml-2 flex-shrink-0 flex">
                                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</p>
                                                </div>
                                            </div>
                                            <div class="mt-2 sm:flex sm:justify-between">
                                                <div class="sm:flex">
                                                    <p class="flex items-center text-sm text-gray-500">
                                                        <i class="fas fa-dollar-sign flex-shrink-0 mr-1.5 text-gray-400"></i>
                                                        $120.00
                                                    </p>
                                                </div>
                                                <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                                    <i class="fas fa-clock flex-shrink-0 mr-1.5 text-gray-400"></i>
                                                    <p>1 day ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Mechanics section -->
                    <div id="mechanics-section" class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 hidden">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-semibold text-gray-900">Mechanics</h2>
                            <button class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add Mechanic
                            </button>
                        </div>
                        
                        <!-- Search and filter -->
                        <div class="mb-6">
                            <div class="flex justify-between">
                                <div class="w-full max-w-lg lg:max-w-xs">
                                    <label for="search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-search text-gray-400"></i>
                                        </div>
                                        <input id="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search mechanics" type="search">
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <select class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                        <option>All Categories</option>
                                        <option>Car Mechanics</option>
                                        <option>Motorcycle Mechanics</option>
                                        <option>Truck Mechanics</option>
                                    </select>
                                    <select class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                        <option>Sort by</option>
                                        <option>Name</option>
                                        <option>Date</option>
                                        <option>Rating</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Mechanics table -->
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Name
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Category
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Status
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Rating
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        <span class="sr-only">Edit</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    John Smith
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    john.smith@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Car Mechanic</div>
                                                        <div class="text-sm text-gray-500">Engine Specialist</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        <div class="flex items-center">
                                                            <i class="fas fa-star text-yellow-400"></i>
                                                            <i class="fas fa-star text-yellow-400"></i>
                                                            <i class="fas fa-star text-yellow-400"></i>
                                                            <i class="fas fa-star text-yellow-400"></i>
                                                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                                                            <span class="ml-1">4.5</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    Maria Rodriguez
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    maria.rodriguez@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Motorcycle Mechanic</div>
                                                        <div class="text-sm text-gray-500">Transmission Expert</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        <div class="flex items-center">
                                                            <i class="fas fa-star text-yellow-400"></i>
                                                            <i class="fas fa-star text-yellow-400"></i>
                                                            <i class="fas fa-star text-yellow-400"></i>
                                                            <i class="fas fa-star text-yellow-400"></i>
                                                            <i class="far fa-star text-yellow-400"></i>
                                                            <span class="ml-1">4.0</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    David Johnson
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    david.johnson@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Truck Mechanic</div>
                                                        <div class="text-sm text-gray-500">Brake Specialist</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                            On Leave
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        <div class="flex items-center">
                                                            <i class="fas fa-star text-yellow-400"></i>
                                                            <i class="fas fa-star text-yellow-400"></i>
                                                            <i class="fas fa-star text-yellow-400"></i>
                                                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                                                            <i class="far fa-star text-yellow-400"></i>
                                                            <span class="ml-1">3.5</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pagination -->
                        <div class="mt-5 flex items-center justify-between">
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
                                        Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">24</span> results
                                    </p>
                                </div>
                                <div>
                                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Previous</span>
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                        <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            1
                                        </a>
                                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            2
                                        </a>
                                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            3
                                        </a>
                                        <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                            ...
                                        </span>
                                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            8
                                        </a>
                                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            9
                                        </a>
                                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            10
                                        </a>
                                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Next</span>
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Categories section -->
                    <div id="categories-section" class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 hidden">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-semibold text-gray-900">Categories</h2>
                            <button class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add Category
                            </button>
                        </div>
                        
                        <!-- Categories grid -->
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Category card 1 -->
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
                            
                            <!-- Category card 2 -->
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
                            
                            <!-- Category card 3 -->
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
                                    <form class="space-y-6">
                                        <div>
                                            <label for="category-name" class="block text-sm font-medium text-gray-700">Category Name</label>
                                            <div class="mt-1">
                                                <input type="text" name="category-name" id="category-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="e.g. Boat Mechanics">
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <label for="category-description" class="block text-sm font-medium text-gray-700">Description</label>
                                            <div class="mt-1">
                                                <textarea id="category-description" name="category-description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Describe this category"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <label for="category-icon" class="block text-sm font-medium text-gray-700">Icon</label>
                                            <div class="mt-1 flex items-center">
                                                <span class="inline-block h-12 w-12 rounded-md overflow-hidden bg-gray-100">
                                                    <i class="fas fa-ship text-gray-400 text-2xl flex items-center justify-center h-full"></i>
                                                </span>
                                                <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    Choose Icon
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Save Category
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tags section -->
                    <div id="tags-section" class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 hidden">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-semibold text-gray-900">Tags</h2>
                            <button class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add Tag
                            </button>
                        </div>
                        
                        <!-- Tags list -->
                        <div class="bg-white shadow overflow-hidden sm:rounded-md">
                            <ul class="divide-y divide-gray-200">
                                <li>
                                    <div class="px-4 py-4 flex items-center sm:px-6">
                                        <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                                            <div>
                                                <div class="flex text-sm">
                                                    <p class="font-medium text-indigo-600 truncate">Engine Specialist</p>
                                                </div>
                                                <div class="mt-2 flex">
                                                    <div class="flex items-center text-sm text-gray-500">
                                                        <i class="fas fa-tag flex-shrink-0 mr-1.5 text-gray-400"></i>
                                                        <p>Used by 8 mechanics</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-5 flex-shrink-0">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="px-4 py-4 flex items-center sm:px-6">
                                        <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                                            <div>
                                                <div class="flex text-sm">
                                                    <p class="font-medium text-indigo-600 truncate">Transmission Expert</p>
                                                </div>
                                                <div class="mt-2 flex">
                                                    <div class="flex items-center text-sm text-gray-500">
                                                        <i class="fas fa-tag flex-shrink-0 mr-1.5 text-gray-400"></i>
                                                        <p>Used by 6 mechanics</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-5 flex-shrink-0">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="px-4 py-4 flex items-center sm:px-6">
                                        <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                                            <div>
                                                <div class="flex text-sm">
                                                    <p class="font-medium text-indigo-600 truncate">Brake Specialist</p>
                                                </div>
                                                <div class="mt-2 flex">
                                                    <div class="flex items-center text-sm text-gray-500">
                                                        <i class="fas fa-tag flex-shrink-0 mr-1.5 text-gray-400"></i>
                                                        <p>Used by 5 mechanics</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-5 flex-shrink-0">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="px-4 py-4 flex items-center sm:px-6">
                                        <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                                            <div>
                                                <div class="flex text-sm">
                                                    <p class="font-medium text-indigo-600 truncate">Electrical Systems</p>
                                                </div>
                                                <div class="mt-2 flex">
                                                    <div class="flex items-center text-sm text-gray-500">
                                                        <i class="fas fa-tag flex-shrink-0 mr-1.5 text-gray-400"></i>
                                                        <p>Used by 4 mechanics</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-5 flex-shrink-0">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Add Tag Form -->
                        <div class="mt-10 bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Add New Tag</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Create a new tag for mechanics.</p>
                            </div>
                            <div class="border-t border-gray-200">
                                <div class="px-4 py-5 sm:p-6">
                                    <form class="space-y-6">
                                        <div>
                                            <label for="tag-name" class="block text-sm font-medium text-gray-700">Tag Name</label>
                                            <div class="mt-1">
                                                <input type="text" name="tag-name" id="tag-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="e.g. Air Conditioning">
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <label for="tag-description" class="block text-sm font-medium text-gray-700">Description</label>
                                            <div class="mt-1">
                                                <textarea id="tag-description" name="tag-description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Describe this tag"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <label for="tag-color" class="block text-sm font-medium text-gray-700">Color</label>
                                            <div class="mt-1">
                                                <select id="tag-color" name="tag-color" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                                    <option value="blue">Blue</option>
                                                    <option value="green">Green</option>
                                                    <option value="red">Red</option>
                                                    <option value="yellow">Yellow</option>
                                                    <option value="purple">Purple</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Save Tag
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services section -->
                    <div id="services-section" class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 hidden">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-semibold text-gray-900">Services</h2>
                            <button class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add Service
                            </button>
                        </div>
                        
                        <!-- Services table -->
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Service
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Category
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Price
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Duration
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        <span class="sr-only">Edit</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10 flex items-center justify-center bg-indigo-100 rounded-md">
                                                                <i class="fas fa-oil-can text-indigo-600"></i>
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    Oil Change
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    Regular maintenance service
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Car Maintenance</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">$49.99</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        30 minutes
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10 flex items-center justify-center bg-green-100 rounded-md">
                                                                <i class="fas fa-car-battery text-green-600"></i>
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    Battery Replacement
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    Power system service
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Electrical Systems</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">$129.99</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        45 minutes
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10 flex items-center justify-center bg-yellow-100 rounded-md">
                                                                <i class="fas fa-cog text-yellow-600"></i>
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    Brake Service
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    Safety maintenance
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Brake Systems</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">$199.99</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        90 minutes
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Add Service Form -->
                        <div class="mt-10 bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Add New Service</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Create a new service offering.</p>
                            </div>
                            <div class="border-t border-gray-200">
                                <div class="px-4 py-5 sm:p-6">
                                    <form class="space-y-6">
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                            <div class="sm:col-span-3">
                                                <label for="service-name" class="block text-sm font-medium text-gray-700">Service Name</label>
                                                <div class="mt-1">
                                                    <input type="text" name="service-name" id="service-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="e.g. Tire Rotation">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="service-category" class="block text-sm font-medium text-gray-700">Category</label>
                                                <div class="mt-1">
                                                    <select id="service-category" name="service-category" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                        <option>Car Maintenance</option>
                                                        <option>Electrical Systems</option>
                                                        <option>Brake Systems</option>
                                                        <option>Engine Repair</option>
                                                        <option>Transmission</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="service-price" class="block text-sm font-medium text-gray-700">Price ($)</label>
                                                <div class="mt-1">
                                                    <input type="number" name="service-price" id="service-price" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="e.g. 79.99">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="service-duration" class="block text-sm font-medium text-gray-700">Duration (minutes)</label>
                                                <div class="mt-1">
                                                    <input type="number" name="service-duration" id="service-duration" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="e.g. 60">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-6">
                                                <label for="service-description" class="block text-sm font-medium text-gray-700">Description</label>
                                                <div class="mt-1">
                                                    <textarea id="service-description" name="service-description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Describe this service"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Save Service
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offers section -->
                    <div id="offers-section" class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 hidden">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-semibold text-gray-900">Offers</h2>
                            <button class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add Offer
                            </button>
                        </div>
                        
                        <!-- Offers grid -->
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Offer card 1 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg border border-yellow-200">
                                <div class="p-5">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-medium text-gray-900">Summer Special</h3>
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Active
                                        </span>
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Get 20% off on all air conditioning services</p>
                                    </div>
                                    <div class="mt-4">
                                        <div class="flex items-center justify-between text-sm">
                                            <div class="text-gray-500">Valid until:</div>
                                            <div class="font-medium">Aug 31, 2023</div>
                                        </div>
                                        <div class="flex items-center justify-between text-sm mt-1">
                                            <div class="text-gray-500">Discount:</div>
                                            <div class="font-medium">20%</div>
                                        </div>
                                        <div class="flex items-center justify-between text-sm mt-1">
                                            <div class="text-gray-500">Code:</div>
                                            <div class="font-medium">SUMMER20</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3 flex justify-end">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                </div>
                            </div>
                            
                            <!-- Offer card 2 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg border border-yellow-200">
                                <div class="p-5">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-medium text-gray-900">New Customer</h3>
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Active
                                        </span>
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">First-time customers get 15% off any service</p>
                                    </div>
                                    <div class="mt-4">
                                        <div class="flex items-center justify-between text-sm">
                                            <div class="text-gray-500">Valid until:</div>
                                            <div class="font-medium">Dec 31, 2023</div>
                                        </div>
                                        <div class="flex items-center justify-between text-sm mt-1">
                                            <div class="text-gray-500">Discount:</div>
                                            <div class="font-medium">15%</div>
                                        </div>
                                        <div class="flex items-center justify-between text-sm mt-1">
                                            <div class="text-gray-500">Code:</div>
                                            <div class="font-medium">WELCOME15</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3 flex justify-end">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                </div>
                            </div>
                            
                            <!-- Offer card 3 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg border border-gray-200">
                                <div class="p-5">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-medium text-gray-900">Winter Maintenance</h3>
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                            Upcoming
                                        </span>
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">25% off on winter preparation services</p>
                                    </div>
                                    <div class="mt-4">
                                        <div class="flex items-center justify-between text-sm">
                                            <div class="text-gray-500">Valid from:</div>
                                            <div class="font-medium">Nov 1, 2023</div>
                                        </div>
                                        <div class="flex items-center justify-between text-sm mt-1">
                                            <div class="text-gray-500">Discount:</div>
                                            <div class="font-medium">25%</div>
                                        </div>
                                        <div class="flex items-center justify-between text-sm mt-1">
                                            <div class="text-gray-500">Code:</div>
                                            <div class="font-medium">WINTER25</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3 flex justify-end">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Add Offer Form -->
                        <div class="mt-10 bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Add New Offer</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Create a new promotional offer.</p>
                            </div>
                            <div class="border-t border-gray-200">
                                <div class="px-4 py-5 sm:p-6">
                                    <form class="space-y-6">
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                            <div class="sm:col-span-3">
                                                <label for="offer-name" class="block text-sm font-medium text-gray-700">Offer Name</label>
                                                <div class="mt-1">
                                                    <input type="text" name="offer-name" id="offer-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="e.g. Spring Special">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="offer-code" class="block text-sm font-medium text-gray-700">Promo Code</label>
                                                <div class="mt-1">
                                                    <input type="text" name="offer-code" id="offer-code" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="e.g. SPRING25">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="offer-discount" class="block text-sm font-medium text-gray-700">Discount (%)</label>
                                                <div class="mt-1">
                                                    <input type="number" name="offer-discount" id="offer-discount" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="e.g. 25">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="offer-type" class="block text-sm font-medium text-gray-700">Discount Type</label>
                                                <div class="mt-1">
                                                    <select id="offer-type" name="offer-type" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                        <option>Percentage</option>
                                                        <option>Fixed Amount</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="offer-start" class="block text-sm font-medium text-gray-700">Start Date</label>
                                                <div class="mt-1">
                                                    <input type="date" name="offer-start" id="offer-start" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="offer-end" class="block text-sm font-medium text-gray-700">End Date</label>
                                                <div class="mt-1">
                                                    <input type="date" name="offer-end" id="offer-end" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-6">
                                                <label for="offer-description" class="block text-sm font-medium text-gray-700">Description</label>
                                                <div class="mt-1">
                                                    <textarea id="offer-description" name="offer-description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Describe this offer"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-6">
                                                <label for="offer-services" class="block text-sm font-medium text-gray-700">Applicable Services</label>
                                                <div class="mt-1">
                                                    <select id="offer-services" name="offer-services" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" multiple>
                                                        <option>All Services</option>
                                                        <option>Oil Change</option>
                                                        <option>Battery Replacement</option>
                                                        <option>Brake Service</option>
                                                        <option>Tire Rotation</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Save Offer
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payments section -->
                    <div id="payments-section" class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 hidden">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-semibold text-gray-900">Payments</h2>
                            <div>
                                <button class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2">
                                    Export
                                </button>
                                <button class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Record Payment
                                </button>
                            </div>
                        </div>
                        
                        <!-- Payment stats -->
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                                            <i class="fas fa-dollar-sign text-white text-xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Total Revenue</dt>
                                                <dd class="flex items-baseline">
                                                    <div class="text-2xl font-semibold text-gray-900">$12,456.78</div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                                            <i class="fas fa-receipt text-white text-xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Transactions</dt>
                                                <dd class="flex items-baseline">
                                                    <div class="text-2xl font-semibold text-gray-900">156</div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-red-500 rounded-md p-3">
                                            <i class="fas fa-exclamation-circle text-white text-xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Pending Payments</dt>
                                                <dd class="flex items-baseline">
                                                    <div class="text-2xl font-semibold text-gray-900">8</div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Payments table -->
                        <div class="mt-8 flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Transaction ID
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Customer
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Service
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Amount
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Date
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Status
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        <span class="sr-only">Actions</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        TRX-2023-001
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    John Smith
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    john.smith@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        Oil Change
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        $49.99
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        July 12, 2023
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Paid
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        TRX-2023-002
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    Maria Rodriguez
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    maria.rodriguez@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        Battery Replacement
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        $129.99
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        July 15, 2023
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Paid
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        TRX-2023-003
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    David Johnson
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    david.johnson@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        Brake Service
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        $199.99
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        July 18, 2023
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                            Pending
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Record Payment Form -->
                        <div class="mt-10 bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Record New Payment</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Enter payment details below.</p>
                            </div>
                            <div class="border-t border-gray-200">
                                <div class="px-4 py-5 sm:p-6">
                                    <form class="space-y-6">
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                            <div class="sm:col-span-3">
                                                <label for="payment-customer" class="block text-sm font-medium text-gray-700">Customer</label>
                                                <div class="mt-1">
                                                    <select id="payment-customer" name="payment-customer" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                        <option>Select Customer</option>
                                                        <option>John Smith</option>
                                                        <option>Maria Rodriguez</option>
                                                        <option>David Johnson</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="payment-service" class="block text-sm font-medium text-gray-700">Service</label>
                                                <div class="mt-1">
                                                    <select id="payment-service" name="payment-service" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                        <option>Select Service</option>
                                                        <option>Oil Change</option>
                                                        <option>Battery Replacement</option>
                                                        <option>Brake Service</option>
                                                        <option>Tire Rotation</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="payment-amount" class="block text-sm font-medium text-gray-700">Amount ($)</label>
                                                <div class="mt-1">
                                                    <input type="number" name="payment-amount" id="payment-amount" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="e.g. 99.99">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="payment-method" class="block text-sm font-medium text-gray-700">Payment Method</label>
                                                <div class="mt-1">
                                                    <select id="payment-method" name="payment-method" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                        <option>Credit Card</option>
                                                        <option>Debit Card</option>
                                                        <option>Cash</option>
                                                        <option>Bank Transfer</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="payment-date" class="block text-sm font-medium text-gray-700">Payment Date</label>
                                                <div class="mt-1">
                                                    <input type="date" name="payment-date" id="payment-date" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="payment-status" class="block text-sm font-medium text-gray-700">Status</label>
                                                <div class="mt-1">
                                                    <select id="payment-status" name="payment-status" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                        <option>Paid</option>
                                                        <option>Pending</option>
                                                        <option>Failed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-6">
                                                <label for="payment-notes" class="block text-sm font-medium text-gray-700">Notes</label>
                                                <div class="mt-1">
                                                    <textarea id="payment-notes" name="payment-notes" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Add any additional notes"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Record Payment
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Users section -->
                    <div id="users-section" class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 hidden">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-semibold text-gray-900">Users</h2>
                            <button class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add User
                            </button>
                        </div>
                        
                        <!-- Users table -->
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Name
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Role
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Status
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Last Login
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        <span class="sr-only">Edit</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    Admin User
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    admin@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Administrator</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        2 hours ago
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    John Smith
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    john.smith@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Customer</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        1 day ago
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    Maria Rodriguez
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    maria.rodriguez@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Customer</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        3 days ago
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    David Johnson
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    david.johnson@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Customer</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                            Inactive
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        2 weeks ago
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Add User Form -->
                        <div class="mt-10 bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Add New User</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Create a new user account.</p>
                            </div>
                            <div class="border-t border-gray-200">
                                <div class="px-4 py-5 sm:p-6">
                                    <form class="space-y-6">
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                            <div class="sm:col-span-3">
                                                <label for="user-first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                                <div class="mt-1">
                                                    <input type="text" name="user-first-name" id="user-first-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="user-last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                                <div class="mt-1">
                                                    <input type="text" name="user-last-name" id="user-last-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-4">
                                                <label for="user-email" class="block text-sm font-medium text-gray-700">Email address</label>
                                                <div class="mt-1">
                                                    <input id="user-email" name="user-email" type="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="user-role" class="block text-sm font-medium text-gray-700">Role</label>
                                                <div class="mt-1">
                                                    <select id="user-role" name="user-role" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                        <option>Customer</option>
                                                        <option>Mechanic</option>
                                                        <option>Manager</option>
                                                        <option>Administrator</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="user-status" class="block text-sm font-medium text-gray-700">Status</label>
                                                <div class="mt-1">
                                                    <select id="user-status" name="user-status" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="user-password" class="block text-sm font-medium text-gray-700">Password</label>
                                                <div class="mt-1">
                                                    <input type="password" name="user-password" id="user-password" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-3">
                                                <label for="user-confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                                                <div class="mt-1">
                                                    <input type="password" name="user-confirm-password" id="user-confirm-password" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                            
                                            <div class="sm:col-span-6">
                                                <label for="user-photo" class="block text-sm font-medium text-gray-700">Photo</label>
                                                <div class="mt-1 flex items-center">
                                                    <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                        <i class="fas fa-user text-gray-400 text-2xl flex items-center justify-center h-full"></i>
                                                    </span>
                                                    <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        Change
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Create User
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Settings section -->
                    <div id="settings-section" class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 hidden">
                        <h2 class="text-2xl font-semibold text-gray-900 mb-6">Settings</h2>
                        
                        <!-- Settings tabs -->
                        <div class="border-b border-gray-200">
                            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                                <a href="#" class="border-indigo-500 text-indigo-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    General
                                </a>
                                <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Security
                                </a>
                                <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Notifications
                                </a>
                                <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Billing
                                </a>
                            </nav>
                        </div>
                        
                        <!-- General Settings -->
                        <div class="mt-10 divide-y divide-gray-200">
                            <div class="space-y-1">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Company Information</h3>
                                <p class="max-w-2xl text-sm text-gray-500">Update your company details and contact information.</p>
                            </div>
                            <div class="mt-6">
                                <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                                    <div class="md:grid md:grid-cols-3 md:gap-6">
                                        <div class="md:col-span-1">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                                            <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly.</p>
                                        </div>
                                        <div class="mt-5 md:mt-0 md:col-span-2">
                                            <form action="#" method="POST">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6 sm:col-span-4">
                                                        <label for="company-name" class="block text-sm font-medium text-gray-700">Company name</label>
                                                        <input type="text" name="company-name" id="company-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="Mechanics Management">
                                                    </div>
                                                    
                                                    <div class="col-span-6 sm:col-span-4">
                                                        <label for="company-website" class="block text-sm font-medium text-gray-700">Website</label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                http://
                                                            </span>
                                                            <input type="text" name="company-website" id="company-website" class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300" value="example.com">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="company-country" class="block text-sm font-medium text-gray-700">Country</label>
                                                        <select id="company-country" name="company-country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option>United States</option>
                                                            <option>Canada</option>
                                                            <option>Mexico</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-span-6">
                                                        <label for="company-address" class="block text-sm font-medium text-gray-700">Street address</label>
                                                        <input type="text" name="company-address" id="company-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="123 Main St">
                                                    </div>
                                                    
                                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                        <label for="company-city" class="block text-sm font-medium text-gray-700">City</label>
                                                        <input type="text" name="company-city" id="company-city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="San Francisco">
                                                    </div>
                                                    
                                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                        <label for="company-state" class="block text-sm font-medium text-gray-700">State / Province</label>
                                                        <input type="text" name="company-state" id="company-state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="CA">
                                                    </div>
                                                    
                                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                        <label for="company-zip" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                                                        <input type="text" name="company-zip" id="company-zip" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="94107">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        Save
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-10 pt-10">
                                <div class="space-y-1">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">System Settings</h3>
                                    <p class="max-w-2xl text-sm text-gray-500">Configure system preferences and defaults.</p>
                                </div>
                                <div class="mt-6">
                                    <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                                        <div class="md:grid md:grid-cols-3 md:gap-6">
                                            <div class="md:col-span-1">
                                                <h3 class="text-lg font-medium leading-6 text-gray-900">Preferences</h3>
                                                <p class="mt-1 text-sm text-gray-500">Decide which communications you'd like to receive and how.</p>
                                            </div>
                                            <div class="mt-5 md:mt-0 md:col-span-2">
                                                <form class="space-y-6" action="#" method="POST">
                                                    <fieldset>
                                                        <legend class="text-base font-medium text-gray-900">Default Currency</legend>
                                                        <div class="mt-4 space-y-4">
                                                            <div class="flex items-center">
                                                                <input id="currency-usd" name="currency" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" checked>
                                                                <label for="currency-usd" class="ml-3 block text-sm font-medium text-gray-700">
                                                                    USD ($)
                                                                </label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="currency-eur" name="currency" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                                <label for="currency-eur" class="ml-3 block text-sm font-medium text-gray-700">
                                                                    EUR (€)
                                                                </label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="currency-gbp" name="currency" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                                <label for="currency-gbp" class="ml-3 block text-sm font-medium text-gray-700">
                                                                    GBP (£)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <legend class="text-base font-medium text-gray-900">Date Format</legend>
                                                        <div class="mt-4 space-y-4">
                                                            <div class="flex items-center">
                                                                <input id="date-mdy" name="date-format" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" checked>
                                                                <label for="date-mdy" class="ml-3 block text-sm font-medium text-gray-700">
                                                                    MM/DD/YYYY
                                                                </label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="date-dmy" name="date-format" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                                <label for="date-dmy" class="ml-3 block text-sm font-medium text-gray-700">
                                                                    DD/MM/YYYY
                                                                </label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="date-ymd" name="date-format" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                                <label for="date-ymd" class="ml-3 block text-sm font-medium text-gray-700">
                                                                    YYYY-MM-DD
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div>
                                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                            Save
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const openSidebar = document.getElementById('open-sidebar');
            const closeSidebar = document.getElementById('close-sidebar');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileBackdrop = document.getElementById('mobile-backdrop');
            
            if (openSidebar) {
                openSidebar.addEventListener('click', function() {
                    mobileMenu.style.display = 'flex';
                });
            }
            
            if (closeSidebar) {
                closeSidebar.addEventListener('click', function() {
                    mobileMenu.style.display = 'none';
                });
            }
            
            if (mobileBackdrop) {
                mobileBackdrop.addEventListener('click', function() {
                    mobileMenu.style.display = 'none';
                });
            }
            
            // Section navigation
            const navLinks = document.querySelectorAll('nav a');
            const pageTitle = document.getElementById('page-title');
            const sections = {
                'dashboard': document.getElementById('dashboard-section'),
                'mechanics': document.getElementById('mechanics-section'),
                'categories': document.getElementById('categories-section'),
                'tags': document.getElementById('tags-section'),
                'services': document.getElementById('services-section'),
                'offers': document.getElementById('offers-section'),
                'payments': document.getElementById('payments-section'),
                'users': document.getElementById('users-section'),
                'settings': document.getElementById('settings-section')
            };
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Get the section ID from the href
                    const sectionId = this.getAttribute('href').substring(1);
                    
                    // Update active link
                    navLinks.forEach(navLink => {
                        navLink.classList.remove('bg-gray-700', 'text-white');
                        navLink.classList.add('text-gray-300', 'hover:bg-gray-700', 'hover:text-white');
                    });
                    this.classList.add('bg-gray-700', 'text-white');
                    this.classList.remove('text-gray-300', 'hover:bg-gray-700', 'hover:text-white');
                    
                    // Update page title
                    if (pageTitle) {
                        pageTitle.textContent = sectionId.charAt(0).toUpperCase() + sectionId.slice(1);
                    }
                    
                    // Hide all sections
                    Object.values(sections).forEach(section => {
                        if (section) section.classList.add('hidden');
                    });
                    
                    // Show the selected section
                    if (sections[sectionId]) {
                        sections[sectionId].classList.remove('hidden');
                    }
                    
                    // Close mobile menu if open
                    if (mobileMenu) {
                        mobileMenu.style.display = 'none';
                    }
                });
            });
            
            // Show dashboard by default
            if (sections['dashboard']) {
                sections['dashboard'].classList.remove('hidden');
            }
        });
    </script>
</body>
</html>