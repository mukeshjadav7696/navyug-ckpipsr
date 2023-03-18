<table class="table is-striped is-fullwidth">
    <thead>
        <tr>
            <th>Role</th>
            <th>Member Name</th>
            <th>Designation</th>
            <th>Responsibilty</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($committee as $member)
            <tr>
                <td>{{ $member['role'] ?? '-' }}</td>
                <td>{{ $member['name'] }}</td>
                <td>{{ $member['designation'] }}</td>
                <td>{{ $member['responsibilty'] ?? '-' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
