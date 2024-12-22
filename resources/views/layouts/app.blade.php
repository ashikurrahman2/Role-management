<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Real state css --}}
         <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('frontend/css/colors/green.css') }}">
    </head>
    <body class="font-sans antialiased">
        <body class="th-15 homepage-4">
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            {{-- @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset --}}

            <!-- Page Content -->
            <main>
                {{-- {{ $slot }} --}}
            </main>
        </div>

        {{-- Realstate --}}
        @include('frontend.layouts.header')

        @yield('content')


        @include('frontend.layouts.footer')


        {{-- Realstate script --}}

           <!-- JS Files -->
    <script src="{{ asset('frontend/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/js/tether.min.js') }}"></script>
    <script src="{{ asset('frontend/js/moment.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/mmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/typed.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/lightcase.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>

    <!-- Custom JS -->
    <script>
        $(window).on('scroll load', function() {
            $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
        });

        var typed = new Typed('.typed', {
            strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
            smartBackspace: false,
            loop: true,
            showCursor: true,
            cursorChar: "|",
            typeSpeed: 50,
            backSpeed: 30,
            startDelay: 800
        });

        $('.slick-lancers').slick({
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }
            ]
        });
    </script>
    </body>
</html>
