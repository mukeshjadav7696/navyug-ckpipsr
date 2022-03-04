<div class="columns">
    <div class="column">
        <div class="box content has-background-light">
            <div class="is-flex is-flex-wrap-wrap is-align-items-baseline">
                <span class="tags has-addons">
                    <span class="tag is-warning">
                        <i class="fas fa-hashtag"></i>
                    </span>
                    <span class="tag is-info">{{ $lab->lab_no }}</span>
                </span>
                <span class="tags has-addons ml-2">
                    <span class="tag is-warning">
                        <i class="fas fa-location-arrow"></i>
                    </span>
                    <span class="tag is-info">{{ $lab->room_no }}</span>
                </span>
                <span class="tags has-addons ml-2">
                    <span class="tag is-warning">
                        <i class="fas fa-building"></i>
                    </span>
                    <span class="tag is-info">{{ $lab->department }}</span>
                </span>
            </div>
            <p class="title is-size-5">{{ $lab->name }}</p>
            <p>{{ $lab->description }}</p>
            <p>{{ $lab->equipments }}</p>
        </div>
    </div>
    <div class="column">
        @php
            $photos = collect($lab->photos)
                ->map(function ($caption, $url) {
                    return ['caption' => $caption, 'photo' => $url, 'tags' => []];
                })
                ->values();
        @endphp
        <x-photo-grid :photos="$photos" :is-big="false"></x-photo-grid>
    </div>
</div>
