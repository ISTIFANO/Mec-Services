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
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Manage Your Offers</h1>
            <p class="mt-2 text-lg text-gray-600">Create, edit, delete, and view details of your offers</p>
        </div>

    

        <!-- Offers Section -->
        <div class="bg-white shadow sm:rounded-lg mb-6">
            <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-medium text-gray-900">Your Offers</h2>
                    <p class="mt-1 text-sm text-gray-500">Manage your offers below</p>
                </div>
           
                <button id="openAddOfferModal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-md">
                    <svg class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Create New Offer
                </button>
            </div>

            <div class="border-t border-gray-200">
                @if(count($offers) > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
                    @foreach($offers as $offer)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ url('storage/' . $offer->image) }}" alt="{{ $offer->titre }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $offer->titre }}</h3>
                            <p class="text-sm text-gray-500 line-clamp-2">{{ $offer->description }}</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-indigo-600 font-medium">{{ $offer->budjet }} €</span>
                                <span class="text-sm text-gray-500">{{ $offer->duree_disponibilite }}</span>
                            </div>
                            <div class="mt-2 flex flex-wrap gap-1">
                                <span class="px-2 py-1 text-xs rounded-full bg-indigo-100 text-indigo-800">{{ $offer->categorie->nom }}</span>
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">{{ $offer->vehicule->name }}</span>
                            </div>
                            <div class="mt-3 flex justify-between">
                                <form action="/client/Detailes" method="POST">

@csrf
                                    @method('POST')
                                    <input type="hidden" value="{{ $offer->id }}" name="id">
                                    <input type="hidden" value="{{ $offer->client_id }}" name="client_id">

                            <input type="submit" data-id="{{ $offer->id }}" class="viewOfferBtn text-blue-700 bg-blue-100 hover:bg-blue-200 px-3 py-1.5 rounded text-xs" value="Details">
                        </form>  
                            <button 
                                class="edit-button inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-150"
                                data-id="{{$offer->id}}"
                                data-titre="{{$offer->titre}}"
                                data-description="{{$offer->description}}"
                                data-budjet="{{$offer->budjet}}"
                                data-duree="{{$offer->duree_disponibilite}}"
                                data-categorie="{{$offer->categorie->id}}"
                                data-vehicule="{{$offer->vehicule->id}}"
                                data-tags="{{implode(',', $offer->tags->pluck('id')->toArray())}}"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Edit
                                </button>
                                <form action="/client/offre" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $offer->id }}">
                                    <button type="submit" class="text-red-700 bg-red-100 hover:bg-red-200 px-3 py-1.5 rounded text-xs">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="text-center py-12">
                    <h3 class="text-sm font-medium text-gray-900">No offers</h3>
                    <p class="text-sm text-gray-500">Start by creating a new offer.</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Add Offer Modal -->
<div id="addOfferModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-3xl p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Add New Offer</h2>
            <button id="closeAddOfferModal" class="text-gray-600 hover:text-red-500">&times;</button>
        </div>
        <form method="POST" action="/client/offre" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input name="titre" type="text" placeholder="Titre" class="border rounded p-2" required>
                <input name="image" type="file" class="border rounded p-2" required>
                <textarea name="description" placeholder="Description" class="border rounded p-2 md:col-span-2" required></textarea>
                <input name="budjet" type="number" placeholder="Budget (€)" class="border rounded p-2" required>
                <input name="duree_disponibilite" type="date" class="border rounded p-2" required>
                <select name="categorie" class="border rounded p-2" required>
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                    @endforeach
                </select>
                <select name="vehicule" class="border rounded p-2" required>
                    @foreach(Auth::user()->vehicules as $vehicule)
                        <option value="{{ $vehicule->id }}">{{ $vehicule->name }}</option>
                    @endforeach
                </select>
                <select name="tags[]" multiple class="border rounded p-2 md:col-span-2" required>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4 flex justify-end space-x-2">
                <button type="button" id="cancelAddOffer" class="bg-gray-200 px-4 py-2 rounded">Annuler</button>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Ajouter</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Offer Modal -->
