@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-capitalize text-center mt-4">prodotti in magazzino</h1>
        <div class="text-capitalize mt-3">
            @foreach ($dresses as $dress)
                <div class="mt-4">
                    <h4 class="text-uppercase">prodotto {{ $dress->id}}</h4>
                    <p>tessuto : {{ $dress->fabric }}</p>
                    <p>taglia : {{ $dress->size }}</p>
                    <p>colore : {{ $dress->color }}</p>
                    <p>prezzo : {{ $dress->price }} €</p>

                </div>
            @endforeach
        </div>

    </div>
@endsection
