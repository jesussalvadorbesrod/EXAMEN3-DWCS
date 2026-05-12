<x-layout>
    <h1>Editar producto</h1>
    <x-errors />
    <form method="post" action="{{ route('product.update', $product) }}">
        @method('PATCH')

        <x-product.form :product="$product"/>
    </form>

    <a href="{{ route('product.index') }}">Volver</a>
</x-layout>