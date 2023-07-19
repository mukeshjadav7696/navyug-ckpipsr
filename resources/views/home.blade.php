<x-app-layout>
    <x-slot name="content">    
        <section class="hero is-primary">
            <div class="hero-body pt-5">
                <div class="columns">
                    <div class="column is-three-fifths-desktop">
                        <p class="title is-size-4 has-text-weight-bold">{{ config('institute.info.name') }}</p>
                        @include('home.photos', ['photos' => $photos])
                    </div>
                    <div class="column is-two-fifths-desktop">
                        @include('home.notices', [
                            'records' => $announcements,
                            'title' => 'News & Announcements',
                        ])
                    </div>
                    {{-- <div class="column is-one-quarter-desktop">
                        @include('home.notices', ['records' => $notices, 'title' => 'Student Notices'])
                    </div> --}}
                </div>
            </div>
        </section>
        {{-- <section class="hero is-warning is-small">
            <div class="hero-body">
                @include('home.principles')
            </div>
        </section> --}}
        <section class="hero is-white">
            <div class="hero-body">
                @include('home.vision')
            </div>
        </section>
        <section class="hero is-light">
            <div class="hero-body">
                <div class="divider mt-0">
                    <span class="tag is-large is-info">Recent Events</span>
                </div>
                @include('home.events', compact('events'))
            </div>
        </section>
        <section class="hero is-white">
            <div class="hero-body">
                <div class="divider mt-0">
                    <span class="tag is-large is-primary">Achivements</span>
                </div>
                @include('home.achievements', compact('achievements'))
            </div>
        </section>
        @include('home.popup')
    
    </x-slot>

</x-app-layout>
