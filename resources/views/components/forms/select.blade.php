<div class="field">
    @if ($label)
        {{ Form::label($id, $label, ['class' => 'label']) }}    
    @endif
    <div class="control {{ $icon ? 'has-icons-left' : '' }}">
        <div class="select">
            {{ Form::select($name, $options, $value, $attr) }}
        </div>
        @if ($icon)
        <div class="icon is-small is-left">
            <i class="material-icons prefix">unfold_more</i>
        </div>            
        @endif
    </div>
</div>