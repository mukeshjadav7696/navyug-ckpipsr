<div class="columns">
    <div class="column is-4">
        <p class="tag is-large is-primary mb-4">Institute Vision</p>
        <p class="is-italic is-size-5-desktop is-size-6-mobile">
            {{ config('institute.info.vision') }}
        </p>
    </div>
    <div class="divider is-vertical"></div>
    <div class="column is-7">
        <p class="tag is-large is-primary mb-4">Institute Mission</p>
        <div class="content">
            <ul class="is-size-6">
                @foreach (config('institute.info.mission') as $key => $statement)
                    <li>{{ $statement }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
