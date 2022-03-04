<div class="field">
    @if ($label)
        {{ Form::label($id, $label, ['class' => 'label']) }}    
    @endif
    <div class="control has-icons-right">
        {{ Form::number($name, $value, $attr) }}
        <span class="icon is-small is-right">
            <i class="fas fa-rupee-sign"></i>
        </span>
    </div>
    @if (isset($attr['hint']))
    <p class="help is-success">{{ $attr['hint'] }}</p>
    @endif
</div>