@extends('layout.app')

@section('content')
<div class="container mx-auto py-6 px-4 md:px-6">
    <div class="flex items-center mb-6">
        <a href="" class="flex items-center text-gray-500 hover:text-gray-700 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Retour aux services
        </a>
        <h1 class="text-2xl font-bold">Paiement pour le Service #{{ $service->id }}</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-2 space-y-6">
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 border-b">
                    <h2 class="text-xl font-bold">{{ $service->titre }}</h2>
                    <div class="flex items-center space-x-2 text-sm text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Créé le {{ $service->created_at }}</span>
                        <span>•</span>
                        <span>Mis à jour le {{ $service->updated_at }}</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-medium mb-4">Détails du Service</h3>
                    <p class="text-gray-600 mb-4">{{ $service->description }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 font-medium">Prix:</span>
                        <span class="text-lg font-bold">{{ number_format($service->offre->budjet, 2) }} €</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 border-b">
                    <h3 class="text-lg font-medium">Méthode de Paiement</h3>
                </div>
                <div class="p-6">
                    <form action="/payment/process" method="POST">
                        @csrf
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <div class="space-y-4">
                            <div>
                                <label for="payment_method" class="block text-sm font-medium text-gray-700">Choisissez une méthode de paiement</label>
                                <select id="payment_method" name="payment_method" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="credit_card">Carte de Crédit</option>
                                    <option value="paypal">PayPal</option>
                                    <option value="bank_transfer">Virement Bancaire</option>
                                </select>
                            </div>
                            <div>
                                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Confirmer le Paiement
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            @include('Admin.Service.components.mechanicien', ['mechanic' => $service->mechanicien])
        </div>
    </div>
</div>
@endsection
