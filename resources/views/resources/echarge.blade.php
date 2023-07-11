<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="EV Charging Station" />
        <x-page-content>
            <div class="content">
                <div class="columns">
                    <div class="column">
                        <p>
                            We have established an electric vehicle charging facility on our campus to reduce our
                            carbon footprint and encourage environmentally friendly transportation options for our
                            students, staff, and faculty members for promoting sustainable transportation at our
                            institute.
                        </p>
                    </div>
                    <div class="column">
                        <figure class="image">
                            <img src="{{ asset('images/resources/echarging.jpg') }}" />
                        </figure>
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
