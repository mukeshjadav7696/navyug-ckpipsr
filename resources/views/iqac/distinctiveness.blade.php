<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Institution Distinctiveness" />
        <x-page-content>
            <div class="columns is-centered">
                <div class="column is-9">
                    <embed src="{{ $url }}" width="100%" height="600" type="application/pdf">
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
