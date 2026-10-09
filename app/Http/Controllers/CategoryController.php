<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    // GET /categories
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // GET /categories/create
    public function create()
    {
        return view('categories.create');
    }

    // POST /categories
    public function store(Request $request)
    {

        Category::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Categoria criada com sucesso!');
    }

    // GET /categories/{book}
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    // GET /categories/{category}/edit
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // PUT /categories/{category}
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
          
        ]);

        $category->update($validated);

        return redirect()->route('categories.index')->with('success', 'Categoria atualizada!');
    }

    // DELETE /books/{book}
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Categoria removida!');
    }
}