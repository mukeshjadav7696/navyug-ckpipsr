<div class="field">
    @if ($label)
        {{ Form::label($id, $label, ['class' => 'label']) }}    
    @endif
    <div class="control has-icons-left">
        <input type="tel" id="{{ $id }}" name="{{ $name }}" placeholder="XXXXXXXXXX" value="{{ $value }}"
            pattern="[0-9]{10}" class="input">
        <span class="icon is-small is-left">
            <i class="material-icons prefix">smartphone</i>
        </span>
    </div>
    @if (isset($attr['hint']))
    <p class="help is-success">{{ $attr['hint'] }}</p>
    @endif
</div>