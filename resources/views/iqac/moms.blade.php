<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="MoMs and ATR" />
        <x-page-content>
            <div class="section">
                <span class="tag is-info is-large">Minutes of Meetigs</span>
                <hr />
                <div class="list">
                    @foreach ($reports as $title => $url)
                        <div class="list-item">
                            <div class="list-item-content">
                                <div class="list-item-title">
                                    <a href="{{ $url }}" target="_blank">{{ $title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
