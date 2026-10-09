<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar Categoria</h1>

<a href="{{ route('categories.index') }}">← Voltar</a>

<form action="{{ route('categories.update', $category->id) }}" method="POST" style="margin-top: 15px;">
    @csrf
    @method('PUT') {{-- Obrigatório para atualizar --}}

    <div>
        <label for="title">Título:</label><br>
        <input type="text" name="title" id="title" value="{{ old('title', $category->title) }}">
        @error('title') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <br>

    <br>

    <button type="submit">Atualizar Categoria</button>
</form>
</body>
</html>