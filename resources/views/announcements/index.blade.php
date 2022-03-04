<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle :title="$title" />

        <x-page-content>
            <div class="columns">
                <div class="column is-6">
                    <div class="field has-addons panel">
                        <div class="control is-expanded">
                            <input class="input" name="keyword" type="text"
                                placeholder="Search for announcement">
                        </div>
                        <div class="control">
                            <a class="button is-info" id="btn-search">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                        <div class="control">
                            <a class="button is-success" id="btn-clear">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list has-visible-pointer-controls" id="announcement-list">
                @foreach ($announcements as $announcement)
                    <div class="list-item" data-title="{{ $announcement->title }}">
                        <div class="list-item-content">
                            <div class="list-item-title">
                                {{ $announcement->title }}
                            </div>
                            <div class="is-flex is-flex-wrap-wrap is-align-items-baseline">
                                @foreach ($announcement->links as $label => $url)
                                    @if (!$loop->first)
                                        <span class="has-text-grey mx-2">
                                            &bullet;
                                        </span>
                                    @endif
                                    <a class="is-italic" href="{{ $url }}">
                                        <span>{{ $label }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="list-item-controls">
                            <span class="tags has-addons are-tiny">
                                <span class="tag">
                                    <i class="fas fa-calendar-alt"></i>
                                </span>
                                <span class="tag is-info">
                                    {{ $announcement->date }}
                                </span>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>

            <script type="module">
                $(document).ready(function() {

                    const $context = $('#announcement-list')
                    //clear 
                    const clear = function() {
                        $('div.list-item', $context).removeClass('is-hidden')
                    }

                    //render list
                    const render = function(keyword) {
                        if (keyword == "") {
                            clear()
                        } else {
                            $('div.list-item', $context).each(function() {
                                const $item = $(this);
                                const title = $item.data('title');
                                let re = new RegExp(keyword, "i");
                                if (title.search(re) != -1) {
                                    $item.removeClass('is-hidden')
                                } else {
                                    $item.addClass('is-hidden')
                                }
                            })
                        }
                    }
                    //update list on filter change
                    const $keyword = $('input[name=keyword]')
                    const search = function() {
                        const keyword = $keyword.val()
                        render(keyword)
                    }
                    $('#btn-search').on('click', function() {
                        search()
                    });
                    $keyword.on('keyup', function() {
                        search()
                    });
                    $('#btn-clear').on('click', function() {
                        $keyword.val("")
                        clear()
                    });
                });
            </script>
        </x-page-content>
    </x-slot>

</x-app-layout>
