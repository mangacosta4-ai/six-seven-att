<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    // GET /products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // GET /products/create
    public function create()
    {
        return view('products.create');
    }

    // POST /products
    public function store(Request $request)
    {

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Produto criado com sucesso!');
    }

    // GET /products/{book}
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // GET /products/{product}/edit
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // PUT /products/{product}
    public function update(Request $request, Product $product)
    {

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Produto atualizado!');
    }

    // DELETE /products/{product}
    public function destroy(Product $product)
    {
        $product->delete();
        $product->tags()->detach();

        return redirect()->route('products.index')->with('success', 'Produto removido!');
    }
}