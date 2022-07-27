@extends('layouts.default')

@section('content')
    <section>
        <div class="o-flex-grid w-100">
            <div class="o-flex-grid--item">
                <div class="card">
                    <div class="bg-img-fundo">
                        <img src="{{ $product->cover }}"/>
                    </div>
                </div>
            </div>
            <div class="o-flex-grid--item">
                <div class="description">
                    <h1>{{ $product->name }}</h1>
                    <p>{{ $product->description }}</p>
                    @if ($product->stock)
                        <span>Em estoque</span>
                    @else
                        <span>Fora de estoque</span>
                    @endif
                    <hr/>
                    <h2>R$ {{ $product->price }}</h2>
                </div>
            </div>

        </div>
    </section>
@endsection