<div id="editModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex justify-center items-center">
    <div class="relative bg-white rounded-lg shadow-xl max-w-3xl w-full mx-4 sm:mx-0">
        <div class="bg-yellow-600 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
            <h3 class="text-lg font-medium">Edit Offre</h3>
            <button id="closeEditModal" class="text-white hover:text-gray-200 focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <form id="editOfferForm" action="/client/offre" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf
            @method('PUT')
            <input type="hidden" id="editOfferId" name="id">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="form-element">
                    <label for="editTitre" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                    <input type="text" id="editTitre" name="titre" required placeholder="Titre de l'offre" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm" />
                </div>
                
                <div class="form-element">
                    <label for="editImage" class="block text-sm font-medium text-gray-700 mb-1">Image (laisser vide pour conserver l'image actuelle)</label>
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
                
                <div class="form-element md:col-span-2">
                    <label for="editDescription" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="editDescription" name="description" required placeholder="Description de l'offre" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm" rows="3"></textarea>
                </div>
                
                <div class="form-element">
                    <label for="editBudjet" class="block text-sm font-medium text-gray-700 mb-1">Budget (€)</label>
                    <input type="number" id="editBudjet" name="budjet" required placeholder="Budget" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm" />
                </div>
                
                <div class="form-element">
                    <label for="editDuree" class="block text-sm font-medium text-gray-700 mb-1">Durée</label>
                    <input type="date" id="editDuree" name="duree_disponibilite" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm" />
                </div>
                
                <div class="form-element">
                    <label for="editCategorie" class="block text-sm font-medium text-gray-700 mb-1">Catégorie</label>
                    <select id="editCategorie" name="categorie" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
                        @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-element">
                    <label for="editVehicule" class="block text-sm font-medium text-gray-700 mb-1">Véhicule</label>
                    <select id="editVehicule" name="vehicule" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
                        @foreach($vehicules as $vehicule)
                            <option value="{{$vehicule->id}}">{{$vehicule->name}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-element">
                    <label for="editStatus" class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                    <select id="editStatus" name="status" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                </div>
                
                <div class="form-element md:col-span-2">
                    <label for="editTags" class="block text-sm font-medium text-gray-700 mb-1">Tags</label>
                    <select id="editTags" name="tags[]" multiple required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    <p class="text-xs text-gray-500 mt-1">Maintenez la touche Ctrl (ou Cmd) pour sélectionner plusieurs tags</p>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" id="cancelEditOffer" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                    Annuler
                </button>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                    Mettre à jour
                </button>
            </div>
        </form>
    </div>
</div>

<!-- View Offer Details Modal (Added) -->
<div id="viewOfferModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-3xl p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold" id="viewOfferTitle"></h2>
            <button id="closeViewOfferModal" class="text-gray-600 hover:text-red-500">&times;</button>
        </div>
        <div id="viewOfferContent" class="space-y-4">
            <!-- Content will be populated by JavaScript -->
        </div>
        <div class="mt-4 flex justify-end">
            <button id="closeViewDetailsBtn" class="bg-gray-200 px-4 py-2 rounded">Close</button>
        </div>
    </div>
</div>

<!-- JavaScript for Modal Handling -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const showModal = (id) => document.getElementById(id).classList.remove('hidden');
        const hideModal = (id) => document.getElementById(id).classList.add('hidden');

        // Add Offer Modal
        document.getElementById('openAddOfferModal')?.addEventListener('click', () => showModal('addOfferModal'));
        document.getElementById('closeAddOfferModal')?.addEventListener('click', () => hideModal('addOfferModal'));
        document.getElementById('cancelAddOffer')?.addEventListener('click', () => hideModal('addOfferModal'));
        
        // Edit Offer Modal
        document.getElementById('closeEditModal')?.addEventListener('click', () => hideModal('editModal'));
        document.getElementById('cancelEditOffer')?.addEventListener('click', () => hideModal('editModal'));
        
        // View Offer Details Modal
        document.getElementById('closeViewOfferModal')?.addEventListener('click', () => hideModal('viewOfferModal'));
        document.getElementById('closeViewDetailsBtn')?.addEventListener('click', () => hideModal('viewOfferModal'));

        // Handle Edit Buttons
        document.querySelectorAll('.edit-button').forEach(button => {
            button.addEventListener('click', () => {
                const offerId = button.dataset.id;
                const titre = button.dataset.titre;
                const description = button.dataset.description;
                const budjet = button.dataset.budjet;
                const duree = button.dataset.duree;
                const categorie = button.dataset.categorie;
                const vehicule = button.dataset.vehicule;
                const tags = button.dataset.tags.split(',');
                
                document.getElementById('editOfferId').value = offerId;
                document.getElementById('editTitre').value = titre;
                document.getElementById('editDescription').value = description;
                document.getElementById('editBudjet').value = budjet;
                document.getElementById('editDuree').value = duree;
                document.getElementById('editCategorie').value = categorie;
                document.getElementById('editVehicule').value = vehicule;
                
                // Clear all selected tags first
                const tagOptions = Array.from(document.getElementById('editTags').options);
                tagOptions.forEach(option => option.selected = false);
                
                // Select the appropriate tags
                tags.forEach(tagId => {
                    const option = document.querySelector(`#editTags option[value="${tagId}"]`);
                    if (option) {
                        option.selected = true;
                    }
                });
                
                // Update the form action URL with the correct ID
                const formAction = document.getElementById('editOfferForm').action;
                document.getElementById('editOfferForm').action = formAction.replace(':id', offerId);
                
                showModal('editModal');
            });
        });

       
    });
</script>
@endsection