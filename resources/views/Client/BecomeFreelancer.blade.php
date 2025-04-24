@extends('layout.App')
@section('content')

<section class="bg-gray-100 flex items-center justify-center h-[500px]">

  <div class="bg-white shadow-lg rounded-2xl max-w-3xl w-full p-8 flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-8">
    
    <!-- Image -->
    <div class="flex-shrink-0">
      <img src="https://www.ecoledespros.fr/wp-content/uploads/sites/5/2022/03/Preparer-votre-diplome-en-mecanique-automobile.jpg" 
           alt="Mechanicien" 
           class="w-64 h-64 object-cover rounded-xl shadow-md">
    </div>

    <!-- Text + Button -->
    <div class="flex-1 text-center md:text-left">
      <h1 class="text-3xl font-bold text-gray-800 mb-4">Promote to Mécanicien</h1>
      <p class="text-gray-600 mb-6">
        This user is currently a client. Click below to promote them to a <span class="font-semibold text-blue-600">mécanicien</span>.
      </p>

      <form action="/tomechanicien" method="POST">  
@csrf
@method('POST')

        <input type="submit"  value=" 🔧 Promote Now"
                class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300 hover:bg-blue-700 hover:scale-105">
         
      </form>
    </div>

  </div>
  </section>
  @endsection

