<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;

class TagController extends Controller
{
    // GET /products
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    // GET /products/create
    public function create()
    {
        return view('tags.create');
    }

    // POST /products
    public function store(Request $request)
    {

        Tag::create($request->all());

        return redirect()->route('tags.index')->with('success', 'Tag criada com sucesso!');
    }

    // GET /products/{book}
    public function show(Tag $tag)
    {
        return view('tags.show', compact('tag'));
    }

    // GET /products/{product}/edit
    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    // PUT /products/{product}
    public function update(Request $request, Tag $tag)
    {

        $tag->update($request->all());

        return redirect()->route('tags.index')->with('success', 'Tag atualizada!');
    }

    // DELETE /products/{product}
    public function destroy(Tag $tag)
    {
        $tag->delete();
        $tag->products()->detach();

        return redirect()->route('tags.index')->with('success', 'Tag removida!');
    }
}
