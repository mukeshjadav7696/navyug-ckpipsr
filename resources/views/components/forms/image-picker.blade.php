<div>
    <div id="ic-panel-{{ $id }}">
        <div class="">
            <img id="image-{{ $id }}" src="{{ $src }}" alt=""
                style="display: block; max-width: 100%;">
            <input type="hidden" name="{{ $name }}_parameters" id="parameters-{{ $id }}">
        </div>
        <div class="columns">
            <div class="column is-6">
                <div class="img-preview is-clipped panel my-3" style="min-height:144px;"></div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <div class="file has-name is-fullwidth">
                        <label class="file-label">
                            <input class="file-input" type="file" name="{{ $name }}"
                                id="select-{{ $id }}">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                    Pick an image...
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            @if ($controls)
                <div class="column is-4">
                    <div class="columns">
                        <div class="column">
                            <div class="buttons has-addons">
                                <button class="button flip-y is-info is-outlined" type="button"
                                    data-tooltip="Flip Verticle" disabled>
                                    <i class="fas fa-arrows-alt-v"></i>
                                </button>
                                <button class="button flip-x is-info is-outlined" type="button"
                                    data-tooltip="Flip Horizontal" disabled>
                                    <i class="fas fa-arrows-alt-h"></i>
                                </button>
                            </div>
                        </div>
                        <div class="column">
                            <div class="buttons has-addons">
                                <button class="button rotate-r is-success is-outlined" type="button"
                                    data-tooltip="Rotate Clockwise" disabled>
                                    <i class="fas fa-redo"></i>
                                </button>
                                <button class="button rotate-l is-success is-outlined" type="button"
                                    data-tooltip="Rotate Anti-clockwise" disabled>
                                    <i class="fas fa-undo"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <script>
        $(document).ready(function() {
            //check browser compatibility
            let $context = $('#ic-panel-{{ $id }}')
            const rotateAngle = Number('{{ $rotate }}')

            let uploadedImageURL;
            let cropper;
            const options = {
                preview: '#ic-panel-{{ $id }} .img-preview',
                ready: function(e) {
                    //console.log(e.type);
                    $('.button', $context).removeAttr('disabled')
                },
                crop: function(e) {
                    let data = e.detail;
                    const parameters = document.getElementById('parameters-{{ $id }}')
                    parameters.value = JSON.stringify(e.detail)
                },
            }

            //image container
            let image = document.getElementById('image-{{ $id }}');

            //image selector
            const selectImage = document.getElementById('select-{{ $id }}');

            if (window.URL || window.webkitURL) {
                selectImage.onchange = function() {
                    var files = this.files;
                    var file;

                    if (files && files.length) {
                        file = files[0];

                        if (/^image\/\w+/.test(file.type)) {
                            uploadedImageType = file.type;
                            uploadedImageName = file.name;

                            if (uploadedImageURL) {
                                URL.revokeObjectURL(uploadedImageURL);
                            }

                            image.src = uploadedImageURL = URL.createObjectURL(file);

                            if (cropper) {
                                cropper.destroy();
                            }

                            //initialize cropper object
                            cropper = new Cropper(image, options);
                            //selectImage.value = null;
                        } else {
                            window.alert('Please choose an image file.');
                        }
                    }
                };
            } else {
                selectImage.disabled = true;
                selectImage.parentNode.className += ' disabled';
            }

            $('.flip-x', $context).click(function() {
                const scale = cropper.getData().scaleX
                cropper.scaleX(-scale)
            })
            $('.flip-y', $context).click(function() {
                const scale = cropper.getData().scaleY
                cropper.scaleY(-scale)
            })
            $('.rotate-r', $context).click(function() {
                cropper.rotate(rotateAngle)
            })
            $('.rotate-l', $context).click(function() {
                cropper.rotate(-rotateAngle)
            })
        });
    </script>
</div>
