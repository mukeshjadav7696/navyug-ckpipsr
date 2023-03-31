<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Cafeteria" />
        <x-page-content>
            <div class="content has-text-justified">
                <div class="columns">
                    <div class="column">
                        <p>
                            A favorite rendezvous of students during off hours is the
                            spacious and well-designed cafeteria with a suitable
                            aesthetic touch. The cafeteria has a modern kitchen with the
                            latest facilities to provide for healthy Indian and Chinese
                            cuisine. The interior is tastefully fashioned to provide the
                            much needed relief and soothing environment.
                        </p>
                    </div>
                    <div class="column">
                        <h2 class="subtitle is-5">Features</h2>
                        <ul>
                            <li>
                                Adequate &amp; well-furnished cafeteria with proper
                                ventilation
                            </li>
                            <li>Chillers &amp; freezer facilities</li>
                        </ul>
                        <h2 class="subtitle is-5">Types of Food</h2>
                        <div class="content has-text-justified">
                            <ul>
                                <li>
                                    All types of snacks (Gujarat, South Indian, and Chinese)
                                </li>
                                <li>Juices &amp; beverages</li>
                                <li>Salads and sandwiches</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="columns is-multiline">
                    @foreach ($photos as $photo)
                        <div class="column is-4">
                            <figure class="image is-3by2 panel">
                                <img src="{{ $photo }}" />
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
