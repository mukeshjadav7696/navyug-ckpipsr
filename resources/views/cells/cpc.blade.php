<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Career and Placement Cell" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            The Career guidance and placement cell of the college functions with the objective of
                            providing guidance and assistance for the students to achieve their career goals. It
                            provides awareness on Higher Education or Studies,Self-employment and Job opportunities.
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
