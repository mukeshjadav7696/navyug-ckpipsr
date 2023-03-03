<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Grievance Redressal Cell" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            Grievance Redressal Cell ( GRC) is framed to ensure transparency by Technical institutions
                            imparting technical education, in admissions and with paramount objective of preventing
                            unfair practices and to provide a mechanism to innocent students for redressal of their
                            grievances, :
                        </p>
                        <p>
                            As per the directives of the AICTE, our institute’s Grievance Redressal Committee is framed
                            as follows:
                        </p>
                        <a href="https://forms.gle/9AemRWxUC9fRtAaSA" target="_blank" class="button is-primary is-outlined" >Grievance Google Form</a>
                    </div>
                    <div class="box">
                        @include('cells.committee', compact('committee'))
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
