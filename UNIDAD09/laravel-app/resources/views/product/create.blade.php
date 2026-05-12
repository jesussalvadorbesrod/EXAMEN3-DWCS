<x-layout>
    <h1>Crear producto</h1>
    <x-errors />
    <form action="{{ route('product.store') }}" method='post'>
        <x-product.form />
    </form>

    <a href="{{ route('product.index') }}">Volver</a>
</x-layout>