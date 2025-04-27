@extends('layout.App')

@section('content')
<div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Payment Form (Left Side - 2 columns) -->
        <div class="md:col-span-2 bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-gray-800 text-white px-6 py-4">
                <h2 class="text-xl font-semibold">Payment for Mechanic Services</h2>
            </div>
            
            <form method="POST" action="#" class="p-6 space-y-6">
                @csrf
                
                <!-- Service Selection with Fake Data -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-3">Select Service</h3>
                    <div class="space-y-2">
                        <!-- Fake Service 1 -->
                        <div class="flex items-start border rounded-md p-3 hover:bg-gray-50">
                            <div class="flex items-center h-5">
                                <input id="service1" name="service_id" type="radio" 
                                    value="1" data-price="89.99"
                                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            </div>
                            <div class="ml-3 flex-1">
                                <label for="service1" class="flex justify-between text-sm font-medium text-gray-700">
                                    <span>Basic Oil Change</span>
                                    <span class="font-semibold">89.99 €</span>
                                </label>
                                <p class="text-xs text-gray-500 mt-1">Complete oil change with filter replacement and fluid check.</p>
                            </div>
                        </div>
                   
                    </div>
                </div>
                
              
                
                <!-- Vehicle Information -->
                <div>
                 
                </div>
                
                <!-- Payment Method -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-3">Payment Method</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center">
                                <input id="credit_card" name="payment_method" type="radio" value="credit_card" checked
                                    class="h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                <label for="credit_card" class="ml-2 block text-sm font-medium text-gray-700">
                                    Credit Card
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="paypal" name="payment_method" type="radio" value="paypal"
                                    class="h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                <label for="paypal" class="ml-2 block text-sm font-medium text-gray-700">
                                    PayPal
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="bank_transfer" name="payment_method" type="radio" value="bank_transfer"
                                    class="h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                <label for="bank_transfer" class="ml-2 block text-sm font-medium text-gray-700">
                                    Bank Transfer
                                </label>
                            </div>
                        </div>
                        
                        <!-- Credit Card Details -->
                        <div id="credit-card-details" class="border rounded-md p-4 bg-gray-50">
                            <div class="space-y-4">
                                <div>
                                    <label for="card_number" class="block text-sm font-medium text-gray-700">Card Number</label>
                                    <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9012 3456"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="expiry_date" class="block text-sm font-medium text-gray-700">Expiry Date</label>
                                        <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label for="cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="123"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Terms and Conditions -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" type="checkbox" required
                            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-medium text-gray-700">
                            I agree to the <a href="#" class="text-blue-600 hover:underline">Terms and Conditions</a>
                        </label>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Process Payment
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Service and Mechanic Info (Right Side - 1 column) -->
        <div class="md:col-span-1 space-y-6">
            <!-- Service Summary -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-gray-800 text-white px-6 py-4">
                    <h3 class="text-lg font-medium">Order Summary</h3>
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Service:</span>
                        <span id="selected-service" class="font-medium">-</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Price:</span>
                        <span id="selected-price" class="font-medium">0.00 €</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Tax (20%):</span>
                        <span id="tax-amount" class="font-medium">0.00 €</span>
                    </div>
                    <div class="border-t pt-4 flex justify-between">
                        <span class="font-semibold">Total:</span>
                        <span id="total-amount" class="font-semibold">0.00 €</span>
                    </div>
                </div>
            </div>
            
            <!-- Mechanic Info with Fake Data -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-gray-800 text-white px-6 py-4">
                    <h3 class="text-lg font-medium">Your Mechanic</h3>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="h-16 w-16 rounded-full object-cover" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Mechanic">
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Jean Dupont</h4>
                            <p class="text-sm text-gray-500">Master Technician</p>
                            <div class="flex items-center mt-1">
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
                                    <svg class="w-4 h-4 fill-current text-gray-300" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
                                </div>
                                <span class="ml-1 text-sm text-gray-500">4.0/5 (42 reviews)</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <h5 class="text-sm font-medium text-gray-900 mb-2">About</h5>
                        <p class="text-sm text-gray-600">
                            Professional mechanic with over 10 years of experience specializing in European vehicles. Certified in advanced diagnostics and engine repair. Expert in BMW, Mercedes, and Audi vehicles.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <h5 class="text-sm font-medium text-gray-900 mb-2">Certifications</h5>
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">ASE Certified</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">BMW Specialist</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Master Technician</span>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <h5 class="text-sm font-medium text-gray-900 mb-2">Contact</h5>
                        <div class="space-y-1 text-sm">
                            <p class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                +33 6 12 34 56 78
                            </p>
                            <p class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                jean.dupont@garage-example.com
                            </p>
                            <p class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                123 Rue de la Mécanique, 75001 Paris
                            </p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <h5 class="text-sm font-medium text-gray-900 mb-2">Working Hours</h5>
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                            <div>Monday - Friday:</div>
                            <div>8:00 - 18:00</div>
                            <div>Saturday:</div>
                            <div>9:00 - 16:00</div>
                            <div>Sunday:</div>
                            <div>Closed</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Special Offers -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-gray-800 text-white px-6 py-4">
                    <h3 class="text-lg font-medium">Special Offers</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="border border-green-200 rounded-md p-3 bg-green-50">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-medium text-green-800">10% Off First Service</span>
                            </div>
                            <p class="text-sm text-green-700 mt-1">New customers receive 10% off their first service.</p>
                        </div>
                        <div class="border border-blue-200 rounded-md p-3 bg-blue-50">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-medium text-blue-800">Free Inspection</span>
                            </div>
                            <p class="text-sm text-blue-700 mt-1">Complimentary vehicle inspection with any service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle payment method selection
        const paymentMethodRadios = document.querySelectorAll('input[name="payment_method"]');
        const creditCardDetails = document.getElementById('credit-card-details');
        
        paymentMethodRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'credit_card') {
                    creditCardDetails.classList.remove('hidden');
                } else {
                    creditCardDetails.classList.add('hidden');
                }
            });
        });
        
        // Handle service selection and price calculation
        const serviceRadios = document.querySelectorAll('input[name="service_id"]');
        const selectedService = document.getElementById('selected-service');
        const selectedPrice = document.getElementById('selected-price');
        const taxAmount = document.getElementById('tax-amount');
        const totalAmount = document.getElementById('total-amount');
        
        serviceRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                const serviceName = this.closest('div.border').querySelector('label span:first-child').textContent;
                const price = parseFloat(this.dataset.price);
                const tax = price * 0.2;
                const total = price + tax;
                
                selectedService.textContent = serviceName;
                selectedPrice.textContent = price.toFixed(2) + ' €';
                taxAmount.textContent = tax.toFixed(2) + ' €';
                totalAmount.textContent = total.toFixed(2) + ' €';
            });
        });
    });
</script>
@endpush
@endsection