<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="IQAC Composition" />
        <x-page-content>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <p>
                            IQAC is conceived as a mechanism to build and ensure a quality culture at the institutional
                            level. The IQAC is meant for planning, guiding and maintaining Quality Assurance (QA) and
                            Quality Enhancement (QE) activities of the institution.
                        </p>
                    </div>
                    <div class="box">
                        <div class="table-container">
                            <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>Role</th>
                                        <th>Member Name</th>
                                        <th>Designation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($committee as $member)
                                        <tr>
                                            <td>{{ $member['role'] ?? '-' }}</td>
                                            <td>{{ $member['name'] }}</td>
                                            <td>{{ $member['designation'] }}</td>
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
