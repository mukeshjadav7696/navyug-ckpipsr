<div class="has-background-white">
    <div class="container is-hidden-mobile">
        <div class="columns mb-0">
            <div class="column is-5 is-align-self-center pb-0">
                <a href="{{ url('/') }}" class="is-flex is-align-items-center">
                    <figure class="image is-64x64">
                        <img src="{{ asset('images/logo.png') }}">
                    </figure>
                    <p class="subtitle ml-2 is-size-6">Navyug Vidyabhvan Trust</p>
                </a>
            </div>
            <div class="column is-2 is-align-self-center pb-0">
                <a href="{{ url('/') }}" id="institute-logo">
                    <img src="{{ config('institute.info.logo') }}">
                </a>
            </div>
            <div class="column is-5 is-flex is-align-self-center pb-0 is-justify-content-end">
                <a href="tel:{{ config('institute.info.mobile') }}">
                    <span class="icon">
                        <i class="fas fa-phone"></i>
                    </span>
                    <span>{{ config('institute.info.mobile') }}</span>
                </a>
                <a href="mailto:{{ config('institute.info.email') }}">
                    <span class="icon">
                        <i class="fas fa-at"></i>
                    </span>
                    <span>{{ config('institute.info.email') }}</span>
                </a>
                <a class="has-tooltip-arrow has-tooltip-bottom mx-4" href="{{ url('/announcements/announcement') }}"
                    data-tooltip="Announcements">
                    <i class="fas fa-bullhorn"></i>
                </a>
                <a class="has-tooltip-arrow has-tooltip-bottom mx-4" href="{{ url('/about/contact-us') }}"
                    data-tooltip="Contact Us">
                    <i class="fas fa-map"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item is-hidden-desktop" href="{{ url('/') }}">
                <img src="{{ config('institute.info.logo') }}" style="height: 3.2rem;">
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                data-target="main-navbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        @include('layouts.elements.navbar')
    </div>
</nav>
<script>
    $(document).ready(function() {
        // Check for click events on the navbar burger icon
        $(".navbar-burger").click(function() {
            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            $(".navbar-burger").toggleClass("is-active");
            $(".navbar-menu").toggleClass("is-active");
        });
    });
</script>
