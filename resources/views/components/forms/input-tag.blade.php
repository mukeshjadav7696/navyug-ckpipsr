<div class="field">
    {{ Form::label($id, $label, ['class' => 'label']) }}
    <div class="control">        
        @if ($isSelect)
        <select name={{ $name }} id="{{ $id }}" data-type="tags" data-placeholder="{{ $placeholder }}" multiple>
            @foreach ($options as $key => $option)
                @if (in_array($key, $values))
                <option value="{{ $key }}" selected>{{ $option }}</option>        
                @else
                <option value="{{ $key }}">{{ $option }}</option>        
                @endif
            @endforeach
		</select>
        @else
            <input type="text" name={{ $name }} id="{{ $id }}" class="input" data-type="tags" placeholder="{{ $placeholder }}" value="{{ $value }}">    
            <p class="help is-grey">Enter value and press enter</p>
        @endif        
    </div>
</div>