<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Events" />

        <x-page-content :padding="false">
            <div class="columns">
                <div class="column is-2">
                    <div class="list has-hoverable-list-items has-visible-pointer-controls">
                        @foreach ($eventTypes as $typeId => $typeName)
                            <div class="list-item">
                                <div class="list-item-content">
                                    <div class="list-item-title">{{ $typeName }}</div>
                                </div>
                                <div class="list-item-controls">
                                    <div class="buttons">
                                        <a class="button is-dark is-inverted fetch-events" href="#"
                                            data-id="{{ $typeId }}">
                                            <span class="icon">
                                                <i class="fas fa-arrow-alt-circle-right has-text-primary"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="column">
                    <div id="events-detail">
                        @include('activities.events.list', compact('events'))
                    </div>
                </div>
            </div>

            <script type="module">
                $(document).ready(function() {
                    const baseRoute = "{{ route('activities.events.type', ':eventTypeId') }}"
                    const $eventDetail = $('#events-detail')
                    $('a.fetch-events').on('click', function() {
                        //fetch events from server via ajax call
                        const id = $(this).data('id')
                        let url = baseRoute.replace(':eventTypeId', id)
                        $.ajax({
                            type: "GET",
                            url: url,
                            dataType: "json",
                            success: function(response) {
                                $eventDetail.html(response.content)
                            }
                        });
                    })
                });
            </script>

        </x-page-content>
    </x-slot>

</x-app-layout>
