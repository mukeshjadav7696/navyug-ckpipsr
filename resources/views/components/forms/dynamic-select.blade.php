<div class="field">
    @if ($label)
        {{ Form::label($id, $label, ['class' => 'label']) }}
    @endif
    <div class="control has-icons-left">
        <div class="select">
            {{ Form::select($name, $options, $value, $attr) }}
        </div>
        <div class="icon is-small is-left">
            <i class="material-icons prefix">unfold_more</i>
        </div>
    </div>
</div>
<script type="module">
    $(document).ready(function() {
        const $parent = $('#{{ $id }}');
        const $child = $('#{{ $child }}');

        $parent.change(function() {
            const parentId = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name=_token]').val()
                }
            });

            //clear all options except first
            $child.find('option:not(:first)').remove();

            $.ajax({
                url: "{{ route($route) }}",
                type: "GET",
                data: {
                    parent_id: parentId
                },
                dataType: "JSON",
                success: function(response) {
                    const children = response.children;
                    $.each(children, (key, value) => {
                        $child.append($('<option></option>').attr('value', key)
                            .text(value));
                    });
                    $child.focus();
                },
                error: function(jq, status, error) {
                    CustomComponents.showAjaxErrors(jq);
                }
            });
        });
    });
</script>
