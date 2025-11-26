@php($hideHeader = true)

@extends('components.layout.master')

@section('content')


    <!-- my inbox --->
    <section>              
        
        <div class="fixed inset-0 z-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/images-1.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-30"></div>        
        </div>
       
        <div class="fixed inset-0 flex items-center justify-center z-10">
            <div class="flex flex-col md:flex-row items-center justify-center w-full max-w-6xl mx-auto">
                <div id="welcomeArea" class="flex flex-col justify-center items-start w-full md:w-1/2 max-w-lg px-6 md:pl-12">
    
                    <h1 class="text-2xl md:text-3xl font-semibold text-white drop-shadow-lg font-nunito">
                        Welcome to My Inbox
                    </h1>
    
                    <p class="text-sm/6 md:text-sm/6 text-white/90 font-nunito tracking-wide leading-normal font-normal drop-shadow mb-2">
                        Temukan promo, notifikasi, dan pesan terbaru untuk perjalananmu! Jangan lewatkan update penting dan penawaran spesial hanya di sini.
                    </p>
    
                    <button id="getStartedBtn" class="mt-2 w-full max-w-xs md:max-w-none md:w-auto md:px-8 py-2 text-gray-700 font-semibold rounded-lg text-sm/6 font-nunito tracking-wide leading-normal shadow bg-white block md:hidden">
                        Get Started
                    </button>
                </div>

                <div id="loginArea" class="hidden md:flex flex-col items-end justify-center w-full md:w-1/2 px-2 sm:px-4 md:pr-12">
                    <div class="w-full max-w-xs sm:max-w-sm md:max-w-sm">
                        <a href="{{ route('index') }}" class="flex items-center justify-center text-white font-medium leading-normal tracking-wide text-[14px] hover:underline mb-4 border-1 border-white rounded-xl px-3 py-2 bg-white/10 transition">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                            <span>Go to Homepage</span>
                        </a>

                        <div class="bg-white/8 border-1 border-white rounded-2xl shadow-xl w-full px-4 py-3 flex flex-col items-stretch" style="box-shadow:0 8px 32px 0 rgba(31, 38, 135, 0.15);">
                            <div class="flex flex-col sm:flex-row items-center sm:items-start justify-between w-full mb-5 relative gap-3">
                                <div class="flex flex-row items-center w-full sm:w-3/4 mb-2 sm:mb-0 justify-center sm:justify-start">
                                    <h2 class="text-lg sm:text-[1.18rem] font-medium text-white leading-snug text-center sm:text-left w-auto">
                                        We've got a deal you can't resist!
                                    </h2>
                                </div>
    
                                <img src="{{ asset('assets/icon/icon-4.svg') }}" alt="Login Illustration" class="object-contain self-center sm:self-start flex-shrink-0 sm:ml-auto sm:mr-0 ml-2 w-22 h-22" style="align-self: flex-start;"/>
                            </div>

                            <div class="flex flex-col gap-3.5 w-full">
                                <div id="socialOptionsDesktop" class="flex flex-col gap-3.5">
                                    <button class="flex items-center justify-center w-full py-2.5 rounded-full text-white border-1 border-white shadow-sm text-[15px] font-semibold mb-1 leading-normal tracking-wide">
                                        <img src="{{ asset('assets/icon/icon-3.svg') }}" alt="Google" class="w-5 h-5 mr-2.5">
                                        <span>Google</span>
                                    </button>

                                    <div class="flex flex-col sm:flex-row gap-3 w-full">
                                        <button class="flex items-center justify-center flex-1 py-2.5 rounded-full text-white border-1 border-white shadow-sm text-[15px] font-semibold leading-normal tracking-wide">
                                            <i class="fab fa-apple text-xl text-white mr-2.5"></i> 
                                            <span>Apple</span>
                                        </button>

                                        <button class="flex items-center justify-center flex-1 py-2.5 rounded-full text-white border-1 border-white shadow-sm text-[15px] font-semibold leading-normal tracking-wide">
                                            <i class="fab fa-facebook text-xl text-white mr-2.5 "></i> 
                                            <span>Facebook</span>
                                        </button>
                                    </div>

                                    <div class="w-full flex flex-col gap-3 justify-center items-center mt-2">
                                        <button id="otherOptionsDesktop" type="button" class="text-white font-bold text-sm mb-1 hover:underline font-nunito tracking-wide leading-normal">
                                            Other options
                                        </button>

                                        <p class="text-white/90 text-[12px] text-center mb-1 font-nunito tracking-wide leading-normal">
                                            Lower price and rewards are waiting. Unlock them by logging&nbsp;in!
                                        </p>

                                        <p class="text-white/90 text-[12px] text-center font-nunito tracking-wide leading-normal">
                                            By continuing, you agree to these <a href="#" class="text-white underline">Terms & Conditions </a> and acknowledge that you have been informed about our <a href="#" class="text-white underline">Privacy Notice</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div id="emailOptionsDesktop" class="hidden">
                                <label class="block text-white text-sm font-semibold mb-3 leading-normal tracking-wide">
                                    Email/Mobile Number
                                </label>

                                <input type="text" class="w-full px-4 py-2 rounded-lg bg-transparent text-white placeholder-white/80 border-1 border-white outline-none" placeholder="Phone or Email">
                                
                                <button class="mt-5 w-full py-2.5 rounded-full bg-white text-gray-700 tracking-wide leading-normal font-semibold hover:bg-white/90 transition-colors">
                                    Continue
                                </button>
                                
                                <div class="flex justify-center">
                                    <button id="backDesktop" type="button" class="mt-3 inline-flex items-center justify-center text-white leading-normal tracking-wide font-semibold text-sm/6">
                                        <i class="fa fa-arrow-left mr-2"></i>
                                        <span>Back</span> 
                                    </button>
                                </div>

                                <div class="w-full flex flex-col gap-3 justify-center items-center mt-3">
                                    <p class="text-white/90 text-xs text-center mb-1 font-nunito tracking-wide leading-normal">
                                        Lower price and rewards are waiting. Unlock them by logging&nbsp;in!
                                    </p>
                                    <p class="text-white/90 text-[12px] text-center font-nunito tracking-wide leading-normal">
                                        By continuing, you agree to these <a href="#" class="text-white underline">Terms & Conditions</a> and acknowledge that you have been informed about our <a href="#" class="text-white underline">Privacy Notice</a>.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="emailOptionsDesktop" class="hidden">
                            <label class="block text-white text-sm font-semibold mb-3 leading-normal tracking-wide">
                                Email/Mobile Number
                            </label>

                            <input type="text" class="w-full px-4 py-2 rounded-lg bg-transparent text-white placeholder-white/80 border-1 border-white outline-none" placeholder="Phone or Email">
                            
                            <button class="mt-5 w-full py-2.5 rounded-full bg-white text-gray-700 tracking-wide leading-normal font-semibold hover:bg-white/90 transition-colors">
                                Continue
                            </button>
                            
                            <div class="flex justify-center">
                                <button id="backDesktop" type="button" class="mt-3 inline-flex items-center justify-center text-white leading-normal tracking-wide font-semibold text-sm/6">
                                    <i class="fa fa-arrow-left mr-2"></i>
                                    <span>Back</span> 
                                </button>
                            </div>

                            <div class="w-full flex flex-col gap-3 justify-center items-center mt-3">
                                <p class="text-white/90 text-xs text-center mb-1 font-nunito tracking-wide leading-normal">
                                    Lower price and rewards are waiting. Unlock them by logging&nbsp;in!
                                </p>
                                <p class="text-white/90 text-[12px] text-center font-nunito tracking-wide leading-normal">
                                    By continuing, you agree to these <a href="#" class="text-white underline">Terms & Conditions</a> and acknowledge that you have been informed about our <a href="#" class="text-white underline">Privacy Notice</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- mobile -->
        <div id="mobileLoginArea" class="md:hidden fixed inset-0 z-20 bg-black/50 flex items-center justify-center p-4 hidden">
            <div class="bg-white/8 border-1 border-white rounded-2xl shadow-xl w-full max-w-sm px-4 py-3 flex flex-col items-stretch" style="box-shadow:0 8px 32px 0 rgba(31, 38, 135, 0.15);">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-medium text-white leading-snug">
                        We've got a deal you can't resist!
                    </h2>
    
                    <button id="closeMobileLogin" class="text-white hover:text-white/70">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex flex-col gap-3.5 w-full">
                    <div id="socialOptionsMobile" class="flex flex-col gap-3.5">
                        <button class="flex items-center justify-center w-full py-2.5 rounded-full border-1 border-white shadow-sm text-[15px] font-semibold text-white mb-1 leading-normal tracking-wide">
                            <img src="{{ asset('assets/icon/icon-3.svg') }}" alt="Google" class="w-5 h-5 mr-2.5">
                            Google
                        </button>

                        <div class="flex flex-col sm:flex-row gap-3 w-full">
                            <button class="flex items-center justify-center flex-1 py-2.5 rounded-full text-white border-1 border-white shadow-sm text-[15px] font-semibold leading-normal tracking-wide">
                                <i class="fab fa-apple text-xl text-white mr-2.5"></i> Apple
                            </button>

                            <button class="flex items-center justify-center flex-1 py-2.5 rounded-full text-white border-1 border-white shadow-sm text-[15px] font-semibold leading-normal tracking-wide">
                                <i class="fab fa-facebook text-xl text-white  mr-2.5"></i> Facebook
                            </button>
                        </div>

                        <div class="w-full flex flex-col gap-3 justify-center items-center mt-2">
                            <button id="otherOptionsMobile" type="button" class="text-white font-bold text-sm mb-1 hover:underline font-nunito tracking-wide leading-normal">
                                Other options
                            </button>

                            <p class="text-white/90 text-xs text-center mb-1 font-nunito tracking-wide leading-normal">
                                Lower price and rewards are waiting. Unlock them by logging&nbsp;in!
                            </p>

                            <p class="text-white/90 text-[12px] text-center font-nunito tracking-wide leading-normal">
                                By continuing, you agree to these <a href="#" class="text-white underline">Terms & Conditions</a> and acknowledge that you have been informed about our <a href="#" class="text-white underline">Privacy Notice</a>.
                            </p>
                        </div>
                    </div>

                    <div id="emailOptionsMobile" class="hidden">
                        <label class="block text-white text-sm font-semibold mb-3 leading-normal tracking-wide">
                            Email/Mobile Number
                        </label>
                        
                        <input type="text" class="w-full px-4 py-2 rounded-lg border-1 border-white text-white placeholder-white outline-none" placeholder="Phone or Email">
                        
                        <button class="mt-5 w-full py-2.5 rounded-full bg-white/40 text-gray-400 tracking-wide leading-normal font-semibold cursor-not-allowed">
                            Continue    
                        </button>
                    
                        <div class="flex justify-center">   
                            <button id="backMobile" type="button" class="mt-3 inline-flex items-center mx-auto items-center justify-center text-white leading-normal tracking-wide font-semibold">
                                <i class="fa fa-arrow-left mr-2"></i>
                                <span>Back</span> 
                            </button>
                        </div>

                        <div class="w-full flex flex-col gap-3 justify-center items-center mt-3">
                            <p class="text-white/90 text-xs text-center mb-1 font-nunito tracking-wide leading-normal">
                                Lower price and rewards are waiting. Unlock them by logging&nbsp;in!
                            </p>

                            <p class="text-white/90 text-[12px] text-center font-nunito tracking-wide leading-normal">
                                By continuing, you agree to these <a href="#" class="text-white underline">Terms & Conditions</a> and acknowledge that you have been informed about our <a href="#" class="text-white underline">Privacy Notice</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection