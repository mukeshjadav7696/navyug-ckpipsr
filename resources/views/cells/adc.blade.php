<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Anti-Discrimination Cell" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            Anti-Discrimination Cell provides everybody with equal opportunity into its fold
                            irrespective of caste, religion, language or based on gender. The institute ensure that
                            every individual inside the institute exercise equal rights and acquire in the process of
                            offering or receiving education. Any act, speech, or intention ensures that perturb the
                            harmony among the people is seriously regarded and dealt on immediate basis to restore the
                            peace.
                        </p>
                        <p>
                            In Compliance of UGC’s directives for prevention of caste based discrimination in Higher
                            educational Institutions, a committee with the following members is hereby constituted to
                            look into the complaints Of any act of discrimination against SC/ST/ teachers/ non-teachers
                            staff:
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
