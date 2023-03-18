<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Vision and Mission" />

        <x-page-content>
            <div class="content">
                <div class="columns is-multiline">
                    <div class="column is-6">
                        <p class="title is-4">Vision</p>
                        <p class="subtitle is-4 is-italic has-text-primary mt-3">
                            {{ config('institute.info.vision') }}
                        </p>
                    </div>
                    <div class="column is-6">
                        <p class="title is-4">Mission</p>
                        @foreach (config('institute.info.mission') as $key => $statement)
                            <blockquote class="is-italic">
                                {{ $statement }}
                            </blockquote>
                        @endforeach
                    </div>
                    <div class="column is-6">
                        <p class="title is-4">PEOs</p>
                        <div class="columns content">
                            @foreach (config('institute.info.peo') as $key => $statement)
                                <div class="column">
                                    <span class="tag is-primary">{{ $key }}</span>
                                    <hr />
                                    <p class="is-italic">
                                        {{ $statement }}
                                    </p>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
