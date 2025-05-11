@extends('layout.App')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Navigation -->
        <section>
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8 h-[122px]">
                <a href="client/ClientOffre" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Offres</a>
                <a href="/client/Allvehicules" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Mes Véhicules</a>
                <a href="/AjouterVehicule" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Ajouter Véhicules </a>
                <a href="/client/ServiceDetails" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm"> Services </a>
            </div>
        </section>
        
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Ajouter un Nouveau Véhicule</h1>
            <p class="mt-2 text-lg text-gray-600">Entrez les détails de votre véhicule ci-dessous</p>
        </div>

        <!-- Vehicle Creation Form -->
        <div class="bg-white shadow-lg sm:rounded-xl border border-gray-200">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-lg font-semibold text-gray-900">Formulaire de Véhicule</h2>
                <p class="mt-1 text-sm text-gray-500">Tous les champs marqués * sont obligatoires</p>
            </div>

            <div class="border-t border-gray-100 p-6">
                <form action="/client/vehicule" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 gap-y-6 gap-x-6 sm:grid-cols-2">
                        <!-- Make -->
                        <div>
                            <label for="make" class="block text-sm font-medium text-gray-700">Marque *</label>
                            <input type="text" name="name" id="make" required maxlength="255"
                                   class="mt-1 block w-full shadow-sm border border-gray-300 rounded-md transition duration-150 ease-in-out focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 hover:border-gray-400 sm:text-sm">
                            @error('name')
                                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Model -->
                        <div>
                            <label for="model" class="block text-sm font-medium text-gray-700">Modèle *</label>
                            <input type="text" name="model" id="model" required maxlength="255"
                                   class="mt-1 block w-full shadow-sm border border-gray-300 rounded-md transition duration-150 ease-in-out focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 hover:border-gray-400 sm:text-sm">
                            @error('model')
                                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Year of Manufacture -->
                        <div>
                            <label for="annee_fabrication" class="block text-sm font-medium text-gray-700">Année de Fabrication *</label>
                            <input type="date" name="annee_fabrication" id="annee_fabrication" required maxlength="255"
                                   class="mt-1 block w-full shadow-sm border border-gray-300 rounded-md transition duration-150 ease-in-out focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 hover:border-gray-400 sm:text-sm">
                            @error('annee_fabrication')
                                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- VIN -->
                        <div>
                            <label for="year" class="block text-sm font-medium text-gray-700">Numéro d'Identification (VIN) *</label>
                            <input type="text" name="year" id="year" required maxlength="255"
                                   class="mt-1 block w-full shadow-sm border border-gray-300 rounded-md transition duration-150 ease-in-out focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 hover:border-gray-400 sm:text-sm">
                            @error('year')
                                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Vehicle Image -->
                    <div class="mt-6">
                        <label for="image" class="block text-sm font-medium text-gray-700">Photo du Véhicule *</label>
                        <input type="file" name="image" id="image" required accept="image/*" maxlength="255"
                               class="mt-1 block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        @error('image')
                            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Buttons -->
                    <div class="mt-8 flex justify-end">
                        <a href="/" class="mr-4 inline-flex items-center px-4 py-2 text-sm font-medium rounded-md text-gray-600 bg-gray-100 hover:bg-gray-200 border border-gray-300">
                            Annuler
                        </a>
                        <button type="submit"
                                class="inline-flex items-center px-6 py-2 text-sm font-semibold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 shadow-md">
                            Enregistrer le Véhicule
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

            
