@extends('layout.app')
<script src="https://js.stripe.com/v2/"></script>
<script>
    $(function () {
        var $form = $(".require-validation");

        $form.on('submit', function (e) {
            var $inputs = $form.find('input[type=text]');
            var $error = $('.error');
            var valid = true;
            $error.addClass('hidden');
            $inputs.removeClass('border-red-500');

            $inputs.each(function () {
                if (!$(this).val()) {
                    $(this).addClass('border-red-500');
                    valid = false;
                }
            });

            if (!valid) {
                e.preventDefault();
                $error.removeClass('hidden').text('Veuillez remplir tous les champs obligatoires.');
                return false;
            }

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                var publishableKey = $form.data('stripe-publishable-key');
                
                if (!publishableKey) {
                    $error.removeClass('hidden').text('Erreur de configuration: Clé Stripe manquante');
                    return false;
                }

                Stripe.setPublishableKey(publishableKey);
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
                return false;
            }
        });
        
        function stripeResponseHandler(status, response) {
            var $form = $(".require-validation");
            var $error = $('.error');
            
            if (response.error) {
                $error.removeClass('hidden').text(response.error.message);
            } else {
                var token = response.id;
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                $form.get(0).submit();
            }
        }
    });
</script>
@section('content')
<div class="container mx-auto py-10 px-4 md:px-6">
    <div class="flex items-center mb-8">
        <a href="" class="flex items-center text-gray-500 hover:text-gray-700 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Retour aux services
        </a>
        <h1 class="text-2xl font-bold text-gray-800">Paiement pour le Service #{{ $service->id }}</h1>
    </div>
    @if(config('app.debug'))
    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-6">
        <p>Debug: Stripe Key ({{ !empty(config('stripe.key')) ? 'Found' : 'Missing' }}): {{ !empty(config('stripe.key')) ? substr(config('stripe.key'), 0, 8).'...' : 'Not found' }}</p>
    </div>
    @endif
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="md:col-span-2 space-y-6">
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $service->titre }}</h2>
                <p class="text-gray-600 mb-4">{{ $service->description }}</p>
                <div class="flex justify-between text-sm text-gray-500 mb-2">
                    <span>Créé le {{ $service->created_at }}</span>
                    <span>Mis à jour le {{ $service->updated_at }}</span>
                </div>
                <div class="flex justify-between font-medium text-gray-700">
                    <span>Prix:</span>
                    <span class="text-green-600 text-lg font-bold">{{ number_format($service->offre->budjet, 2) }} €</span>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Détails du paiement</h3>

                <form action="/Service/payment" method="POST" class="space-y-5 require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ config('stripe.secret') }}">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">

                    <div>
                        <label class="block text-gray-700 mb-1">Nom complet</label>
                        <input type="text" name="billing_name" value="{{ auth()->user()->name }}" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" placeholder="John Doe">
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-1">Numéro de carte</label>
                        <input type="text" class="card-number w-full p-3 border border-gray-300 rounded-lg" placeholder="4242 4242 4242 4242">
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label class="block text-gray-700 mb-1">CVC</label>
                            <input type="text" class="card-cvc w-full p-3 border border-gray-300 rounded-lg" placeholder="CVC">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-1">Mois</label>
                            <input type="text" class="card-expiry-month w-full p-3 border border-gray-300 rounded-lg" placeholder="MM">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-1">Année</label>
                            <input type="text" class="card-expiry-year w-full p-3 border border-gray-300 rounded-lg" placeholder="YYYY">
                        </div>
                    </div>

                    <div class="error hidden bg-red-100 text-red-700 p-3 rounded">
                        Veuillez corriger les erreurs et réessayer.
                    </div>

                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-lg font-semibold transition duration-200">
                        Payer maintenant
                    </button>

                    <p class="text-sm text-gray-500 text-center mt-3">
                        <i class="fas fa-lock mr-1"></i> Paiement sécurisé - Vos données sont protégées
                    </p>
                </form>
            </div>
        </div>

        <div class="space-y-6">
            @include('Admin.Service.components.mechanicien', ['mechanic' => $service->mechanicien])
        </div>
    </div>
</div>

@endsection

