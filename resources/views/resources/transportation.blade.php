<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Transportation" />
        <x-page-content>
            <div class="content">
                <p>
                    Surat city is well equipped with various transportation
                    options. Recently BRTS network has covered major part of city.
                    ONGC Nagar is the nearest BRTS stations from college campus.
                </p>
            </div>

            <div class="tabs is-centered is-boxed is-medium">
                <ul>
                    <li class="tab is-active" data-content="college-bus">
                        <a>
                            <span>College Facilities</span>
                        </a>
                    </li>
                    <li class="tab" data-content="city-bus">
                        <a>
                            <span>City Bus</span>
                        </a>
                    </li>
                    <li class="tab" data-content="brts">
                        <a>
                            <span>BRTS</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="college-bus" class="tab-content">
                <div class="content">
                    <div class="columns">
                        <div class="column">
                            <figure class="image">
                                <img src="{{ asset('images/resources/transportation/colbus.jpeg') }}" />
                            </figure>
                        </div>
                        <div class="column">
                            <figure class="image">
                                <img src="{{ asset('images/resources/transportation/coltiming.jpeg') }}" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div id="city-bus" class="tab-content is-hidden">
                <div class="content">
                    <p>
                        Surat City Bus No 206 is running between Chowk Station and
                        College Campus at every half an hour duration.
                    </p>

                    <div class="section px-0">
                        <div class="columns">
                            <div class="column">
                                <figure class="image">
                                    <img src="{{ asset('images/resources/transportation/bus.jpeg') }}" />
                                </figure>
                                <a href="{{ config('site.documents.resources.transportation.busSchedule') }}" target="_blank"
                                    class="button is-outlined is-info">
                                    <span class="icon">
                                        <i class="fas fa-bus"></i>
                                    </span>
                                    <span>Bus Schedule (New)</span>
                                </a>
                            </div>
                            <div class="column">
                                <figure class="image">
                                    <img src="{{ asset('images/resources/transportation/timing.jpg') }}" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="brts" class="tab-content is-hidden">
                <p class="content">
                    BRTS service from SMC is already in operation up to ONGC Cross
                    Road. From ONGC corss road one can avail the facility of City
                    bus no 206 to reach the institute.
                </p>
                <figure class="image is-3by2">
                    <img src="{{ asset('images/resources/transportation/brts-map.jpg') }}" />
                </figure>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
