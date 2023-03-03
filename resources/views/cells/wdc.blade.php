<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Women Development Committee" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            WDC is framed to protect women’s right to gender equality and to provide a favourable
                            environment for work/study and to provide a forum for women on the campus to share
                            information and resources and exchange of ideas.
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
