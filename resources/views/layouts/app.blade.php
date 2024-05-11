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
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.png') }}">
    {{-- <link rel="stylesheet" href="{{ url('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}"> --}}

    <!-- Datatable -->
    <link href="{{ url('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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


    </div>

    <!-- Scripts -->
    <script src="{{ url('vendor/global/global.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
    {{-- <script src="{{ url('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script> --}}

    <!-- Datatable -->
    <script src="{{ url('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('js/plugins-init/datatables.init.js') }}"></script>
    <!--modal-->
    @stack('custom-scripts')
    <x-foot />
</body>


</html>
