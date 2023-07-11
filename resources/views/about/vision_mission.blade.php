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
                        <hr />
                        @foreach (config('institute.info.mission') as $key => $statement)
                            <p class="subtitle has-text-info">
                                {{ $statement }}
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
