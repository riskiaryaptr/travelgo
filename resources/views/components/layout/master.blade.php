<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tripnika</title>
    
    <!-- area font star -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- area swipper star -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    
    @vite('resources/css/app.css')

    @stack('css')
    
</head>
<body>


    @if(empty($hideHeader))
        @include('components.layout.header')
    @endif
    
    <div class="@hasSection('hide_header') @else pt-18 xl:pt-37 @endif">
        @yield('content')
    </div>
    
    @include('components.modals.modal-login')

    @include('components.modals.modal-language')
    
    @stack('js')
    
    <!-- area query star -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- area js star-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/topbar.js') }}"></script>

</body>
</html>