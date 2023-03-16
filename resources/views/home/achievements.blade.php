<div>
    <div class="splide" id="home-achievements">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($achievements as $achievement)
                    <li class="splide__slide">
                        <div class="box is-flex m-4 has-background-light">
                            <div>
                                @if ($achievement->photo)
                                    <figure class="image">
                                        <img src="{{ $achievement->photo }}" style="max-width: 80px;" />
                                    </figure>
                                @else
                                    <div class="is-flex is-justify-content-center py-6">
                                        <span class="icon is-large">
                                            <i class="fas fa-image fa-4x has-text-light"></i>
                                        </span>
                                    </div>
                                @endif
                                <span class="tag pl-0">
                                    <i class="fas fa-calendar"></i>
                                </span> <br />
                                <span class="is-size-7">{{ $achievement->date }}</span>
                            </div>
                            <div class="pl-3 is-flex-grow-1">
                                <div class="level mb-2">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <span class="tag is-small is-warning">{{ $achievement->type }}</span>
                                        </div>
                                    </div>
                                    <div class="level-right">
                                        <div class="level-item">
                                            <span class="tag is-small is-success">{{ $achievement->level }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <p class="subtitle is-5">{{ $achievement->title }}</p>
                                    @if ($achievement->description)
                                        <span>
                                            {{ $achievement->description }}
                                        </span>
                                    @endif
                                </div>
                                @if ($achievement->students)
                                    <span class="tag is-dark">
                                        Students
                                    </span>
                                    <span class="help">
                                        {{ $achievement->students }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <script type="module">
        $(document).ready(function() {
            const splide = new Splide('#home-achievements', {
                type: 'loop',
                perPage: 3,
                breakpoints: {
                    768: {
                        perPage: 1,
                    }
                },
                //autoplay: true,
                interval: 3000,
                perMove: 1,
                gap: 5
            })
            splide.mount()
        });
    </script>
</div>
