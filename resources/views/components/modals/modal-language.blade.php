<!-- Modal Language -->
<div id="languageModal" class="hidden fixed inset-0 z-50 bg-black/30 p-0 flex lg:justify-center lg:items-center lg:p-4">
    <div class="bg-white w-full h-screen rounded-none shadow-none lg:w-full lg:h-auto lg:max-w-3xl lg:max-h-[90vh] lg:rounded-2xl lg:shadow-2xl overflow-y-auto transition-all duration-300 transform">

        <div class="flex items-center justify-between p-5 border-b border-gray-200">
            <h3 class="text-md/6 leading-normal tracking-wide font-semibold text-gray-700">
                Language & Currency
            </h3>

            <button type="button" data-modal-hide="languageModal" class="text-gray-400 hover:text-gray-900 text-sm p-1.5 ml-auto inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-[0.63fr_1.37fr] divide-y md:divide-y-0 md:divide-x divide-gray-200">
            <div class="p-5">
                <h4 class="text-md/6 leading-normal tracking-wide font-semibold text-gray-700 flex items-center">
                    <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                    </svg>
                    <span>Language</span>
                </h4>

                <ul class="space-y-5 mt-6">                    
                    <li>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="language" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                            <div class="flex items-center ml-4">
                                <img src="{{ asset('assets/logo/indonesia.png') }}" class="w-5 h-5 rounded-full mr-3" />
                                <span class="text-gray-700 font-medium leading-normal tracking-wide text-sm/6">
                                    Bahasa Indonesia
                                </span>
                            </div>
                        </label>
                    </li>

                    <li>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="language" checked class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                            <div class="flex items-center ml-4">
                                <img src="{{ asset('assets/logo/united-kingdom.png') }}" class="w-5 h-5 rounded-full mr-3" />
                                <span class="text-gray-700 font-medium leading-normal tracking-wide text-sm/6">
                                    English EN
                                </span>
                            </div>
                        </label>
                    </li>
                </ul>
            </div>

            <div class="p-5">
                <h4 class="text-md/6 leading-normal tracking-wide font-semibold text-gray-700 mb-5 flex items-center">
                    <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Currency</span>
                </h4>

                <div class="relative h-[400px] overflow-y-auto pr-2 no-scrollbar">
                    <div class="bg-blue-50 p-3 rounded-lg mb-5">
                        <strong class="block mb-1 text-sm/6 leading-normal tracking-wide text-gray-600">
                            Important Info
                        </strong>        

                        <p class="mb-1 text-xs/6 leading-normal tracking-wide text-gray-600">
                            Non-IDR currencies can only be used on Flights, Hotels, and To Dos.
                        </p>

                        <p class="mb-0 text-xs/6 leading-normal tracking-wide text-gray-600">
                            Non-IDR transactions will not earn loyalty points.
                        </p>
                    </div>

                    <div class="sticky top-0 bg-white pt-2 pb-1 z-10">
                        <p class="text-gray-500 font-bold tracking-wide leading-normal text-sm/6 mb-2">
                            Recommended Currencies
                        </p>
                    </div>

                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" checked class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">IDR</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- Indonesian Rupiah</span>
                                </div>
                            </label>
                        </li>

                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">USD</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- US Dollar</span>
                                </div>
                            </label>
                        </li>

                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">EUR</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- Euro</span>
                                </div>
                            </label>
                        </li>

                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">SGD</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- Singapore Dollar</span>
                                </div>
                            </label>
                        </li>
                    </ul>

                    <div class="sticky top-10 bg-white pt-2 pb-1 -mt-1 z-10 mb-4">
                        <p class="text-gray-500 font-bold tracking-wide leading-normal text-sm/6 mb-2">
                            Other Currencies
                        </p>
                    </div>
                    
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">USD</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- US Dollar</span>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">EUR</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- Euro</span>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">GBP</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- British Pound</span>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">JPY</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- Japanese Yen</span>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">AUD</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- Australian Dollar</span>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">CAD</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- Canadian Dollar</span>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">CHF</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- Swiss Franc</span>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">CNY</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- Chinese Yuan</span>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">HKD</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- Hong Kong Dollar</span>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center cursor-pointer p-2 rounded-lg hover:bg-gray-50">
                                <input type="radio" name="currency" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300">
                                <div class="ml-3 flex flex-col sm:flex-row sm:items-center">
                                    <span class="text-gray-700 font-medium text-sm/6 leading-normal">NZD</span>
                                    <span class="text-gray-500 text-sm/6 sm:ml-2">- New Zealand Dollar</span>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>