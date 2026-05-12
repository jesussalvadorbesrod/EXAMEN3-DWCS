<x-layout>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p><strong>{{ $product->prize}}</strong></p>
    <form method="post" action="{{ route('product.destroy', $product) }}">
        @csrf
        @method('DELETE')

        <button>Borrar</button>
    </form>

    <a href="{{route('product.edit', $product->id)}}">Editar</a> 
    <a href="{{ route('product.index') }}">Volver</a>
</x-layout>