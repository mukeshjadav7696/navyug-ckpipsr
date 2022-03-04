<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Achievements" />

        <x-page-content :padding="false">
            <div class="columns">
                <div class="column is-2">
                    <div class="panel has-background-light">
                        <div class="list has-visible-pointer-controls">
                            @foreach ($achievementTypes as $typeId => $typeName)
                                <div class="list-item">
                                    <div class="list-item-content">
                                        <div class="list-item-title">{{ $typeName }}</div>
                                    </div>
                                    <div class="list-item-controls">
                                        <a class="fetch-achievements" href="#" data-id="{{ $typeId }}">
                                            <span class="icon">
                                                <i class="fas fa-arrow-alt-circle-right has-text-primary"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div id="achievements-detail">
                        @include(
                            'activities.achievements.list',
                            compact('achievements')
                        )
                    </div>
                </div>
            </div>

            <script type="module">
                $(document).ready(function() {
                    const baseRoute = "{{ route('activities.achievements.type', ':achievementTypeId') }}"
                    const $achievementDetail = $('#achievements-detail')
                    $('a.fetch-achievements').on('click', function() {
                        //fetch achievements from server via ajax call
                        const id = $(this).data('id')
                        let url = baseRoute.replace(':achievementTypeId', id)
                        $.ajax({
                            type: "GET",
                            url: url,
                            dataType: "json",
                            success: function(response) {
                                $achievementDetail.html(response.content)
                            }
                        });
                    });
                });
            </script>

        </x-page-content>
    </x-slot>

</x-app-layout>
