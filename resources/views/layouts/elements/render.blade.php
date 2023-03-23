@foreach ($navigations as $mainKey => $mainNav)
    @if (isset($mainNav['links']))
        {{-- Sub menu --}}
        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
                {{ $mainNav['title'] }}
            </a>
            <div class="navbar-dropdown">
                @foreach ($mainNav['links'] as $subLink)
                    @if (count($subLink) == 0)
                        {{-- Divider --}}
                        <hr class="navbar-divider">
                    @else
                        {{-- Link --}}
                        @if (isset($subLink['url']))
                            @php
                                extract($subLink); // extracts $url and $title
                            @endphp
                            {{-- Direct Links --}}
                            @if (Str::contains($url, '://') && !Str::contains($url, config('app.url')))
                                {{-- External --}}
                                <a class="navbar-item has-text-weight-bold" href="{{ $url }}" target="_blank">
                                    {{ $title }}
                                </a>
                            @else
                                {{-- Internal --}}
                                <a class="navbar-item has-text-weight-bold" href="{{ url($url) }}">
                                    {{ $title }}
                                </a>
                            @endif
                        @endif
                        @if (isset($subLink['links']))
                            {{-- Sub Sub Menu --}}
                            @php
                                extract($subLink); // extracts $url and $title
                            @endphp
                            <div class="nested navbar-item dropdown {{ isset($isRight) && $isRight ? 'is-right' : '' }}">
                                <div class="dropdown-trigger">
                                    <a class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                        <span class="has-text-weight-bold">{{ $title }}</span>
                                        <span class="icon is-small">
                                            <i class="fas fa-angle-right" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        @foreach ($subLink['links'] as $subSubLink)
                                            @php
                                                extract($subSubLink); // extracts $url and $title
                                            @endphp
                                            {{-- Direct Links --}}
                                            @if (Str::contains($url, '://') && !Str::contains($url, config('app.url')))
                                                {{-- External --}}
                                                <a class="dropdown-item has-text-weight-bold" href="{{ $url }}"
                                                    target="_blank">
                                                    {{ $title }}
                                                </a>
                                            @else
                                                {{-- Internal --}}
                                                <a class="dropdown-item has-text-weight-bold"
                                                    href="{{ url($url) }}">
                                                    {{ $title }}
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    @else
        {{-- Single page --}}
        @php
            extract($mainNav); // extracts $url, $title and $icon (optional)
        @endphp
        @if (Str::contains($url, '://') && !Str::contains($url, config('app.url')))
            {{-- External --}}
            @if (isset($icon))
                <a class="navbar-item has-tooltip-arrow has-tooltip-bottom" href="{{ $url }}" target="_blank"
                    data-tooltip="{{ $title }}">
                    <i class="{{ $icon }}"></i>
                </a>
            @else
                <a class="navbar-item" href="{{ $url }}" target="_blank">
                    {{ $title }}
                </a>
            @endif
        @else
            {{-- Internal --}}
            @if (isset($icon))
                <a class="navbar-item has-tooltip-arrow has-tooltip-bottom" href="{{ url($url) }}"
                    data-tooltip="{{ $title }}">
                    <i class="{{ $icon }}"></i>
                </a>
            @else
                <a class="navbar-item" href="{{ url($url) }}">
                    {{ $title }}
                </a>
            @endif
        @endif
    @endif
@endforeach
