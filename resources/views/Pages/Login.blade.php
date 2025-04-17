
@extends('layout.App')

@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion - FoodLovers</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#FF6B6B',
            secondary: '#4ECDC4',
            accent: '#FFE66D',
            dark: '#292F36',
            light: '#F7F9F9'
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            display: ['Playfair Display', 'serif']
          }
        }
      }
    }
  </script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap');
  </style>
</head>
<body class="font-sans bg-light text-dark">
  

  <!-- Login Section -->
  <section class="pt-24 pb-12 md:pt-32 md:pb-16 min-h-screen flex items-center">
    <div class="container mx-auto px-4">
      <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
        <div class="md:flex">
          <div class="md:shrink-0 hidden md:block">
            <div class="h-full w-48 relative">
              <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba" alt="Cuisine délicieuse" class="h-full w-full object-cover">
            </div>
          </div>
          <div class="p-8 w-full">
            <div class="text-center mb-8">
              <h1 class="text-3xl font-display font-bold text-dark mb-2">Connexion</h1>
              <p class="text-gray-600">Heureux de vous revoir sur FoodLovers</p>
            </div>

            <form id="login-form" class="space-y-6" method='post' action="/logins">
                @csrf
              <div>
                <label for="email" class="block text-gray-700 font-medium mb-2">
                  Email
                </label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-envelope text-gray-400"></i>
                  </div>
                  <input
                    id="email"
                    type="email"
                    name="email"
                    class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                    placeholder="votre@email.com"
                  >
                </div>
                <p id="email-error" class="mt-1 text-sm text-red-500 hidden"></p>
              </div>

              <div>
                <div class="flex items-center justify-between mb-2">
                  <label for="password" class="block text-gray-700 font-medium">
                    Mot de passe
                  </label>
                  <a href="#" class="text-sm text-primary hover:text-primary/80">
                    Mot de passe oublié?
                  </a>
                </div>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-lock text-gray-400"></i>
                  </div>
                  <input
                    id="password"
                    type="password"
                    name="password"
                    class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                    placeholder="••••••••"
                  >
                  <button
                    type="button"
                    id="toggle-password"
                    class="absolute inset-y-0 right-0 pr-3 flex items-center"
                  >
                    <i class="fas fa-eye text-gray-400"></i>
                  </button>
                </div>
                <p id="password-error" class="mt-1 text-sm text-red-500 hidden"></p>
              </div>

              <div class="flex items-center">
                <input
                  id="remember-me"
                  name="remember-me"
                  type="checkbox"
                  class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded"
                >
                <label for="remember-me" class="ml-2 block text-sm text-gray-700">
                  Se souvenir de moi
                </label>
              </div>

              <div>
                <button
                  type="submit"
                  class="w-full bg-primary text-white py-3 px-4 rounded-lg hover:bg-primary/90 transition-colors font-medium"
                >
                  Se connecter
                </button>
              </div>
            </form>

            <div class="mt-6 text-center">
              <p class="text-sm text-gray-600">
                Pas encore de compte?
                <a href="/register" class="font-medium text-primary hover:text-primary/80">
                  S'inscrire
                </a>
              </p>
            </div>
<!--
            <div class="mt-8">
              <div class="relative">
                <div class="absolute inset-0 flex items-center">
                  <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                  <span class="px-2 bg-white text-gray-500">Ou continuer avec</span>
                </div>
              </div>

              <div class="mt-6 grid grid-cols-2 gap-3">
                <button
                  type="button"
                  class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"
                >
                  <i class="fab fa-google mr-2"></i> Google
                </button>
                <button
                  type="button"
                  class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"
                >
                  <i class="fab fa-facebook-f mr-2"></i> Facebook
                </button>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- JavaScript -->
  <script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');

      // Change icon based on menu state
      if (mobileMenu.classList.contains('hidden')) {
        this.innerHTML = '<i class="fas fa-bars text-xl"></i>';
      } else {
        this.innerHTML = '<i class="fas fa-times text-xl"></i>';
      }
    });

    // Toggle password visibility
    const togglePassword = document.getElementById('toggle-password');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', () => {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);

      // Change icon based on password visibility
      if (type === 'password') {
        togglePassword.innerHTML = '<i class="fas fa-eye text-gray-400"></i>';
      } else {
        togglePassword.innerHTML = '<i class="fas fa-eye-slash text-gray-400"></i>';
      }
    });




    function validateEmail(email) {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email);
    }

    // Set current year in footer
    document.getElementById('current-year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
@endsection
