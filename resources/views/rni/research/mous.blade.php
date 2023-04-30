<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="MOUs" />
        <x-page-content>
            <div class="section">
                <div class="box">
                    <table class="table is-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Company / Organization</th>
                                <th>Purpose</th>
                                <th>Effective From</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mous as $mou)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mou['company'] }}</td>
                                    <td>{{ $mou['purpose'] }}</td>
                                    <td>{{ $mou['effective_from'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
