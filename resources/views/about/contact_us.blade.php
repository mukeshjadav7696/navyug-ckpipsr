<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Contact Us" />

        <x-page-content>
            <div class="content has-text-centered">
                <div class="tile is-ancestor">
                    <div class="tile">
                        <div class="tile is-vertical">
                            <div class="tile">
                                <div class="tile is-parent is-8">
                                    <div class="tile is-child box has-background-light">
                                        <span class="icon">
                                            <i class="fas fa-briefcase"></i></span>
                                        <p class="heading">ADDRESS</p>
                                        <p class="has-text-info has-text-weight-bold">
                                            <?= nl2br(config('institute.info.address')) ?></p>
                                    </div>
                                </div>
                                <div class="tile is-parent is-4">
                                    <div class="tile is-child box has-background-light">
                                        <span class="icon">
                                            <i class="fas fa-calendar-week"></i>
                                        </span>
                                        <p class="heading">INSTITUTE TIMINGS</p>
                                        <p class="has-text-info has-text-weight-bold">
                                            {{ config('institute.info.timings') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tile">
                                <div class="tile is-parent is-6">
                                    <div class="tile is-child box has-background-light">
                                        <span class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </span>
                                        <p class="heading">CALL US</p>
                                        <p class="has-text-info has-text-weight-bold">
                                            <a href="tel:{{ config('institute.info.mobile') }}">
                                                {{ config('institute.info.mobile') }}
                                            </a>
                                            @if (config('institute.info.other_contact_nos'))
                                                @foreach (config('institute.info.other_contact_nos') as $phone)
                                                    <br />
                                                    <a href="tel:{{ $phone }}">{{ $phone }}</a>
                                                @endforeach
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="tile is-parent is-6">
                                    <div class="tile is-child box has-background-light">
                                        <span class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <p class="heading">SEND AN EMAIL</p>
                                        <p class="has-text-info has-text-weight-bold">
                                            <a href="mailto:{{ config('institute.info.email') }}">
                                                {{ config('institute.info.email') }}
                                            </a>
                                            @if (config('institute.info.other_emails'))
                                                @foreach (config('institute.info.other_emails') as $email)
                                                    <br />
                                                    <a href="mailto:{{ $email }}">
                                                        {{ $email }}
                                                    </a>
                                                @endforeach
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile is-parent">
                        <div class="tile is-child panel">
                            <div id="gmap">
                                <iframe src="{{ config('institute.info.location') }}" width="100%" height="400"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    allowfullscreen="allowfullscreen" loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="https://goo.gl/maps/MBLyJ82ujrbZfJFfA" target="_blank"
                    class="button is-info is-pulled-right">View Larger Map</a>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
