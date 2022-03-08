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
                        @php
                            extract($subLink); // extracts $url and $title
                        @endphp
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
