<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Sports Facilities" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <div class="table-container">
                            <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Ground Details</th>
                                        <th>Area</th>
                                        <th>Location</th>
                                        <th>Usage (List of Games)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grounds as $ground)
                                        <tr>
                                            <td>{{ $ground['no'] }}</td>
                                            <td>{{ $ground['ground'] }}</td>
                                            <td>{{ $ground['area'] }}</td>
                                            <td>{{ $ground['location'] }}</td>
                                            <td>{{ $ground['usage'] }}</td>
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
