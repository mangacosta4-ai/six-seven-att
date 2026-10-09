<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar Categoria</h1>

<a href="{{ route('tags.index') }}">← Voltar</a>

<form action="{{ route('tags.update', $tag->id) }}" method="POST" style="margin-top: 15px;">
    @csrf
    @method('PUT') {{-- Obrigatório para atualizar --}}

    <div>
        <label for="title">Título:</label><br>
        <input type="text" name="name" id="name" value="{{ old('name', $tag->name) }}">
        @error('title') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <br>

    <br>

    <button type="submit">Atualizar Categoria</button>
</form>
</body>
</html>