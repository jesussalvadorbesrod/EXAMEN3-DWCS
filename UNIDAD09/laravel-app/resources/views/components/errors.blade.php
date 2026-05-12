@if ($errors->any())
    <ul>
        <h3>Errores</h3>
        @foreach($errors->all() as $e)
            <li>{{ $e }}</li>
        @endforeach
    </ul>
@endif