<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Medical Center" />
        <x-page-content>
            <div class="splide" id="medical-photos">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($photos as $photo)
                            <li class="splide__slide">
                                <figure class="image">
                                    <img src={{ $photo }} style="height: 400px" />
                                </figure>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <script type="module">
                $(document).ready(function() {
                    const splide = new Splide('#medical-photos', {
                        type: 'loop',
                        perPage: 1,
                        breakpoints: {
                            768: {
                                perPage: 1,
                            }
                        },
                        autoplay: true,
                        interval: 3000,
                        perMove: 1,
                        gap: 5
                    })
                    splide.mount()
                });
            </script>
            <div class="section">
                <div class="content">
                    <p>
                        The Medical Centre functions to provide immediate medicinal
                        and aid to all students and staff if the situation arises. The
                        Medical Centre is well equipped with respect to the
                        availability of basic health related facilities like first aid
                        box, weight measuring machine, patient bed, wheelchair etc.
                    </p>
                </div>
                <div class="columns">
                    <div class="column is-6">
                        <p>
                            Following doctor is appointed as Honorary Medical Officer at
                            this Institute with effect from 01-01-2016.
                        </p>
                        <article class="message mt-3">
                            <div class="message-body">
                                <div class="content">
                                    <p class="title is-4">Dr. Manubhai Kanjibhai Patel</p>
                                    <p class="subtitle">
                                        MBBS <br />
                                        Maniben Pithawalla Health Centre,<br />
                                        Sultanabad,Surat
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="divider is-vertical"></div>
                    <div class="column is-5">
                        <p>
                            In case of complications, the patients are referred to Ojas
                            Charitable Trust, Maniben Pithawalla Nindan Kendra,
                            Sultanabad, Dumas Surat.
                        </p>
                        <a href="{{ config('site.documents.resources.medical.mou') }}" target="_blank"
                            class="button is-info is-outlined mt-3">
                            MOU with Ojas Charitable Trust
                        </a>
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
