<div>
    <section class="hero is-light">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-6">
                        <h5 class="subtitle has-text-weight-bold has-text-info">
                            About The Institute
                        </h5>
                        <p class="has-text-justified">
                            {{ config('institute.info.description') }}
                        </p>
                    </div>
                    @php
                        $quickLinks = config('navigation')['quick'] ?? null;
                    @endphp
                    <div class="column is-6">
                        <h5 class="subtitle has-text-weight-bold has-text-info">
                            Quick Links
                        </h5>
                        @include('layouts.elements.quicklinks')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-multiline">
                    <div class="column is-4">
                        <p class="title is-size-4">{{ config('institute.info.name') }}</p>
                        <p><?= nl2br(config('institute.info.address')) ?></p>
                        <div class="is-flex">
                            <div style="margin-left: -0.75em;">
                                <a href="{{ config('institute.info.location') }}" target="_blank"
                                    class="is-flex is-align-items-center">
                                    <span class="icon is-large">
                                        <i class="fas fa-map-marker-alt fa-2x"></i>
                                    </span>
                                    <span>Location</span>
                                </a>
                            </div>
                            <div class="is-flex is-align-items-center">
                                <span class="icon is-large">
                                    <i class="far fa-clock fa-2x"></i>
                                </span>
                                <span class="has-text-weight-bold">{{ config('institute.info.timings') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="columns is-multiline">
                            <div class="column is-half">
                                <span class="icon">
                                    <i class="far fa-envelope"></i>
                                </span>
                                <br />
                                <a href="mailto:{{ config('institute.info.email') }}">
                                    {{ config('institute.info.email') }}
                                </a>
                                @if (config('institute.info.other_emails'))
                                    @foreach (config('institute.info.other_emails') as $email)
                                        &vert;
                                        <a href="mailto:{{ $email }}">
                                            {{ $email }}
                                        </a>
                                    @endforeach
                                @endif
                            </div>
                            <div class="column is-half">
                                <span class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                                <br />
                                <a href="tel:{{ config('institute.info.mobile') }}">
                                    {{ config('institute.info.mobile') }}
                                </a>
                                @if (config('institute.info.other_contact_nos'))
                                    @foreach (config('institute.info.other_contact_nos') as $phone)
                                        &vert;
                                        <a href="tel:{{ $phone }}">{{ $phone }}</a>
                                    @endforeach
                                @endif
                            </div>
                            <div class="column is-full">
                                <div class="is-flex is-flex-wrap-wrap">
                                    <span class="icon is-large">
                                        <i class="fas fa-hashtag fa-2x has-text-warning"></i>
                                    </span>
                                    @foreach (ViewHelper::socialIcons() as $platform => $icon)
                                        @php
                                            $url = config('institute.info')[$platform] ?? null;
                                        @endphp
                                        @if ($url)
                                            <a href="#" target="_blank">
                                                <span class="icon is-large">
                                                    <i class="{{ $icon }} fa-2x"></i>
                                                </span>
                                            </a>
                                        @else
                                            <span class="icon is-large is-lighten">
                                                <i class="{{ $icon }} fa-2x"></i>
                                            </span>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-2">
                        <div>
                            <a href="javascript:;">Privacy Policy</a> <br />
                            <span>© {{ config('institute.info.short_name') }}. All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
