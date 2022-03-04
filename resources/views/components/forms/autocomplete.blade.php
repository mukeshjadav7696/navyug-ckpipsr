<div class="field">
    @if ($label)
        {{ Form::label($id, $label, ['class' => 'label']) }}    
    @endif
    <div class="control">        
        <select name={{ $name }} id="{{ $id }}" data-clear-selection-on-typing="true" data-type="tags" data-placeholder="{{ $placeholder }}" data-case-sensitive="false">
            <option value=""></option>
            @foreach ($options as $key => $option)
                @if ($key == $value)
                <option value="{{ $key }}" selected>{{ $option }}</option>        
                @else
                <option value="{{ $key }}">{{ $option }}</option>        
                @endif
            @endforeach
		</select>  
    </div>
</div>