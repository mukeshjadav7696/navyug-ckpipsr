<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Industrial Visits" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            Industrial visits are usually the first point of interaction between a student and a live
                            working industry. The students learn about the latest technology trend and make up their
                            minds about their future job or area of interest.
                        </p>
                    </div>
                    <div class="box">
                        <table class="table is-striped is-fullwidth">
                            <thead>
                                <tr>
                                    <th>Academic Year</th>
                                    <th>Date of Visit</th>
                                    <th>Semester</th>
                                    <th>Name of Industry</th>
                                    <th>Students</th>
                                    <th>Faculty Coordinator</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($visits as $visit)
                                    <tr>
                                        <td>{{ $visit['academic_year'] }}</td>
                                        <td>{{ $visit['date_of_visit'] }}</td>
                                        <td>{{ $visit['semester'] }}</td>
                                        <td>{{ $visit['name_of_industry'] }}</td>
                                        <td>{{ $visit['students'] }}</td>
                                        <td>{{ $visit['faculty_coordinator'] }}</td>
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
