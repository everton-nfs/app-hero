@extends('layouts.default')

@section('content')
    <section>
        <div class="container">
            <div class="grid">
                <div class="w6">
                    <div class="card">
                        <div class="bg-img-fundo">
                            <img src="{{ $product->cover }}"/>
                        </div>
                    </div>
                </div>
                <div class="w6">
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
        </div>
    </section>
@endsection