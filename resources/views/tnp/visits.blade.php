<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Industrial Visits" />
        <x-page-content>
            <div class="columns is-centered">
                <div class="column is-9">
                    @foreach ($reports as $title => $url)
                        <p class="subtitle has-text-info">{{ $title }}</p>
                        <embed src="{{ $url }}" width="100%" height="600" type="application/pdf">
                    @endforeach
                </div>
            </div>
            {{-- <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            Industrial visits are usually the first point of interaction between a student and a live
                            working industry. The students learn about the latest technology trend and make up their
                            minds about their future job or area of interest.
                        </p>
                    </div>
                    <div class="box">
                        <div class="table-container">
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
            </div> --}}
        </x-page-content>
    </x-slot>

</x-app-layout>
