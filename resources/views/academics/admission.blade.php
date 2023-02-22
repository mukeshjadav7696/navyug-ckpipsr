<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Admission" />

        <x-page-content>
            <div class="columns">
                <div class="column content">
                    <p>
                        Admission procedure finalized by the Joint Admission Committee for Professional Courses at
                        Ahmedabad.
                    </p>
                    <div class="block">
                        <a href="{{ config('navigation.quick.links.JACPC') }}" class="button is-primary is-outlined"
                            target="_blank">
                            <span>JACPC</span>
                            <span class="icon">
                                <i class="fas fa-external-link-alt"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <a href="{{ config('site.documents.academics.admission.brocure202122') }}"
                        class="button is-primary is-outlined" target="_blank">
                        <span>Brochure</span>
                        <span class="icon">
                            <i class="fas fa-external-link-alt"></i>
                        </span>
                    </a>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
