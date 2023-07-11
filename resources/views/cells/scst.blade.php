<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="SC-ST Cell" />
        <x-page-content>
            <div class="tabs is-centered">
                <ul>
                    <li class="tab is-active" data-content="tab-committee"><a>Committee</a></li>
                    <li class="tab" data-content="tab-circulars"><a>Circulars</a></li>
                    <li class="tab" data-content="tab-complaint"><a>Complaint</a></li>
                </ul>
            </div>
            <div class="tab-content" id="tab-committee">
                <div class="box">
                    <div class="content">
                        <p>
                            The SC/ST cell of the college was established with the purpose to empower the SC/ST students
                            in the college. The college takes special interest in facilitating financial support to
                            students from these communities from government agencies and other sources.
                        </p>
                    </div>
                    @include('cells.committee', compact('committee'))
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-circulars">
                <div class="buttons">
                    <a href="{{ config('site.documents.cells.sc_st.ugc') }}" class="button is-link is-outlined"
                        target="_blank">
                        UGC Circular
                    </a>
                    <a href="{{ config('site.documents.cells.sc_st.gtu') }}" class="button is-link is-outlined"
                        target="_blank">
                        GTU Circular
                    </a>
                    <a href="{{ config('site.documents.cells.sc_st.aicte') }}" class="button is-link is-outlined"
                        target="_blank">
                        AICTE Circular
                    </a>
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-complaint">
                <div class="columns is-centered">
                    <div class="column is-10">
                        <iframe src="https://forms.gle/eyES1eyX5NW1Km8C9" height="1050" frameborder="0"
                            marginheight="0" marginwidth="0" style="width: 100%">Loading…</iframe>
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
