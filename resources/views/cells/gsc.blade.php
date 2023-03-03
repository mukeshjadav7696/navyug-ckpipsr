<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Gender Sensitization Cell" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            Gender Sensitization Cell has been instructed to spread the message of Gender Equality in
                            order to eliminate gender bias and gender insensitivity.
                        </p>
                        <p>
                            The Cell has also been mainly entrusted with taking up cases of harassment and atrocities on
                            female teachers, employees and girl students, enquire and take appropriate action against
                            the culprits.
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
