<div class="has-background-white">
    <div class="container is-hidden-mobile">
        <div class="columns mb-0">
            <div class="column is-align-self-center pb-0">
                <a href="{{ url('/') }}" class="is-flex is-align-items-center">
                    <figure class="image is-64x64">
                        <img src="{{ asset('images/logo.png') }}">
                    </figure>
                    <p class="subtitle ml-2 is-size-6">Navyug Vidyabhvan Trust</p>
                </a>
            </div>
            <div class="column is-align-self-center pb-0">
                <a href="{{ url('/') }}" id="instiute-logo">
                    <img src="{{ config('institute.logo') }}">
                </a>
            </div>
            <div class="column is-align-self-center pb-0">
                <div class="right-contact">
                    <a href="tel:(+91) 63550 55839">
                        <span class="icon">
                            <i class="fas fa-phone"></i>
                        </span>
                        <span>{{ config('institute.contact.phone') }}</span>
                    </a>
                    <a href="mailto:{{ config('institute.contact.email') }}">
                        <span class="icon">
                            <i class="fas fa-at"></i>
                        </span>
                        <span>{{ config('institute.contact.email') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item is-hidden-desktop" href="{{ url('/') }}">
                <img src="{{ config('institute.logo') }}" style="height: 3.2rem;">
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                data-target="main-navbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <?php
        $navigationDetail = config('navigation');
        ?>
        <div id="main-navbar" class="navbar-menu">
            <div class="navbar-start">
                @include('layouts.nav.render', ['navigations' => $navigationDetail['left']])
            </div>
            <div class="navbar-end">
                @include('layouts.nav.render', ['navigations' => $navigationDetail['right']])
            </div>
        </div>
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
