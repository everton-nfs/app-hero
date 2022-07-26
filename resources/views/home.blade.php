@extends('layouts.default')
@section('content')
    <section>
        <div class="flex-grid-thirds">
            <div class="col">
                <div class="card">
                    <div class="bg-img-fundo">
                        <img src="{{ asset('img/batman.png') }}"/>
                    </div>
                    <p>Batman</p>
                    <p>R$ <span>250</span></p>
                    <a href="#">Ver mais</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="bg-img-fundo">
                        <img src="{{ asset('img/homem-de-ferro.png') }}"/>
                    </div>
                    <p>Batman</p>
                    <p>R$ <span>250</span></p>
                    <a href="#">Ver mais</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="bg-img-fundo">
                        <img src="{{ asset('img/wolverine.png') }}"/>
                    </div>
                    <p>Batman</p>
                    <p>R$ <span>250</span></p>
                    <a href="#">Ver mais</a>
                </div>
            </div>
        </div> 
    </section>
@endsection