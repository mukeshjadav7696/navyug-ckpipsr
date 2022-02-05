<nav class="breadcrumb has-bullet-separator mt-2 mb-2" aria-label="breadcrumbs">
    <ul>
        <li>
            <a href="{{ url('/') }}" class="is-capitalized has-text-info">
                <span class="icon mr-0">
                    <i class="fas fa-home"></i>
                </span>
            </a>
        </li>
        @foreach ($links as $label => $route)
            @if ($loop->last)
                <li class="is-active">
                    <a href="#" class="is-capitalized" area-current="page">{{ $label }}</a>
                </li>
            @else
                @if ($route)
                    <li>
                        @if (Str::is('*://*', $route))
                            <a href="{{ $route }}" class="is-capitalized has-text-info">{{ $label }}</a>
                        @else
                            <a href="{{ route($route) }}" class="is-capitalized has-text-info">{{ $label }}</a>
                        @endif
                    </li>
                @else
                    <li class="is-active">
                        <a href="#!" class="is-capitalized has-text-link">{{ $label }}</a>
                    </li>
                @endif
            @endif
        @endforeach
    </ul>
</nav>
