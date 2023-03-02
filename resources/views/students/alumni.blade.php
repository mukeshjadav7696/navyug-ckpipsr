<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Alumni" />
        <x-page-content>
            <div class="content has-text-justified">
                <div class="columns">
                    <div class="column">
                        <p>Alumni are ambassadors of the Institute in the society and industry scattered over the world.
                        </p>
                        <p>"CKPIPSR aims to serve the needs of its alumni by helping them advance in their careers
                            through
                            working for satisfying their needs for knowledge inputs and through networking, to develop
                            synergistic plans to support the institutions for achieving their mission, and to enable the
                            institutes to add value to all its stake holders through the membership of CKPIPSR."</p>
                        <p>The purpose of establishing this Association is to help our alumni and to get the best out by
                            creating network of all alumni.</p>
                    </div>
                    <div class="column">
                        <h4 class="is-size-4">Objectives</h4>
                        <ul>
                            <li>To promote and provide services for its alumni, especially encouraging their continuing
                                growth, personally and professionally, and a spirit of fraternity among alumni.</li>
                            <li>To assist in placement of students.</li>
                            <li>To create awareness about institute and its alumni.</li>
                            <li>To collect/publish useful information to members of CKPIPSRAA.</li>
                            <li>To recognize the distinguished services of its alumni through awards.</li>
                            <li>To collect and maintain funds for development.</li>
                            <li>To foster a spirit of loyalty in the Alumni to both for GTU and the graduating
                                Institute.
                            </li>
                            <li>To strengthen the ties between alumni, the community, and the organization, where the
                                alumni
                                may be working.</li>
                            <li>To help alumni in their need.</li>
                            <li>To organize cultural and social activities, to set up facilities, which can help bring
                                together the alumni and the CKPIPSR community. </li>
                        </ul>
                    </div>
                </div>
                <h4 class="is-size-4">Rule and Regulations</h4>
                <div class="columns">
                    <div class="column">
                        @include('students.alumni.rules')
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        @include('students.alumni.membership')
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        @include('students.alumni.org_structure')
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        @include('students.alumni.meetings')
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        @include('students.alumni.infrastructure')
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        @include('students.alumni.committee')
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
