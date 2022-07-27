@extends('layouts.default')
@section('content')
    <section>
        <div class="o-flex-grid w-100">
            @foreach ($products as $product)
            <div class="o-flex-grid--item">
                <div class="card">
                    <div class="bg-img-fundo">
                        <img src="{{ $product->cover }}"/>
                    </div>
                    <p>{{ $product->name }}</p>
                    <p><span>R$ </span>{{ $product->price }}</p>
                    <a href="{{ route('product', $product->id) }}">Ver mais</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection