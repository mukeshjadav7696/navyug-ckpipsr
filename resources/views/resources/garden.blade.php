<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Medicinal Garden" />
        <x-page-content>
            <div>
                <p class="content">
                    C. K Pithawalla Institute of Pharmaceutical Sciences and Research has the privilege of
                    maintaining a medicinal garden within the campus with numerous important medicinal and
                    aromatic plants. The garden is attached with the main Building and its main purpose is to
                    carry out experimental work, serves an important tool for teaching and research, to preserve
                    and promote the medicinal values of the plants which grow mostly wild, in our surrounding
                    and whose properties are beneficial in maintaining a balance between man and nature.
                    Medicinal gardens are the precious source of raw material for medicinal remedies used in
                    primary health care.
                </p>
                <div class="columns">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="column">
                            <figure class="image is-3by2 panel">
                                <img src="{{ asset("images/resources/garden/garden-{$i}.png") }}" />
                            </figure>
                        </div>
                    @endfor
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
