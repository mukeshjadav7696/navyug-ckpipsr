<?php
$navigationDetail = config('navigation');
?>
<div id="main-navbar" class="navbar-menu">
    <div class="navbar-start">
        @php
            $left = $navigationDetail['left'];
        @endphp
        @include('layouts.elements.render', ['navigations' => $left])
    </div>
    <div class="navbar-end">
        @php
            $right = $navigationDetail['right'];
        @endphp
        @include('layouts.elements.render', ['navigations' => $right])
    </div>
</div>
