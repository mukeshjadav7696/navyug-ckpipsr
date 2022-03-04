<div>
    <div id="{{ $id }}" class="is-photo-grid"></div>
    <div class="modal" id="modal-photo">
        <div class="modal-background"></div>
        <div class="modal-content">
            <figure class="image">
                <img alt="">
            </figure>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
    <script type="module">
        $(document).ready(function() {
            const photos = JSON.parse('<?= json_encode($photos) ?>')
            const $container = $('#{{ $id }}')
            const isBig = Boolean('{{ $isBig ?? false }}')
            photos.forEach(photo => {
                const $imgWrapper = $('<div/>')
                const $img = $('<img/>', {
                    src: photo['photo']
                }).on('load', function() {
                    if (this.width > 1.40 * this.height) {
                        $imgWrapper.addClass('horizontal')
                    } else if (this.height > 1.40 * this.width) {
                        $imgWrapper.addClass('vertical')
                    } else if (isBig && Math.random() > 0.5) {
                        $imgWrapper.addClass('big')
                    }
                    $img.appendTo($imgWrapper)
                    $imgWrapper.appendTo($container)
                }).on('click', function() {
                    //get url
                    const url = $(this).attr('src')
                    const $modal = $('#modal-photo')
                    $('img', $modal).attr('src', url)
                    $modal.addClass('is-active')
                })
            });
        });
    </script>
</div>
