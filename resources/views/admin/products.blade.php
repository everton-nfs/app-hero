@extends('layouts.default')

@section('content')
    <section>
        <div class="add">
            <h1>Produtos</h1>
            <button>Adicionar</button>
        </div>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>#</div>
                        <th>Imagem</div>
                        <th>Nome</div>
                        <th>Valor</div>
                        <th>Estoque</div>
                        <th>Ações</div>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td class="img-table">
                            <img src="{{ $product->cover }}">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td class="acoes">
                            <div>
                                <a href="#">Editar</a>
                                <a href="#">Deletar</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
