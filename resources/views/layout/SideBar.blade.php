<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <title>Document</title>
</head>
<body>
    <div class="hidden h-screen md:flex md:flex-shrink-0">
        <div class="flex flex-col w-64 bg-gray-800">
          <!-- Brand Header -->
          <div class="flex items-center justify-center h-16 bg-gray-900">
            <span class="text-white font-bold text-lg">Mechanics Admin</span>
          </div>
      
          <!-- Sidebar Navigation -->
          <div class="flex flex-col flex-grow overflow-y-auto">
            <nav class="flex-1 px-2 py-4 space-y-1">
      
              <!-- Dashboard -->
              <a href="#dashboard" class="flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-700 rounded-md">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
              </a>
      
              <!-- Dropdown Item Template -->
              <!-- Repeat this block for each dropdown menu item -->
      
              <!-- Brand Dropdown -->
              <div class="dropdown">
                <button class="dropdown-toggle flex items-center justify-between w-full px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" data-toggle="brand">
                  <div class="flex items-center">
                    <i class="fas fa-copyright mr-3"></i>
                    Brand
                  </div>
                  <i class="fas fa-chevron-down ml-2 transition-transform"></i>
                </button>
                <div class="dropdown-menu hidden px-2 py-1 mt-1 space-y-1 text-sm" data-menu="brand">
                  <a href="#new-brand" class="flex items-center pl-9 pr-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <i class="fas fa-plus-circle mr-3"></i>
                    New Brand
                  </a>
                  <a href="#brands" class="flex items-center pl-9 pr-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <i class="fas fa-list mr-3"></i>
                    Brands
                  </a>
                </div>
              </div>
      
              <!-- Mechanics Dropdown -->
              <div class="dropdown">
                <button class="dropdown-toggle flex items-center justify-between w-full px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" data-toggle="mechanics">
                  <div class="flex items-center">
                    <i class="fas fa-wrench mr-3"></i>
                    Mechanics
                  </div>
                  <i class="fas fa-chevron-down ml-2 transition-transform"></i>
                </button>
                <div class="dropdown-menu hidden px-2 py-1 mt-1 space-y-1 text-sm" data-menu="mechanics">
                  <a href="#mechanics-list" class="flex items-center pl-9 pr-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <i class="fas fa-list mr-3"></i>
                    All Mechanics
                  </a>
                  <a href="#mechanic-add" class="flex items-center pl-9 pr-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <i class="fas fa-plus mr-3"></i>
                    Add Mechanic
                  </a>
                </div>
              </div>
      
              <!-- Categories Dropdown -->
              <div class="dropdown">
                <button class="dropdown-toggle flex items-center justify-between w-full px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" data-toggle="categories">
                  <div class="flex items-center">
                    <i class="fas fa-tags mr-3"></i>
                    Categories
                  </div>
                  <i class="fas fa-chevron-down ml-2 transition-transform"></i>
                </button>
                <div class="dropdown-menu hidden px-2 py-1 mt-1 space-y-1 text-sm" data-menu="categories">
                  <a href="/admin/categorie" class="flex items-center pl-9 pr-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <i class="fas fa-list mr-3"></i>
                    All Categories
                  </a>
                  <a href="/categories/ajouter" class="flex items-center pl-9 pr-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <i class="fas fa-plus mr-3"></i>
                    Add Category
                  </a>
                </div>
              </div>
      
              <!-- Tags Dropdown -->
              <div class="dropdown">
                <button class="dropdown-toggle flex items-center justify-between w-full px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" data-toggle="tags">
                  <div class="flex items-center">
                    <i class="fas fa-tag mr-3"></i>
                    Tags
                  </div>
                  <i class="fas fa-chevron-down ml-2 transition-transform"></i>
                </button>
                <div class="dropdown-menu hidden px-2 py-1 mt-1 space-y-1 text-sm" data-menu="tags">
                  <a href="#tag-list" class="flex items-center pl-9 pr-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <i class="fas fa-list mr-3"></i>
                    All Tags
                  </a>
                  <a href="#tag-add" class="flex items-center pl-9 pr-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <i class="fas fa-plus mr-3"></i>
                    Add Tag
                  </a>
                </div>
              </div>
      
              <!-- Services Dropdown -->
              <div class="dropdown">
                <button class="dropdown-toggle flex items-center justify-between w-full px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" data-toggle="services">
                  <div class="flex items-center">
                    <i class="fas fa-cogs mr-3"></i>
                    Services
                  </div>
                  <i class="fas fa-chevron-down ml-2 transition-transform"></i>
                </button>
                <div class="dropdown-menu hidden px-2 py-1 mt-1 space-y-1 text-sm" data-menu="services">
                  <a href="#service-list" class="flex items-center pl-9 pr-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <i class="fas fa-list mr-3"></i>
                    All Services
                  </a>
                  <a href="#service-add" class="flex items-center pl-9 pr-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <i class="fas fa-plus mr-3"></i>
                    Add Service
                  </a>
                </div>
              </div>
      
              <!-- Offers -->
              <a href="#offers" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                <i class="fas fa-percentage mr-3"></i>
                Offers
              </a>
      
              <!-- Payments -->
              <a href="#payments" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                <i class="fas fa-credit-card mr-3"></i>
                Payments
              </a>
      
              <!-- Users -->
              <a href="#users" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                <i class="fas fa-users mr-3"></i>
                Users
              </a>
      
              <!-- Settings -->
              <a href="#settings" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                <i class="fas fa-cog mr-3"></i>
                Settings
              </a>
            </nav>
          </div>
      
          <!-- Footer / Admin -->
          <div class="flex-shrink-0 flex border-t border-gray-700 p-4">
            <div class="flex items-center">
              <img class="h-8 w-8 rounded-full" src="/placeholder.svg?height=32&width=32" alt="Admin">
              <div class="ml-3">
                <p class="text-sm font-medium text-white">Admin User</p>
                <a href="#" class="text-xs font-medium text-gray-300 hover:text-gray-200">Logout</a>
              </div>
            </div>
          </div>
        </div>
        <div class="space-y-6 flex-grow">
            <div class="bg-white w-full p-6 rounded-xl shadow-sm">        
                @yield('content')
            </div>
        </div>
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const toggles = document.querySelectorAll('.dropdown-toggle');
      
          toggles.forEach(toggle => {
            toggle.addEventListener('click', function () {
              const key = this.getAttribute('data-toggle');
              const menu = document.querySelector(`[data-menu="${key}"]`);
              const icon = this.querySelector('i.fas.fa-chevron-down');
      
              // Toggle visibility
              menu.classList.toggle('hidden');
              icon.classList.toggle('rotate-180');
            });
          });
      
          // Optional: close dropdowns when clicking outside
          document.addEventListener('click', function (e) {
            toggles.forEach(toggle => {
              const key = toggle.getAttribute('data-toggle');
              const menu = document.querySelector(`[data-menu="${key}"]`);
              const icon = toggle.querySelector('i.fas.fa-chevron-down');
              if (!toggle.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add('hidden');
                icon.classList.remove('rotate-180');
              }
            });
          });
        });
      </script>
      
    
      
</body>
</html>