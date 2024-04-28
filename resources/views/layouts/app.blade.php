<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Kiran') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo.png')}}">
        <link rel="stylesheet" href="{{url('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist.min.css')}}">

        <!-- Datatable -->
        <link href="{{ url('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

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
            <!-- Footer -->
            <x-footer>
                &copy; 2024 Kiran Shrestha. All rights reserved.
            </x-footer>
        </div>

    <!-- Scripts -->
    <script src="{{ url('vendor/global/global.min.js') }}"></script>
    <script src="{{ url('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('js/custom.min.js') }}"></script>
    <script src="{{ url('js/dlabnav-init.js') }}"></script>
    
    <!-- Datatable -->
    <script src="{{ url('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('js/plugins-init/datatables.init.js') }}"></script>

    <!-- Svganimation scripts -->
    <script src="{{ url('vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ url('vendor/svganimation/svg.animation.js') }}"></script>
    <script src="{{ url('js/styleSwitcher.js') }}"></script>

    <script src="{{url('vendor/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{url('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{url('js/plugins-init/jquery.validate-init.js')}}"></script>



    <!-- Form step init -->
    <script src="js/plugins-init/jquery-steps-init.js"></script>

    <!--modal-->
    @stack('custom-scripts')

    </body>
</html>
