<div>
    <div class="splide" id="home-events">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($events as $event)
                    <li class="splide__slide">
                        <div class="card m-4">
                            <div class="card-image">
                                @if ($event->photo)
                                    <figure class="image is-4by3">
                                        <img src="{{ $event->photo }}" alt="">
                                    </figure>
                                @else
                                    <div class="is-flex is-justify-content-center py-6">
                                        <span class="icon is-large">
                                            <i class="fas fa-image fa-4x has-text-light"></i>
                                        </span>
                                    </div>
                                @endif
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-5">{{ $event->title }}</p>
                                        <p class="subtitle is-6 has-text-info">{{ $event->type }}</p>
                                    </div>
                                </div>
                                <div class="content">
                                    @if ($event->expert || $event->organization)
                                        <span class="is-size-7">
                                            Conducted By,
                                        </span>
                                        <br />
                                        <span class="has-text-weight-bold">
                                            {{ $event->expert }} {{ $event->organization }}
                                        </span>
                                    @endif
                                </div>
                                <span class="tags has-addons">
                                    <span class="tag is-dark">
                                        Participants
                                    </span>
                                    <span class="tag is-info">{{ $event->participants }}</span>
                                </span>
                                <span class="tags has-addons are-tiny">
                                    <span class="tag">
                                        <i class="fas fa-calendar"></i>
                                    </span>
                                    <span class="tag">{{ $event->duration }}</span>
                                </span>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <script type="module">
        $(document).ready(function() {
            const splide = new Splide('#home-events', {
                type: 'loop',
                perPage: 4,
                breakpoints: {
                    768: {
                        perPage: 1,
                    },
                    1024: {
                        perPage: 3,
                    }
                },
                autoplay: true,
                interval: 3000,
                perMove: 1,
                gap: 5
            })
            splide.mount()
        });
    </script>
</div>
