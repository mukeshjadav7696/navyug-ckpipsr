<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="SC-ST Cell" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            The SC/ST cell of the college was established with the purpose to empower the SC/ST students
                            in the college. The college takes special interest in facilitating financial support to
                            students from these communities from government agencies and other sources.
                        </p>
                        <a href="https://forms.gle/pitygSdQzm2x2Hjx9" target="_blank"
                            class="button is-primary is-outlined">Complaint Form</a>
                    </div>
                    <div class="box">
                        @include('cells.committee', compact('committee'))
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
