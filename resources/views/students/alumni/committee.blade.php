<div class="table-container">
    <table class="table is-striped is-fullwidth">
        <thead>
            <tr>
                <th>Role</th>
                <th>Name of the Member</th>
                <th>Designation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($committee as $member)
                <tr>
                    <td>{{ $member['role'] }}</td>
                    <td>{{ $member['name'] }}</td>
                    <td>{{ $member['designation'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
