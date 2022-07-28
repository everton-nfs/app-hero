@extends('layouts.default')

@section('content')
    <section>
        <div class="container">
            <h3 style="margin-top: unset;">Cadastrar produto</h3>
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
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($product->cover) }}">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>R$ {{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td class="acoes">
                            <div>
                                <a href="{{ route('admin.product.edit', $product->id)}}">Editar</a>
                                <a href="{{ route('admin.product.destroy', $product->id)}}">Deletar</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
