<div>
    <div class="field">
        @if ($label)
            <label for="{{ $id }}" class="label">{{ $label }}</label>
        @endif
        <div class="control">
            <textarea name="{{ $name }}" id="{{ $id }}" class="{{ $class }}"
                placeholder="{{ $placeholder }}" {{ $attributes }}>{{ $value }}</textarea>
        </div>
    </div>
    @if (isset($hint))
        <p class="help is-grey">{{ $hint }}</p>
    @endif
</div>
