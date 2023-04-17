<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Vision and Mission" />

        <x-page-content>
            <div class="content">
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
                <hr />
                <p class="title is-4">POs</p>
                <div class="content">
                    @foreach (config('institute.info.po') as $key => $statement)
                        <span class="has-text-primary has-text-weight-bold">{{ $key }}</span>
                        <p class="is-italic">
                            {{ $statement }}
                        </p>
                        <hr />
                    @endforeach
                </div>
            </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
