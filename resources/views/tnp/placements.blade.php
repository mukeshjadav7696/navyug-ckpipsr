<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Placement Details" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            Campus recruitment is a process through which the corporate (employer) organization recruits
                            the required talent pool from the institute campuses. The selection process takes place in
                            the final yearB Pharm students.
                        </p>
                    </div>
                    <div class="box">
                        <div class="table-container">
                            <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th rowspan="2">Academic Year</th>
                                        <th rowspan="2">Name of the Company</th>
                                        <th colspan="2">No of Students</th>
                                        <th rowspan="2">Annual Package</th>
                                        <th rowspan="2">Date of Interview</th>
                                    </tr>
                                    <tr>
                                        <th>Participated</th>
                                        <th>Recruited</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($placements as $drive)
                                        <tr>
                                            <td>{{ $drive['academic_year'] }}</td>
                                            <td>{{ $drive['company_name'] }}</td>
                                            <td>{{ $drive['students_participated'] }}</td>
                                            <td>{{ $drive['students_recruited'] }}</td>
                                            <td>{{ $drive['annual_package'] }}</td>
                                            <td>{{ $drive['date'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
