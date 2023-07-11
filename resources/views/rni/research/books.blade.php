<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Books and Chapters" />
        <x-page-content>
            <div class="box">
                <div class="table-container">
                    <table class="table is-striped is-fullwidth">
                        <thead>
                            <tr>
                                <th>Name of Author</th>
                                <th>Title of The Book/Chapters Published</th>
                                <th>Title of the Chapter</th>
                                <th>National/International</th>
                                <th>Year of Publication</th>
                                <th>ISBN/ISSN</th>
                                <th>Name of Publisher</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                                <tr>
                                    <td>{{ $record['author'] }}</td>
                                    <td>{{ $record['title'] }}</td>
                                    <td>{{ $record['chapter'] }}</td>
                                    <td>{{ $record['type'] }}</td>
                                    <td>{{ $record['year'] }}</td>
                                    <td>{{ $record['isbn'] }}</td>
                                    <td>{{ $record['publisher'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
