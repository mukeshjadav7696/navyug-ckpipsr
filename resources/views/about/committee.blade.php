<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Deans and Faculty In-charges" />
        <x-page-content>
            <div class="tabs is-centered">
                <ul>
                    <li class="tab is-active" data-content="tab-committee"><a>Committee</a></li>
                    <!--li class="tab" data-content="tab-complaint"><a>Complaint</a></li-->
                </ul>
            </div>
            <div class="tab-content" id="tab-committee">
                <div class="box">
                    <div class="content">
                        <p>
                            The following faculty members are appointed as Academic Council for this institute&#39;s academic year 2023-
                            2024.
                        </p>
                    </div>
                    
                </div>
            </div>
            <!--div class="tab-content is-hidden" id="tab-complaint">
                <div class="columns is-centered">
                    <div class="column is-10">
                        <iframe src="https://forms.gle/X53fm1rZ2wz2PTHEA" height="1050" frameborder="0"
                            marginheight="0" marginwidth="0" style="width: 100%">Loading…</iframe>
                    </div>
                </div>
            </div-->
        </x-page-content>
    </x-slot>
</x-app-layout>
