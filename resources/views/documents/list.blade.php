<div class="list box has-visible-pointer-controls" id="document-list">
    @foreach ($documents as $document)
        <div class="list-item" data-category="{{ $document->category }}"
            data-department="{{ $document->department }}">
            <div class="list-item-content">
                <div class="list-item-title">
                    <a href="{{ $document->url }}" target="_blank">
                        {{ $document->title }}
                    </a>
                </div>
            </div>
            <div class="list-item-controls">
                <div class="is-flex is-flex-wrap-wrap is-align-items-baseline">
                    <span class="tags has-addons are-tiny are-marginless">
                        <span class="tag is-success is-rounded">{{ $document->department }}</span>
                    </span>
                    <span class="tags has-addons ml-2 are-tiny">
                        <span class="tag is-info is-rounded">{{ $document->category }}</span>
                    </span>
                </div>
            </div>
        </div>
    @endforeach
</div>
