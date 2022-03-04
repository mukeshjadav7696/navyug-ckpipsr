<div class="field">
    @if ($label)
        {{ Form::label($id, $label, ['class' => 'label']) }}    
    @endif
    <div class="control has-icons-left">
        {{ Form::email($name, $value, $attr) }}
        <span class="icon is-small is-left">
            <i class="material-icons prefix">alternate_email</i>
        </span>
    </div>
    @if (isset($attr['hint']))
    <p class="help is-success">{{ $attr['hint'] }}</p>
    @endif
</div>