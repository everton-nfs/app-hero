@extends('layouts.default')

@section('content')
    <section>
        <div class="flex-grid-thirds product">
            <div class="col"> 
                <div class="card">
                    <div class="bg-img-fundo">
                        <img src="{{ asset('img/batman.png') }}"/>
                    </div>
                </div>
            </div>
            <div class="col"> 
                <div class="description">
                    <h1>Batman</h1>
                    <p>Descrição, descrição, descrição, descrição, descrição, descrição, descrição, descrição, 
                        descrição, descrição, descrição, descrição, descrição, descrição, descrição, descrição,
                        descrição, descrição, descrição, descrição, descrição, descrição, descrição, descrição,
                        descrição, descrição, descrição, descrição, descrição, descrição, descrição, descrição.
                    </p>
                    <span>Em estoque</span>
                    <hr/>
                    <h2><span>R$ </span>250</h2>
                </div>
            </div>
        </div>
    </section>
@endsection