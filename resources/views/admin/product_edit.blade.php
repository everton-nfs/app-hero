@extends('layouts.default')
@section('content')
    <section>
        <h1>Editar produto</h1>
        <form action="#" method="#" class="form">
            <label for="nome_produto">Nome do produto:</label>
            <input type="text" id="nome_produto" nome="nome_produto"><br>

            <label for="preco">Preço:</label>
            <input type="text" id="preco" nome="preco"><br>

            <label for="estoque">Estoque:</label>
            <input type="text" id="estoque" nome="estoque"><br>

            <label for="img_capa">Imagem de capa:</label><br>
            <input type="file" id="img_capa" nome="img_capa"><br>
            
            <label for="descricao" class="desc">Descrição</label><br>
            <textarea id="descricao" name="descricao"></textarea><br><br>

            <button type="submit">Adicionar</button>
        </form> 
    </section>
@endsection