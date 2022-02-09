<div>
    <div style="max-width: 100%;">
        <div class="splide" id="home-photos">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($photos as $photo)
                        <li class="splide__slide">
                            <figure class="image is-5by3 panel">
                                <img src="{{ $photo->photo }}" alt="">
                            </figure>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="splide__progress">
                <div class="splide__progress__bar">
                </div>
            </div>
        </div>
    </div>
    <script type="module">
        $(document).ready(function() {
            const splide = new Splide('#home-photos', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                interval: 4000
            })
            splide.mount()
        });
    </script>
</div>
