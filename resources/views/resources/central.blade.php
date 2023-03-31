<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Hostel" />
        <x-page-content>
            <div class="tabs is-centered">
                <ul>
                    <li class="tab is-active" data-content="tab-clp"><a>Center of LPPE</a></li>
                    <li class="tab" data-content="tab-store"><a>Stationary Store</a></li>
                </ul>
            </div>
            <div class="tab-content" id="tab-clp">
                <h4 class="subtitle is-4 has-text-info has-text-centered">
                    Center of Language Proficiency and Personality Enrichment
                </h4>
                <div class="columns">
                    <div class="column">
                        <figure class="image">
                            <img src="{{ asset('images/resources/central/clp.jpg') }}" />
                        </figure>
                    </div>
                    <div class="column content">
                        <article class="message">
                            <div class="message-body content has-text-justified">
                                <p>
                                    Center of Language Proficiency and Personality Enrichment
                                    is situated on the 2nd floor of D2 Building Room No. 206.
                                    The center is utilized to conduct the laboratory sessions
                                    on “Effective Technical Communication”. Institute has
                                    signed a MoU with UniConnect Overseas Limited to conduct
                                    IELTS and English proficiency courses at this centre.
                                </p>
                                <p>
                                    Moreover, an Authorized CAD Training Center has also been
                                    developed in this room. Training courses on CAD/CAM are
                                    being organized at this centre. Institute has signed a MoU
                                    with SOPAN (Institute of Engineering and Design) to
                                    benefit the interested students.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-store">
                <h4 class="subtitle is-4 has-text-info has-text-centered">
                    Stationery Store &amp; Photocopy Facility
                </h4>
                <div class="content">
                    <article class="message">
                        <div class="message-body content has-text-justified">
                            <p>
                                The institute owns a stationary store. The stationary
                                store in the college campus offers books and stationery
                                requirements. Photocopying and printing facility is also
                                available to cater to the daily needs of students.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
