<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Detalhes do Produto</h1>

<p><strong>ID:</strong> {{ $product->id }}</p>
<p><strong>Título:</strong> {{ $product->title }}</p>

<a href="{{ route('products.index') }}">← Voltar para a lista</a> | 
<a href="{{ route('products.edit', $product->id) }}">Editar este produto</a>
</body>
</html>