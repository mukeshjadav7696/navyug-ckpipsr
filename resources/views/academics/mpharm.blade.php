<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Courses Offered" />
        <x-page-content>
            <div class="columns is-centered">
                <div class="column is-6">
                    <div class="box">
                        <div class="table-container">
                            <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Intake</th>
                                        <th>Duration</th>
                                        <th>Fees <span class="tag">*</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>M.Pharm. (Full Time)</td>
                                        <td>15</td>
                                        <td>2 Years</td>
                                        <td>125000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <span class="tag">
                        * - Subject to FRC
                    </span>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
