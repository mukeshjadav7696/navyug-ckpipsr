<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Anti Ragging Committee" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            This committee and its members will educate and ensure that our institute students will not
                            indulge in any form of ragging, to make our institute and campus free of ragging, by
                            regularly monitoring the students and through counseling of seniors.
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
