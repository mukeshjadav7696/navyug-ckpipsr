<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Hostel" />
        <x-page-content>
            <div class="tabs is-centered">
                <ul>
                    <li class="tab is-active" data-content="tab-detail"><a>Detail</a></li>
                    <li class="tab" data-content="tab-photos"><a>Photos</a></li>
                </ul>
            </div>
            <div class="tab-content" id="tab-detail">
                @include('resources.hostel.detail')
            </div>
            <div class="tab-content is-hidden" id="tab-photos">
                @include('resources.hostel.photos')
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
