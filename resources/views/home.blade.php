@extends('layouts.default')
@section('content')
    <section>
        <div class="container">
            <div class="grid">
                @foreach ($products as $product)
                <div class="w4">
                    <div class="card" style="padding-bottom: 1rem;">
                        <div class="bg-img-fundo">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($product->cover) }}"/>
                        </div>
                        <p>{{ $product->name }}</p>
                        <p><span>R$ </span>{{ $product->price }}</p>
                        <a href="{{ route('product', $product->slug) }}">Ver mais</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection