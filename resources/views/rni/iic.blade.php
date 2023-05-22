<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="IIC" />
        <x-page-content>
            <div class="tabs is-centered">
                <ul>
                    <li class="tab is-active" data-content="tab-committee"><a>About</a></li>
                    <li class="tab" data-content="tab-os"><a>Organizational Structure</a></li>
                </ul>
            </div>
            <div class="tab-content" id="tab-committee">
                <div class="box content">
                    <div class="columns">
                        <div class="column is-4">
                            <p class="subtitle is-size-4 has-text-info">
                                Objectives
                            </p>
                            <ul>
                                <li>Create and sustain innovation and entrepreneurship culture in campus.</li>
                                <li>Streamline and strengthen innovation and entrepreneurship ecosystem in campus.</li>
                            </ul>
                        </div>
                        <div class="column">
                            <p class="subtitle is-size-4 has-text-info">
                                Roles & Responsibilities:
                            </p>
                            <ul>
                                <li> Establish Synergy and coherency among various departments and units and better
                                    mobile
                                    resources
                                    to support innovation and entrepreneurship.
                                </li>
                                <li>Plan, develop and support institution in formation and implementation of innovation
                                    and
                                    entrepreneurship policies at the institute level. </li>
                                <li>Plan and conduct various time-bounded innovation and entrepreneurship promotion
                                    activities
                                    round
                                    the year to generate awareness on innovation and startup. </li>
                                <li>Encourage, recognize and reward students, faculty members and staffs for their
                                    engagement,
                                    involvement and supporting innovation and entrepreneurship achievements. </li>
                                <li>Facilitate intra-institutional and inter-institutional interactions and partnership
                                    to
                                    promote
                                    interdisciplinary and multi-disciplinary innovations and entrepreneurial teams.
                                </li>
                                <li>Network, collaborate, and partnership with ecosystem enablers at the regional, state
                                    and
                                    national level and support system development to provide easy access to resource to
                                    innovators
                                    and entrepreneurs.
                                </li>
                                <li>Plan, build, manage and mobilize resources for the pre-incubation and incubation
                                    facility
                                    and
                                    service support creation. </li>
                                <li>Plan and conduct challenges, competitions, hackathons in the campus and encourage
                                    students
                                    to
                                    participate. </li>
                                <li>Create innovation repository of ideas, innovations, startups at the Institute level
                                    (YUKTI)
                                    and
                                    provide support to them and connect/linkage with ecosystem enablers for incubation,
                                    investment,
                                    IP and technology transfer service support.
                                </li>
                                <li>Nominate faculty members of the IIC to undergo Innovation Ambassador Training and
                                    encourage
                                    them
                                    to perform post-training tasks such as delivering expert talks on innovation and
                                    startup,
                                    engage
                                    in mentoring role etc. as prescribed for the Innovation Ambassadors.
                                </li>
                                <li>Train and build capacity of faculty members in innovation and entrepreneurship to
                                    play a
                                    hybrid
                                    role as mentor, drive IIC activities, innovator and entrepreneur. </li>
                                <li>Organize interactions with entrepreneurs, investors, ecosystem enablers and create a
                                    pool of
                                    experts to mentor student innovators & entrepreneurs. </li>
                                <li>Extend mentoring support to other IIC institutions and encourage HEIs to join the
                                    IIC
                                    network.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-os">
                <div class="box">
                    <div class="content">
                        <p class="subtitle is-size-4 has-text-info">
                            Institute ID – IC202217445
                        </p>
                    </div>
                    <hr />
                    <div class="table-container">
                        <table class="table is-striped is-fullwidth">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Member Name</th>
                                    <th>Designation</th>
                                    <th>Role</th>
                                    <th>Responsibility</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($committee as $member)
                                    <tr>
                                        <td>{{ $member['no'] }}</td>
                                        <td>{{ $member['name'] }}</td>
                                        <td>{{ $member['designation'] }}</td>
                                        <td>{{ $member['role'] }}</td>
                                        <td>{{ $member['responsibility'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
