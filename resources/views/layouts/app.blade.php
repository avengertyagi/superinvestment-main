<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- or the one installed in node_modules directory, -->
        <link rel="stylesheet" href="{{ asset('css/splide.min.css')}}">
        
        <style>
            [x-cloak] { display: none }
        </style>
        
    </head>
    <body x-cloak
          class="font-sans overflow-x-hidden antialiased"
          x-data="{ showLogin: false, showOtp: false }"
          :class="showLogin ? 'overflow-hidden' : '' "
          >
    <!-- Header Section -->
    <div class="relative shadow-sm w-full h-24">
        <header class="container mx-auto relative w-full h-24">
            @include('layouts.navigation')
        </header>
    </div>
    <!-- End Header Section-->
    <div class="bg-white">
        <!-- Page Heading -->
            {{ $header }}
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- Footer Section-->
    <footer>
        {{$footer}}
    </footer>
    <!-- End Footer Section-->
    
    <!-- Modal1 -->
    
    @include('components.loginmodal')

    </body>
</html>
