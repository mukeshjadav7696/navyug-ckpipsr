<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Excellence') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/plugins.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/plugins.js') }}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>

    @php
        //get institute information from the configuration
        $institute = config('institute.info');
    @endphp

    <header>
        @include('layouts.elements.header')
    </header>

    <main>
        {{ $content }}
    </main>

    <footer>
        @include('layouts.elements.footer')
        <div id="pageloader" style="opacity: 0.8;" class="pageloader"><span class="title">Loading</span></div>
    </footer>

    <script type="module">
        $(document).ready(function() {
            CustomComponents.init();
        });
    </script>

    @include('components.notifications')

</body>

</html>
