<section>
    <div id="loginModal" class="fixed inset-0 bg-white sm:bg-black/30 hidden items-center justify-center z-[9999] opacity-0 transition-all duration-300 ease-out overflow-y-auto">
        <div class="bg-white w-full h-full sm:h-auto sm:max-w-md sm:rounded-2xl sm:shadow-xl sm:transform sm:scale-95 transition-all duration-300 ease-out p-6 sm:p-8">         
            <div id="loginArea" class="flex flex-col items-center justify-center w-full h-full">
                @include('components.page.auth.login')
            </div>
        </div>
    </div>
</section>