<article>
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <div class="tile is-child has-background-light">
                <figure class="image panel">
                    <img src="{{ $department->photo }}">
                </figure>
            </div>
        </div>
        <div class="tile is-vertical">
            <div class="tile is-parent">
                <div class="tile is-child">
                    <div class="level mb-0">
                        <div class="level-left">
                            <div class="level-item">
                                <p class="title has-text-info">
                                    {{ $department->name }}
                                </p>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="tags has-addons is-right">
                                    <span class="tag">
                                        <i class="fas fa-hashtag"></i>
                                    </span>
                                    <span class="tag is-danger">{{ $department->short_name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        {{ $department->description }}
                    </div>
                </div>
            </div>
            @if ($department->vision)
                <div class="tile is-parent">
                    <div class="tile is-child content">
                        <p class="heading">Vision</p>
                        <blockquote>
                            {{ $department->vision }}
                        </blockquote>
                    </div>
                </div>
            @endif
            @if ($department->mission)
                <div class="tile is-parent">
                    <div class="tile is-child">
                        <p class="heading">Mission</p>
                        <div class="list has-visible-pointer-controls">
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
                        </div>
                    </div>
                </div>
            @endif
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
