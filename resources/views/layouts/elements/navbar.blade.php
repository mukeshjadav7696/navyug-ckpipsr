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
            // if ($apiDepartments->isNotEmpty()) {
            //     $links = $apiDepartments->map(function ($department) {
            //         return [
            //             'title' => $department['name'],
            //             'url' => route('departments.info', Str::slug($department['name'])),
            //         ];
            //     });
            //     $right['events'] = [
            //         'title' => 'Events',
            //         'links' => $links,
            //     ];
            // }
        @endphp
        @include('layouts.elements.render', ['navigations' => $right])
    </div>
</div>
