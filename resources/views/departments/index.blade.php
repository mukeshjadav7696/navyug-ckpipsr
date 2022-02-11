<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Departments" />

        <x-page-content>
            @foreach ($departments as $department)
                <div class="section px-0">
                    @include('departments.i_info', compact('department'))
                </div>
            @endforeach
        </x-page-content>
    </x-slot>

</x-app-layout>
