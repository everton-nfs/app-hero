@extends('layouts.default')

@section('content')
    <section>
        <div class="add">
            <h1>Produtos</h1>
            <button>Adicionar</button>
        </div>
        <div class="main-container">
            <div class="table-container">
                <div class="table-row heading">
                    <div class="row-item">#</div>
                    <div class="row-item">Imagem</div>
                    <div class="row-item">Nome</div>
                    <div class="row-item">Valor</div>
                    <div class="row-item">Estoque</div>
                    <div class="row-item">Ações</div>
                </div>
                <div class="table-row">
                    <div class="row-item">1</div>
                    <div class="row-item">
                        <img class="img-products" src="{{ asset('img/batman.png') }}" />
                    </div>
                    <div class="row-item">Produto 1</div>
                    <div class="row-item">R$ 250</div>
                    <div class="row-item">10</div>
                    <div class="row-item acoes">
                        <a href="#">Editar</a>
                        <a href="#">Deletar</a>
                    </div>
                </div>
                <div class="table-row">
                    <div class="row-item">2</div>
                    <div class="row-item">
                        <img class="img-products" src="{{ asset('img/homem-de-ferro.png') }}" />
                    </div>
                    <div class="row-item">Produto 2</div>
                    <div class="row-item">R$ 450</div>
                    <div class="row-item">06</div>
                    <div class="row-item acoes">
                        <a href="#">Editar</a>
                        <a href="#">Deletar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
