<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="px-6 py-4 border-b">
        <h3 class="text-lg font-bold">Client</h3>
    </div>
    <div class="p-6">
        <div class="flex flex-col items-center text-center mb-4">
            <div class="h-24 w-24 relative mb-3">
                <img src="" 
                     alt="{{ $client->firstname }}" 
                     class="w-full h-full object-cover rounded-full">
            </div>
            <h3 class="font-bold text-lg">{{ $client->firstname }}</h3>
            <p class="text-gray-500">{{ $client->email }}</p>
        </div>

        <div class="mt-6 space-y-2">
            <a href="mailto:{{ $client->email }}" class="block w-full px-4 py-2 bg-white text-gray-700 text-center rounded-md border hover:bg-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Contacter
            </a>
            <a href="tel:+33600000000" class="block w-full px-4 py-2 bg-blue-600 text-white text-center rounded-md hover:bg-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                Appeler
            </a>
        </div>
    </div>
</div>