@extends('components.layout.master')

@section('content')


    <!-- banner --->
     <section class="relative z-10">
        
        <div class="w-full min-h-[150px] sm:min-h-[180px] relative overflow-hidden" style="background-image: url('{{ asset('assets/promo/banner-5.jpg') }}'); background-size: cover; background-position: center;"></div>

        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <div class="w-full max-w-6xl px-4 sm:px-6 lg:px-8 mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between text-white pointer-events-auto gap-6">
                <div class="flex-1 flex flex-col items-start justify-center">
                    <h1 class="text-xl sm:text-2xl md:text-3xl font-bold tracking-wide font-nunito">
                      Browse Promos for Your Getaway
                    </h1>

                    <p class="mt-2 text-sm/6 md:text-sm/6 font-nunito text-white/90 tracking-wide leading-tight font-semibold">
                        Whatever your travel plans are, find all the best deals here.
                    </p>
                </div>

                <div class="w-full lg:w-auto mt-4 lg:mt-0 hidden lg:block">
                    <form class="w-full">
                        <div class="flex flex-col lg:flex-row gap-6 md:gap-7">
                            <div class="flex-1 min-w-[350px] lg:min-w-[420px]">
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2" fill="none"/>
                                            <line x1="16.5" y1="16.5" x2="21" y2="21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                        </svg>
                                    </span>

                                    <input type="search" id="search" name="search" placeholder="Search e-resource, promo code, or destination..." class="w-full bg-white rounded-full pl-10 pr-5 py-3 text-base focus:outline-none placeholder-gray-400 placeholder:text-sm/6 tracking-wide font-nunito transition-all duration-200 min-w-[350px] lg:min-w-[420px] text-gray-700 focus:bg-white" style="color: #374151; background-color: #fff;" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- promotion -->
    <section class="relative z-30 md:mt-[-20px] mt-[-13px]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-xl relative z-50 px-3 lg:px-3 py-4.5">

                <!-- content --->
                <div class="w-full overflow-x-auto">
                    <div class="flex">
                        <ul class="flex flex-nowrap items-center gap-0 sm:gap-0 min-w-max"> 
                            <li class="flex-shrink-0">
                                <button class="flex flex-col items-center px-4 py-2 text-gray-700 font-medium font-nunito tracking-wide leading-tight focus:outline-none transition-colors duration-150 hover:bg-blue-50 hover:text-blue-500 rounded-lg group">
                                    <i class="fa fa-th-large text-lg mb-3 text-blue-500 group-hover:text-blue-700 transition-colors"></i>
                                    <span class="text-sm/6 whitespace-nowrap">All</span>
                                </button>
                            </li>

                            <li class="flex-shrink-0">
                                <button class="flex flex-col items-center px-4 py-2 text-gray-700 font-medium font-nunito tracking-wide leading-tight focus:outline-none transition-colors duration-150 hover:bg-yellow-50 hover:text-yellow-600 rounded-lg group">
                                    <i class="fa fa-bullhorn text-lg mb-3 text-yellow-500 group-hover:text-yellow-600 transition-colors"></i>
                                    <span class="text-sm/6 whitespace-nowrap">Special Campaigns</span>
                                </button>
                            </li>

                            <li class="flex-shrink-0">
                                <button class="flex flex-col items-center px-4 py-2 text-gray-700 font-medium font-nunito tracking-wide leading-tight focus:outline-none transition-colors duration-150 hover:bg-sky-50 hover:text-sky-600 rounded-lg group">
                                    <i class="fa fa-plane text-lg mb-3 text-sky-500 group-hover:text-sky-600 transition-colors"></i>
                                    <span class="text-sm/6 whitespace-nowrap">Flights</span>
                                </button>
                            </li>

                            <li class="flex-shrink-0">
                                <button class="flex flex-col items-center px-4 py-2 text-gray-700 font-medium font-nunito tracking-wide leading-tight focus:outline-none transition-colors duration-150 hover:bg-green-50 hover:text-green-600 rounded-lg group">
                                    <i class="fa fa-hotel text-lg mb-3 text-green-500 group-hover:text-green-600 transition-colors"></i>
                                    <span class="text-sm/6 whitespace-nowrap">Hotels</span>
                                </button>
                            </li>

                            <li class="flex-shrink-0">
                                <button class="flex flex-col items-center px-4 py-2 text-gray-700 font-medium font-nunito tracking-wide leading-tight focus:outline-none transition-colors duration-150 hover:bg-red-50 hover:text-red-600 rounded-lg group">
                                    <i class="fa fa-map-marker-alt text-lg mb-3 text-red-500 group-hover:text-red-600 transition-colors"></i>
                                    <span class="text-sm/6 whitespace-nowrap">Things To Do</span>
                                </button>
                            </li>

                            <li class="flex-shrink-0">
                                <button class="flex flex-col items-center px-4 py-2 text-gray-700 font-medium font-nunito tracking-wide leading-tight focus:outline-none transition-colors duration-150 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg group">
                                    <i class="fa fa-ship text-lg mb-3 text-indigo-500 group-hover:text-indigo-600 transition-colors"></i>
                                    <span class="text-sm/6 whitespace-nowrap">Cruises</span>
                                </button>
                            </li>
                            
                            <li class="flex-shrink-0">
                                <button class="flex flex-col items-center px-4 py-2 text-gray-700 font-medium font-nunito tracking-wide leading-tight focus:outline-none transition-colors duration-150 hover:bg-orange-50 hover:text-orange-600 rounded-lg group">
                                    <i class="fa fa-bus text-lg mb-3 text-orange-500 group-hover:text-orange-600 transition-colors"></i>
                                    <span class="text-sm/6 whitespace-nowrap">Ground Transport</span>
                                </button>
                            </li>

                            <li class="flex-shrink-0">
                                <button class="flex flex-col items-center px-4 py-2 text-gray-700 font-medium font-nunito tracking-wide leading-tight focus:outline-none transition-colors duration-150 hover:bg-purple-50 hover:text-purple-600 rounded-lg group">
                                    <i class="fa fa-credit-card text-lg mb-3 text-purple-500 group-hover:text-purple-600 transition-colors"></i>
                                    <span class="text-sm/6 whitespace-nowrap">PayLater & Payments</span>
                                </button>
                            </li>

                            <li class="flex-shrink-0">
                                <button class="flex flex-col items-center px-4 py-2 text-gray-700 font-medium font-nunito tracking-wide leading-tight focus:outline-none transition-colors duration-150 hover:bg-pink-50 hover:text-pink-600 rounded-lg group">
                                    <i class="fa fa-credit-card text-lg mb-3 text-pink-500 group-hover:text-pink-600 transition-colors"></i>
                                    <span class="text-sm/6 whitespace-nowrap">Coupons</span>
                                </button>
                            </li>

                            <li class="flex-shrink-0">
                                <button class="flex flex-col items-center px-4 py-2 text-gray-700 font-medium font-nunito tracking-wide leading-tight focus:outline-none transition-colors duration-150 hover:bg-gray-100 hover:text-gray-700 rounded-lg group">
                                    <i class="fa fa-ellipsis-h text-lg mb-3 text-gray-500 group-hover:text-gray-700 transition-colors"></i>
                                    <span class="text-sm/6 whitespace-nowrap">Others</span>
                                </button>
                            </li>
                        </ul>
                    </div>    
                </div>    
            </div>    
        </div>       
    </section>
    
    
@endsection