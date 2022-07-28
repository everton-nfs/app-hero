@extends('layouts.default')
@section('content')
    <section>
        <h1>Adicionar produto</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.product.store') }}" class="form">
            @csrf
            <label for="name">Nome do produto:</label>
            <input type="text" id="name" name="name" value="{{ old('name')}}"><br>
            @error('name')
                <span style="color: red">
                    {{ $message }}
                </span><br><br>
            @enderror

            <label for="price">Preço:</label>
            <input type="text" id="price" name="price" value="{{ old('price')}}"><br>
            @error('price')
                <span style="color: red">
                    {{ $message }}
                </span><br><br>
            @enderror

            <label for="stock">Estoque:</label>
            <input type="text" id="stock" name="stock" value="{{ old('stock')}}"><br>
            @error('stock')
                <span style="color: red">
                    {{ $message }}
                </span><br><br>
            @enderror

            <label for="cover">Imagem de capa:</label><br>
            <input type="file" id="cover" name="cover"><br>
            @error('cover')
                <span style="color: red">
                    {{ $message }}
                </span><br><br>
            @enderror
            
            <label for="description" class="desc">Descrição</label><br>
            <textarea id="description" name="description">{{ old('description')}}</textarea><br><br>
            @error('description')
                <span style="color: red">
                    {{ $message }}
                </span><br><br>
            @enderror

            <button type="submit">Adicionar</button>
        </form> 
    </section>
@endsection