<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    public function index() {

        return view ('product.index', [
            'products' => Product::paginate(3)
        ]);
    }

    public function create() {
        return view ('product.create');
    }

    public function store(SaveProductRequest $request) {
        $product = Product::create($request->validated());

        return redirect()->route('product.show', $product)
            ->with('status', 'Producto creado'); 
    }

    public function show(Product $product) {
        
        return view ('product.show', compact('product'));
    }

    public function edit (Product $product){

        return view ('product.edit', compact('product'));
    }

    public function update (SaveProductRequest $request, Product $product) {
        $product->update($request->validated());

        return redirect()->route('product.show', $product)
            ->with('status', 'Producto actualizado'); 
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('product.index')
            ->with('status', 'Producto eliminado'); 
    }
}
