<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Photo Gallery" />

        <x-page-content>
            <x-photo-grid :photos="$photos" :is-big="true"></x-photo-grid>
        </x-page-content>
    </x-slot>

</x-app-layout>
