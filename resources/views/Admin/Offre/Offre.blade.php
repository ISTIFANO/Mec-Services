@extends('layout.SideBar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Offres Dashboard</h2>
            <button id="openModal" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition-all shadow-md flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add Offre
            </button>
        </div>

        <!-- Enhanced Table for offres data -->
        <div class="overflow-x-auto bg-white rounded-xl shadow-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-4 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Titre</th>
                        <th class="px-6 py-4 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-4 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Budget</th>
                        <th class="px-6 py-4 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Durée</th>
                        <th class="px-6 py-4 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Catégorie</th>
                        <th class="px-6 py-4 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Véhicule</th>
                        <th class="px-6 py-4 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tags</th>
                        <th class="px-6 py-4 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($offres as $offre)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$offre->titre}}</td>
                        <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate">{{$offre->description}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$offre->budjet}} €</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$offre->duree_disponibilite}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                {{$offre->categorie->nom}}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{$offre->vehicule->name}}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <div class="flex flex-wrap gap-1">
                                @foreach($offre->tags as $tag)
                                    <span class="px-2 py-1 text-xs rounded-md bg-gray-200 text-gray-700">{{$tag->name}}</span>
                                @endforeach
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                            <div class="flex justify-center space-x-2">
                                <button 
                                    class="edit-button bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600 transition-colors flex items-center" 
                                    data-id="{{$offre->id}}"
                                    data-titre="{{$offre->titre}}"
                                    data-description="{{$offre->description}}"
                                    data-budjet="{{$offre->budjet}}"
                                    data-duree="{{$offre->duree_disponibilite}}"
                                    data-categorie="{{$offre->categorie->id}}"
                                    data-vehicule="{{$offre->vehicule->id}}"
                                    data-tags="{{implode(',', $offre->tags->pluck('id')->toArray())}}"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                    </svg>
                                    Edit
                                </button>
                                <form action="/admin/offre" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{$offre->id}}">
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition-colors flex items-center" onclick="return confirm('Are you sure you want to delete this offre?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Add Offre Modal -->
        <div id="offreModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3 max-h-90vh overflow-y-auto">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-800">Add Offre</h2>
                    <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="/admin/offre" method="POST" enctype="multipart/form-data" class="w-full">
                    @csrf

                    <div class="form-element mb-4">
                        <label for="titre" class="block text-gray-700 text-sm font-medium mb-2">Titre</label>
                        <input type="text" name="titre" required placeholder="Titre de l'offre" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="form-element mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-medium mb-2">Description</label>
                        <textarea name="description" required placeholder="Description de l'offre" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3"></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-element mb-4">
                            <label for="budjet" class="block text-gray-700 text-sm font-medium mb-2">Budget (€)</label>
                            <input type="number" name="budjet" required placeholder="Budget" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div class="form-element mb-4">
                            <label for="duree_disponibilite" class="block text-gray-700 text-sm font-medium mb-2">Durée</label>
                            <input type="date" name="duree_disponibilite" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                    </div>
                    <div class="form-element mb-4">
                        <label for="image" class="block text-gray-700 text-sm font-medium mb-2">Image</label>
                        <input type="file" name="image" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-element mb-4">
                            <label for="categorie" class="block text-gray-700 text-sm font-medium mb-2">Catégorie</label>
                            <select name="categorie" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Sélectionner une catégorie</option>
                                @foreach($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-element mb-4">
                            <label for="vehicule" class="block text-gray-700 text-sm font-medium mb-2">Véhicule</label>
                            <select name="vehicule" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Sélectionner un véhicule</option>
                                @foreach($vehicules as $vehicule)
                                    <option value="{{$vehicule->id}}">{{$vehicule->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-element mb-4">
                        <label for="tags" class="block text-gray-700 text-sm font-medium mb-2">Tags</label>
                        <select name="tags[]" multiple required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                        <p class="text-xs text-gray-500 mt-1">Maintenez la touche Ctrl (ou Cmd) pour sélectionner plusieurs tags</p>
                    </div>
                    <div class="flex justify-end space-x-2 mt-6">
                        <button type="button" class="cancel-modal-btn bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Annuler</button>
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Edit Offre Modal -->
        <div id="editModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3 max-h-90vh overflow-y-auto">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-800">Edit Offre</h2>
                    <button id="closeEditModal" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="/admin/offre/update" method="POST" enctype="multipart/form-data" class="w-full">
                    @csrf
                    @method('PUT')

                    <input type="hidden" id="editOffreId" name="id">

                    <div class="form-element mb-4">
                        <label for="editTitre" class="block text-gray-700 text-sm font-medium mb-2">Titre</label>
                        <input type="text" id="editTitre" name="titre" required placeholder="Titre de l'offre" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="form-element mb-4">
                        <label for="editDescription" class="block text-gray-700 text-sm font-medium mb-2">Description</label>
                        <textarea id="editDescription" name="description" required placeholder="Description de l'offre" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3"></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-element mb-4">
                            <label for="editBudjet" class="block text-gray-700 text-sm font-medium mb-2">Budget (€)</label>
                            <input type="number" id="editBudjet" name="budjet" required placeholder="Budget" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div class="form-element mb-4">
                            <label for="editDuree" class="block text-gray-700 text-sm font-medium mb-2">Durée</label>
                            <input type="date" id="editDuree" name="duree_disponibilite" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                    </div>
                    <div class="form-element mb-4">
                        <label for="editImage" class="block text-gray-700 text-sm font-medium mb-2">Image (laisser vide pour conserver l'image actuelle)</label>
                        <input type="file" id="editImage" name="image" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-element mb-4">
                            <label for="editCategorie" class="block text-gray-700 text-sm font-medium mb-2">Catégorie</label>
                            <select id="editCategorie" name="categorie" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @foreach($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-element mb-4">
                            <label for="editVehicule" class="block text-gray-700 text-sm font-medium mb-2">Véhicule</label>
                            <select id="editVehicule" name="vehicule" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @foreach($vehicules as $vehicule)
                                    <option value="{{$vehicule->id}}">{{$vehicule->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-element mb-4">
                        <label for="editTags" class="block text-gray-700 text-sm font-medium mb-2">Tags</label>
                        <select id="editTags" name="tags[]" multiple required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                        <p class="text-xs text-gray-500 mt-1">Maintenez la touche Ctrl (ou Cmd) pour sélectionner plusieurs tags</p>
                    </div>
                    <div class="flex justify-end space-x-2 mt-6">
                        <button type="button" class="cancel-modal-btn bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Annuler</button>
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Add JavaScript for modal handling -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const offreModal = document.getElementById("offreModal");
                const editModal = document.getElementById("editModal");
                const openModalBtn = document.getElementById("openModal");
                const closeModalBtn = document.getElementById("closeModal");
                const closeEditModalBtn = document.getElementById("closeEditModal");
                const cancelBtns = document.querySelectorAll(".cancel-modal-btn");
                
                // Open Add modal
                openModalBtn.addEventListener("click", () => {
                    offreModal.classList.remove("hidden");
                });
                
                // Close Add modal
                closeModalBtn.addEventListener("click", () => {
                    offreModal.classList.add("hidden");
                });
                
                // Close Edit modal
                closeEditModalBtn.addEventListener("click", () => {
                    editModal.classList.add("hidden");
                });
                
                // Cancel buttons for both modals
                cancelBtns.forEach(btn => {
                    btn.addEventListener("click", () => {
                        offreModal.classList.add("hidden");
                        editModal.classList.add("hidden");
                    });
                });
                
                // Setup edit button handlers
                const editButtons = document.querySelectorAll('.edit-button');
                editButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const id = this.getAttribute('data-id');
                        const titre = this.getAttribute('data-titre');
                        const description = this.getAttribute('data-description');
                        const budjet = this.getAttribute('data-budjet');
                        const duree = this.getAttribute('data-duree');
                        const categorie = this.getAttribute('data-categorie');
                        const vehicule = this.getAttribute('data-vehicule');
                        const tags = this.getAttribute('data-tags').split(',');
                        
                        // Populate edit form
                        document.getElementById('editOffreId').value = id;
                        document.getElementById('editTitre').value = titre;
                        document.getElementById('editDescription').value = description;
                        document.getElementById('editBudjet').value = budjet;
                        document.getElementById('editDuree').value = duree;
                        document.getElementById('editCategorie').value = categorie;
                        document.getElementById('editVehicule').value = vehicule;
                        
                        // Handle tags selection
                        const tagSelect = document.getElementById('editTags');
                        Array.from(tagSelect.options).forEach(option => {
                            option.selected = tags.includes(option.value);
                        });
                        
                        // Show edit modal
                        editModal.classList.remove('hidden');
                    });
                });
                
                // Close modals when clicking outside
                window.addEventListener('click', (e) => {
                    if (e.target === offreModal) {
                        offreModal.classList.add('hidden');
                    }
                    if (e.target === editModal) {
                        editModal.classList.add('hidden');
                    }
                });
            });
        </script>
    </div>
</body>
</html>
@endsection