@if ($events->isNotEmpty())
    <div class="columns">
        @foreach ($events as $event)
            <div class="column is-12-mobile is-6-desktop is-4-fullhd">
                @include('activities.events.event', compact($event))
            </div>
        @endforeach
    </div>
@else
    <x-not-found message="Events Not Available" type="warning" :is-full="true"></x-not-found>
@endif
