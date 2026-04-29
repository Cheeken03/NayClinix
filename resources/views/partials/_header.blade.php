<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="app-url" content="{{ env('APP_URL') }}">

    @if ($title)
        <title>{{ $title }} - {{ env('APP_NAME') }}</title>
    @else
        <title>{{ env('APP_NAME') }}</title>
    @endif

    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/rockspot-logo.jpg') }}" type="image/x-icon">

    {{-- <!-- Generics -->
    <link rel="icon" href="{{ Vite::asset('resources/images/favicon/favicon-32.png') }}" sizes="32x32">
    <link rel="icon" href="{{ Vite::asset('resources/images/favicon/favicon-128.png') }}" sizes="128x128">
    <link rel="icon" href="{{ Vite::asset('resources/images/favicon/favicon-192.png') }}" sizes="192x192">

    <!-- Android -->
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon/favicon-196.png') }}" sizes="196x196">

    <!-- iOS -->
    <link rel="apple-touch-icon" href="{{ Vite::asset('resources/images/favicon/favicon-152.png') }}" sizes="152x152">
    <link rel="apple-touch-icon" href="{{ Vite::asset('resources/images/favicon/favicon-167.png') }}" sizes="167x167">
    <link rel="apple-touch-icon" href="{{ Vite::asset('resources/images/favicon/favicon-180.png') }}" sizes="180x180"> --}}


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 

      <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Appear js ======-->
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!--====== Validator js ======-->
    <script src="assets/js/validator.min.js"></script>

    <!--====== Nice Select js ======-->
    <!-- <script src="assets/js/jquery.nice-select.min.js"></script> -->
   
    

    <!--====== CountDown js ======-->
    <script src="assets/js/jquery.countdown.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>




    {{-- <link rel="stylesheet" href="{{ asset('build/css/style.css') }}" /> --}}
    {{-- @vite([ 'resources/css/style.css']) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Scripts -->
    @include('partials._allscripts')

    @filepondScripts

   

</head>
