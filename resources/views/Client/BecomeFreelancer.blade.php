@extends('layout.App')
@section('content')

<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <div class="bg-white shadow-lg rounded-2xl max-w-4xl mx-auto p-8">
            <div class="flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-8 mb-8">
                <!-- Image -->
                <div class="flex-shrink-0">
                    <img src="https://www.ecoledespros.fr/wp-content/uploads/sites/5/2022/03/Preparer-votre-diplome-en-mecanique-automobile.jpg" 
                        alt="Mechanicien" 
                        class="w-64 h-64 object-cover rounded-xl shadow-md">
                </div>

                <!-- Header Text -->
                <div class="flex-1 text-center md:text-left">
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">Mechanic Information</h1>
                    <p class="text-gray-600 mb-2">
                        Please fill in the details below to complete the mechanic profile.
                    </p>
                    <p class="text-sm text-gray-500 italic">
                        Fields marked with * are required
                    </p>
                </div>
            </div>

            <!-- Form -->
            <form action="/client/BecomeFreelancerMethode" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <input type="hidden" name="user_id" value="{{ Auth::user()->id ?? '' }}">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Certification -->
                    <div>
                        <label for="certificat" class="block text-sm font-medium text-gray-700 mb-1">Certification</label>
                        <input type="file" name="certificat" id="certificat" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter certification details">
                    </div>

                    <!-- Years of Experience -->
                    <div>
                        <label for="experience_years" class="block text-sm font-medium text-gray-700 mb-1">Years of Experience*</label>
                        <input type="number" name="experience_years" id="experience_years" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter years of experience" required>
                    </div>

                    <!-- Specialization -->
                    <div>
                        <label for="specialization" class="block text-sm font-medium text-gray-700 mb-1">Specialization*</label>
                        <input type="text" name="specialization" id="specialization" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter specialization" required>
                    </div>

                 

                    <!-- Variable From Date -->
                    <div>
                        <label for="variable_at" class="block text-sm font-medium text-gray-700 mb-1">Available From</label>
                        <input type="date" name="variable_at" id="variable_at" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Variable To Date -->
                    <div>
                        <label for="variable_to" class="block text-sm font-medium text-gray-700 mb-1">Available Until</label>
                        <input type="date" name="variable_to" id="variable_to" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>


                <!-- Submit Button -->
                <div class="flex justify-center md:justify-end pt-4">
                    <button type="submit" 
                        class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md transition duration-300 hover:bg-blue-700 hover:scale-105">
                        <span class="mr-2">🔧</span> Save Mechanic Information
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection