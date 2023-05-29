<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@pcteam.polibatam" />
        <meta name="description" content="PCTeam adalah COE asal Polibatam yang bergerak dibidang keamanan jaringan, pengembangan aplikasi yang aman. Website Aman, penetration testing, sistem informasi dan lain-lain">
        <meta name="keywords" content="Penetration Testing, Keamanan Jaringan, Mobile Apps Development, Web Development, PCTeam, Politeknik Negeri Batam">
        <meta name="author" content="Polibatam Cyber Team" />
        <meta image="{{ asset('img/pcteam.jpg') }}">
        <meta property="og:type" content="article">
        <meta property="og:image" content="{{ asset('img/pcteam.jpg') }}">
        <meta property="og:title" content="Penetration Testing, Keamanan Jaringan, Mobile Apps Development, Web Development, PCTeam, Politeknik Negeri Batam">
        <meta property="og:site_name" content="Polibatam Cyber Team">
        <meta property="og:url" content="{{ route('home') }}">
        <meta property="og:description" content="PCTeam adalah COE asal Polibatam yang bergerak dibidang keamanan jaringan, pengembangan aplikasi yang aman. Website Aman, penetration testing, sistem informasi dan lain-lain">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" />
        <link rel="apple-touch-icon" href="{{ asset('logo/apple-touch-icon.png') }}">
        <link rel="canonical" href="{{ route('home') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


        @stack('modals')

        @livewireScripts
    </body>

    
    
</html>
