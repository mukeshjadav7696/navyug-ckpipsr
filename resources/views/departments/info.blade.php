<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="{{ $department->name }}" />

        <x-page-content>
            <article>
                <figure class="image panel is-3by1">
                    <img src="{{ $department->photo }}">
                </figure>
                <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <div class="tile is-child has-background-light">
                            <div class="section content">
                                {{ $department->description }}
                            </div>
                        </div>
                    </div>
                    <div class="tile is-vertical">
                        <div class="tile is-parent">
                            <div class="tile is-child content">
                                <p class="heading">Vision</p>
                                <blockquote>
                                    {{ $department->vision }}
                                </blockquote>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <div class="tile is-child">
                                <p class="heading">Mission</p>
                                <div class="list has-visible-pointer-controls">
                                    @if ($department->mission)
                                        @foreach ($department->mission as $key => $statement)
                                            <div class="list-item">
                                                <div class="list-item-content">
                                                    <div class="list-item-title">{{ $statement }}</div>
                                                </div>
                                                <div class="list-item-controls">
                                                    <div class="is-right">
                                                        <span class="tag is-info is-medium">{{ $key }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($department->pso || $department->peo)
                    <div class="section">
                        <div class="columns">
                            <div class="column">
                                @if ($department->pso)
                                    <div class="divider">PSO</div>
                                    <div class="list has-visible-pointer-controls">
                                        @foreach ($department->pso as $key => $statement)
                                            <div class="list-item">
                                                <div class="list-item-content">
                                                    <div class="list-item-title">{{ $statement }}</div>
                                                </div>
                                                <div class="list-item-controls">
                                                    <div class="is-right">
                                                        <span class="tag is-info is-medium">{{ $key }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="column">
                                @if ($department->peo)
                                    <div class="divider">PEO</div>
                                    <div class="list has-visible-pointer-controls">
                                        @foreach ($department->peo as $key => $statement)
                                            <div class="list-item">
                                                <div class="list-item-content">
                                                    <div class="list-item-title">{{ $statement }}</div>
                                                </div>
                                                <div class="list-item-controls">
                                                    <div class="is-right">
                                                        <span class="tag is-info is-medium">{{ $key }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            </article>
        </x-page-content>
    </x-slot>

</x-app-layout>
