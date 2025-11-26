@extends('components.layout.master')

@section('content')


    <!-- banner --->
     <section class="relative z-10">
        
        <div class="w-full min-h-[150px] sm:min-h-[180px] relative overflow-hidden" style="background-image: url('{{ asset('assets/promo/banner-5.jpg') }}'); background-size: cover; background-position: center;"></div>

        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <div class="w-full max-w-6xl px-4 sm:px-6 lg:px-8 mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between text-white pointer-events-auto gap-6">
                <div class="flex-1 flex flex-col items-start justify-center">
                    <h1 class="text-xl sm:text-2xl md:text-3xl font-bold tracking-wide font-nunito">
                        Your Orders
                    </h1>

                    <p class="mt-2 text-sm/6 md:text-sm/6 font-nunito text-white/90 tracking-wide leading-tight font-semibold">
                        The center for bookings and guidance on using our services.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- booking -->
    <section class="py-12">
        <div class="max-w-full lg:max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8">            
                <div class="flex-1">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 flex flex-col md:flex-row gap-8 p-0 md:p-5">
                        <div class="flex-1">
                            <div class="divide-y divide-gray-100">
                                <div>
                                    <div class="flex items-center justify-between px-4 py-3 cursor-not-allowed opacity-60 select-none">
                                        <span class="text-sm/6 font-medium tracking-wide leading-normal text-gray-700">
                                            Unfinished Booking
                                        </span>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" id="toggle-all-products" class="flex items-center justify-between px-4 py-3 group bg-blue-50">
                                        <span class="flex items-center gap-3 text-sm/6 font-medium tracking-wide leading-normal text-gray-700">
                                            <span class="inline-flex items-center justify-center w-8 h-8 shadow-sm rounded-full">
                                                <i class="fa fa-copy text-blue-500 text-lg"></i>
                                            </span>
                                            <span>All Products</span>
                                        </span>

                                        <span class="inline-flex items-center justify-center group-hover:bg-blue-50 transition-all">
                                            <i class="fa fa-chevron-right text-gray-300 text-sm"></i>
                                        </span>
                                    </a>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between px-4 py-3 cursor-not-allowed opacity-60 select-none">
                                        <span class="text-sm/6 font-medium tracking-wide leading-normal text-gray-700">
                                            Retrieve Booking
                                        </span>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" id="toggle-flights" class="flex items-center justify-between px-4 py-3 hover:bg-blue-50 transition-colors group">
                                        <span class="flex items-center gap-3 text-sm/6 font-medium tracking-wide leading-normal text-blue-500 underline">
                                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-50 group-hover:bg-blue-100 transition-all shadow-sm">
                                                <i class="fa fa-plane-departure text-blue-500 text-lg"></i>
                                            </span>
                                            <span>Flights</span>
                                        </span>

                                        <span class="inline-flex items-center justify-center group-hover:bg-blue-50 transition-all">
                                            <i class="fa fa-chevron-right text-gray-300 text-sm"></i>
                                        </span>
                                    </a>
                                </div>

                                <div>
                                    <a href="#" id="toggle-hotels" class="flex items-center justify-between px-4 py-3 hover:bg-blue-50 transition-colors group">
                                        <span class="flex items-center gap-3 text-sm/6 font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500">
                                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-yellow-50 group-hover:bg-yellow-100 transition-all shadow-sm">
                                                <i class="fa fa-hotel text-yellow-500 text-lg"></i>
                                            </span>
                                            <span>Hotels</span>
                                        </span>
                                        
                                        <span class="inline-flex items-center justify-center group-hover:bg-blue-50 transition-all">
                                            <i class="fa fa-chevron-right text-gray-300 text-sm"></i>
                                        </span>
                                    </a>
                                </div>

                                <div>
                                    <a href="#" id="toggle-trains" class="flex items-center justify-between px-4 py-3 hover:bg-blue-50 transition-colors group">
                                        <span class="flex items-center gap-3 text-sm/6 font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500">
                                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-50 group-hover:bg-green-100 transition-all shadow-sm">
                                                <i class="fa fa-train text-green-500 text-lg"></i>
                                            </span>
                                            <span>Trains</span>
                                        </span>

                                        <span class="inline-flex items-center justify-center group-hover:bg-blue-50 transition-all">
                                            <i class="fa fa-chevron-right text-gray-300 text-sm"></i>
                                        </span>
                                    </a>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between px-4 py-3 cursor-not-allowed opacity-60 select-none">
                                        <span class="flex items-center gap-3 text-sm/6 font-medium tracking-wide leading-normal text-gray-700">
                                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-pink-50 transition-all shadow-sm">
                                                <i class="fa fa-ticket-alt text-pink-500 text-lg"></i>
                                            </span>
                                            <span>Activities</span>
                                        </span>

                                        <span class="inline-flex items-center justify-center transition-all">
                                            <i class="fa fa-question text-gray-300 text-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-1 flex flex-col gap-4 items-start">
                    <div id="access-booking-card" class="bg-blue-500 rounded-xl shadow flex flex-col md:flex-row items-start p-4 gap-5 relative min-h-[100px] md:min-h-[80px] w-full">                
                        <div class="flex-shrink-0 flex items-center justify-center md:items-start md:justify-start w-16 md:w-20">
                            <img src="{{ asset('assets/icon/icon-1.svg') }}" alt="Access Booking" class="w-16 h-16 md:w-20 md:h-20 object-contain" />
                        </div>

                        <div class="flex-1 flex flex-col justify-center">
                            <div class="text-white font-semibold text-[17px] md:text-[16px] mb-1 md:mb-0 leading-normal tracking-wide">
                                Access your booking on Travelgo with ease
                            </div>
                            
                            <div class="text-white text-[13px] md:text-sm/6 leading-normal tracking-wide mt-3 md:mt-3">
                                <a href="{{ route('myInbox') }}" class="underline font-medium hover:text-blue-200">Log In </a> to your Traveloka account or <a href="{{ route('myInbox') }}" class="underline font-medium hover:text-blue-200">register</a> to see your active and past bookings, as well as to manage your booking (e.g. requesting a refund or reschedule).
                            </div>
                        </div>

                        <button id="close-access-booking" class="absolute top-3.5 right-3.5 text-white/80 hover:text-white text-[15px]" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>

                    <!-- flight --->
                    <div id="flights-detail" class="hidden bg-white rounded-xl shadow-md p-6 w-full ">
                        <div class="border-b border-gray-100 pb-3">
                            <div class="text-[17px] font-medium text-gray-700 tracking-wide leading-normal font-nunito">
                                Retrieve Booking
                            </div>
                        </div>

                        <form class="space-y-5 mt-6">
                            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                                <div class="flex-1">
                                    <label class="text-sm font-semibold text-gray-700 mb-2.5 block">
                                        Mobile Number
                                    </label>

                                    <div class="relative country-selector">
                                        <div class="flex items-stretch border border-gray-300 rounded-lg focus-within:ring-2 focus-within:ring-blue-500 bg-white">
                                            <div class="relative flex items-center bg-gray-100 border-r border-gray-300 rounded-l-lg overflow-hidden">
                                                <button class="countryDropdownBtn flex items-center justify-between gap-1 px-2.5 text-sm w-[80px] h-full focus:outline-none rounded-l-lg">
                                                    <span class="selectedCountry truncate">🇮🇩 +62</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <input type="text" class="flex-1 min-w-0 py-2.5 px-3 text-sm bg-transparent outline-none placeholder:text-sm/6 placeholder:tracking-wide placeholder:text-gray-600 placeholder:font-medium" placeholder="Mobile Number" autocomplete="off" />
                                        </div>

                                        <div class="countryDropdown absolute top-full left-0 mt-3 z-30 hidden bg-white border border-gray-200 rounded-md shadow-lg w-full max-h-56 overflow-y-auto no-scrollbar mt-1">
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+62">Indonesia (+62)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+65">Singapore (+65)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+81">Japan (+81)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+91">India (+91)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+1">United States (+1)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+44">United Kingdom (+44)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+49">Germany (+49)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+86">China (+86)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+63">Philippines (+63)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+60">Malaysia (+60)</div>
                                        </div>
                                    </div>

                                    <p class="text-xs text-gray-500 mt-2">
                                        Mobile no. provided during booking
                                    </p>
                                </div>

                                <div class="flex flex-col flex-1">
                                    <div class="flex items-center justify-between mb-2.5">
                                        <label for="booking-id" class="block text-sm font-semibold text-gray-700 tracking-wide leading-normal" >
                                            Booking ID
                                        </label>

                                        <a href="#" id="toggle-forgot-booking-id" class="text-blue-500 text-xs font-semibold tracking-wide leading-normal hover:underline whitespace-nowrap ml-3">
                                            Forgot your booking ID?
                                        </a>
                                    </div>

                                    <input id="booking-id" type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400" placeholder="Enter your Booking ID" />
                                </div>
                            </div>

                            <div class="flex-1">
                                <label for="checkin-display" class="block text-sm font-semibold text-gray-700 mb-2.5 tracking-wide leading-normal">
                                    Departure Date
                                </label>

                                <div class="relative booking-section">
                                    <div class="relative w-full cursor-pointer" onclick="toggleBookingCalendar()">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                        </svg>
                                        <input id="checkin-display" type="text" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400" value="Wed, 15 Oct 2025" readonly />
                                        <input id="checkin-date" type="hidden" value="2025-10-15" />
                                    </div>

                                    <div id="checkin-calendar" class="absolute z-50 mt-2 left-0 w-full bg-white rounded-2xl shadow-xl py-3 px-3 hidden transition-all border border-gray-200 overflow-hidden">
                                        <div class="flex justify-between items-center mb-3">
                                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors" onclick="previousMonth()">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                                </svg>
                                            </button>

                                            <h3 id="current-month-year" class="text-lg font-semibold text-gray-800">December 2025</h3>

                                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors" onclick="nextMonth()">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-7 gap-0.5 mb-3">
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Mon</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Tue</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Wed</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Thu</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Fri</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Sat</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Sun</div>
                                        </div>

                                        <div id="calendar-days" class="grid grid-cols-7 gap-5"></div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="mt-3.5 w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-xl transition-colors duration-200">
                                Retrieve Booking
                            </button>
                        </form>

                        <div class="text-gray-500 text-xs/6 mt-5 leading-normal font-semibold font-nunito">
                            After you submit the form below, we will resend the e-ticket directly to the email address that you used for the booking. You can also use this form to complete recent unfinished transactions.
                        </div>
                    </div>           
                    
                    <!-- Hotel --->
                    <div id="hotels-detail" class="hidden bg-white rounded-xl shadow border border-gray-100 p-6 w-full">
                        <div class="mb-5 border-b border-gray-100 pb-3">
                            <div class="text-[17px] font-medium text-gray-700 tracking-wide leading-normal font-nunito">
                                Retrieve Booking
                            </div>
                        </div>

                        <form class="space-y-5 mt-6">
                            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                                <div class="flex-1">
                                    <label class="text-sm font-semibold text-gray-700 mb-2.5 block">
                                        Mobile Number
                                    </label>

                                    <div class="relative country-selector">
                                        <div class="flex items-stretch border border-gray-300 rounded-lg focus-within:ring-2 focus-within:ring-blue-500 bg-white">
                                            <div class="relative flex items-center bg-gray-100 border-r border-gray-300 rounded-l-lg overflow-hidden">
                                                <button class="countryDropdownBtn flex items-center justify-between gap-1 px-2.5 text-sm w-[80px] h-full focus:outline-none rounded-l-lg">
                                                    <span class="selectedCountry truncate">🇮🇩 +62</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <input type="text" class="flex-1 min-w-0 py-2.5 px-3 text-sm bg-transparent outline-none placeholder:text-sm/6 placeholder:tracking-wide placeholder:text-gray-600 placeholder:font-medium" placeholder="Mobile Number" autocomplete="off" />
                                        </div>

                                        <div class="countryDropdown absolute top-full left-0 mt-3 z-30 hidden bg-white border border-gray-200 rounded-md shadow-lg w-full max-h-56 overflow-y-auto no-scrollbar mt-1">
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+62">Indonesia (+62)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+65">Singapore (+65)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+81">Japan (+81)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+91">India (+91)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+1">United States (+1)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+44">United Kingdom (+44)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+49">Germany (+49)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+86">China (+86)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+63">Philippines (+63)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+60">Malaysia (+60)</div>
                                        </div>
                                    </div>

                                    <p class="text-xs text-gray-500 mt-2">
                                        Mobile no. provided during booking
                                    </p>
                                </div>

                                <div class="flex flex-col flex-1">
                                    <div class="flex items-center justify-between mb-2.5">
                                        <label for="booking-id" class="block text-sm font-semibold text-gray-700 tracking-wide leading-normal" >
                                            Booking ID
                                        </label>
                                    </div>

                                    <input id="booking-id" type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400" placeholder="Enter your Booking ID" />
                                </div>
                            </div>

                            <div class="flex-1">
                                <label for="checkin-display" class="block text-sm font-semibold text-gray-700 mb-3.5 tracking-wide leading-normal">
                                    Check-in Date
                                </label>

                                <div class="relative">
                                    <div class="relative w-full cursor-pointer" onclick="toggleHotelCalendar()">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                        </svg>

                                        <input id="hotel-checkin-display" type="text" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400" value="Wed, 15 Oct 2025" readonly />

                                        <input id="hotel-checkin-date" type="hidden" value="2025-10-15" />
                                    </div>

                                    <div id="hotel-checkin-calendar"  class="absolute z-50 mt-2 left-0 right-0 w-full bg-white rounded-2xl shadow-xl py-3 px-3 hidden transition-all border border-gray-200 overflow-hidden">
                                        <div class="flex justify-between items-center mb-3">
                                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors" onclick="previousMonth()">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                                </svg>
                                            </button>

                                            <h3 id="current-month-year" class="text-lg font-semibold text-gray-800">December 2025</h3>

                                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors" onclick="nextMonth()">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-7 gap-0.5 mb-3">
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Mon</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Tue</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Wed</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Thu</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Fri</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Sat</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Sun</div>
                                        </div>

                                        <div id="calendar-days" class="grid grid-cols-7 gap-5"></div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="mt-3.5 w-full bg-blue-500 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded-xl transition-colors duration-200">
                                Retrieve Booking
                            </button>
                        </form>

                        <div class="text-gray-500 text-xs/6 mt-5 leading-normal font-semibold font-nunito">
                            After you submit the form below, we will resend the hotel confirmation directly to the email address that you used for the booking. You can also use this form to complete recent unfinished hotel transactions.
                        </div>
                    </div>

                    <!-- Trains --->
                    <div id="trains-detail" class="hidden bg-white rounded-xl shadow border border-gray-100 p-6 w-full">
                        <div class="mb-5 border-b border-gray-100 pb-3">
                            <div class="text-[17px] font-medium text-gray-700 tracking-wide leading-normal font-nunito">
                                Retrieve Booking
                            </div>
                        </div>

                        <form class="space-y-5 mt-6">
                           <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                                <div class="flex-1">
                                    <label class="text-sm font-semibold text-gray-700 mb-2.5 block">
                                        Mobile Number
                                    </label>
                                    <div class="relative country-selector">
                                        <div class="flex items-stretch border border-gray-300 rounded-lg focus-within:ring-2 focus-within:ring-blue-500 bg-white">
                                            <div class="relative flex items-center bg-gray-100 border-r border-gray-300 rounded-l-lg overflow-hidden">
                                                <button class="countryDropdownBtn flex items-center justify-between gap-1 px-2.5 text-sm w-[80px] h-full focus:outline-none rounded-l-lg">
                                                    <span class="selectedCountry truncate">🇮🇩 +62</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <input type="text" class="flex-1 min-w-0 py-2.5 px-3 text-sm bg-transparent outline-none placeholder:text-sm/6 placeholder:tracking-wide placeholder:text-gray-600 placeholder:font-medium" placeholder="Mobile Number" autocomplete="off" />
                                        </div>

                                        <div class="countryDropdown absolute top-full left-0 mt-3 z-30 hidden bg-white border border-gray-200 rounded-md shadow-lg w-full max-h-56 overflow-y-auto no-scrollbar mt-1">
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+62">Indonesia (+62)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+65">Singapore (+65)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+81">Japan (+81)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+91">India (+91)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+1">United States (+1)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+44">United Kingdom (+44)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+49">Germany (+49)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+86">China (+86)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+63">Philippines (+63)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+60">Malaysia (+60)</div>
                                        </div>
                                    </div>

                                    <p class="text-xs text-gray-500 mt-2">
                                        Mobile no. provided during booking
                                    </p>
                                </div>

                                <div class="flex flex-col flex-1">
                                    <div class="flex items-center justify-between mb-2.5">
                                        <label for="booking-id" class="block text-sm font-semibold text-gray-700 tracking-wide leading-normal" >
                                            Booking ID
                                        </label>
                                    </div>
                                    <input id="booking-id" type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400" placeholder="Enter your Booking ID" />
                                </div>
                            </div>

                            <div class="flex-1">
                                <label for="checkin-display" class="block text-sm font-semibold text-gray-700 mb-3.5 tracking-wide leading-normal">
                                    Check-in Date
                                </label>

                                <div class="relative">
                                    <div class="relative w-full cursor-pointer" onclick="toggletrainCalendar()">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                        </svg>

                                        <input id="train-checkin-display" type="text" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400" value="Wed, 15 Oct 2025" readonly />

                                        <input id="train-checkin-date" type="hidden" value="2025-10-15" />
                                    </div>

                                    <div id="train-checkin-calendar"  class="absolute z-50 mt-2 left-0 right-0 w-full bg-white rounded-2xl shadow-xl py-3 px-3 hidden transition-all border border-gray-200 overflow-hidden">
                                        <div class="flex justify-between items-center mb-3">
                                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors" onclick="previousMonth()">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                                </svg>
                                            </button>

                                            <h3 id="current-month-year" class="text-lg font-semibold text-gray-800">December 2025</h3>

                                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors" onclick="nextMonth()">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-7 gap-0.5 mb-3">
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Mon</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Tue</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Wed</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Thu</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Fri</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Sat</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Sun</div>
                                        </div>

                                        <div id="calendar-days" class="grid grid-cols-7 gap-5"></div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="mt-3.5 w-full bg-blue-500 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded-xl transition-colors duration-200">
                                Retrieve Booking
                            </button>
                        </form>

                        <div class="text-gray-600 text-xs mt-5 leading-normal font-medium font-nunito">
                            After you submit the form below, we will resend the hotel confirmation directly to the email address that you used for the booking. You can also use this form to complete recent unfinished hotel transactions.
                        </div>
                    </div>

                    <div id="forgot-booking-id-detail" class="hidden bg-white rounded-xl shadow border border-gray-100 p-6 xl:pb-12 w-full">
                        <div class="mb-4">
                            <div class="text-gray-600 text-sm leading-normal mb-2">
                                Retrieve your booking easily by entering your booking details below.
                            </div>

                            <div class="text-gray-600 text-sm leading-normal">
                                You can also use this form to retrieve and complete a recent unfinished transaction.
                            </div>
                        </div>

                        <div class="mb-4">
                            <button id="back-to-flights" class="inline-flex items-center gap-2 px-2 py-1 rounded-full bg-white border border-gray-200 text-gray-700 hover:text-blue-500 font-semibold text-sm transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                <span class="inline-flex items-center justify-center bg-blue-100 text-blue-500 rounded-full p-1.5 mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                                    </svg>
                                </span>
                                <span class="tracking-wide leading-normal">Back</span>
                            </button>
                        </div>

                        <form class="space-y-6 mt-6 last:mb-0">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="relative w-full airport-wrapper">
                                    <label class="text-sm font-semibold text-gray-700 tracking-wide leading-normal mb-2.5 block">
                                        Form
                                    </label>

                                    <div class="relative">
                                        <div class="absolute left-3 top-1/2 -translate-y-1/2">
                                            <i class="fa fa-plane text-gray-400 text-sm"></i>
                                        </div>
                                        <input type="text" class="airport-input w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder:text-sm/6 placeholder:tracking-wide placeholder:text-gray-600 placeholder:font-medium" placeholder="To" autocomplete="off">
                                    </div>

                                    <div class="airport-dropdown absolute mt-3 left-0 w-full sm:w-[400px] md:w-[430px] lg:w-[420px] xl:w-[420px] 2xl:w-[420px] max-w-[90vw] bg-white border border-gray-200 rounded-lg shadow-lg hidden z-15 transition-all duration-200">
                                        <div class="px-4 py-4 border-b border-gray-200 font-bold text-sm/6 text-blue-500">
                                            Popular Cities or Airports
                                        </div>

                                        <ul class="max-h-77 overflow-y-auto text-sm/6 leading-normal text-gray-600 no-scrollbar">

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Soekarno Hatta International Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Jakarta, Indonesia</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">CGK</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Ngurah Rai International Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Bali / Denpasar, Indonesia</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">DPS</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Juanda</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Surabaya, Indonesia</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">SUB</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Changi Intl</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Singapore, Singapore</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">SIN</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Hong Kong International Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Hong Kong, China</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">HKG</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Haneda Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Tokyo, Japan</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">HND</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Kuala Lumpur International Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Kuala Lumpur, Malaysia</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">KUL</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Don Mueang Intl</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Bangkok, Thailand</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">BKK</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Kingsford Smith Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Sydney, Australia</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">SYD</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Dubai International Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Dubai, United Arab Emirates</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">DXB</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b last:rounded-b-lg">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Heathrow Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">London, United Kingdom</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">LHR</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="relative w-full airport-wrapper">
                                    <label class="text-sm font-semibold text-gray-700 tracking-wide leading-normal mb-2.5 block">
                                        To
                                    </label>

                                    <div class="relative">
                                        <div class="absolute left-3 top-1/2 -translate-y-1/2">
                                            <i class="fa fa-plane text-gray-400 text-sm"></i>
                                        </div>
                                        <input type="text" class="airport-input w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder:text-sm/6 placeholder:tracking-wide placeholder:text-gray-600 placeholder:font-medium" placeholder="To" autocomplete="off">
                                    </div>

                                    <div class="airport-dropdown absolute mt-3 right-0 left-auto w-full sm:w-[400px] md:w-[430px] lg:w-[420px] xl:w-[420px] 2xl:w-[420px] max-w-[90vw] bg-white border border-gray-200 rounded-lg shadow-lg hidden z-15 transition-all duration-200">
                                        <div class="px-4 py-4 border-b border-gray-200 font-bold text-sm/6 text-blue-500">
                                            Popular Cities or Airports
                                        </div>

                                        <ul class="max-h-77 overflow-y-auto text-sm/6 leading-normal text-gray-600 no-scrollbar">
                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Soekarno Hatta International Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Jakarta, Indonesia</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">CGK</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Ngurah Rai International Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Bali / Denpasar, Indonesia</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">DPS</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Juanda</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Surabaya, Indonesia</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">SUB</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Changi Intl</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Singapore, Singapore</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">SIN</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Hong Kong International Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Hong Kong, China</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">HKG</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Haneda Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Tokyo, Japan</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">HND</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Kuala Lumpur International Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Kuala Lumpur, Malaysia</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">KUL</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Don Mueang Intl</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Bangkok, Thailand</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">BKK</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Kingsford Smith Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Sydney, Australia</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">SYD</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Dubai International Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">Dubai, United Arab Emirates</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">DXB</span>
                                                </div>
                                            </li>

                                            <li class="px-4 py-3 hover:bg-gray-100 cursor-pointer transition border-dotted border-gray-200 border-b last:rounded-b-lg">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex-1">
                                                        <div class="flex items-center space-x-4">
                                                            <i class="fa fa-plane text-gray-400 text-xs w-4"></i>
                                                            <span class="font-semibold text-gray-800">Heathrow Airport</span>
                                                        </div>
                                                        <div class="text-xs text-gray-500 pl-8">London, United Kingdom</div>
                                                    </div>
                                                    <span class="text-xs font-semibold text-gray-500 mt-1">LHR</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="checkin-display" class="block text-sm font-semibold text-gray-700 mb-2.5 tracking-wide leading-normal">
                                    Departure Date
                                </label>

                                <div class="relative">
                                    <div class="relative w-full cursor-pointer" onclick="toggleForgotidCalendar()">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                        </svg>

                                        <input id="forgotid-checkin-display" type="text" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder:text-sm/6 placeholder:tracking-wide placeholder:text-gray-600 placeholder:font-medium" value="Wed, 15 Oct 2025" readonly />
                                        <input id="forgotid-checkin-date" type="hidden" value="2025-10-15" />
                                    </div>

                                    <div id="forgotid-checkin-calendar" class="absolute z-50 mt-2 left-0 right-0 w-full bg-white rounded-2xl shadow-xl py-3 px-3 hidden transition-all border border-gray-200 overflow-hidden">
                                        <div class="flex justify-between items-center mb-3">
                                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors" onclick="previousMonth()">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                                </svg>
                                            </button>

                                            <h3 id="forgotid-current-month-year" class="text-lg font-semibold text-gray-800">December 2025</h3>

                                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors" onclick="nextMonth()">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-7 gap-0.5 mb-3">
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Mon</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Tue</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Wed</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Thu</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Fri</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Sat</div>
                                            <div class="text-center text-xs sm:text-sm font-medium text-gray-600 py-1 truncate">Sun</div>
                                        </div>

                                        <div id="calendar-days" class="grid grid-cols-7 gap-5"></div>
                                    </div>
                                </div>
                            </div>

                           <div class="flex flex-col gap-4 xl:flex-row xl:items-end">
                                <div class="flex-1 relative">
                                    <label class="text-sm font-semibold text-gray-700 mb-2.5 block">
                                        Mobile Number
                                    </label>

                                    <div class="relative country-selector">
                                        <div class="flex items-stretch border border-gray-300 rounded-lg focus-within:ring-2 focus-within:ring-blue-500 bg-white">
                                            <div class="relative flex items-center bg-gray-100 border-r border-gray-300 rounded-l-lg overflow-hidden">
                                                <button class="countryDropdownBtn flex items-center justify-between gap-1 px-2.5 text-sm w-[80px] h-full focus:outline-none rounded-l-lg">
                                                    <span class="selectedCountry truncate">🇮🇩 +62</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <input type="text" class="flex-1 min-w-0 py-2.5 px-3 text-sm bg-transparent outline-none placeholder:text-sm/6 placeholder:tracking-wide placeholder:text-gray-600 placeholder:font-medium" placeholder="Mobile Number" autocomplete="off" />
                                        </div>

                                        <div class="countryDropdown absolute top-full left-0 mt-3 z-30 hidden bg-white border border-gray-200 rounded-md shadow-lg w-full max-h-56 overflow-y-auto no-scrollbar mt-1">
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+62">Indonesia (+62)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+65">Singapore (+65)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+81">Japan (+81)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+91">India (+91)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+1">United States (+1)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+44">United Kingdom (+44)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+49">Germany (+49)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+86">China (+86)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+63">Philippines (+63)</div>
                                            <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer font-medium text-sm text-gray-600" data-country="+60">Malaysia (+60)</div>
                                        </div>
                                    </div>

                                    <p class="text-xs text-gray-500 mt-3 xl:absolute xl:left-0">
                                        Mobile no. provided during booking
                                    </p>
                                </div>

                                <div class="w-full xl:w-auto">
                                    <button type="submit" class="w-full xl:w-auto bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2.5 px-6 rounded-xl transition-colors duration-200" >
                                        Retrieve Booking
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div id="unfinished-booking" class="bg-white rounded-xl shadow flex flex-col md:flex-row items-start p-4 md:p-4 gap-5 border border-gray-100 w-full">
                        <div class="flex-shrink-0 flex items-center justify-center md:items-start md:justify-start w-16 md:w-20">
                            <img src="{{ asset('assets/icon/icon-2.svg') }}" alt="No Unfinished Booking" class="w-16 h-16 md:w-20 md:h-20 object-contain" />
                        </div>
                        
                        <div class="flex-1 flex flex-col justify-center">
                            <div class="text-gray-700 font-semibold text-[17px] md:text-[16px] mb-1 md:mb-0 leading-normal tracking-wide">
                                No Unfinished Booking
                            </div>
    
                            <div class="text-gray-700 text-[13px] md:text-sm/6 leading-normal tracking-wide mt-3 md:mt-3">
                                If you are unable to complete a booking process, we will save it here!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

@endsection