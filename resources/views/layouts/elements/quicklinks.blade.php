<div class="is-flex is-flex-wrap-wrap">
    @foreach ($quickLinks as $section => $links)
        <div class="px-2">
            <p class="heading is-italic">{{ $section }}</p>
            <ul class="">
                @foreach ($links as $title => $url)
                    <li class="my-2">
                        @if (Str::contains($url, '://'))
                            {{-- External --}}
                            <a class="has-text-info" href="{{ $url }}" target="_blank">
                                {{ $title }}
                            </a>
                        @else
                            {{-- Internal --}}
                            <a class="has-text-info" href="{{ url($url) }}">
                                {{ $title }}
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>
