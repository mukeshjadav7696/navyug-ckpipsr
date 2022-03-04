<div class="field {{ $margin }}">
    @if (!$multiple)
        <div class="control">
            @if ($value == true)
                <input type="checkbox" name="{{ $name }}" id="{{ $id }}" checked
                    class="is-checkradio {{ $classes }}" {{ $attributes }}>
            @else
                <input type="checkbox" name="{{ $name }}" id="{{ $id }}"
                    class="is-checkradio {{ $classes }}" {{ $attributes }}>
            @endif
            <label for="{{ $id }}" class="{{ $label ? '' : 'pl-0' }}">
                {{ $label }}
            </label>
        </div>
    @else
        @if ($label)
            {{ Form::label($id, $label, ['class' => 'label']) }}
        @endif
        <div class="pt-2">
            @foreach ($options as $option)
                <div class="control mt-2">
                    <input type="checkbox" name="{{ $name }}" id="{{ $option['id'] }}"
                        value="{{ $option['value'] }}" class="is-checkradio {{ $classes }}"
                        {{ $option['checked'] ? 'checked' : '' }} {{ $attributes }}>
                    <label for="{{ $option['id'] }}">{{ $option['label'] }}</label>
                </div>
            @endforeach
        </div>
    @endif
</div>
