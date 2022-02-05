<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/plugins.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/plugins.js') }}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>

    @php
        $user = Auth::user();
    @endphp

    <header>
        @include('components.nav')
    </header>

    <main>
        <section class="section pt-1 pb-1">
            <div class="is-hidden-mobile">
                <div class="level mb-0">
                    @isset($breadcrumbs)
                        <div class="level-left">
                            <div class="level-item">
                                <x-breadcrumb :links="$breadcrumbs"></x-breadcrumb>
                            </div>
                        </div>
                    @endisset
                    @if ($user->isInstitute())
                        <div class="level-right">
                            <div class="level-item">
                                <p class="heading is-size-7 has-text-dark">{{ $user->institute->name }}</p>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="divider mt-0 mb-0"></div>
            </div>
        </section>

        <section class="section p-5">
            {{ $content }}
        </section>

    </main>

    <footer class="footer pt-3 pb-3">
        <div class="content has-text-centered">
            <p>
                <strong>{{ env('APP_NAME') }}</strong>
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
