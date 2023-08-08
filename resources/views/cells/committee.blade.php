<div class="table-container">
    <table class="table is-striped is-fullwidth">
        <thead>
            <tr>
                <th>Role</th>
                <th>Member Name</th>
                <th>Designation</th>
                <th>Contact No</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($committee as $member)
                <tr>
                    
                    <td>{{ $member['role'] ?? '-' }}</td>
                    <td>{{ $member['name'] }}</td>
                    <td>{{ $member['designation'] }}</td>
                    <td>{{ $member['contact_no'] ?? '-' }}</td>
                    <td>{{ $member['email'] ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
