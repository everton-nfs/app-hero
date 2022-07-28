@extends('layouts.default')
@section('content')
    <section>
        <div class="container">
            <h3 style="margin-top: unset;">Editar produto</h3>
            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.product.update', $product->id) }}"
                class="form">
                @csrf
                @method('put')
                <label for="name">Nome do produto:</label>
                <input value="{{ $product->name }}" type="text" id="name" name="name"><br>

                <label for="price">Preço:</label>
                <input value="{{ $product->price }}" type="text" id="price" name="price"><br>

                <label for="stock">Estoque:</label>
                <input value="{{ $product->stock }}" type="text" id="stock" name="stock"><br>

                <label for="cover">Imagem de capa:</label><br>
                <input type="file" id="cover" name="cover"><br>

                @if ($product->cover)
                    <img style="width: 5rem;" src="{{ \Illuminate\Support\Facades\Storage::url($product->cover) }}"
                        alt=""><br>
                    <a href="{{ route('admin.product.destroyImage', $product->id) }}"><button>Deletar imagem</button></a><br><br>
                @endif

                <label for="description" class="desc">Descrição</label><br>
                <textarea id="description" name="description" style="width: 20rem;height: 5rem;">{{ $product->description }}</textarea><br><br>

                <button type="submit">Salvar</button>
            </form>
        </div>
    </section>
@endsection
