@extends('layout.SideBar')

@section('css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #c5c5c5;
        border-radius: 3px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }
</style>
@endsection

@section('content')
<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold">Gestion des Catégories</h1>
        <p class="text-gray-600">Gérez toutes les catégories de la plateforme</p>
    </div>
    <div class="mt-4 md:mt-0">
        <button id="openModal" class="bg-primary hover:bg-primary/90 text-white font-medium py-2 px-4 rounded-lg transition-colors inline-flex items-center">
            <i class="fas fa-plus mr-2"></i>
            Ajouter une catégorie
        </button>
    </div>
</div>

<!-- Filters -->
<div class="bg-white rounded-lg shadow-sm p-4 mb-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <h2 class="text-lg font-bold mb-4 md:mb-0">Filtres</h2>
        <div class="flex flex-col md:flex-row gap-4">
            <select class="w-full md:w-auto px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                <option value="">Tous les types</option>
                <option value="recipe">Recettes</option>
                <option value="product">Produits</option>
                <option value="blog">Blog</option>
                <option value="competition">Compétitions</option>
            </select>
            <select class="w-full md:w-auto px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                <option value="">Tous les statuts</option>
                <option value="active">Actif</option>
                <option value="inactive">Inactif</option>
            </select>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <i class="fas fa-search text-gray-400"></i>
                </span>
                <input type="text" placeholder="Rechercher..." class="w-full md:w-auto pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
        </div>
    </div>
</div>

<!-- Categories Table -->
<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase">Nom</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase">Description</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase">Date de création</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($categorie as $category)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap flex items-center gap-3">
                        <div class="h-9 w-9 flex items-center justify-center rounded-full bg-primary/10 text-primary">
                            <i class="fas fa-{{ $category->image ?? 'utensils' }}" title="{{ $category->image ?? 'utensils' }}"></i>
                        </div>
                        <span class="font-medium text-gray-800">{{ $category->name }}</span>
                    </td>
                    <td class="px-6 py-4 text-gray-700">{{ $category->description }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $category->created_at->format('d/m/Y') }}</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex space-x-2 justify-end">
                            <button data-id="{{ $category->id }}" data-title="{{ $category->name }}" data-description="{{ $category->description }}" data-type="{{ $category->type }}" data-status="{{ $category->is_active }}" data-image="{{ $category->image }}" class="text-yellow-600 hover:text-yellow-800 edit-category">
                                <i class="fas fa-edit"></i>
                            </button>
                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-gray-400 py-4">Aucune catégorie trouvée.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('modal')
<div id="categoryModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black bg-opacity-40 flex items-center justify-center transition-all duration-300 opacity-0 scale-95">
    <div class="bg-white rounded-lg w-full max-w-lg p-6 shadow-lg">
        <h3 class="text-xl font-semibold text-gray-800 mb-4" id="modal-title">Ajouter une nouvelle catégorie</h3>
        <form id="categoryForm" method="POST" action="{{ route('admin.category.store') }}">
            @csrf
            <input type="hidden" name="category_id" id="category_id">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm text-gray-700 mb-1">Titre</label>
                    <input type="text" name="title" id="title" required class="w-full border rounded px-3 py-2" placeholder="Titre">
                </div>
                <div>
                    <label class="block text-sm text-gray-700 mb-1">Description</label>
                    <textarea name="description" id="description" rows="3" class="w-full border rounded px-3 py-2" placeholder="Description"></textarea>
                </div>
                <div>
                    <label class="block text-sm text-gray-700 mb-1">Type</label>
                    <select name="type" id="type" required class="w-full border rounded px-3 py-2">
                        <option value="">Sélectionnez un type</option>
                        <option value="recipe">Recettes</option>
                        <option value="product">Produits</option>
                        <option value="blog">Blog</option>
                        <option value="competition">Compétitions</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm text-gray-700 mb-1">Icône</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400" id="iconPreview">
                            <i class="fas fa-utensils"></i>
                        </span>
                        <input type="text" name="icon" id="icon" class="pl-10 w-full border rounded px-3 py-2" placeholder="utensils, apple...">
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Nom FontAwesome sans "fa-"</p>
                </div>
                <div>
                    <label class="block text-sm text-gray-700 mb-1">Statut</label>
                    <div class="flex gap-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="is_active" value="1" id="active" checked class="text-primary">
                            <span class="ml-2 text-sm">Actif</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="is_active" value="0" id="inactive" class="text-primary">
                            <span class="ml-2 text-sm">Inactif</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex justify-end gap-2">
                <button type="button" id="closeModal" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Annuler</button>
                <button type="submit" id="submitBtn" class="px-4 py-2 bg-primary text-white rounded hover:bg-primary/90">Ajouter</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('categoryModal');
        const openModal = document.getElementById('openModal');
        const closeModal = document.getElementById('closeModal');
        const categoryForm = document.getElementById('categoryForm');
        const modalTitle = document.getElementById('modal-title');
        const submitBtn = document.getElementById('submitBtn');
        const categoryIdInput = document.getElementById('category_id');
        const iconInput = document.getElementById('icon');
        const iconPreview = document.getElementById('iconPreview');

        openModal.addEventListener('click', () => {
            modal.classList.remove('hidden');
            setTimeout(() => modal.classList.remove('opacity-0', 'scale-95'), 10);
            categoryForm.reset();
            categoryForm.action = "{{ route('admin.category.store') }}";
            modalTitle.textContent = "Ajouter une nouvelle catégorie";
            submitBtn.textContent = "Ajouter";
            categoryIdInput.value = "";
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('opacity-0', 'scale-95');
            setTimeout(() => modal.classList.add('hidden'), 300);
        });

        iconInput.addEventListener('input', () => {
            const icon = iconInput.value.trim() || 'utensils';
            iconPreview.innerHTML = `<i class="fas fa-${icon}"></i>`;
        });

        document.querySelectorAll('.edit-category').forEach(button => {
            button.addEventListener('click', () => {
                modal.classList.remove('hidden');
                setTimeout(() => modal.classList.remove('opacity-0', 'scale-95'), 10);
                modalTitle.textContent = "Modifier la catégorie";
                submitBtn.textContent = "Mettre à jour";

                document.getElementById('title').value = button.dataset.title;
                document.getElementById('description').value = button.dataset.description;
                document.getElementById('type').value = button.dataset.type;
                document.getElementById('icon').value = button.dataset.image ?? 'utensils';
                document.getElementById(button.dataset.status === '1' ? 'active' : 'inactive').checked = true;
                categoryIdInput.value = button.dataset.id;
                categoryForm.action = "{{ route('admin.category.update') }}";
            });
        });

        document.querySelectorAll('form').forEach(form => {
            if (form.action.includes('destroy')) {
                form.addEventListener('submit', e => {
                    if (!confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')) {
                        e.preventDefault();
                    }
                });
            }
        });
    });
</script>
@endsection
