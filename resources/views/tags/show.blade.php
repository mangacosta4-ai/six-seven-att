<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Detalhes da Categoria</h1>

<p><strong>ID:</strong> {{ $tag->id }}</p>
<p><strong>Título:</strong> {{ $tag->title }}</p>

<a href="{{ route('tags.index') }}">← Voltar para a lista</a> | 
<a href="{{ route('tags.edit', $tag->id) }}">Editar esta tag</a>
</body>
</html>