<div class="bg-white fixed top-0 left-0 right-0 z-50 shadow-md">

    <div class="border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 p-6 flex items-center justify-between">
        
            <div class="flex items-center gap-2">
                <a href="{{ route('index') }}" class="-m-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-10 w-auto" src="{{ asset('assets/logo/logo-1.png') }}" alt="" />
                </a>
            </div>

            <div class="hidden lg:flex items-center gap-7 text-sm font-medium text-gray-700">
                <a href="{{ route('promotion') }}" class="flex items-center gap-2 leading-normal font-semibold tracking-wide hover:text-blue-500 transition-colors">
                    <img src="{{ asset('assets/icon/icon.webp') }}" class="w-5 h-5" alt="Deals">
                    <span>Deals</span>
                </a>

                <div class="relative group">
                   
                    <div class="flex items-center gap-1 leading-normal font-semibold hover:text-blue-500 transition-colors cursor-pointer">
                        <span>Support</span>
                        <svg class="w-3 h-3 mt-0.5 text-gray-500 group-hover:text-blue-500 transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>

                    <div class="absolute left-0 top-full mt-2 w-80 bg-white font-medium tracking-wide leading-normal text-gray-700 rounded-lg border border-gray-200 shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <a href="{{ route('helpcenter') }}" class="flex items-start gap-4 px-4 py-3 first:rounded-t-lg hover:bg-gray-100 transition-colors">
                            <i class="fa-solid fa-circle-question text-[14px] text-gray-500 min-w-[16px] text-center mt-1"></i>

                            <div>
                                <div class="font-semibold text-gray-600 leading-normal text-[14px]">Help Center</div>
                                <div class="text-gray-500 leading-normal font-semibold text-[12px] mt-2">Pusat bantuan dan panduan penggunaan layanan kami.</div>
                            </div>
                        </a>

                        <a href="{{ route('contactus') }}" class="flex items-start gap-4 px-4 py-3 hover:bg-gray-100 transition-colors">
                            <i class="fa-solid fa-headset text-[14px] text-gray-500 min-w-[16px] text-center mt-1"></i>
                            <div>
                                <div class="font-semibold text-gray-600 leading-normal text-[14px]">Contact Us</div>
                                <div class="text-gray-500 leading-normal font-semibold text-[12px] mt-2">Hubungi tim kami untuk bantuan lebih lanjut.</div>
                            </div>
                        </a>

                        <a href="{{ route('myInbox') }}" class="flex items-start gap-4 px-4 py-3 last:rounded-b-lg hover:bg-gray-100 transition-colors">
                            <i class="fa-solid fa-inbox text-[14px] text-gray-500 min-w-[16px] text-center mt-1"></i>
                            <div>
                                <div class="font-semibold text-gray-600 leading-normal text-[14px]">My Inbox</div>
                                <div class="text-gray-500 leading-normal font-semibold text-[12px] mt-2">Lihat pesan dan notifikasi terbaru Anda.</div>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="#" class="leading-normal font-semibold tracking-wide hover:text-blue-500 transition-colors">
                    Partnership
                </a>

                <a href="#" class="leading-normal font-semibold tracking-wide hover:text-blue-500 transition-colors">
                    Tripnika Points
                </a>

                <a href="{{ route('booking') }}" class="leading-normal font-semibold tracking-wide hover:text-blue-500 transition-colors">
                    Your Orders
                </a>

                <div class="relative flex items-center">
                    <button type="button" class="flex items-center gap-2 focus:outline-none group transition-colors open-language-modal" data-modal-target="languageModal" data-modal-toggle="languageModal">
                        <span class="inline-block w-5 h-5 rounded-full overflow-hidden border border-gray-200">
                            <img src="{{ asset('assets/logo/united-kingdom.png') }}" alt="EN Flag" class="w-full h-full object-cover" />
                        </span>
                        <span class="text-gray-600 font-semibold text-sm/6 tracking-wide leading-normal truncate group-hover:text-blue-500 transition-colors">
                            English EN
                        </span>
                    </button>
                </div>                

                <div class="flex items-center gap-2">
                    <button class="openLoginModal flex items-center gap-2 text-sm border-2 border-blue-500 text-blue-500 px-5 py-1 rounded-full bg-white/60 hover:bg-white/80 transition">
                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        <span>Login</span>
                    </button>

                    <button class="openRegisterModal text-sm border border-blue-500 bg-blue-500 text-white px-5 py-1 rounded-full hover:bg-blue-600 transition">
                        Register
                    </button>
                </div>
            </div>
            
            <div class="flex lg:hidden items-center gap-2">
                <button type="button" data-menu-open class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <header class="z-50">

        <nav class="hidden lg:flex justify-center w-full">
            <div class="flex items-center gap-12 font-semibold text-gray-600 leading-normal text-[15px] p-6 max-w-8xl w-full justify-center">
                <a href="{{ route('hotels') }}" class="hover:text-blue-500 transition-colors duration-200 whitespace-nowrap {{ request()->routeIs('hotels') ? 'text-blue-500' : '' }}">Hotels</a>                
                <a href="/" class="hover:text-blue-500 transition-colors duration-200 whitespace-nowrap {{ request()->is('/') ? 'text-blue-500' : '' }}">Flights</a>
                <a href="/" class="hover:text-blue-500 transition-colors duration-200 whitespace-nowrap {{ request()->is('/') ? 'text-blue-500' : '' }}">Trains</a>
                <a href="/" class="hover:text-blue-500 transition-colors duration-200 whitespace-nowrap {{ request()->is('/') ? 'text-blue-500' : '' }}">Vila & Apt</a>
                <a href="/" class="hover:text-blue-500 transition-colors duration-200 whitespace-nowrap {{ request()->is('/') ? 'text-blue-500' : '' }}">Woosh</a>
                <a href="/" class="hover:text-blue-500 transition-colors duration-200 whitespace-nowrap {{ request()->is('/') ? 'text-blue-500' : '' }}">Booking</a>                
                <a href="/" class="hover:text-blue-500 transition-colors duration-200 whitespace-nowrap {{ request()->is('/') ? 'text-blue-500' : '' }}">Bus & Travel</a>
                <a href="/" class="hover:text-blue-500 transition-colors duration-200 whitespace-nowrap {{ request()->is('/') ? 'text-blue-500' : '' }}">Airports Travel</a>      
                <a href="/" class="hover:text-blue-500 transition-colors duration-200 whitespace-nowrap {{ request()->is('/') ? 'text-blue-500' : '' }}">Cars Rental</a>

                <div class="relative group">
                    <div class="flex items-center gap-1 hover:text-blue-500 transition-colors duration-200 focus:outline-none {{ request()->is('/') ? 'text-blue-500' : '' }}">
                        <span>More</span>
                        <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                
                    <div class="absolute left-1/2 -translate-x-1/2 top-full mt-1 w-76 bg-white rounded-xl border border-gray-200 shadow-xl pb-0 z-50 text-left hidden group-hover:flex flex-col opacity-0 group-hover:opacity-100 group-hover:visible invisible transition-all duration-200 z-50 overflow-hidden">
                  
                        <a href="#" class="flex items-start gap-6 px-6 py-3 first:rounded-t-lg transition-colors hover:bg-gray-100 group">
                            <i class="fa-solid fa-hotel text-[14px] text-gray-500 min-w-[16px] text-center mt-1"></i>
                            <div>
                                <div class="font-semibold text-gray-700 leading-normal text-[14px]">Flight + Hotel</div>
                                <div class="text-gray-500 leading-normal font-semibold text-[12px] mt-1.5">Paket hemat penerbangan & hotel.</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-start gap-6 px-6 py-3 transition-colors hover:bg-gray-100 group">
                            <i class="fa-solid fa-plane text-[14px] text-gray-500 min-w-[16px] text-center mt-1"></i>
                            <div>
                                <div class="font-semibold text-gray-700 leading-normal text-[14px]">Travel Insurance</div>
                                <div class="text-gray-500 leading-normal font-semibold text-[12px] mt-1.5">Perlindungan perjalanan Anda.</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-start gap-6 px-6 py-3 transition-colors hover:bg-gray-100 group">
                            <i class="fa-solid fa-globe text-[14px] text-gray-500 min-w-[16px] text-center mt-1"></i>
                            <div>
                                <div class="font-semibold text-gray-700 leading-normal text-[14px]">International Data Plans</div>
                                <div class="text-gray-500 leading-normal font-semibold text-[12px] mt-1.5">Paket data untuk luar negeri.</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-start gap-6 px-6 py-3 transition-colors hover:bg-gray-100 group">
                            <i class="fa-solid fa-file-invoice-dollar text-[14px] text-gray-500 min-w-[16px] text-center mt-1"></i>
                            <div>
                                <div class="font-semibold text-gray-700 leading-normal text-[14px]">TPayLater</div>
                                <div class="text-gray-500 leading-normal font-semibold text-[12px] mt-1.5">Bayar nanti dengan mudah.</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-start gap-6 px-6 py-3 transition-colors hover:bg-gray-100 group">
                            <i class="fa-solid fa-glasses text-[14px] text-gray-500 min-w-[16px] text-center mt-1"></i>
                            <div>
                                <div class="font-semibold text-gray-700 leading-normal text-[14px]">Travel Guides</div>
                                <div class="text-gray-500 leading-normal font-semibold text-[12px] mt-1.5">Panduan perjalanan yang lengkap dan terpercaya.</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-start gap-6 px-6 py-3 last:rounded-b-lg transition-colors hover:bg-gray-100 group w-full">
                            <i class="fa-solid fa-gift text-[14px] text-gray-500 min-w-[16px] text-center mt-1"></i>
                            <div>
                                <div class="font-semibold text-gray-700 leading-normal text-[14px]">Gift Voucher</div>
                                <div class="text-gray-500 leading-normal font-semibold text-[12px] mt-1.5 ">Dapatkan voucher hadiah spesial.</div>
                            </div>
                        </a>
                    </div>
                </div>     
            </div>           
        </nav>

        <div id="mobile-menu-overlay" class="hidden fixed inset-0 z-40 bg-black/30"></div>

        <div id="mobile-menu" class="lg:hidden fixed inset-y-0 right-0 z-40 w-full overflow-y-auto bg-white p-5 sm:ring-1 sm:ring-gray-900/10 transition duration-700 transform translate-x-full" role="dialog" aria-modal="true">
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-10 w-auto" src="{{ asset('assets/logo/logo-1.png') }}" alt="" />
                </a>

                <button type="button" data-menu-close class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="mt-6 flow-root">
                <div class="-my-6">
                    <div class="space-y-2 py-6 text-md font-nunito font-semibold text-gray-700 tracking-wide leading-normal">                                                              
                        <a href="/" class="flex items-center justify-between rounded-lg px-3 py-4 hover:text-blue-500 transition-colors duration-200 border-b border-dotted border-gray-300 {{ request()->routeIs('index') || request()->is('/') ? '' : '' }}">
                            <span>Hotels</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-2 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </a>

                        <a href="/" class="flex items-center justify-between rounded-lg px-3 py-4 hover:text-blue-500 transition-colors duration-200 border-b border-dotted border-gray-300 {{ request()->routeIs('hotels') || request()->is('/') ? 'text-blue-500' : '' }}">
                            <span>Hotels</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-2 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </a>

                        <a href="/" class="flex items-center justify-between rounded-lg px-3 py-4 hover:text-blue-500 transition-colors duration-200 border-b border-dotted border-gray-300 {{ request()->is('flight') ? 'text-blue-500' : '' }}">
                            <span>Flights</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-2 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </a>

                        <a href="/" class="flex items-center justify-between rounded-lg px-3 py-4 hover:text-blue-500 transition-colors duration-200 border-b border-dotted border-gray-300 {{ request()->is('book-catalog') ? 'text-blue-500' : '' }}">
                            <span>Trains</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-2 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </a>
                        
                        <a href="/" class="flex items-center justify-between rounded-lg px-3 py-4 hover:text-blue-500 transition-colors duration-200 border-b border-dotted border-gray-300 {{ request()->routeIs('hotels') || request()->is('/') ? 'text-blue-500' : '' }}">
                            <span>Vila & Apt</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-2 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </a>

                        <a href="/" class="flex items-center justify-between rounded-lg px-3 py-4 hover:text-blue-500 transition-colors duration-200 border-b border-dotted border-gray-300 {{ request()->routeIs('hotels') || request()->is('/') ? 'text-blue-500' : '' }}">
                            <span>Whoosh</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-2 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </a>

                        <a href="/" class="flex items-center justify-between rounded-lg px-3 py-4 hover:text-blue-500 transition-colors duration-200 border-b border-dotted border-gray-300 {{ request()->is('e-journal') ? 'text-blue-500' : '' }}">
                            <span>Bus & Travel</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-2 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </a>

                        <a href="/" class="flex items-center justify-between rounded-lg px-3 py-4 hover:text-blue-500 transition-colors duration-200 border-b border-dotted border-gray-300 {{ request()->is('e-resources') ? 'text-blue-500' : '' }}">
                            <span>Airports Travel</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-2 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </a>

                        <a href="/" class="flex items-center justify-between rounded-lg px-3 py-4 hover:text-blue-500 transition-colors duration-200 border-b border-dotted border-gray-300 {{ request()->is('profile-perpus') ? 'text-blue-500' : '' }}">
                            <span>Cars Rental</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-2 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </a>

                        <div class="border-b border-dotted border-gray-300">
                            <button type="button" data-dropdown-toggle class="w-full flex items-center justify-between px-3 py-4 hover:text-blue-500 transition-colors duration-200">
                                More
                                <svg class="w-3 h-3 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            
                            <div class="hidden flex-col pl-6 pb-6 space-y-2 mt-2" data-dropdown-menu>
                                <div class="hover:bg-gray-100 rounded-lg transition-colors">
                                    <a href="#" class="flex items-start gap-3 hover:text-blue-500 transition-colors py-4 border-b border-dotted border-gray-300">
                                        <i class="fa-solid fa-hotel text-[16px] text-gray-500 min-w-[18px] text-center mt-1"></i>
                                        <div>
                                            <div class="font-semibold text-gray-700 tracking-wide leading-normal text-[14px]">Flight + Hotel</div>
                                            <div class="text-gray-500 tracking-wide leading-normal font-medium text-[13px] mt-0.5">Paket hemat penerbangan & hotel.</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="hover:bg-gray-100 rounded-lg transition-colors">
                                    <a href="#" class="flex items-start gap-3 hover:text-blue-500 transition-colors py-4 border-b border-dotted border-gray-300">
                                        <i class="fa-solid fa-plane text-[16px] text-gray-500 min-w-[18px] text-center mt-1"></i>
                                        <div>
                                            <div class="font-semibold text-gray-700 tracking-wide leading-normal text-[14px]">Travel Insurance</div>
                                            <div class="text-gray-500 tracking-wide leading-normal font-medium text-[13px] mt-0.5">Perlindungan perjalanan Anda.</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="hover:bg-gray-100 rounded-lg transition-colors">
                                    <a href="#" class="flex items-start gap-3 hover:text-blue-500 transition-colors py-4 border-b border-dotted border-gray-300">
                                        <i class="fa-solid fa-globe text-[16px] text-gray-500 min-w-[18px] text-center mt-1"></i>
                                        <div>
                                            <div class="font-semibold text-gray-700 tracking-wide leading-normal text-[14px]">International Data Plans</div>
                                            <div class="text-gray-500 tracking-wide leading-normal font-medium text-[13px] mt-0.5">Paket data untuk luar negeri.</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="hover:bg-gray-100 rounded-lg transition-colors">
                                    <a href="#" class="flex items-start gap-3 hover:text-blue-500 transition-colors py-4 border-b border-dotted border-gray-300">
                                        <i class="fa-solid fa-file-invoice-dollar text-[16px] text-gray-500 min-w-[18px] text-center mt-1"></i>
                                        <div>
                                            <div class="font-semibold text-gray-700 tracking-wide leading-normal text-[14px]">TPayLater</div>
                                            <div class="text-gray-500 tracking-wide leading-normal font-medium text-[13px] mt-0.5">Bayar nanti dengan mudah.</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="hover:bg-gray-100 rounded-lg transition-colors">
                                    <a href="#" class="flex items-start gap-3 hover:text-blue-500 transition-colors py-4 border-b border-dotted border-gray-300">
                                        <i class="fa-solid fa-glasses text-[16px] text-gray-500 min-w-[18px] text-center mt-1"></i>
                                        <div>
                                            <div class="font-semibold text-gray-700 tracking-wide leading-normal text-[14px]">Travel Guides</div>
                                            <div class="text-gray-500 tracking-wide leading-normal font-medium text-[13px] mt-0.5">Panduan perjalanan terbaik.</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="hover:bg-gray-100 rounded-lg transition-colors">
                                    <a href="#" class="flex items-start gap-3 hover:text-blue-500 transition-colors py-4 border-b border-dotted border-gray-300">
                                        <i class="fa-solid fa-gift text-[14px] text-gray-500 min-w-[16px] text-center mt-1"></i>
                                        <div>
                                            <div class="font-semibold text-gray-700 tracking-wide leading-normal text-[14px]">Gift Voucher</div>
                                            <div class="text-gray-500 tracking-wide leading-normal font-medium text-[13px] mt-0.5">Dapatkan voucher hadiah spesial.</div>
                                        </div>
                                    </a>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="openLoginModal py-6 text-md font-nunito font-semibold text-gray-700 tracking-wide leading-normal flex flex-col gap-3">
                        <button class="-mx-3 flex items-center justify-center gap-2 rounded-full px-3 py-2 border border-blue-500 text-gray-700">
                            <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            <span>Login</span>
                        </button>

                        <button class="openRegisterModal -mx-3 flex items-center justify-center gap-2 rounded-full px-3 py-2 border border-blue-500 bg-blue-500 text-white">                            
                            <span>Register</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>