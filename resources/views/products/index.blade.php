<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Lista de Livros</h1>

<a href="{{ route('products.create') }}"> Novo Livro</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8" style="margin-top: 10px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>preço</th>
            <th>categoria</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->Category->name}}</td>
    
                <td>
                    <a href="{{ route('products.show', $product->id) }}">Ver</a> | 
                    <a href="{{ route('products.edit', $product->id) }}">Editar</a> | 

                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Nenhuma categoria cadastrada.</td>
            </tr>
        @endforelse
    </tbody>
</table>
</body>
</html>