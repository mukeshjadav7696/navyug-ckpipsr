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

    <header>
        @include('layouts.nav.main')
    </header>

    <main>
        {{ $content }}
    </main>

    <footer class="footer pt-3 pb-3">
        <div class="content has-text-centered">
            <p>
                <strong>{{ config('app.name', 'Excellence') }}</strong>
                <br />
                All rights are reserved.
            </p>
        </div>
    </footer>

    <script type="module">
        $(document).ready(function() {
            CustomComponents.init();
        });
    </script>

    @include('components.notifications')

</body>

</html>
