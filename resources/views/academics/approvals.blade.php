<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Approvals" />
        <x-page-content>
            <div class="columns is-centered">
                <div class="column is-6">
                    <div class="box">
                        <div class="table-container">
                            <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>Approving Body</th>
                                        <th>Latest Approval Date</th>
                                        <th>Approval Letter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PCI, New Delhi</td>
                                        <td>2022-23</td>
                                        <td>
                                            <a href="{{ config('site.documents.academics.approvals.pci') }}"
                                                target="_blank">
                                                <span class="icon">
                                                    <i class="fas fa-external-link-alt"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AICTE, New Delhi</td>
                                        <td>2022-23</td>
                                        <td>
                                            <a href="{{ config('site.documents.academics.approvals.aicte') }}"
                                                target="_blank">
                                                <span class="icon">
                                                    <i class="fas fa-external-link-alt"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>GTU, Gandhinagar</td>
                                        <td>2022-23</td>
                                        <td>
                                            <a href="{{ config('site.documents.academics.approvals.gtu') }}"
                                                target="_blank">
                                                <span class="icon">
                                                    <i class="fas fa-external-link-alt"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FRC</td>
                                        <td>2023-24 to 2025-26</td>
                                        <td>
                                            <a href="{{ config('site.documents.academics.approvals.frc') }}"
                                                target="_blank">
                                                <span class="icon">
                                                    <i class="fas fa-external-link-alt"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
