<div id="allProductsModal" class="hidden fixed inset-0 z-50">

    <div data-overlay class="absolute inset-0 bg-black/40"></div>
    
    <div class="relative z-10 flex items-center justify-center min-h-full p-0">
        <div class="w-full max-w-none sm:max-w-lg bg-white rounded-none sm:rounded-xl shadow-xl border-0 sm:border border-gray-100 h-screen sm:h-auto flex flex-col">
            <div class="flex items-center justify-between px-3 sm:px-3 md:px-4 py-4 border-b border-gray-100">
                <h3 class="text-base/6 font-semibold leading-normal tracking-wide text-gray-600">
                    All Products
                </h3>

                <button id="closeAllProducts" class="inline-flex items-center justify-center w-8 h-8 bg-blue-50 rounded-full text-gray-400 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div id="allProductsBody" class="px-0 py-5 flex-1 overflow-y-auto overscroll-contain pr-1 sm:max-h-[65vh]">
                <div id="productGridModal" class="grid grid-cols-3 sm:grid-cols-4 gap-x-0 gap-y-6 justify-start"> 
                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-blue-50 mb-1.5">
                            <i class="fa fa-globe text-xl text-blue-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">General <br> Information</span>
                    </a>

                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-green-50 mb-1.5">
                            <i class="fa fa-user text-xl text-green-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Profile and <br> Security</span>
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
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Customer <br/> Support</span>
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

                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-emerald-50 mb-1.5">
                            <i class="fa fa-bus text-xl text-emerald-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Bus & Travel</span>
                    </a>

                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-amber-50 mb-1.5">
                            <i class="fa fa-taxi text-xl text-amber-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Airport Transfer</span>
                    </a>

                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-indigo-50 mb-1.5">
                            <i class="fa fa-plane-arrival text-xl text-indigo-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Airport Travel</span>
                    </a>

                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-rose-50 mb-1.5">
                            <i class="fa fa-anchor text-xl text-rose-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Cruises</span>
                    </a>

                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-sky-50 mb-1.5">
                            <i class="fa fa-map-signs text-xl text-sky-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Tour Guides</span>
                    </a>

                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-fuchsia-50 mb-1.5">
                            <i class="fa fa-gift text-xl text-fuchsia-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Gift Cards</span>
                    </a>

                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-yellow-50 mb-1.5">
                            <i class="fa fa-star text-xl text-yellow-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Loyalty</span>
                    </a>

                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-cyan-50 mb-1.5">
                            <i class="fa fa-wifi text-xl text-cyan-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Wi‑Fi & SIM</span>
                    </a>

                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-violet-50 mb-1.5">
                            <i class="fa fa-landmark text-xl text-violet-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Attractions</span>
                    </a>

                    <a href="#" class="flex flex-col items-center group">
                        <span class="flex items-center justify-center w-11 h-11 rounded-full bg-amber-50 mb-1.5">
                            <i class="fa fa-ticket-alt text-xl text-amber-500"></i>
                        </span>
                        <span class="text-xs font-semibold text-gray-700 text-center leading-tight">Tickets</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>