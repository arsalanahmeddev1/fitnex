<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="@yield('description')" name="description">
        <meta content="@yield('keywords')" name="keywords">
        <meta name="robots" content="index, follow">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/assets/website') }}/images/logo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/website') }}/images/logo.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/website') }}/images/logo.png">
        <link rel="icon" href="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['header_favicon'] }}"
            type="image/png" sizes="32x32">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
        <!-- font google -->
        <!-- slick sldier -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['public/assets/website/css/style.css', 'public/assets/website/js/main.js'])
        @endif
        <link rel="stylesheet" href="{{ asset('public/assets/website/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('public/build/assets/app-BuMiuAPH.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>
    
    <body> 
        @include('layouts.website.header')
        
        @yield('content')
        
        @include('layouts.website.footer')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="{{ asset('public/assets/website/js/main.js') }}"></script>
        <script src="{{ asset('public/build/assets/app-DNxiirP_.js') }}"></script>
        @yield('script')
    </body>
</html>