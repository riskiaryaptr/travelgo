@extends('components.layout.master')

@section('content')


    <!-- banner --->
     <section class="relative z-10">
        
        <div class="w-full min-h-[150px] sm:min-h-[180px] relative overflow-hidden" style="background-image: url('{{ asset('assets/promo/banner-5.jpg') }}'); background-size: cover; background-position: center;"></div>

        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <div class="w-full max-w-6xl px-4 sm:px-6 lg:px-8 mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between text-white pointer-events-auto gap-6">
                <div class="flex-1 flex flex-col items-start justify-center">
                    <h1 class="text-xl sm:text-2xl md:text-3xl font-bold tracking-wide font-nunito">
                      Best Hotel Deals
                    </h1>
                    
                    <p class="mt-2 text-sm/6 md:text-sm/6 font-nunito text-white/90 tracking-wide leading-tight font-semibold">
                        Discover top deals and offers for your hotel stay.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- hotel -->
    <section class="relative z-30 md:mt-[-20px] mt-[-13px]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-xl relative z-50 px-4 lg:px-6 py-4.5">
                <div class="flex items-center gap-3 mb-8 bg-gray-100 px-6 py-4 rounded-t-xl sm:rounded-t-xl rounded-b-none sm:rounded-b-none -mx-4 lg:-mx-6 -mt-6 " style="border-top-left-radius: 18px; border-top-right-radius: 18px;">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100">
                        <i class="fa fa-history text-blue-500 text-lg"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="text-base font-semibold text-blue-500 font-nunito tracking-wide leading-normal">
                            Recently Viewed Hotels
                        </h1>

                        <p class="text-xs text-blue-700/70 mt-0.5 font-nunito font-semibold leading-normal">
                            Quickly access your previously explored hotels here
                        </p>
                    </div>
                </div>

                <form class="grid grid-cols-1 lg:grid-cols-2 lg:grid-cols-4 md:gap-3 gap-5 mt-5">
                    <div class="relative airport-wrapper">
                        <label class="block text-sm/6 leading-normal tracking-wide font-semibold text-gray-500 mb-3">
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

                        <div class="airport-dropdown absolute mt-3 left-0 w-full sm:w-[400px] md:w-[430px] lg:w-[420px] xl:w-[420px] 2xl:w-[420px] max-w-[90vw] bg-white border border-gray-200 rounded-lg shadow-lg hidden z-15 transition-all duration-200">
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

                            <div id="double-checkin-calendar" class="absolute z-50 mt-3 left-0 w-full max-w-[700px] bg-white rounded-2xl shadow-xl py-4 px-4 hidden transition-all border border-gray-200 overflow-visible lg:left-0 md:left-0 lg:w-[600px] sm:right-0 sm:left-auto sm:w-[95vw] sm:max-w-none xs:w-[95vw] xs:right-0 xs:left-auto xs:px-3 xs:py-3">

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
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-0 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                                </svg>

                                <p class="text-sm/6 text-gray-700 leading-relaxed">
                                    <a href="/hotels" class="text-blue-500 text-sm/6 font-bold tracking-wide leading-normal">
                                        <span>Recentely Viewd Hotels</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        


            
        </div>        
    </section> 
        
@endsection