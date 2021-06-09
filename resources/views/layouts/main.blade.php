<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel Comics')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;700;800&display=swap" rel="stylesheet">
        {{-- Main Style --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div class="general-wrapper">
            <!--Header-->
        @include('partials.header')

        <!--Main-->
        <main>
            @yield('content')
            @yield('info-content')
            @yield('comics-content')
        </main>

        <!--Footer-->
       @include('partials.footer')
       
        </div>
        
    </body>
</html>
