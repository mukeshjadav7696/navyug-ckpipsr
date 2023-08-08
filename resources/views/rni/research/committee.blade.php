<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="About Research and Development Cell" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            To put in place a robust mechanism for developing and strengthening the research ecosystem within
                            HEIs, aligned with the provisions of NEP-2020.
                        </p>
                    </div>
                    <div class="box">
                        @include('cells.committee', compact('committee'))
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
