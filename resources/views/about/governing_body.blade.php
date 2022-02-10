<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Governing Body" />

        <x-page-content>
            @php
                $members = config('site.governing_body.members');
            @endphp
            <div class="columns">
                <div class="column">
                    <div class="list">
                        @foreach ($members as $member)
                            <div class="list-item">
                                <div class="list-item-image">
                                    @if ($member['photo'])
                                        <figure class="image is-48x48 is-clipped">
                                            <img src="{{ asset($member['photo']) }}" alt="">
                                        </figure>
                                    @else
                                        <span class="icon is-large">
                                            <i class="fas fa-user has-text-light fa-2x"></i>
                                        </span>
                                    @endif
                                </div>
                                <div class="list-item-content">
                                    <div class="list-item-title">{{ $member['name'] }}</div>
                                    <p>{{ $member['role'] }}</p>
                                    @isset($member['designation'])
                                        <div class="list-item-description">
                                            <span class="is-size-7">{{ $member['designation'] }}</span>
                                        </div>
                                    @endisset
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </x-page-content>
    </x-slot>

</x-app-layout>
