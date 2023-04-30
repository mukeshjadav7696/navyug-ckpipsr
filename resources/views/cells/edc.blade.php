<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Entrepreneurship Development Cell" />
        <x-page-content>
            <div class="columns">
                <div class="column is-4">
                    <div class="content">
                        <p class="title">Objectives</p>
                        <ul>
                            <li>To develop entrepreneurship awareness amongst students and faculties</li>
                            <li>To organize Entrepreneurship Motivation Programs</li>
                            <li>To organize Skill development programs</li>
                            <li>To promote innovation and multiple skills in students</li>
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <div class="box">
                        @include('cells.committee', compact('committee'))
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
