<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Internal Quality Assurance Cell" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            IQAC is conceived as a mechanism to build and ensure a quality culture at the institutional
                            level. The IQAC is meant for planning, guiding and maintaining Quality Assurance (QA) and
                            Quality Enhancement (QE) activities of the institution.
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
