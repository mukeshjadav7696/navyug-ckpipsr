@php
$principles = [['objective', 'Objective', 'Empowering the Education'], ['process', 'Process', 'Achieving Excellence Together'], ['outcome', 'Outcome', 'Creating a Community of Life-Long Learners'], ['culture', 'Culture', 'The NVT Way']];
@endphp
<div>
    <div class="container is-hidden-mobile">
        <div class="columns">
            @foreach ($principles as $principle)
                @php
                    [$icon, $title, $tagline] = $principle;
                @endphp
                <div class="column">
                    <div class="is-flex is-align-items-center">
                        <div class="p-3">
                            <figure class="image is-48x48">
                                <img src="{{ asset("images/icons/$icon.svg") }}" />
                            </figure>
                        </div>
                        <div>
                            <p class="is-size-6 has-text-weight-bold">{{ $title }}</p>
                            <p class="is-size-7">{{ $tagline }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div style="max-width: 100%;" class="is-hidden-desktop">
        <div class="splide" id="home-principles">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($principles as $principle)
                        @php
                            [$icon, $title, $tagline] = $principle;
                        @endphp
                        <li class="splide__slide">
                            <div class="is-flex is-align-items-center">
                                <div class="p-3">
                                    <figure class="image is-48x48">
                                        <img src="{{ asset("images/icons/$icon.svg") }}" />
                                    </figure>
                                </div>
                                <div>
                                    <p class="is-size-6 has-text-weight-bold">{{ $title }}</p>
                                    <p class="is-size-7">{{ $tagline }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <script type="module">
        $(document).ready(function() {
            const splide = new Splide('#home-principles', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                interval: 1000,
                pagination: false,
                arrows: false
            })
            splide.mount()
        });
    </script>
</div>
