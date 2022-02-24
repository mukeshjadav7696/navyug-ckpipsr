<div class="card">
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
        <div class="is-flex is-flex-wrap-wrap is-align-items-baseline">
            <span class="tags has-addons">
                <span class="tag is-dark">
                    Participants
                </span>
                <span class="tag is-info">{{ $event->participants }}</span>
            </span>
            <span class="tags has-addons ml-2">
                <span class="tag is-warning">
                    Duration
                </span>
                <span class="tag is-info">{{ $event->duration }}</span>
            </span>
        </div>
        <div class="buttons">
            @foreach ($event->links as $label => $url)
                <a class="button is-primary is-outlined" href="{{ $url }}">{{ $label }}</a>
            @endforeach
        </div>
    </div>
</div>
