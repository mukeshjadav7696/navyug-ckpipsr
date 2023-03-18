<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Staff - {{ $typeLabel }}" />

        <x-page-content :padding="false">
            <div class="is-grid is-3">
                @foreach ($staffMembers as $staff)
                    <div class="list-item">
                        <div class="list-item-image">
                            @if ($staff->photo)
                                <figure class="image is-48x48 is-clipped">
                                    <img src="{{ asset($staff->photo) }}" alt="">
                                </figure>
                            @else
                                <span class="icon is-large">
                                    <i class="fas fa-user has-text-light fa-2x"></i>
                                </span>
                            @endif
                        </div>
                        <div class="list-item-content">
                            <div class="list-item-title">{{ $staff->name }}</div>
                            <p>{{ $staff->designation }}, {{ $staff->department }}</p>
                            <p class="has-text-grey">{{ $staff->qualification }}</p>
                            <p>
                                @if ($staff->email)
                                    <a href="mailto:{{ $staff->email }}">{{ $staff->email }}</a>
                                @endif
                                @if ($staff->contact_no)
                                    <a href="tel:{{ $staff->contact_no }}">{{ $staff->contact_no }}</a>
                                @endif
                            </p>
                        </div>
                        <div class="list-item-controls">
                            <div class="buttons">
                                <a class="button is-dark is-inverted staff" href="#"
                                    data-id="{{ $staff->id }}">
                                    <span class="icon">
                                        <i class="fas fa-info"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="modal" id="modal-staff">
                <div class="modal-background"></div>
                <div class="modal-content is-modal-large">
                    <div id="staff-detail"></div>
                </div>
                <button class="modal-close is-large" aria-label="close"></button>
            </div>
            <script type="module">
                $(document).ready(function() {
                    const baseUrl = "{{ route('staff.info', ':staffId') }}";
                    const $staffContainer = $('div#staff-detail')
                    const $modal = $('#modal-staff')                    
                    

                    $('a.staff').on('click', function() {
                        const staffId = $(this).data('id')
                        let url = baseUrl
                        url = url.replace(':staffId', staffId)
                        showLoader()

                        let ajax = new Ajax("GET", url);
                        ajax.onSuccess = function(response) {
                            $staffContainer.html(response.content)
                            $staffContainer.focus()
                            hideLoader();
                            $modal.addClass('is-active');
                        }
                        ajax.onError = function(error) {
                            $staffContainer.empty()
                            hideLoader();
                            showMessage(error.responseJSON, "error")
                        }
                        ajax.send();
                    })
                });
            </script>
        </x-page-content>
    </x-slot>

</x-app-layout>
