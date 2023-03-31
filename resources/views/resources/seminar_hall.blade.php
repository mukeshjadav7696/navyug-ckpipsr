<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Seminar Hall" />
        <x-page-content>
            <div class="column">
                <div class="content has-text-justified">
                    <p>
                        The institute has a well furnished, adequately spacious
                        Seminar Hall with a sitting capacity of 200 students. The
                        Hall is air conditioned and well equipped with a LCD
                        projector and an audio-visual facility
                    </p>
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
