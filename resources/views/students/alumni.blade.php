<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Alumni" />
        <x-page-content>
            <div class="tabs is-centered">
                <ul>
                    <li class="tab is-active" data-content="tab-about"><a>About Alumni</a></li>
                    <li class="tab" data-content="tab-rules"><a>Rules & Regulations</a></li>
                    <li class="tab" data-content="tab-managing"><a>Managing Committee</a></li>
                    <li class="tab" data-content="tab-executive"><a>Executive Committee</a></li>
                    <li class="tab" data-content="tab-registration"><a>Registration</a></li>
                </ul>
            </div>
            <div class="tab-content content" id="tab-about">
                <div class="box">
                    @include('students.alumni.about')
                </div>
            </div>
            <div class="tab-content is-hidden content" id="tab-rules">
                <div class="box">
                    @include('students.alumni.rules')
                    <div class="columns">
                        <div class="column">
                            @include('students.alumni.membership')
                        </div>
                    </div>
                    <hr />
                    <div class="columns">
                        <div class="column">
                            @include('students.alumni.org_structure')
                        </div>
                    </div>
                    <hr />
                    <div class="columns">
                        <div class="column">
                            @include('students.alumni.meetings')
                        </div>
                    </div>
                    <hr />
                    <div class="columns">
                        <div class="column">
                            @include('students.alumni.infrastructure')
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-managing">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <div class="box">
                            @include('students.alumni.committee', ['committee' => $committeeM])
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-executive">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <div class="box">
                            @include('students.alumni.committee', ['committee' => $committeeE])
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-registration">
                <div class="columns is-centered">
                    <div class="column is-10">
                        <iframe src="https://forms.gle/PTNahfe3hzTQEHNp9" height="1050" frameborder="0"
                            marginheight="0" marginwidth="0" style="width: 100%">Loading…</iframe>
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
