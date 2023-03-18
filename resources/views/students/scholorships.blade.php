<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Scholorships" />
        <x-page-content>
            <div class="tabs is-centered">
                <ul>
                    <li class="tab is-active" data-content="tab-so"><a>Scholorship Organizations</a></li>
                    <li class="tab" data-content="tab-award"><a>Scholorship Awarded</a></li>
                </ul>
            </div>
            <div class="tab-content" id="tab-so">
                <div class="box">
                    <div class="table-container">
                        <table class="table is-striped is-fullwidth">
                            <thead>
                                <tr>
                                    <th>Organization</th>
                                    <th>Name of Scholorship</th>
                                    <th>Website</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($scOrgs as $so)
                                    <tr>
                                        <td>{{ $so['organization'] }}</td>
                                        <td>{{ $so['name'] }}</td>
                                        <td><a href="{{ $so['website'] }}" target="_blank">{{ $so['website'] }}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-award">
                <div class="box">
                    <div class="table-container">
                        <table class="table is-striped is-fullwidth">
                            <thead>
                                <tr>
                                    <th>Acadamic Year</th>
                                    <th>Name of the Students</th>
                                    <th>Class</th>
                                    <th>Category</th>
                                    <th>Amount</th>
                                    <th>Scholarship Agency</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($scAwarded as $sa)
                                    <tr>
                                        <td>{{ $sa['academic_year'] }}</td>
                                        <td>{{ $sa['name_of_student'] }}</td>
                                        <td>{{ $sa['class'] }}</td>
                                        <td>{{ $sa['category'] }}</td>
                                        <td>{{ $sa['amount'] }}</td>
                                        <td>{{ $sa['scholarship_agency'] }}</td>
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
