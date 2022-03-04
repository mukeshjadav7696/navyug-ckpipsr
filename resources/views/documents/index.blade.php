<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Documents" />

        <x-page-content :padding="false">
            <div class="columns">
                <div class="column is-3">
                    @include('documents.filter')
                </div>
                <div class="column">
                    @include('documents.list')
                </div>
            </div>

            <script type="module">
                $(document).ready(function() {

                    //get checked
                    const getChecked = function(filter) {
                        let list = []
                        $(`input[name=${filter}]:checked`).each(function() {
                            const value = $(this).data('value')
                            list.push(value)
                        })
                        return list
                    }

                    //render list
                    const render = function(categories, departments) {
                        const $context = $('#document-list')
                        $('div.list-item', $context).each(function() {
                            const $item = $(this);
                            const category = $item.data('category')
                            const department = $item.data('department')
                            if (departments.includes(department) && categories.includes(category)) {
                                $item.removeClass('is-hidden')
                            } else {
                                $item.addClass('is-hidden')
                            }
                        })
                    }

                    //update list on filter change
                    $('input.filter').on('change', function() {
                        const categories = getChecked('category')
                        const departments = getChecked('department')
                        render(categories, departments)
                    })
                });
            </script>
        </x-page-content>
    </x-slot>

</x-app-layout>
