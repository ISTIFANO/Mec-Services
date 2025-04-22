@extends('layout.SideBar')

@section('content')
<div class="container mx-auto p-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-gray-800">User Dashboard</h2>
        <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">+ Add User</button>
    </div>

    <!-- User Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 shadow-lg rounded-lg">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="py-3 px-4 text-left">First Name</th>
                    <th class="py-3 px-4 text-left">Last Name</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Phone</th>
                    <th class="py-3 px-4 text-left">Rating</th>
                    <th class="py-3 px-4 text-left">Service</th>
                    <th class="py-3 px-4 text-left">Mechanic</th>
                    <th class="py-3 px-4 text-left">Image</th>
                    <th class="py-3 px-4 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
     
                @foreach($users as $user)
                <tr class="border-b border-gray-200 hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $user->firstname }}</td>
                    <td class="py-3 px-4">{{ $user->lastname }}</td>
                    <td class="py-3 px-4">{{ $user->email }}</td>
                    <td class="py-3 px-4">{{ $user->phone }}</td>
                    <td class="py-3 px-4">{{ $user->rating ?? 'N/A' }}</td>
                    <td class="py-3 px-4">{{ $user->est_service ? 'Yes' : 'No' }}</td>
                    <td class="py-3 px-4">{{ $user->become_mechanicien ? 'Yes' : 'No' }}</td>
                    <td class="py-3 px-4">
                        @if($user->image)
                        <img src="{{ asset('storage/' . $user->image) }}" class="w-10 h-10 rounded-full object-cover" />
                        @else
                        N/A
                        @endif
                    </td>
                    <td class="py-3 px-4 text-center">
                        <button onclick="openEditModal({{ $user->id }}, '{{ $user->firstname }}', '{{ $user->lastname }}', '{{ $user->email }}', '{{ $user->phone }}', '{{ $user->rating }}', '{{ $user->est_service }}', '{{ $user->become_mechanicien }}', '{{ $user->image }}')" class="bg-yellow-500 text-white px-3 py-2 rounded hover:bg-yellow-600 mr-2">Edit</button>
                        <button onclick="confirmDelete({{ $user->id }})" class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-600">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add User Modal -->
    <div id="jobModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
            <h2 class="text-xl font-bold mb-4">Add User</h2>
            <form action="/admin/user" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <input name="firstname" placeholder="First Name" class="form-input" required>
                    <input name="lastname" placeholder="Last Name" class="form-input" required>
                    <input name="email" type="email" placeholder="Email" class="form-input" required>
                    <input name="phone" type="number" placeholder="Phone" class="form-input" required>
                    <input name="rating" type="number" step="0.1" placeholder="Rating" class="form-input">
                    <input name="password" type="password" placeholder="Password" class="form-input" required>
                    <input type="file" name="image" class="form-input">
                    <div>
                        <label><input type="checkbox" name="est_service"> Service</label><br>
                        <label><input type="checkbox" name="become_mechanicien"> Mechanic</label>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="button" id="closeModal" class="btn-secondary">Cancel</button>
                    <button type="submit" class="btn-primary ml-2">Add</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit User Modal -->
    <div id="editModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
            <h2 class="text-xl font-bold mb-4">Edit User</h2>
            <form id="editForm" action="/admin/user" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="editId">
                <div class="grid grid-cols-2 gap-4">
                    <input name="firstname" id="editFirstname" class="form-input" required>
                    <input name="lastname" id="editLastname" class="form-input" required>
                    <input name="email" type="email" id="editEmail" class="form-input" required>
                    <input name="phone" id="editPhone" class="form-input" required>
                    <input name="rating" id="editRating" step="0.1" class="form-input">
                    <input name="password" type="password" placeholder="New Password" class="form-input">
                    <input name="image" id="editImage" class="form-input">
                    <div>
                        <label><input type="checkbox" name="est_service" id="editEstService"> Service</label><br>
                        <label><input type="checkbox" name="become_mechanicien" id="editMechanic"> Mechanic</label>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="button" id="closeEditModal" class="btn-secondary">Cancel</button>
                    <button type="submit" class="btn-warning ml-2">Update</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <h2 class="text-xl font-bold mb-4">Confirm Delete</h2>
            <p class="mb-4">Are you sure you want to delete this user?</p>
            <form id="deleteForm" action="/admin/user" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" id="deleteId">
                <div class="flex justify-end space-x-2">
                    <button type="button" id="closeDeleteModal" class="btn-secondary">Cancel</button>
                    <button type="submit" class="btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Styles & Script -->
<style>
    .form-input { width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.375rem; }
    .btn-primary { background-color: #22c55e; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; }
    .btn-warning { background-color: #facc15; color: black; padding: 0.5rem 1rem; border-radius: 0.375rem; }
    .btn-danger { background-color: #ef4444; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; }
    .btn-secondary { background-color: #6b7280; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; }
</style>

<script>
    const jobModal = document.getElementById("jobModal");
    const editModal = document.getElementById("editModal");
    const deleteModal = document.getElementById("deleteModal");
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");
    const closeEditModal = document.getElementById("closeEditModal");
    const closeDeleteModal = document.getElementById("closeDeleteModal");

    openModal.addEventListener("click", () => jobModal.classList.remove("hidden"));
    closeModal.addEventListener("click", () => jobModal.classList.add("hidden"));
    closeEditModal.addEventListener("click", () => editModal.classList.add("hidden"));
    closeDeleteModal.addEventListener("click", () => deleteModal.classList.add("hidden"));

    function openEditModal(id, firstname, lastname, email, phone, rating, est_service, become_mechanicien, image) {
        document.getElementById("editId").value = id;
        document.getElementById("editFirstname").value = firstname;
        document.getElementById("editLastname").value = lastname;
        document.getElementById("editEmail").value = email;
        document.getElementById("editPhone").value = phone;
        document.getElementById("editRating").value = rating;
        document.getElementById("editEstService").checked = est_service == 1;
        document.getElementById("editMechanic").checked = become_mechanicien == 1;
        document.getElementById("editImage").value = image;
        editModal.classList.remove("hidden");
    }

    function confirmDelete(id) {
        document.getElementById("deleteId").value = id;
        deleteModal.classList.remove("hidden");
    }
</script>
@endsection
