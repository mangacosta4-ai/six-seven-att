<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cadastrar Nova Categoria</h1>

<a href="{{ route('categories.index') }}">← Voltar</a>

<form action="{{ route('categories.store') }}" method="POST" style="margin-top: 15px;">
    @csrf

    <div>
        <label for="name">Título:</label><br>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <br>


    <button type="submit">Salvar Categoria</button>
</form>
</body>
</html>