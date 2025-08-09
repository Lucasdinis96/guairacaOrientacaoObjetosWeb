<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Produtos</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <h1>Listagem de Produtos</h1>
        @foreach ($products as $product)
            <div>
                <p>Código: {{ $product->id }}</p>
                <p>Nome: {{ $product->name }}</p>
                <p>Preço: R${{ $product->price }}</p>
                <p>Descrição: {{ $product->description }}</p>
                <p>Data Inclusão: {{ $product->created_at }}</p>
                <p>Data Atualização: {{ $product->updated_at }}</p>
                <br>
            </div>
        @endforeach
    </body>

</html>