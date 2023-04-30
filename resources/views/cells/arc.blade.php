<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Anti Ragging Committee" />
        <x-page-content>
            <div class="tabs is-centered">
                <ul>
                    <li class="tab is-active" data-content="tab-committee"><a>Committee</a></li>
                    <li class="tab" data-content="tab-squad"><a>Squad</a></li>
                    <li class="tab" data-content="tab-circulars"><a>Circulars</a></li>
                    <li class="tab" data-content="tab-complaint"><a>Complaint</a></li>
                </ul>
            </div>
            <div class="tab-content" id="tab-committee">
                <div class="box">
                    <div class="content">
                        <p>
                            This committee and its members will educate and ensure that our institute students will not
                            indulge in any form of ragging, to make our institute and campus free of ragging, by
                            regularly monitoring the students and through counseling of seniors.
                        </p>
                    </div>
                    @include('cells.committee', ['committee' => $committee])
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-squad">
                <div class="box">
                    <div class="content">
                        <p>
                            Committee consisting the following member is framed to keep watch on &quot;Ragging&quot;
                            inside or outside the campus
                        </p>
                    </div>
                    @include('cells.committee', ['committee' => $squad])
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-circulars">
                <a href="{{ config('site.documents.cells.arc.circular') }}" class="button is-link is-outlined"
                    target="_blank">
                    Circular
                </a>
            </div>
            <div class="tab-content is-hidden" id="tab-complaint">
                <div class="columns is-centered">
                    <div class="column is-10">
                        <iframe src="https://forms.gle/hmQFe1BKQ1tuoNgL8" height="1050" frameborder="0"
                            marginheight="0" marginwidth="0" style="width: 100%">Loading…</iframe>
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
