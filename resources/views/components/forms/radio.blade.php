<div class="field">
    @if ($label)
        {{ Form::label($id, $label, ['class' => 'label']) }}
    @endif
    <div class="pt-2">
        @foreach ($options as $option)
            @php
            $checked = $value == $option['value'];
            @endphp
            <div class="control mt-2">
                <input type="radio" name="{{ $name }}" id="{{ $option['id'] }}" value="{{ $option['value'] }}"
                class="is-checkradio {{ $classes }}" {{ $checked ? 'checked' : '' }} {{ $attr }}>
                <label for="{{ $option['id'] }}">{{ $option['label'] }}</label>
            </div>
        @endforeach
    </div>
</div>