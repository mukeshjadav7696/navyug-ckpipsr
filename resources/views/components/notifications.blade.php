<div id='notification-container'>
    <!-- Render errors if any -->
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script type="module">
                showMessage('{{ $error }}', 'error');
            </script>
        @endforeach
    @endif
    @if (\Session::has('success'))
        <script type="module">
            showMessage("{{ \Session::get('success') }}");
        </script>
    @endif
    @if (\Session::has('warning'))
        <script type="module">
            showMessage("{{ \Session::get('warning') }}", 'warning');
        </script>
    @endif
</div>
