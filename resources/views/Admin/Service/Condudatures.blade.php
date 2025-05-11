@extends('layout.App')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <section>
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8 h-[122px]">
                <a href="client/ClientOffre" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Offres</a>
                <a href="/client/Allvehicules" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Mes Véhicules</a>
                <a href="/AjouterVehicule" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Ajouter Véhicules</a>
                <a href="/client/ServiceDetails" class="font-semibold text-gray-500 hover:text-black px-3 py-2 text-sm">Services</a>
            </div>
        </section>

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Manage les postule pour vote offres</h1>
            <p class="mt-2 text-lg text-gray-600">Create, edit, delete, and view details of your offers</p>
        </div>

        <div class="bg-white shadow sm:rounded-lg mb-6">
            <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-medium text-gray-900">All Condudatues</h2>
                    <p class="mt-1 text-sm text-gray-500">Manage your Condudatues for your offres</p>
                </div>

                <button id="openAddOfferModal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-md">
                    <svg class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    les Condudatues de votre offres
                </button>
            </div>

            <div class="border-t border-gray-200">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
                    @include('Admin.Service.components.ValidateMechanicien', ['service' => $service, 'serviceId' => $serviceId])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
