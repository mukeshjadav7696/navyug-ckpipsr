@if ($achievements->isNotEmpty())
    <div class="list box has-visible-pointer-controls">
        @foreach ($achievements as $achievement)
            @include(
                'activities.achievements.achievement',
                compact($achievement)
            )
        @endforeach
    </div>
@else
    <x-not-found message="Achievements Not Available" type="warning" :is-full="true"></x-not-found>
@endif
