@extends('layouts.app')

@section('header-title', 'Welcome to Radiant Care')

@section('header-content') 
    <p class="mt-6 text-2xl max-w-3xl">Radiant Care Hospital partners with the most skilled healthcare professionals to deliver advanced, evidence-based treatments through our Centers of Excellence. We offer comprehensive care for lifestyle-related conditions, preventive healthcare, and a full range of diagnostic tests. Our facilities are internationally accredited, ensuring the highest standards of care.</p>
    <a href="#" class="mt-8 inline-block bg-light-blue text-white px-6 py-3 rounded-full hover:bg-blue-800">About Us</a>
@endsection

@section('content')  

    <!-- Services Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center">
            <div class="flex items-center space-x-4">
                <h2 class="text-6xl font-bold text-apple-green">Services</h2>
                <hr class="flex-grow border-t-4 border-lime-500">
            </div>
            <div class="grid grid-cols-3 gap-8 mt-10">
                <!-- Service Items -->
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-apple-green">
                    <img src="{{ asset('images/microscope.png')}}" alt="Laboratory Services" class="h-16 mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-gray-700">Laboratory Services</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-apple-green">
                    <img src="{{ asset('images/radiology.png')}}" alt="Radiology" class="h-16 mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-gray-700">Radiology</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-apple-green">
                    <img src="{{ asset('images/ambulance.png')}}" alt="Ambulance Services" class="h-16 mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-gray-700">Ambulance Services</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-apple-green">
                    <img src="{{ asset('images/pharmacy.png')}}" alt="Pharmacy" class="h-16 mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-gray-700">Pharmacy</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-apple-green">
                    <img src="{{ asset('images/maternity.png')}}" alt="Maternity Care" class="h-16 mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-gray-700">Maternity Care</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-apple-green">
                    <img src="{{ asset('images/opd.png')}}" alt="Out Patient Services" class="h-16 mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-gray-700">Out Patient Services (OPD)</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Online Services Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center">
            <div class="flex items-center space-x-4">
                <hr class="flex-grow border-t-4 border-blue-900">
                <h2 class="text-6xl font-bold text-blue-900">Online Services</h2>
            </div>
            <div class="grid grid-cols-4 gap-8 mt-10">
                <!-- Online Service Items -->
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-blue-900">
                    <img src="{{ asset('images/doctor1.png')}}" alt="Manage Appointments" class="h-16 mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-blue-900">Manage Appointments</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-blue-900">
                    <img src="{{ asset('images/ticket.png')}}" alt="Ongoing Number" class="h-16 mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-blue-900">Ongoing Number</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-blue-900">
                    <img src="{{ asset('images/labreports.png')}}" alt="Laboratory Reports" class="h-16 mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-blue-900">Laboratory Reports</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-blue-900">
                    <img src="{{ asset('images/pharmacy1.png')}}" alt="Pharmacy" class="h-16 mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-blue-900">Pharmacy</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Patients Choose Us Section -->
    <section class="bg-blue-50 py-16">
        <div class="container mx-auto flex items-center"> 
            <div class="w-1/2 pl-12">
                <h2 class="text-5xl font-bold text-blue-900">Why Patients Choose Us</h2>
                <p class="mt-6 text-2xl text-gray-600 pt-7">
                    Radiant Care Hospital partners with the most skilled healthcare professionals to deliver advanced, evidence-based treatments through our Centers of Excellence. We are known for exceptional patient outcomes and offer comprehensive care for lifestyle-related conditions, preventive healthcare, and a full range of diagnostic tests.
                </p>
                <a href="#" class="mt-8 inline-block bg-light-blue text-white px-6 py-3 rounded-full hover:bg-blue-800">Learn More</a>
            </div>
            <div class="w-1/2">
                <img src="{{ asset('images/doctors.png') }}" alt="Doctor" class="h-full w-full object-cover"> 
            </div>
        </div>
    </section>

@endsection  
