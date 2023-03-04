<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Laboratories" />

        <x-page-content :padding="false">
            <div class="columns">
                <div class="column is-4">
                    <div class="panel has-background-light">
                        <div class="list has-visible-pointer-controls">
                            @foreach ($laboratories as $lab)
                                @php
                                    $labId = Str::slug($lab->name);
                                @endphp
                                <div class="list-item">
                                    <div class="list-item-content">
                                        <div class="list-item-title">{{ $lab->name }}</div>
                                    </div>
                                    <div class="list-item-controls">
                                        <a class="get-lab" href="#" data-target="{{ $labId }}">
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
                    @foreach ($laboratories as $lab)
                        @php
                            $labId = Str::slug($lab->name);
                            $display = $loop->first ? 'block' : 'none';
                        @endphp
                        <div class="lab-container" id="{{ $labId }}" style="display: {{ $display }}">
                            @include('resources.laboratories.lab', compact('lab'))
                        </div>
                    @endforeach
                </div>
            </div>
            <script type="module">
                $(document).ready(function() {
                    $('a.get-lab').on('click', function() {
                        //get target
                        const target = $(this).data('target')

                        //hide all
                        $('div.lab-container').hide();
                        $(`div#${target}`).fadeIn();

                    })
                });
            </script>

        </x-page-content>
    </x-slot>

</x-app-layout>
