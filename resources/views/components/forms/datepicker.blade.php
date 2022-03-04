<div class="field">
    @if ($label)
        {{ Form::label($id, $label, ['class' => 'label']) }}
    @endif
    <div class="field">
        <div class="control">
            <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
                value="{{ $value }}" {{ $attributes }}>
        </div>
    </div>
    @if (isset($hint))
        <p class="help is-success">{{ $hint }}</p>
    @endif
</div>
