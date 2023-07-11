<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Hobby Club" />
        <x-page-content>
            <div class="tabs is-centered">
                <ul>
                    <li class="tab is-active" data-content="tab-about"><a>About</a></li>
                    <li class="tab" data-content="tab-clubs"><a>Various Clubs</a></li>
                    <li class="tab" data-content="tab-rules"><a>Rules and Regulations</a></li>
                </ul>
            </div>
            <div class="tab-content" id="tab-about">
                <div class="box">
                    @include('students.hobbyclub.about')
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-clubs">
                @include('students.hobbyclub.clubs')
            </div>
            <div class="tab-content is-hidden" id="tab-rules">
                <div class="content">
                    <p class="title is-size-4">Rules and Regulations</p>
                    <ul>
                        <li>Students may join different clubs as per their choice.</li>
                        <li>The club will be managed by the students, under the guidance of faculty members.</li>
                        <li>Each club will have student in charge who will report to the faculty in-charges.</li>
                        <li>The entire club will hold regular meetings to discuss and plan their activities. </li>
                        <li>Each club activities will be published in CKPIPSR E-bulletin, which will provide a forum for
                            discussions on various topics related to the clubs and also give an account of the
                            activities organized by the club.</li>
                        <li>Each club can organize competitive activities, at intra and inter college levels
                            periodically. </li>
                        <li>Rules for individual activities being organized by the clubs will be decided by the
                            coordinators and respective faculty in-charges.</li>
                        <li>Competition between the clubs should be healthy and clubs should not attempt to disrupt the
                            activities of other clubs.</li>
                    </ul>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
