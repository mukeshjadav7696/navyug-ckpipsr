<div>
    <div class="divider mt-0">
        <span class="tag is-secondary">{{ $title }}</span>
    </div>
    <div class="box p-2" style="max-width: 100%;">
        <div class="splide" id="notices-{{ Str::slug($title) }}">
            <div class="splide__track">
                <ul class="splide__list list">
                    @foreach ($records as $record)
                        <li class="splide__slide list-item is-size-7">
                            <div class="list-item-content">
                                <span class="has-text-weight-normal has-text-grey">{{ $record->date }}</span>
                                <div class="list-item-title is-flex is-justify-content-space-between">
                                    <span>{{ $record->title }}</span>
                                </div>
                                <div class="list-item-description is-flex">
                                    @foreach ($record->links as $label => $url)
                                        <a class="is-link mr-2" href="{{ $url }}"
                                            target="_blank">{{ $label }}</a>
                                    @endforeach
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
            let height;
            if (isMobile()) {
                height = 200
            } else {
                height = 385
            }
            const splide = new Splide('#notices-{{ Str::slug($title) }}', {
                type: 'loop',
                height: height,
                perMove: 1,
                autoHeight: true,
                arrows: false,
                pagination: false,
                autoplay: true,
                direction: 'ttb',
                interval: 2000
            })
            splide.mount()
        });
    </script>
</div>
