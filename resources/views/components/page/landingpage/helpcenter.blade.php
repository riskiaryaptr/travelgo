@extends('components.layout.master')

@section('content')


    <!-- banner --->
     <section class="relative z-10">
        
        <div class="w-full min-h-[150px] sm:min-h-[180px] relative overflow-hidden" style="background-image: url('{{ asset('assets/promo/banner-5.jpg') }}'); background-size: cover; background-position: center;"></div>

        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <div class="w-full max-w-6xl px-4 sm:px-6 lg:px-8 mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between text-white pointer-events-auto gap-6">
                <div class="flex-1 flex flex-col items-start justify-center">
                    <h1 class="text-xl sm:text-2xl md:text-3xl font-bold tracking-wide font-nunito">
                        Help Center
                    </h1>
                    <p class="mt-2 text-sm/6 md:text-sm/6 font-nunito text-white/90 tracking-wide leading-tight font-semibold">
                        The center for help and guidance on using our services.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- help center -->
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <h2 class="text-lg font-semibold font-nunito tracking-wide leading-normal mb-4 text-gray-700">
                        Popular Topics
                    </h2>
                    
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 flex flex-col lg:flex-row gap-8 p-0 lg:p-6">

                        <div class="flex-1">
                            <ul class="divide-y divide-gray-100">
                                <li>
                                    <a href="#" class="flex items-center justify-between px-4 py-3 group hover:bg-blue-50 transition-colors">
                                        <span class="text-sm/6 font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500 transition-colors">How to Reschedule a Flight Booking</span>
                                        <i class="fa fa-chevron-right text-gray-300 group-hover:text-blue-400 text-xs transition-colors"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="flex items-center justify-between px-4 py-3 group hover:bg-blue-50 transition-colors">
                                        <span class="text-sm/6 font-medium tracking-wide leading-normal text-blue-500 group-hover:text-blue-700 transition-colors">How to submit a refund for a flight ticket</span>
                                        <i class="fa fa-chevron-right text-gray-300 group-hover:text-blue-400 text-xs transition-colors"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="flex items-center justify-between px-4 py-3 group hover:bg-blue-50 transition-colors">
                                        <span class="text-sm/6 font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500 transition-colors">How to Correct a Flight Passenger Name</span>
                                        <i class="fa fa-chevron-right text-gray-300 group-hover:text-blue-400 text-xs transition-colors"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="flex items-center justify-between px-4 py-3 group hover:bg-blue-50 transition-colors">
                                        <span class="text-sm/6 font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500 transition-colors">Traveloka Refund Promise</span>
                                        <i class="fa fa-chevron-right text-gray-300 group-hover:text-blue-400 text-xs transition-colors"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="flex items-center justify-between px-4 py-3 group hover:bg-blue-50 transition-colors">
                                        <span class="text-sm/6 font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500 transition-colors">How to Change Hotel Booking Dates</span>
                                        <i class="fa fa-chevron-right text-gray-300 group-hover:text-blue-400 text-xs transition-colors"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="flex items-center justify-between px-4 py-3 group hover:bg-blue-50 transition-colors">
                                        <span class="text-sm/6 font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500 transition-colors">Payment Methods and Troubleshooting</span>
                                        <i class="fa fa-chevron-right text-gray-300 group-hover:text-blue-400 text-xs transition-colors"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> 
                    </div>                       
                    
                    <div class="mt-8">
                        <h2 class="text-lg font-semibold font-nunito tracking-wide leading-normal mb-1 text-gray-700">
                            Need More Assistance?
                        </h2>

                        <div class="text-sm/6 tracking-wide leading-normal font-normal text-gray-600 mb-3">
                            Didn't find the answer you need? Explore our support options below or reach out to us directly.
                        </div>

                        <div class="flex flex-col sm:flex-row gap-3">
                            <a href="/" class="inline-block px-2.5 py-1.5 rounded-full bg-blue-50 text-blue-500 font-semibold text-xs/6 tracking-wide leading-normal hover:bg-blue-100 transition-colors border border-blue-100">
                                Live Chat Support
                            </a>

                            <a href="/" class="inline-block px-2.5 py-1.5 rounded-full bg-green-50 text-green-600 font-semibold text-xs/6 tracking-wide leading-normal hover:bg-green-100 transition-colors border border-green-100">
                                Email Us
                            </a>

                            <a href="/" class="inline-block px-2.5 py-1.5 rounded-full bg-yellow-50 text-yellow-600 font-semibold text-xs/6 tracking-wide leading-normal hover:bg-yellow-100 transition-colors border border-yellow-100">
                                Call Center
                            </a>
                        </div>
                    </div>
                </div>       

                <div class="flex-1 flex flex-col items-start">
                    <h2 class="text-lg font-semibold font-nunito tracking-wide leading-normal mb-5 text-gray-700 text-left">
                        Explore by Product
                    </h2>
                
                    <div id="productGrid" class="grid grid-cols-3 sm:grid-cols-5 gap-x-8 gap-y-7 justify-start">
                    
                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-blue-50 mb-1.5">
                                <i class="fa fa-globe text-xl text-blue-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">
                                General<br>Information
                            </span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-green-50 mb-1.5">
                                <i class="fa fa-user text-xl text-green-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">
                                Profile and <br>Security
                            </span>
                        </a>
                        
                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-yellow-50 mb-1.5">
                                <i class="fa fa-plane text-xl text-yellow-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Flights</span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-pink-50 mb-1.5">
                                <i class="fa fa-hotel text-xl text-pink-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Hotels</span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-purple-50 mb-1.5">
                                <i class="fa fa-car text-xl text-purple-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Cars</span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-orange-50 mb-1.5">
                                <i class="fa fa-map-marker-alt text-xl text-orange-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Activities</span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-red-50 mb-1.5">
                                <i class="fa fa-box text-xl text-red-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Packages</span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-teal-50 mb-1.5">
                                <i class="fa fa-passport text-xl text-teal-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Visa</span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-indigo-50 mb-1.5">
                                <i class="fa fa-shield-alt text-xl text-indigo-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Insurance</span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-lime-50 mb-1.5">
                                <i class="fa fa-credit-card text-xl text-lime-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Payment</span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-cyan-50 mb-1.5">
                                <i class="fa fa-gift text-xl text-cyan-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Promotions</span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-fuchsia-50 mb-1.5">
                                <i class="fa fa-headset text-xl text-fuchsia-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Customer<br>Support</span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-amber-50 mb-1.5">
                                <i class="fa fa-train text-xl text-amber-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Trains</span>
                        </a>

                        <a href="#" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-rose-50 mb-1.5">
                                <i class="fa fa-ship text-xl text-rose-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Ferries</span>
                        </a>

                        <a href="#" id="openAllProducts" class="flex flex-col items-center group">
                            <span class="flex items-center justify-center w-11 h-11 rounded-full bg-blue-50 mb-1.5">
                                <i class="fa fa-th text-xl text-blue-500"></i>
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight">
                                All<br>Products
                            </span>
                        </a>
                    </div>
                </div> 
            </div>       
        </div>       
    </section>
    
    @include('components.modals.helpcenter-modal')


@endsection