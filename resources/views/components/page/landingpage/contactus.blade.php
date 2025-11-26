@extends('components.layout.master')

@section('content')


    <!-- banner --->
     <section class="relative z-10">
        
        <div class="w-full min-h-[150px] sm:min-h-[180px] relative overflow-hidden" style="background-image: url('{{ asset('assets/promo/banner-5.jpg') }}'); background-size: cover; background-position: center;"></div>

        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <div class="w-full max-w-6xl px-4 sm:px-6 lg:px-8 mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between text-white pointer-events-auto gap-6">
                <div class="flex-1 flex flex-col items-start justify-center">
                    <h1 class="text-xl sm:text-2xl md:text-3xl font-bold tracking-wide font-nunito">
                      Contact Us
                    </h1>
                    <p class="mt-2 text-sm/6 md:text-sm/6 font-nunito text-white/90 tracking-wide leading-tight font-semibold">
                        Have questions or need assistance? Reach out to us and our team will be happy to help you.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <div class="border-b border-gray-200 pb-2 mb-2">
                        <div class="mb-0">
                            <div class="text-lg font-semibold font-nunito tracking-wide leading-normal text-gray-700">Popular Topics</div>
                        </div>
                        
                        <div class="text-gray-700 text-[13px] md:text-sm/6 leading-normal font-semibold tracking-wide mb-2">
                            See more on 
                            <a href="{{ route('helpcenter') }}" class="underline font-bold text-blue-500 hover:text-blue-400 text-xs">Help Center</a>
                        </div>
                    </div>  

                    <div class="flex flex-col lg:flex-row gap-8 p-0 lg:p-0">

                        <div class="flex-1 flex flex-col">
                            <div class="mb-6 border-b border-gray-200 pb-2">
                                <div class="relative">
                                    <button id="popularPrev" type="button" aria-label="Previous" class="hidden absolute left-2 top-1/2 -translate-y-1/2 z-10 h-7 w-7 rounded-full bg-blue-100 shadow-md text-blue-500 hover:shadow-lg flex items-center justify-center">
                                        <i class="fa fa-chevron-left" style="font-size: 0.8em;"></i>
                                    </button>

                                    <div id="popularViewport" class="overflow-hidden">                                        
                                        <ul id="popularTabs" class="flex select-none cursor-grab active:cursor-grabbing whitespace-nowrap w-full overflow-x-auto gap-2 scroll-smooth">
                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-blue-500 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Most Popular</button>
                                            </li>
                                            
                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">General Information</button>
                                            </li>
            
                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Profile and Security</button>
                                            </li>
            
                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Flights</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Scams Report</button>
                                            </li>
            
                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Hotels</button>
                                            </li>
            
                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Xperience</button>
                                            </li>
            
                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Car Rental</button>
                                            </li>
            
                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Airport Transfer</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">TripnikaPay</button>
                                            </li>
            
                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">TPaylater</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Trains</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Tripnika Poins</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Flight + Hotel</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Insurance</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Gifts Voucher</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Visa</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Cruise Voyage</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Discount Package</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Tripnika Mandiri Card</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Bus & Shuttle</button>
                                            </li>

                                            <li class="inline-block align-top">
                                                <button class="px-4 py-2 rounded-full text-gray-600 font-semibold text-[15px] hover:bg-gray-50 hover:text-blue-500 whitespace-nowrap">Travel Packages</button>
                                            </li>
                                        </ul>
                                    </div>

                                    <button id="popularNext" type="button" aria-label="Next" class="hidden absolute right-2 top-1/2 -translate-y-1/2 z-10 h-8 w-8 rounded-full bg-blue-100 shadow-md text-blue-500 hover:shadow-lg flex items-center justify-center">
                                        <i class="fa fa-chevron-right" style="font-size: 0.8em;"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 flex-1">
                                <a href="#" class="flex items-center justify-between px-4 py-3 bg-gray-50 rounded-lg transition-colors group">
                                    <span class="text-[14px] font-medium tracking-wide leading-normal text-blue-500">
                                        How to Reschedule a Flight Booking
                                    </span>
                                    <span class="inline-flex items-center justify-center group-hover:bg-blue-50 transition-all">
                                        <i class="fa fa-chevron-right text-blue-400 group-hover:text-blue-400 transition-colors" style="font-size: 0.85em;"></i>
                                    </span>
                                </a>
    
                                <a href="#" class="flex items-center justify-between px-4 py-3 bg-gray-50 rounded-lg transition-colors group">
                                    <span class="text-[14px] font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500">
                                        How to Request a Hotel Room Upgrade
                                    </span>
                                    <span class="inline-flex items-center justify-center group-hover:bg-blue-50 transition-all">
                                        <i class="fa fa-chevron-right text-gray-300 group-hover:text-blue-400 transition-colors" style="font-size: 0.85em;"></i>
                                    </span>
                                </a>
    
                                <a href="#" class="flex items-center justify-between px-4 py-3 bg-gray-50 rounded-lg transition-colors group">
                                    <span class="text-[14px] font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500">
                                        Steps to Change Train Ticket Schedule
                                    </span>
                                    <span class="inline-flex items-center justify-center group-hover:bg-blue-50 transition-all">
                                        <i class="fa fa-chevron-right text-gray-300 group-hover:text-blue-400 transition-colors" style="font-size: 0.85em;"></i>
                                    </span>
                                </a>
    
                                <a href="#" class="flex items-center justify-between px-4 py-3 bg-gray-50 rounded-lg transition-colors group">
                                    <span class="text-[14px] font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500">
                                        How to Redeem Tripnika Points for Discounts
                                    </span>
                                    <span class="inline-flex items-center justify-center group-hover:bg-blue-50 transition-all">
                                        <i class="fa fa-chevron-right text-gray-300 group-hover:text-blue-400 transition-colors" style="font-size: 0.85em;"></i>
                                    </span>
                                </a>
    
                                <a href="#" class="flex items-center justify-between px-4 py-3 bg-gray-50 rounded-lg transition-colors group">
                                    <span class="text-[14px] font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500">
                                        Guide to Submitting a Visa Application
                                    </span>
                                    <span class="inline-flex items-center justify-center group-hover:bg-blue-50 transition-all">
                                        <i class="fa fa-chevron-right text-gray-300 group-hover:text-blue-400 transition-colors" style="font-size: 0.85em;"></i>
                                    </span>
                                </a>

                                <a href="#" class="flex items-center justify-between px-4 py-3 bg-gray-50 rounded-lg transition-colors group">
                                    <span class="text-[14px] font-medium tracking-wide leading-normal text-gray-700 group-hover:text-blue-500">
                                        How to Use Gift Vouchers on Your Booking
                                    </span>
                                    <span class="inline-flex items-center justify-center group-hover:bg-blue-50 transition-all">
                                        <i class="fa fa-chevron-right text-gray-300 group-hover:text-blue-400 transition-colors" style="font-size: 0.85em;"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                      
            </div>       
        </div>       
    </section>
    
    
@endsection