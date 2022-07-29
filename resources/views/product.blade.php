@extends('layouts.default')

@section('content')
    <section>
        <div class="container text-white pt-5">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="bg-img-fundo">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($product->cover) }}"/>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
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