<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Library" />
        <x-page-content>
            <div class="column">
                <div class="content has-text-justified">
                    <p>
                        Library is a place where readers come to fetch information in their field of interest. The CKPIPSR library is enriched with latest
                        collection of Pharmacy. The institute is equipped with a rich library with more than 7500 books and 400 journals as its assets.
                        Students and faculty can use this resource for enriching their knowledge to become a distinguished and successful pharmacy
                        professional
                    </p>
                    <h4 class="subtitle is-4 has-text-info has-text-centered">SALIENT FEATURES OF LIBRARY:</h4>
                    <ul>
                        <li>It has a rich collection of resources in electronic media.</li>
                        <li>It uses state-of-the-art technology in its functioning and services.</li>
                        <li>Library has been subscribed to access DELNET</li>
                    </ul>
                </div>
            </div>
            <div class="columns is-multiline">
                @foreach ($photos as $photo)
                    <div class="column is-4">
                        <figure class="image is-3by2 panel">
                            <img src="{{ $photo }}" />
                        </figure>
                    </div>
                @endforeach
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
