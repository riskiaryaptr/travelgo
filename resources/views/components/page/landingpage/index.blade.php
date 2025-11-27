@extends('components.layout.master')

@section('content')


    <main>

        <!-- banner -->
        <div class="relative pb-12">          
            <div class="relative w-full">
                <div class="inset-x-0 mx-auto w-full">                    
                    <div class="swiper-container relative overflow-hidden shadow-sm">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide relative">
                                <img src="{{ asset('assets/promo/banner-1.jpg') }}" alt="Smart Library System" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/4"></div>
                            </div>  

                            <div class="swiper-slide relative">
                                <img src="{{ asset('assets/promo/banner-2.jpg') }}" alt="Smart Library System" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/4"></div>
                            </div>  
                           
                            <div class="swiper-slide relative">
                                <img src="{{ asset('assets/promo/banner-3.jpg') }}" alt="Smart Library System" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/4"></div>
                            </div> 
                        </div>
                    </div>
                </div> 
                
                <div class="relative z-30 -mt-5 px-2 flex justify-center">
                    <div class="bg-white shadow-md rounded-xl px-4 py-4 max-w-6xl w-full mx-auto">
                        <div class="border-b border-gray-200 pb-3 relative">                            
                            <div id="gradient-left" class="absolute left-0 top-0 bottom-0 w-16 bg-gradient-to-r from-white to-transparent z-5 pointer-events-none opacity-0 transition-opacity duration-200"></div>                                                    
                            <div id="gradient-right" class="absolute right-0 top-0 bottom-0 w-16 bg-gradient-to-l from-white to-transparent z-5 pointer-events-none opacity-0 transition-opacity duration-200"></div>                            
                            
                            <button id="scroll-prev" class="absolute left-2 top-1/2 transform -translate-y-1/2 z-10 bg-white shadow-md rounded-full p-2 hover:bg-gray-100 transition-colors duration-200">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            
                            <div id="scroll-container" class="overflow-x-auto scroll-smooth">
                                <nav class="flex space-x-1 min-w-max" aria-label="Travel categories">
                                    <button class="flex items-center px-4 py-1 text-sm font-medium rounded-full bg-blue-50 text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-17.webp') }}" alt="Hotels & Homes" class="h-7 w-7 mr-2">
                                        <span>Hotels</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-16.webp') }}" alt="Flights" class="h-7 w-7 mr-2">
                                        <span>Flights</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-18.webp') }}" alt="Trains" class="h-7 w-7 mr-2">
                                        <span>Trains</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-24.webp') }}" alt="Car Rental" class="h-7 w-7 mr-2">
                                        <span>Car Rental</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-21.webp') }}" alt="Attractions & Tours" class="h-7 w-7 mr-2">
                                        <span>Woosh</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-22.webp') }}" alt="Attractions & Tours" class="h-7 w-7 mr-2">
                                        <span>Bus & Hotels</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-23.webp') }}" alt="Attractions & Tours" class="h-7 w-7 mr-2">
                                        <span>To Do</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-19.webp') }}" alt="Attractions & Tours" class="h-7 w-7 mr-2">
                                        <span>Vila & Apt.</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-20.webp') }}" alt="Attractions & Tours" class="h-7 w-7 mr-2">
                                        <span>Cruise ship</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-25.webp') }}" alt="Attractions & Tours" class="h-7 w-7 mr-2">
                                        <span>Airport Pickup</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-26.webp') }}" alt="Attractions & Tours" class="h-7 w-7 mr-2">
                                        <span>Events</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-11.webp') }}" alt="Attractions & Tours" class="h-7 w-7 mr-2">
                                        <span>Flight TBD</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-28.webp') }}" alt="Attractions & Tours" class="h-7 w-7 mr-2">
                                        <span>Visa Protection</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-27.webp') }}" alt="Attractions & Tours" class="h-7 w-7 mr-2">
                                        <span>Gift Card</span>
                                    </button>

                                    <button class="flex items-center px-4 py-1 text-sm/6 leading-normal font-medium rounded-full text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-50 hover:text-blue-500">
                                        <img src="{{ asset('assets/icon/icon-29.webp') }}" alt="Attractions & Tours" class="h-7 w-7 mr-2">
                                        <span>Trip Guide</span>
                                    </button>
                                </nav>
                            </div>
                            
                            <button id="scroll-next" class="absolute right-2 top-1/2 transform -translate-y-1/2 z-10 bg-white shadow-md rounded-full p-2 hover:bg-gray-100 transition-colors duration-200">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>   

                        <form class="grid grid-cols-1 lg:grid-cols-2 lg:grid-cols-4 gap-5 mt-5">
                            <div class="lg:col-span-4 mb-2">
                                <div class="flex flex-nowrap gap-2 mb-1 overflow-x-auto lg:flex-wrap lg:overflow-x-visible scrollbar-hide scroll-smooth snap-x snap-mandatory">
                                   <button type="button" class="px-8 py-1 text-sm font-semibold rounded-full bg-blue-500 text-white category-btn" data-category="all">
                                        All
                                    </button>

                                    <button type="button" class="px-8 py-1 text-sm font-semibold rounded-full bg-gray-100 text-gray-600 hover:bg-blue-50 category-btn" data-category="hotels">
                                        Hotels
                                    </button>

                                    <button type="button" class="px-8 py-1 text-sm font-semibold rounded-full bg-gray-100 text-gray-600 hover:bg-blue-50 category-btn" data-category="villa">
                                        Villa
                                    </button>

                                    <button type="button" class="px-8 py-1 text-sm font-semibold rounded-full bg-gray-100 text-gray-600 hover:bg-blue-50 category-btn" data-category="apartment">
                                        Apartment
                                    </button>
                                </div>
                            </div>

                            <div class="relative airport-wrapper">
                                <label id="destination-label" class="block text-sm/6 leading-normal tracking-wide font-semibold text-gray-500 mb-3">
                                    City, destination, or hotel name
                                </label>
                                <div class="relative">
                                    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                        </svg>
                                    </div>
                                    <input type="text" class="airport-input w-full border border-gray-300 rounded-lg pl-10 pr-3 py-3.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-sm/6 placeholder:tracking-wide placeholder:text-gray-600 placeholder:font-normal" placeholder="City, Hotel, Place to go" autocomplete="off">
                                </div>

                                <div class="airport-dropdown absolute mt-3 left-0 w-full lg:w-[550px] bg-white border border-gray-200 rounded-lg shadow-lg hidden z-15 transition-all duration-200">
                                    <div class="flex items-center px-4 py-4 border-b border-gray-200 font-bold text-sm/6 text-blue-500">                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-4 w-4 text-blue-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                        </svg>
                                        <span>Popular Destinations</span>
                                    </div>

                                    <ul class="max-h-77 overflow-y-auto text-sm/6 leading-normal text-gray-600 no-scrollbar">
                                        <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                            <div class="flex justify-between items-start">
                                                <div class="flex-1">
                                                    <div class="flex items-center space-x-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-4 w-4 text-gray-400">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                        </svg>
                                                        <span class="font-semibold text-gray-800">Bandung</span>
                                                    </div>
                                                    <div class="text-xs text-gray-500 pl-7">West Java, Indonesia</div>
                                                </div>                                                                                       
                                                <div class="flex flex-col items-end mt-1">
                                                    <span class="text-xs font-semibold text-gray-500">City</span>
                                                    <span class="text-[11px] text-gray-400">(2.299 hotels)</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                            <div class="flex justify-between items-start">
                                                <div class="flex-1">
                                                    <div class="flex items-center space-x-4">
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-4 w-4 text-gray-400">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                        </svg>
                                                        <span class="font-semibold text-gray-800">Bali</span>
                                                    </div>
                                                    <div class="text-xs text-gray-500 pl-7">Indonesia</div>
                                                </div>                                       
                                                <div class="flex flex-col items-end mt-1">
                                                    <span class="text-xs font-semibold text-gray-500">Region</span>
                                                    <span class="text-[11px] text-gray-400">(5.799 hotels)</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                            <div class="flex justify-between items-start">
                                                <div class="flex-1">
                                                    <div class="flex items-center space-x-4">
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-4 w-4 text-gray-400">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                        </svg>
                                                        <span class="font-semibold text-gray-800">Surabaya</span>
                                                    </div>
                                                    <div class="text-xs text-gray-500 pl-7">East Java, Indonesia</div>
                                                </div>                                        
                                                <div class="flex flex-col items-end mt-1">
                                                    <span class="text-xs font-semibold text-gray-500">Region</span>
                                                    <span class="text-[11px] text-gray-400">(5.180 hotels)</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                            <div class="flex justify-between items-start">
                                                <div class="flex-1">
                                                    <div class="flex items-center space-x-4">
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-4 w-4 text-gray-400">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                        </svg>
                                                        <span class="font-semibold text-gray-800">Jakarta</span>
                                                    </div>
                                                    <div class="text-xs text-gray-500 pl-7">Indonesia</div>
                                                </div>                                         
                                                <div class="flex flex-col items-end mt-1">
                                                    <span class="text-xs font-semibold text-gray-500">Region</span>
                                                    <span class="text-[11px] text-gray-400">(4.680 hotels)</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                            <div class="flex justify-between items-start">
                                                <div class="flex-1">
                                                    <div class="flex items-center space-x-4">
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-4 w-4 text-gray-400">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                        </svg>
                                                        <span class="font-semibold text-gray-800">Yogyakarta</span>
                                                    </div>
                                                    <div class="text-xs text-gray-500 pl-7">Special Reglon of Yogyakarta,Indonesia</div>
                                                </div>                                           
                                                <div class="flex flex-col items-end mt-1">
                                                    <span class="text-xs font-semibold text-gray-500">City</span>
                                                    <span class="text-[11px] text-gray-400">(9.380 hotels)</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                            <div class="flex justify-between items-start">
                                                <div class="flex-1">
                                                    <div class="flex items-center space-x-4">
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-4 w-4 text-gray-400">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                        </svg>
                                                        <span class="font-semibold text-gray-800">Hongkong</span>
                                                    </div>
                                                    <div class="text-xs text-gray-500 pl-7">Hongkong, China</div>
                                                </div>                                              
                                                <div class="flex flex-col items-end mt-1">
                                                    <span class="text-xs font-semibold text-gray-500">Region</span>
                                                    <span class="text-[11px] text-gray-400">(1.016 hotels)</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                            <div class="flex justify-between items-start">
                                                <div class="flex-1">
                                                    <div class="flex items-center space-x-4">
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-4 w-4 text-gray-400">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                        </svg>
                                                        <span class="font-semibold text-gray-800">Kuala Lumpur</span>
                                                    </div>
                                                    <div class="text-xs text-gray-500 pl-7">Kuala Lumpur, Malaysia</div>
                                                </div>                                                
                                                <div class="flex flex-col items-end mt-1">
                                                    <span class="text-xs font-semibold text-gray-500">City</span>
                                                    <span class="text-[11px] text-gray-400">(4589 hotels)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="relative">
                                <label class="block text-sm/6 leading-normal tracking-wide font-semibold text-gray-500 mb-3">
                                    Check-in & Check-out Dates
                                </label>
                                <div class="relative">
                                    <div class="relative w-full cursor-pointer" onclick="toggledoubleinCalendar()">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                        </svg>

                                        <input id="double-checkin-display" type="text" readonly class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-3.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400" value="Wed, 15 Oct 2025 - Fri, 17 Oct 2025">
                                    </div>

                                    <input id="double-checkin-date" type="hidden" value="2025-10-15" />
                                    <input id="double-checkout-date" type="hidden" value="2025-10-17" />

                                    <div id="double-checkin-calendar" class="absolute z-50 mt-3 left-0 w-full bg-white rounded-2xl shadow-xl py-4 px-4 hidden transition-all border border-gray-200 overflow-visible lg:w-[560px] lg:left-0 md:left-0 sm:right-0 sm:left-auto xs:right-0 xs:left-auto xs:px-3 xs:py-3">
                                        <h3 class="text-base font-semibold text-gray-600 mb-4">
                                            Stay Date
                                        </h3>
                                        <div class="mt-3 pt-3 border-t border-gray-200 border-b border-gray-200 pb-4">
                                            <div class="grid grid-cols-2 gap-4">
                                                <div class="text-gray-600">
                                                    <span class="font-medium text-xs">Check-in:</span>
                                                    <span id="selected-checkin-double" class="block text-sm font-semibold mt-1">
                                                        Wed, 15 Oct 2025
                                                    </span>
                                                </div>
                                                <div class="text-gray-600">
                                                    <span class="font-medium text-xs">Check-out:</span>
                                                    <span id="selected-checkout-double" class="block text-sm font-semibold mt-1">
                                                        -
                                                    </span>
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-5">
                                            <div>
                                                <div class="flex justify-between items-center mb-4">
                                                    <button type="button" onclick="event.preventDefault(); previousMonth('double')" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                                        </svg>
                                                    </button>
                                                    <h3 id="current-month-year" class="text-base font-semibold text-gray-800">
                                                        December 2025
                                                    </h3>
                                                    <button type="button" onclick="event.preventDefault(); nextMonth('double')" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div class="grid grid-cols-7 mb-3 text-xs font-medium text-gray-600">
                                                    <div class="text-center">Mon</div>
                                                    <div class="text-center">Tue</div>
                                                    <div class="text-center">Wed</div>
                                                    <div class="text-center">Thu</div>
                                                    <div class="text-center">Fri</div>
                                                    <div class="text-center">Sat</div>
                                                    <div class="text-center">Sun</div>
                                                </div>
                                                <div id="checkin-days-current-double" class="grid grid-cols-7 gap-3"></div>
                                            </div>

                                            <div>
                                                <div class="flex justify-between items-center mb-4">
                                                    <button type="button" onclick="event.preventDefault(); previousMonth('double')" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                                        </svg>
                                                    </button>
                                                    <h3 id="checkout-month-year-double" class="text-base font-semibold text-gray-800">
                                                        December 2025
                                                    </h3>
                                                    <button type="button" onclick="event.preventDefault(); nextMonth('double')" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div class="grid grid-cols-7 mb-3 text-xs font-medium text-gray-600">
                                                    <div class="text-center">Mon</div>
                                                    <div class="text-center">Tue</div>
                                                    <div class="text-center">Wed</div>
                                                    <div class="text-center">Thu</div>
                                                    <div class="text-center">Fri</div>
                                                    <div class="text-center">Sat</div>
                                                    <div class="text-center">Sun</div>
                                                </div>

                                                <div id="checkout-days-current-double" class="grid grid-cols-7 gap-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative">
                                <label class="block text-sm/6 leading-normal tracking-wide font-semibold text-gray-500 mb-3">
                                   Guests and Rooms
                                </label>
                                <div class="relative">
                                    <div class="w-full cursor-pointer" onclick="toggleGuestsRoomsDropdown()">                                   
                                        <i class="fa fa-users absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                        <input id="guests-rooms" type="text" class="w-full border border-gray-300 rounded-lg pl-10 pr-10 py-3.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400" value="2 Adult(s), 0 Child, 1 Room" readonly />
                                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                    
                                    <div id="guests-rooms-dropdown" class="absolute mt-3 left-0 w-full bg-white border border-gray-200 rounded-lg shadow-lg hidden z-20">
                                        <div class="p-4">
                                            <div class="flex items-center justify-between mb-4">
                                                <div>
                                                    <div class="text-sm/6 font-medium leading-normal tracking-wide text-gray-700">
                                                        <span>Adults</span>
                                                    </div>
                                                    <div class="text-xs/6 text-gray-500 leading-normal tracking-wide">
                                                        Ages 13 or above
                                                    </div>
                                                </div>

                                                <div class="flex items-center gap-3">
                                                    <button type="button" onclick="decrementGuests('adults')" class="w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                                        </svg>
                                                    </button>

                                                    <span id="adults-count" class="w-8 text-center text-sm font-medium">2</span>

                                                    <button type="button" onclick="incrementGuests('adults')" class="w-8 h-8 rounded-full border border-blue-500 flex items-center justify-center hover:bg-blue-50 transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div class="flex items-center justify-between mb-4">
                                                <div>
                                                    <div class="text-sm font-medium leading-normal tracking-wide text-gray-700">
                                                        <span>Children</span>
                                                    </div>
                                                    <div class="text-xs/6 text-gray-500 leading-normal tracking-wide">
                                                        Ages 2-12
                                                    </div>
                                                </div>

                                                <div class="flex items-center gap-3">
                                                    <button type="button" onclick="decrementGuests('children')" class="w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                                        </svg>
                                                    </button>

                                                    <span id="children-count" class="w-8 text-center text-sm font-medium">0</span>
                                                    
                                                    <button type="button" onclick="incrementGuests('children')" class="w-8 h-8 rounded-full border border-blue-500 flex items-center justify-center hover:bg-blue-50 transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div class="flex items-center justify-between mb-4">
                                                <div>
                                                    <div class="text-sm/6 font-medium leading-normal tracking-wide text-gray-700">
                                                        <span>Rooms</span>
                                                    </div>
                                                    <div class="text-xs/6 text-gray-500 leading-normal tracking-wide">
                                                        Number of rooms
                                                    </div>
                                                </div>

                                                <div class="flex items-center gap-3">
                                                    <button type="button" onclick="decrementGuests('rooms')" class="w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                                        </svg>
                                                    </button>

                                                    <span id="rooms-count" class="w-8 text-center text-sm font-medium">1</span>

                                                    <button type="button" onclick="incrementGuests('rooms')" class="w-8 h-8 rounded-full border border-blue-500 flex items-center justify-center hover:bg-blue-50 transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div class="pt-3 border-t border-gray-200">
                                                <button type="button" onclick="applyGuestsRooms()" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg text-sm font-medium hover:bg-blue-600 transition-colors">
                                                    Apply
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-end">
                                <button type="submit" class="w-full bg-blue-500 text-white px-8 py-3.5 rounded-lg font-semibold text-[15px] flex items-center justify-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                                    </svg>
                                    <span>Search</span>
                                </button>
                            </div>
                        </form>

                        <div class="mt-6 px-2">
                            <div class="border-t border-gray-200 pt-4">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('assets/icon/icon-12.webp') }}" alt="Promo" class="w-6 h-6 object-contain">
                                        <p class="text-sm/6 text-gray-700 leading-relaxed">
                                            <span>Discover the hotel deals and promos to make your stay even more affordable.</span>

                                            <a href="/" class="text-blue-500 text-xs/6 font-bold tracking-wide leading-normal">
                                                <span>Check the hotel promos now!</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- promotion -->
        <div class="relative max-w-6xl mx-auto">
            <button id="prevBtn" class="absolute left-0 xl:-left-3 top-1/2 -translate-y-1/2 z-20 bg-white text-blue-500 p-1.5 rounded-full shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <div class="xl:-mx-2 overflow-hidden">
                <div id="carousel" class="flex transition-transform duration-500 ease-in-out h-full">
                    <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                        <a href="#" class="block w-full h-full">
                            <img src="{{ asset('assets/promo/promo-1.jpg') }}" alt="Allo Bank" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                        </a>
                    </div>

                    <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                        <a href="#" class="block w-full h-full">
                            <img src="{{ asset('assets/promo/promo-2.jpg') }}" alt="Go Thailand" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                        </a>
                    </div>

                    <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                        <a href="#" class="block w-full h-full">
                            <img src="{{ asset('assets/promo/promo-3.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                        </a>
                    </div>

                    <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                        <a href="#" class="block w-full h-full">
                            <img src="{{ asset('assets/promo/promo-4.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                        </a>
                    </div>

                    <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                        <a href="#" class="block w-full h-full">
                            <img src="{{ asset('assets/promo/promo-5.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                        </a>
                    </div>

                    <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                        <a href="#" class="block w-full h-full">
                            <img src="{{ asset('assets/promo/promo-6.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                        </a>
                    </div>

                    <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                        <a href="#" class="block w-full h-full">
                            <img src="{{ asset('assets/promo/promo-7.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                        </a>
                    </div>

                    <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                        <a href="#" class="block w-full h-full">
                            <img src="{{ asset('assets/promo/promo-8.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                        </a>
                    </div>
                </div>
            </div>

            <button id="nextBtn" class="absolute right-0 xl:-right-3 top-1/2 -translate-y-1/2 z-20 bg-white text-blue-500 p-1.5 rounded-full shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>


        <!-- area card hotel -->
        <div class="relative max-w-6xl mx-auto mt-14">
            <div class="xl:-mx-2 px-2">   
                <div class="flex items-center gap-2 mb-1">
                    <img src="{{ asset('assets/icon/icon-8.webp') }}" alt="Gift Icon" class="w-8 h-8">
                    <h2 class="text-[21px] font-semibold font-nunito leading-normal tracking-wide text-gray-700">
                        11.11 Best Deals
                    </h2>
                </div>

                <p class="text-gray-500 text-sm/6 font-semibold tracking-wide mb-6 leading-relaxed max-w-3xl">
                    Explore the best limited-time offers to make your <span class="text-blue-500">travel experience.</span>
                </p>

                <div class="mb-4">
                    <div class="overflow-x-auto no-scrollbar">
                        <div class="flex flex-nowrap gap-3 w-max">
                            <button class="flex-shrink-0 px-10 py-1.5 text-white font-semibold text-sm bg-blue-500 rounded-full shadow-sm">
                                <span>Hotel</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Flights</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Xperience</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Cars</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Activities</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Insurance</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-3 py-6">
                
                    <!-- card 1 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-2.jpg') }}" alt="The Ritz-Carlton, Nusa Dua" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-red-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                20% OFF
                            </div>
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">The Ritz-Carlton, Nusa Dua</h3>
                                <div class="flex items-center text-gray-500 text-sm/6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <span class="line-clamp-1 text-xs/6 font-semibold leading-normal">
                                        Nusa Dua, Bali
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <div class="flex text-amber-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide ml-1.5">
                                        9.5
                                    </span>
                                </div>

                                <span class="text-gray-400 text-xs/6 font-medium leading-normal tracking-wide">
                                    (4,128 reviews)
                                </span>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 5,800,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 4,640,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Per night
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Free Cancellation
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div> 

                    <!-- card 2 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-3.jpg') }}" alt="The Mulia Bali" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-purple-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                Luxury Pick
                            </div>
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">The Mulia Bali</h3>
                                <div class="flex items-center text-gray-500 text-sm/6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <span class="line-clamp-1 text-xs/6 font-semibold leading-normal">
                                        Nusa Dua, Bali
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <div class="flex text-amber-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide ml-1.5">
                                        9.7
                                    </span>
                                </div>

                                <span class="text-gray-400 text-xs/6 font-medium leading-normal tracking-wide">
                                    (5,421 reviews)
                                </span>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 7,200,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 6,480,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Per night
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Free Cancellation
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>  

                    <!-- card 3 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-4.jpg') }}" alt="Ayana Resort and Spa Bali" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-orange-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                Popular
                            </div>

                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Ayana Resort and Spa Bali</h3>
                                <div class="flex items-center text-gray-500 text-sm/6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <span class="line-clamp-1 text-xs/6 font-semibold leading-normal">
                                        Jimbaran, Bali
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <div class="flex text-amber-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide ml-1.5">
                                        9.1
                                    </span>
                                </div>

                                <span class="text-gray-400 text-xs/6 font-medium leading-normal tracking-wide">
                                    (6,328 reviews)
                                </span>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 5,500,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 4,675,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Per night
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Free Cancellation
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>   

                    <!-- card 4 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-5.jpg') }}" alt="Ayana Resort and Spa Bali" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-orange-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                Beast Deals
                            </div>
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Mulia Resort, Nusa Dua</h3>
                                <div class="flex items-center text-gray-500 text-sm/6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <span class="line-clamp-1 text-xs/6 font-semibold leading-normal">
                                        Nusa Dua, Bali
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <div class="flex text-amber-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide ml-1.5">
                                        8.9
                                    </span>
                                </div>

                                <span class="text-gray-400 text-xs/6 font-medium leading-normal tracking-wide">
                                    (2,817 reviews)
                                </span>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 3,800,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 3,230,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Per night
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Free Cancellation
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>


        <!-- area cupon -->
        <div class="relative max-w-6xl mx-auto mt-10">
            <div class="xl:-mx-2 px-2"> 
                <div class="flex items-center gap-2 mb-1">
                    <img src="{{ asset('assets/icon/icon-10.webp') }}" alt="Gift Icon" class="w-8 h-8">
                    <h2 class="text-[21px] font-semibold font-nunito leading-normal tracking-wide text-gray-700">
                        8% New User Coupons
                    </h2>
                </div>

                <p class="text-gray-500 text-sm/6 font-semibold tracking-wide mb-6 leading-relaxed max-w-3xl">
                    Get 8% off your first <span class="text-blue-500">trip with TravelGo</span>
                </p>

                <div class="relative overflow-hidden -mx-2">
                    <button id="prevBtnCupon" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white text-blue-500 p-1.5 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    
                    <div class="overflow-hidden pb-1">
                        <div id="carousel-cupon" class="flex transition-transform duration-500 ease-in-out">
                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 px-2">
                                <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 p-4 h-full flex flex-col">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-8 h-8 flex items-center justify-center bg-blue-50 text-blue-600 rounded-full">
                                                    <i class="fa-solid fa-hotel text-sm"></i>
                                                </div>
                                                <h3 class="text-sm/6 font-semibold text-gray-600 leading-normal tracking-wide">
                                                    Save up to 8% on Your First Booking
                                                </h3>
                                            </div>
                                            <i class="fa-regular fa-circle-question text-gray-400 text-sm"></i>
                                        </div>

                                        <p class="text-xs text-gray-500 font-semibold leading-normal tracking-wide mb-5">
                                            Valid for New Users In App Only
                                        </p>
                                    </div>

                                    <div class="mt-auto">
                                        <div class="relative pt-4 border-t border-dashed border-gray-200">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center bg-blue-50 rounded-lg w-full mr-2 py-1.5">
                                                    <i class="fa-regular fa-copy ml-3 text-blue-500 text-sm"></i>
                                                    <span class="font-semibold text-blue-700 text-sm ml-2 truncate">
                                                        JALANYUK
                                                    </span>
                                                </div>
                                                <button class="bg-blue-100 hover:bg-blue-200 text-blue-600 font-semibold text-xs px-3 py-1.5 rounded-full transition whitespace-nowrap ml-2">
                                                    Copy
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 px-2">
                                <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 p-4 h-full flex flex-col">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-8 h-8 flex items-center justify-center bg-green-50 text-green-600 rounded-full">
                                                    <i class="fa-solid fa-plane-departure text-sm"></i>
                                                </div>
                                                <h3 class="text-sm/6 font-semibold text-gray-600 leading-normal tracking-wide">
                                                    Flight Discount 8% for New Users
                                                </h3>
                                            </div>
                                            <i class="fa-regular fa-circle-question text-gray-400 text-sm"></i>
                                        </div>

                                        <p class="text-xs text-gray-500 font-semibold leading-normal tracking-wide mb-5">
                                            Minimum purchase Rp 2.000.000
                                        </p>
                                    </div>

                                    <div class="mt-auto">
                                        <div class="relative pt-4 border-t border-dashed border-gray-200">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center bg-green-50 rounded-lg w-full mr-2 py-1.5">
                                                    <i class="fa-regular fa-copy ml-3 text-green-500 text-sm"></i>
                                                    <span class="font-semibold text-green-700 text-sm ml-2 truncate">
                                                        FLYNOW
                                                    </span>
                                                </div>
                                                <button class="bg-green-100 hover:bg-green-200 text-green-600 font-semibold text-xs px-3 py-1.5 rounded-full transition whitespace-nowrap ml-2">
                                                    Copy
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 px-2">
                                <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 p-4 h-full flex flex-col">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-8 h-8 flex items-center justify-center bg-orange-50 text-orange-600 rounded-full">
                                                    <i class="fa-solid fa-utensils text-sm"></i>
                                                </div>
                                                <h3 class="text-sm/6 font-semibold text-gray-600 leading-normal tracking-wide">
                                                    15% Off Food & Beverage
                                                </h3>
                                            </div>
                                            <i class="fa-regular fa-circle-question text-gray-400 text-sm"></i>
                                        </div>

                                        <p class="text-xs text-gray-500 font-semibold leading-normal tracking-wide mb-5">
                                            At selected hotel restaurants
                                        </p>
                                    </div>

                                    <div class="mt-auto">
                                        <div class="relative pt-4 border-t border-dashed border-gray-200">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center bg-orange-50 rounded-lg w-full mr-2 py-1.5">
                                                    <i class="fa-regular fa-copy ml-3 text-orange-500 text-sm"></i>
                                                    <span class="font-semibold text-orange-700 text-sm ml-2 truncate">
                                                        DINEDEAL
                                                    </span>
                                                </div>
                                                <button class="bg-orange-100 hover:bg-orange-200 text-orange-600 font-semibold text-xs px-3 py-1.5 rounded-full transition whitespace-nowrap ml-2">
                                                    Copy
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 px-2">
                                <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 p-4 h-full flex flex-col">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-8 h-8 flex items-center justify-center bg-yellow-50 text-yellow-600 rounded-full">
                                                    <i class="fa-solid fa-car text-sm"></i>
                                                </div>
                                                <h3 class="text-sm/6 font-semibold text-gray-600 leading-normal tracking-wide">
                                                    Get 15% Off Car Rentals
                                                </h3>
                                            </div>
                                            <i class="fa-regular fa-circle-question text-gray-400 text-sm"></i>
                                        </div>

                                        <p class="text-xs text-gray-500 font-semibold leading-normal tracking-wide mb-5">
                                            For rentals of 3+ days, selected providers only
                                        </p>
                                    </div>

                                    <div class="mt-auto">
                                        <div class="relative pt-4 border-t border-dashed border-gray-200">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center bg-yellow-50 rounded-lg w-full mr-2 py-1.5">
                                                    <i class="fa-regular fa-copy ml-3 text-yellow-500 text-sm"></i>
                                                    <span class="font-semibold text-yellow-700 text-sm ml-2 truncate">
                                                        DRIVENOW
                                                    </span>
                                                </div>
                                                <button class="bg-yellow-100 hover:bg-yellow-200 text-yellow-600 font-semibold text-xs px-3 py-1.5 rounded-full transition whitespace-nowrap ml-2">
                                                    Copy
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 px-2">
                                <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 p-4 h-full flex flex-col">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-8 h-8 flex items-center justify-center bg-red-50 text-red-600 rounded-full">
                                                    <i class="fa-solid fa-mountain-sun text-sm"></i>
                                                </div>
                                                <h3 class="text-sm/6 font-semibold text-gray-600 leading-normal tracking-wide">
                                                    20% Off Activities & Tours
                                                </h3>
                                            </div>
                                            <i class="fa-regular fa-circle-question text-gray-400 text-sm"></i>
                                        </div>

                                        <p class="text-xs text-gray-500 font-semibold leading-normal tracking-wide mb-5">
                                            For bookings over Rp 1.000.000, limited time offer
                                        </p>
                                    </div>

                                    <div class="mt-auto">
                                        <div class="relative pt-4 border-t border-dashed border-gray-200">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center bg-red-50 rounded-lg w-full mr-2 py-1.5">
                                                    <i class="fa-regular fa-copy ml-3 text-red-500 text-sm"></i>
                                                    <span class="font-semibold text-red-700 text-sm ml-2 truncate">
                                                        ADVENTURE20
                                                    </span>
                                                </div>
                                                <button class="bg-red-100 hover:bg-red-200 text-red-600 font-semibold text-xs px-3 py-1.5 rounded-full transition whitespace-nowrap ml-2">
                                                    Copy
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button id="nextBtnCupon" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white text-blue-500 p-1.5 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>


        <!-- flight internasional -->
        <div class="relative max-w-6xl mx-auto mt-16">
            <div class="xl:-mx-2 px-2">   
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/icon/icon-11.webp') }}" alt="Discover" class="w-10 h-10">
                    <h2 class="text-[21px] font-semibold font-nunito leading-normal tracking-wide text-gray-700">
                        Best Flight Offers
                    </h2>
                </div>

                <p class="text-gray-500 text-sm/6 font-semibold tracking-wide mb-5">
                    Great prices for your <span class="text-blue-500">next journey</span>
                </p>

                <div class="mb-4">
                    <div class="overflow-x-auto no-scrollbar">
                        <div class="flex flex-nowrap gap-3 w-max">
                            <button class="flex-shrink-0 px-10 py-1.5 text-white font-semibold text-sm bg-blue-500 rounded-full shadow-sm">
                                <span>Singapura</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Malaysia</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Japan</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Thailand</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>South Korea</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Europe</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-3 py-6">
                
                    <!-- card 1 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-6.jpg') }}" alt="The Ritz-Carlton, Nusa Dua" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-red-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                Round Trip
                            </div>
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Jakarta - Singapura</h3>                            
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide">
                                        10 - 15 Nov 2026
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 2,500,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 1,675,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Batik Air Flight
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Mobile Voucher
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div> 

                    <!-- card 2 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-7.jpg') }}" alt="The Mulia Bali" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-purple-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                Round Trip
                            </div>
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Jakarta - Singapura</h3>                           
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide">
                                        3 - 15 februari 2022
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 10,500,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 7,675,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Citilink Flight
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Mobile Voucher
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>  

                    <!-- card 3 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-8.jpg') }}" alt="Ayana Resort and Spa Bali" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-orange-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                Round Trip
                            </div>
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Jakarta - Singapura</h3>                           
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide">
                                        10 - 15 Januari 2024
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 3,500,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 2,675,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        AirAsia Flight
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Mobile Voucher
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>    

                    <!-- card 4 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-9.jpg') }}" alt="Ayana Resort and Spa Bali" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-orange-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                Round Trip
                            </div>
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Jakarta - Singapura</h3>                           
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide">
                                        8 - 20 Januari 2023
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 3,800,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 3,230,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Trans Nusa Flight
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Mobile Voucher
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div>
        </div>


        <!-- promotion fligth -->
        <div class="relative max-w-6xl mx-auto mt-10">
            <div class="xl:-mx-2 px-2">   
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/icon/icon-7.webp') }}" alt="Discover" class="w-10 h-10">
                    <h2 class="text-[21px] font-semibold font-nunito leading-normal tracking-wide text-gray-700">
                        Fly More, Spend Less
                    </h2>
                </div>

                <p class="text-gray-500 text-sm/6 font-semibold tracking-wide mb-5">
                    Save more with <span class="text-blue-500">exclusive flight vouchers.</span>
                </p>

                <div class="mb-4">
                    <div class="overflow-x-auto no-scrollbar">
                        <div class="flex flex-nowrap gap-3 w-max">
                            <button class="flex-shrink-0 px-10 py-1.5 text-white font-semibold text-sm bg-blue-500 rounded-full shadow-sm">
                                <span>Domestic Flights</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>International Flights</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Last Minute Deals</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Airline Partners</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Premium Class</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="relative overflow-hidden py-6 -mx-2">
                    <button id="prevBtnBestDeals" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white text-blue-500 p-1.5 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    
                    <div class="overflow-hidden">
                        <div id="carousel-bestdeals" class="flex transition-transform duration-500 ease-in-out">
                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-15.jpg') }}" alt="Allo Bank" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-17.jpg') }}" alt="Go Thailand" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-18.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-16.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-19.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-20.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-21.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-22.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>
                        </div>
                    </div>

                    <button id="nextBtnBestDeals" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white text-blue-500 p-1.5 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- domestik flight -->
        <div class="relative max-w-6xl mx-auto mt-10">
            <div class="xl:-mx-2 px-2">   
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/icon/icon-9.webp') }}" alt="Discover" class="w-10 h-10">
                    <h2 class="text-[21px] font-semibold font-nunito leading-normal tracking-wide text-gray-700">
                        Domestic Flight Deals
                    </h2>
                </div>

                <p class="text-gray-500 text-sm/6 font-semibold tracking-wide mb-5">
                    Save more on your local <span class="text-blue-500">adventures</span>
                </p>

                <div class="mb-4">
                    <div class="overflow-x-auto no-scrollbar">
                        <div class="flex flex-nowrap gap-3 w-max">
                            <button class="flex-shrink-0 px-10 py-1.5 text-white font-semibold text-sm bg-blue-500 rounded-full shadow-sm">
                                <span>Jakarta</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Bandung</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Yogyakarta</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Semarang</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Surabaya</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Bali</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-3 py-6">
                
                    <!-- card 1 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-18.jpg') }}" alt="The Ritz-Carlton, Nusa Dua" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-red-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                One Way
                            </div>
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Pointianak - Jakarta</h3>                            
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide">
                                        10 - 15 Nov 2026
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 2,500,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 1,675,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Garuda Indonesia Flight
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Mobile Voucher
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div> 

                    <!-- card 2 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-19.jpg') }}" alt="The Mulia Bali" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-purple-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                One Way
                            </div>
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Pointianak - Jakarta</h3>                           
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide">
                                        3 - 15 februari 2022
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 10,500,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 7,675,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Citilink Flight
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Mobile Voucher
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- card 3 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-20.jpg') }}" alt="Ayana Resort and Spa Bali" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-orange-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                One Way
                            </div>
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Pointianak - Jakarta</h3>                           
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide">
                                        10 - 15 Januari 2024
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 3,500,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 2,675,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        AirAsia Flight
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Mobile Voucher
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>     

                    <!-- card 4 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-21.jpg') }}" alt="Ayana Resort and Spa Bali" class="w-full h-full object-cover">
                            
                            <div class="absolute top-4 left-0 bg-orange-500 text-white text-xs/6 font-bold leading-normal tracking-wide px-3 py-1 rounded-r-full">
                                One Way
                            </div>
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Pointianak - Jakarta</h3>                           
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide">
                                        8 - 20 Januari 2023
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 3,800,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 3,230,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Trans Nusa Flight
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Mobile Voucher
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>    
                </div> 
            </div>
        </div>


        <!-- promotion domestik -->
        <div class="relative max-w-6xl mx-auto mt-10">
            <div class="xl:-mx-2 px-2">   
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/icon/icon-7.webp') }}" alt="Discover" class="w-10 h-10">
                    <h2 class="text-[21px] font-semibold font-nunito leading-normal tracking-wide text-gray-700">
                        Discover Dream Destinations
                    </h2>
                </div>

                <p class="text-gray-500 text-sm/6 font-semibold tracking-wide mb-5">
                    Exclusive discounts <span class="text-blue-500">for your next getaway.</span>
                </p>

                <div class="mb-4">
                    <div class="overflow-x-auto no-scrollbar">
                        <div class="flex flex-nowrap gap-3 w-max">
                            <button class="flex-shrink-0 px-10 py-1.5 text-white font-semibold text-sm bg-blue-500 rounded-full shadow-sm">
                                <span>Beach Escapes</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>City Breaks</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>City Adventures</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Island Getaways</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Mountain Retreats</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="relative overflow-hidden py-6 -mx-2">
                    <button id="prevvilaapt" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white text-blue-500 p-1.5 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    
                    <div class="overflow-hidden">
                        <div id="carousel-vilaapt" class="flex transition-transform duration-500 ease-in-out">
                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-24.jpg') }}" alt="Allo Bank" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-25.jpg') }}" alt="Go Thailand" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-26.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-27.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-28.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-29.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-30.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 px-2">
                                <a href="#" class="block w-full h-full">
                                    <img src="{{ asset('assets/promo/promo-12.jpg') }}" alt="HSBC" class="w-full aspect-[16/8] object-cover rounded-xl hover:opacity-90 transition-opacity">
                                </a>
                            </div>
                        </div>
                    </div>

                    <button id="nextBtnvilaapt" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white text-blue-500 p-1.5 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        
        <!-- area villa -->
        <div class="relative max-w-6xl mx-auto mt-10">
            <div class="xl:-mx-2 px-2">   
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/icon/icon-12.webp') }}" alt="Discover" class="w-10 h-10">
                    <h2 class="text-[21px] font-semibold font-nunito leading-normal tracking-wide text-gray-700">
                        Diskon hingga 40% di Vila & Apt.
                    </h2>
                </div>

                <p class="text-gray-500 text-sm/6 font-semibold tracking-wide mb-5">
                    Find limited-time deals for <span class="text-blue-500">unforgettable travel.</span>
                </p>

                <div class="mb-4">
                    <div class="overflow-x-auto no-scrollbar">
                        <div class="flex flex-nowrap gap-3 w-max">
                            <button class="flex-shrink-0 px-10 py-1.5 text-white font-semibold text-sm bg-blue-500 rounded-full shadow-sm">
                                <span>Jakarta</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Semarang</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Surabaya</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Yogyakarta</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Bandung</span>
                            </button>

                            <button class="flex-shrink-0 px-10 py-1.5 text-blue-500 font-semibold text-sm bg-blue-50 rounded-full hover:bg-blue-100 transition">
                                <span>Bali</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-3 py-6">
                
                    <!-- card 1 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                       <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-10.jpg') }}" alt="The Ritz-Carlton, Nusa Dua" class="w-full h-full object-cover">

                            <img src="{{ asset('assets/icon/icon-13.webp') }}" alt="20% OFF" class="absolute bottom-0 left-0 h-7 w-auto rounded-tr-lg">
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Royal Samaja Villas</h3>
                                <div class="flex items-center text-gray-500 text-sm/6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <span class="line-clamp-1 text-xs/6 font-semibold leading-normal">
                                        Uluwatu, Badung
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <div class="flex text-amber-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide ml-1.5">
                                        9.5
                                    </span>
                                </div>

                                <span class="text-gray-400 text-xs/6 font-medium leading-normal tracking-wide">
                                    (4,128 reviews)
                                </span>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 5,800,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 4,640,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Nightly rate
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Not Including Tax
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div> 

                    <!-- card 2 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-11.jpg') }}" alt="The Ritz-Carlton, Nusa Dua" class="w-full h-full object-cover">

                            <img src="{{ asset('assets/icon/icon-14.webp') }}" alt="20% OFF" class="absolute bottom-0 left-0 h-7 w-auto rounded-tr-lg">
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Wooden Ganeca Villas by GenuineHost</h3>
                                <div class="flex items-center text-gray-500 text-sm/6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <span class="line-clamp-1 text-xs/6 font-semibold leading-normal">
                                        Ubud, Gianyar
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <div class="flex text-amber-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide ml-1.5">
                                        9.7
                                    </span>
                                </div>

                                <span class="text-gray-400 text-xs/6 font-medium leading-normal tracking-wide">
                                    (5,421 reviews)
                                </span>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 7,200,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 6,480,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Nightly rate
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Not Including Tax
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>  

                    <!-- card 3 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-12.jpg') }}" alt="The Ritz-Carlton, Nusa Dua" class="w-full h-full object-cover">

                            <img src="{{ asset('assets/icon/icon-13.webp') }}" alt="20% OFF" class="absolute bottom-0 left-0 h-7 w-auto rounded-tr-lg">
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Bali Beach Glamping</h3>
                                <div class="flex items-center text-gray-500 text-sm/6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <span class="line-clamp-1 text-xs/6 font-semibold leading-normal">
                                        Tabanan, Tabanan
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <div class="flex text-amber-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide ml-1.5">
                                        9.1
                                    </span>
                                </div>

                                <span class="text-gray-400 text-xs/6 font-medium leading-normal tracking-wide">
                                    (6,328 reviews)
                                </span>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 5,500,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 4,675,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Nightly rate
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Not Including Tax
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>   

                    <!-- card 4 -->
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-45">
                            <img src="{{ asset('assets/images/images-13.jpg') }}" alt="The Ritz-Carlton, Nusa Dua" class="w-full h-full object-cover">

                            <img src="{{ asset('assets/icon/icon-14.webp') }}" alt="20% OFF" class="absolute bottom-0 left-0 h-7 w-auto rounded-tr-lg">
                        </div>

                        <div class="pb-2 pt-4 px-2 border border-gray-200 border-t-0 rounded-b-2xl">
                            <div class="mb-3">
                                <h3 class="text-md font-semibold text-gray-600 leading-normal tracking-wide mb-1 line-clamp-1">Berry Amour Romantic Villas</h3>
                                <div class="flex items-center text-gray-500 text-sm/6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <span class="line-clamp-1 text-xs/6 font-semibold leading-normal">
                                        Seminyak, Badung
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center mb-3">
                                <div class="flex items-center mr-2">
                                    <div class="flex text-amber-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-blue-500 font-semibold text-xs/6 leading-normal tracking-wide ml-1.5">
                                        8.9
                                    </span>
                                </div>

                                <span class="text-gray-400 text-xs/6 font-medium leading-normal tracking-wide">
                                    (2,817 reviews)
                                </span>
                            </div>

                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="text-gray-400 text-xs/6 line-through leading-normal tracking-wide">
                                        Rp 3,800,000
                                    </p>
                                    <p class="text-blue-600 text-sm/6 font-semibold leading-normal tracking-wide">
                                        Rp 3,230,000
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xs/6 font-medium leading-normal tracking-wide text-gray-500 mb-2">
                                        Nightly rate
                                    </p>
                                    <div class="bg-blue-50 text-blue-600 font-medium leading-normal tracking-wide text-xs/6 px-2 py-1 rounded-md">
                                        Not Including Tax
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-2 pt-3 border-t border-gray-200">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-500 text-white text-sm/6 font-semibold py-1 px-4 rounded-lg transition-colors flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>View Deal</span>
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg transition-colors border border-blue-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>




    </main>


















@endsection