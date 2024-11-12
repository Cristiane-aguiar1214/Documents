<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Nossos Produtos</h1>

    @foreach($produtos as $produto)
        <div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 10px;">
            <h2>{{ $produto->nome }}</h2>
            <p>Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>

            @if($produto->desconto)
                <p style="color: red;">Produto com desconto!</p>
            @endif
        </div>
    @endforeach
</body>
</html>