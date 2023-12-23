<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <x-clientside.title :title="$title" />

    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png') }}">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&amp;display=swap"
        rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/edumall-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/jquery.powertip.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>
<body lang="{{getLocale()}}">

    <main class="main-wrapper">


        <x-clientside.nav_header />


        {{$slot}}



        <!--Back To Start-->
        <button id="backBtn" class="back-to-top backBtn">
            <i class="arrow-top fas fa-arrow-up"></i>
            <i class="arrow-bottom fas fa-arrow-up"></i>
        </button>
        <!--Back To End-->


    </main>

    <x-clientside.login_model />

    <x-clientside.register_model />






    <x-clientside.links_footer />
    <x-clientside.footer />
