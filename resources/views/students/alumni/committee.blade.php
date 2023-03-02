<div class="columns">
    <div class="column">
        <div class="box">
            <span class="tag is-large is-primary">Managing Committee</span>
            <table class="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Name of the Member</th>
                        <th>Designation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($committeeM as $member)
                        <tr>
                            <td>{{ $member['role'] }}</td>
                            <td>{{ $member['name'] }}</td>
                            <td>{{ $member['designation'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="column">
        <div class="box">
            <span class="tag is-large is-primary">Executive Committee</span>
            <table class="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Name of the Member</th>
                        <th>Designation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($committeeE as $member)
                        <tr>
                            <td>{{ $member['role'] }}</td>
                            <td>{{ $member['name'] }}</td>
                            <td>{{ $member['designation'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
