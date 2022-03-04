<div class="field">
    @if ($label)
        {{ Form::label($id, $label, ['class' => 'label']) }}
    @endif
    <div class="control has-icons-left">
        @php
            $attr = $attributes
                ->merge([
                    'id' => $id,
                    'class' => 'input',
                ])
                ->getAttributes();
        @endphp
        {{ Form::text($name, $value, $attr) }}
        <span class="icon is-small is-left">
            <i class="material-icons prefix">short_text</i>
        </span>
    </div>
    @if (isset($attr['hint']))
        <p class="help is-success">{{ $attr['hint'] }}</p>
    @endif
</div>
