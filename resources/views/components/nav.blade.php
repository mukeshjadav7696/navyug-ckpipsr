<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item py-0" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" style="height: 3.2rem;">
        </a>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="main-navbar">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="main-navbar" class="navbar-menu">
        <div class="navbar-start"></div>
        <div class="navbar-end"></div>
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
