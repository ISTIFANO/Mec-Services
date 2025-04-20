@extends('layout.SideBar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Category Dashboard</h2>
            <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">+ Add Category</button>
        </div>

        <!-- Table for category data -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 shadow-lg rounded-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="py-3 px-4 text-left">Title</th>
                        <th class="py-3 px-4 text-left">Description</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $categorie)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-4">{{$categorie->nom}}</td>
                        <td class="py-3 px-4">{{$categorie->description}}</td>
                        <td class="py-3 px-4 text-center">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition-colors mr-2" onclick="openEditModal({{$categorie->id}}, '{{$categorie->title}}', '{{$categorie->description}}')">
                                Edit
                            </button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors" onclick="confirmDelete({{$categorie->id}})">
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Add Category Modal -->
        <div id="jobModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-xl font-bold mb-4">Add Category</h2>
                <form action="/admin/categorie" enctype="multipart/form-data" method="POST" class="w-full">
                    @csrf

                    <div class="form-element mb-4">
                        <label for="title" class="block text-gray-700 mb-2">Title</label>
                        <input type="text" name="nom" required placeholder="Title" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="form-element mb-4">
                        <label for="description" class="block text-gray-700 mb-2">Description</label>
                        <input type="text" name="description" required placeholder="Description" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="form-element mb-4">
                        <label for="description" class="block text-gray-700 mb-2">Image</label>
                        <input type="file" name="image" required placeholder="Description" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button type="button" id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Cancel</button>
                        <input type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600" value="Add">
                    </div>
                </form>
            </div>
        </div>

        <!-- Edit Category Modal -->
        <div id="editModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-xl font-bold mb-4">Edit Category</h2>
                <form id="editForm" action="/admin/categorie" method="POST" class="w-full">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id_edit" id="editCategoryId">
                    <div class="form-element mb-4">
                        <label for="title" class="block text-gray-700 mb-2">Title</label>
                        <input type="text" name="title" id="editTitle" required placeholder="Title" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="form-element mb-4">
                        <label for="description" class="block text-gray-700 mb-2">Description</label>
                        <input type="text" name="description" id="editDescription" required placeholder="Description" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button type="button" id="closeEditModal" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Cancel</button>
                        <input type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600" value="Update">
                    </div>
                </form>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div id="deleteModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-xl font-bold mb-4">Confirm Delete</h2>
                <p class="mb-4">Are you sure you want to delete this category?</p>
                <form id="deleteForm" action="/admin/categorie" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" id="deleteCategoryId">
                    <div class="flex justify-end space-x-2">
                        <button type="button" id="closeDeleteModal" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Cancel</button>
                        <input type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600" value="Delete">
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script>
        const jobModal = document.getElementById("jobModal");
        const editModal = document.getElementById("editModal");
        const deleteModal = document.getElementById("deleteModal");
        const openModal = document.getElementById("openModal");
        const closeModal = document.getElementById("closeModal");
        const closeEditModal = document.getElementById("closeEditModal");
        const closeDeleteModal = document.getElementById("closeDeleteModal");

        openModal.addEventListener("click", () => {
            jobModal.classList.remove("hidden");
        });

        closeModal.addEventListener("click", () => {
            jobModal.classList.add("hidden");
        });

        closeEditModal.addEventListener("click", () => {
            editModal.classList.add("hidden");
        });

        closeDeleteModal.addEventListener("click", () => {
            deleteModal.classList.add("hidden");
        });

        function openEditModal(id, title, description) {
            document.getElementById("editCategoryId").value = id;
            document.getElementById("editTitle").value = title;
            document.getElementById("editDescription").value = description;
            editModal.classList.remove("hidden");
        }

        function confirmDelete(id) {
            document.getElementById("deleteCategoryId").value = id;
            deleteModal.classList.remove("hidden");
        }
    </script>
</body>
</html>
@endsection
