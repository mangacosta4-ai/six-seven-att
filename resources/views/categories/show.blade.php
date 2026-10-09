<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Detalhes da Categoria</h1>

<p><strong>ID:</strong> {{ $category->id }}</p>
<p><strong>Título:</strong> {{ $category->title }}</p>

<a href="{{ route('categories.index') }}">← Voltar para a lista</a> | 
<a href="{{ route('categories.edit', $category->id) }}">Editar esta categoria</a>
</body>
</html>