<x-layout>
    <h1>Productos</h1>
    <a href="{{ route('product.create') }}">Crear producto</a>
    @foreach ($products as $p) 
        <h2><a href="{{ route('product.show', $p->id) }}">{{ $p->name }}</a></h2>
        <p>{{ $p->description }}</p>
        <p><strong>{{ $p->prize }}</strong></p>
    @endforeach

    {{ $products->links() }}
</x-layout>