<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Academic Timetables" />
        <x-page-content>
            <div class="columns is-centered">
                <div class="column is-6">
                    <div class="box">
                        <table class="table is-striped is-fullwidth">
                            <thead>
                                <tr>
                                    <th>Academic Year</th>
                                    <th>Term</th>
                                    <th>Semester</th>
                                    <th>URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($timetables as $tt)
                                    <tr>
                                        <td>{{ $tt['academic_year'] }}</td>
                                        <td>{{ $tt['term'] }}</td>
                                        <td>{{ $tt['semester'] }}</td>
                                        <td><a href="{{ $tt['url'] }}" target="_blank">Explore</a></td>
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
