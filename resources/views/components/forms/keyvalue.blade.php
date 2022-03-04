<div id="kv-container-{{ $id }}">
    <input type="hidden" name="{{ $name }}" value="{{ $value }}" id="{{ $id }}"
        class="field">
    <div class="level">
        <div class="level-left">
            <h6 class="subtitle">{{ $label }}</h6>
        </div>
        <div class="level-right">
            <button class="button btn-key-value" type="button">
                <span class="icon is-small">
                    <i class="fas fa-plus"></i>
                </span>
            </button>
        </div>
    </div>
    <div class="field has-addons key-value-field is-hidden">
        <div class="control">
            <input class="input key" type="text" placeholder="{{ $placeholderKey }}">
        </div>
        <p class="control">
            <a class="button is-static">
                :
            </a>
        </p>
        <div class="control is-expanded">
            @if ($isNumber)
                <input class="input value is-fullwidth" type="number" step="0.001"
                    placeholder="{{ $placeholderValue }}">
            @else
                <input class="input value is-fullwidth" type="text" placeholder="{{ $placeholderValue }}">
            @endif
        </div>
        <p class="control">
            <a class="button is-danger btn-key-value-remove">
                <span class="icon is-small">
                    <i class="fas fa-times"></i>
                </span>
            </a>
        </p>
    </div>
    <div class="fields">
        @if ($values->isEmpty())
            <div class="field has-addons">
                <div class="control">
                    <input class="input key" type="text" placeholder="{{ $placeholderKey }}">
                </div>
                <p class="control">
                    <a class="button is-static">
                        :
                    </a>
                </p>
                <div class="control is-expanded">
                    @if ($isNumber)
                        <input class="input value is-fullwidth" type="number" step="0.001"
                            placeholder="{{ $placeholderValue }}">
                    @else
                        <input class="input value is-fullwidth" type="text" placeholder="{{ $placeholderValue }}">
                    @endif
                </div>
                <p class="control">
                    <a class="button is-danger btn-key-value-remove">
                        <span class="icon is-small">
                            <i class="fas fa-times"></i>
                        </span>
                    </a>
                </p>
            </div>
        @else
            @foreach ($values as $key => $value)
                <div class="field has-addons">
                    <div class="control">
                        <input class="input key" type="text" placeholder="{{ $placeholderKey }}"
                            value="{{ $key }}">
                    </div>
                    <p class="control">
                        <a class="button is-static">
                            :
                        </a>
                    </p>
                    <div class="control is-expanded">
                        @if ($isNumber)
                            <input class="input value is-fullwidth" type="number" step="0.001"
                                placeholder="{{ $placeholderValue }}" value="{{ $value }}">
                        @else
                            <input class="input value is-fullwidth" type="text" placeholder="{{ $placeholderValue }}"
                                value="{{ $value }}">
                        @endif
                    </div>
                    <p class="control">
                        <a class="button is-danger btn-key-value-remove">
                            <span class="icon is-small">
                                <i class="fas fa-times"></i>
                            </span>
                        </a>
                    </p>
                </div>
            @endforeach
        @endif
    </div>
    @if (isset($hint))
        <p class="help is-grey">{{ $hint }}</p>
    @endif

    <script>
        $(document).ready(function() {
            function bindKeyValue(context) {
                //add new record    
                const add = ($container) => {
                    //clone with events
                    const field = $('.key-value-field', $container).clone(true);
                    field.removeClass('is-hidden');
                    field.removeClass('key-value-field');
                    $('div.fields', $container).append(field);
                    return field;
                }

                //on new
                $('button.btn-key-value', context).on('click', function() {
                    const $container = $(this).parent().parent().parent();
                    const field = add($container);
                    $('input.key', field).focus();
                });

                //on remove
                $('a.btn-key-value-remove', context).on('click', function() {
                    const $field = $(this).parent().parent();
                    const $container = $field.parent().parent();
                    $field.remove();
                    updateFields($container);
                });

                //update field values
                const updateFields = ($container) => {
                    let fields = {};
                    $('div.field', $('div.fields', $container)).each(function() {
                        const key = $('input.key', $(this)).val();
                        const value = $('input.value', $(this)).val();
                        if (key && value) {
                            fields[key] = value;
                        }
                    });
                    if (Object.keys(fields).length > 0) {
                        $('input[type=hidden].field', $container).val(JSON.stringify(fields));
                    } else {
                        $('input[type=hidden].field', $container).val(null);
                    }
                    $('input[type=hidden].field', $container).trigger('change')
                }

                //on key change
                $('input.key', context).on('change', function() {
                    const $container = $(this).parent().parent().parent().parent();
                    updateFields($container);
                });

                //on value change
                $('input.value', context).on('change', function() {
                    const $container = $(this).parent().parent().parent().parent();
                    updateFields($container);
                });

                //on enter press move to value
                $('input.key', context).on('keydown', function(event) {
                    if (event.key === 'Enter') {
                        const $container = $(this).parent().parent();
                        $('input.value', $container).focus();
                        return false;
                    }
                });

                //on enter press add new field and move to next key
                $('input.value', context).on('keydown', function(event) {
                    if (event.key === 'Enter') {
                        const $container = $(this).parent().parent().parent().parent();
                        const field = add($container);
                        $('input.key', field).focus();
                        return false;
                    }
                });
            }

            const context = "div#kv-container-{{ $id }}"
            bindKeyValue(context);
        });
    </script>
</div>
