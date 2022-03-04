<div class="panel has-background-light p-4">
    @php
        $categories = $documents->pluck('category')->unique();
        $departments = $documents->pluck('department')->unique();
    @endphp
    <span class="tag is-primary is-rounded">
        Categories
    </span>
    <div class="my-3">
        @foreach ($categories as $category)
            @php
                $attrs = ['data-value' => $category];
            @endphp
            <x-checkbox name="category" classes="filter" value="on" :label="$category" :margin="false"
                :data-value="$category">
            </x-checkbox>
        @endforeach
    </div>
    <span class="tag is-primary is-rounded">
        Departments
    </span>
    <div class="my-3">
        @foreach ($departments as $department)
            @php
                $attrs = ['data-value' => $department];
            @endphp
            <x-checkbox name="department" classes="filter" value="on" :label="$department" :margin="false"
                :data-value="$department">
            </x-checkbox>
        @endforeach
    </div>
</div>
