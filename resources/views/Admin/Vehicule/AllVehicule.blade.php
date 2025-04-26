@extends('layout.App')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <section>
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8 h-[122px]">
                <a href="client/ClientOffre" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Offres</a>
                <a href="/client/Allvehicules" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Mes Véhicules</a>
                <a href="/AjouterVehicule" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Ajouter Véhicules </a>
                <a href="/client/ServiceDetails" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm"> Services </a>
            </div>
        </section>

        <h1 class="text-3xl font-bold text-gray-900 mb-8">Liste des Véhicules</h1>

        @foreach ($vehicules as $vehicle)
        <!-- Vehicle Details -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
            <div class="px-4 py-5 sm:px-6 flex justify-between">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $vehicle->model }} {{ $vehicle->model }}</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $vehicle->year }} • {{ $vehicle->annee_fabrication }}</p>
                </div>
                <div class="flex space-x-3">
                    <button 
                        onclick="openEditModal('{{ $vehicle->id }}', '{{ $vehicle->model }}', '{{ $vehicle->year }}', '{{ $vehicle->annee_fabrication }}')" 
                        class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                        Modifier
                    </button>
                    <button 
                        onclick="confirmDelete('{{ $vehicle->id }}', '{{ $vehicle->model }} {{ $vehicle->model }}')" 
                        class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-red-700 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                    >
                        <svg class="-ml-1 mr-2 h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        Supprimer
                    </button>
                </div>
            </div>

            <!-- Vehicle Image -->
            @if($vehicle->image)
            <div class="border-t border-gray-200">
                <div class="px-4 py-5 sm:px-6">
                    <img src="{{ asset('storage/' . $vehicle->image) }}" alt="{{ $vehicle->model }} {{ $vehicle->model }}" class="h-64 w-full object-cover rounded-md">
                </div>
            </div>
            @endif

            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Modèle</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->model }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Année</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->year }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Plaque d'immatriculation</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->annee_fabrication }}</dd>
                    </div>

                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Date d'ajout</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->created_at->format('d/m/Y à H:i') }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Dernière mise à jour</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->updated_at->format('d/m/Y à H:i') }}</dd>
                    </div>
                </dl>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Supprimer le véhicule
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500" id="delete-message">
                                Êtes-vous sûr de vouloir supprimer ce véhicule? Cette action est irréversible.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <form id="deleteForm" method="POST" action="/client/deletevehicules">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="vehicle_id" id="delete_vehicle_id" value="">
                    <input type="hidden" name="action" value="delete">
                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Supprimer
                    </button>
                </form>
                <button type="button" onclick="closeModal('deleteModal')" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div id="editModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828l-11.414 11.414h-3v-3l11.414-11.414z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Modifier le véhicule
                        </h3>
                        <div class="mt-2">
                            <form id="editForm" method="POST" action="/vehicule" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="vehicle_id" id="edit_vehicle_id" value="">
                                <input type="hidden" name="action" value="edit">
                                <div class="mb-4">
                                    <label for="model" class="block text-sm font-medium text-gray-700">Modèle</label>
                                    <input type="text" name="model" id="edit_model" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label for="year" class="block text-sm font-medium text-gray-700">Année</label>
                                    <input type="text" name="year" id="edit_year" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label for="annee_fabrication" class="block text-sm font-medium text-gray-700">Plaque d'immatriculation</label>
                                    <input type="text" name="annee_fabrication" id="edit_annee_fabrication" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label for="image" class="block text-sm font-medium text-gray-700">Image du véhicule (optionnel)</label>
                                    <input type="file" name="image" id="edit_image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                        Enregistrer
                                    </button>
                                    <button type="button" onclick="closeModal('editModal')" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                        Annuler
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

<script>
    function confirmDelete(id, vehicleName) {
        document.getElementById('delete-message').textContent = `Êtes-vous sûr de vouloir supprimer le véhicule "${vehicleName}"? Cette action est irréversible.`;
        document.getElementById('delete_vehicle_id').value = id;
        document.getElementById('deleteForm').action = '/client/deletevehicules'; // Single endpoint
        document.getElementById('deleteModal').classList.remove('hidden');
    }

    function openEditModal(id, model, year, plateNumber) {
        document.getElementById('edit_vehicle_id').value = id;
        document.getElementById('edit_model').value = model;
        document.getElementById('edit_year').value = year;
        document.getElementById('edit_annee_fabrication').value = plateNumber;
        document.getElementById('editModal').classList.remove('hidden');
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
    }

    // Close modals when clicking outside
    window.onclick = function(event) {
        const deleteModal = document.getElementById('deleteModal');
        const editModal = document.getElementById('editModal');
        
        if (event.target == deleteModal) {
            closeModal('deleteModal');
        }
        
        if (event.target == editModal) {
            closeModal('editModal');
        }
    }
</script>

@endsection