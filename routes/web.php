<?php

use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Listar categorias
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Form de criação
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Salvar livro
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

// Exibir um livro
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

// Form de edição
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

// Atualizar livro
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

// Excluir livro
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/', function () {
    return view('welcome');
});



// Listar Produtos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Form de criação
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Salvar Produto
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Exibir um Produto
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Form de edição
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Atualizar Produto
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Excluir Produto
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/', function () {
    return view('welcome');
});







// Listar tags
Route::get('/tags', [TagController::class, 'index'])->name('tags.index');

// Form de criação
Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');

// Salvar Produto
Route::post('/tags', [TagController::class, 'store'])->name('tags.store');

// Exibir um Produto
Route::get('/tags/{tag}', [TagController::class, 'show'])->name('tags.show');

// Form de edição
Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');

// Atualizar Produto
Route::put('/tags/{tag}', [TagController::class, 'update'])->name('tags.update');

// Excluir Produto
Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');

Route::get('/', function () {
    return view('welcome');
});