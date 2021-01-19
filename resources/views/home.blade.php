@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-capitalize text-center mt-4">prodotti in magazzino</h1>
        <div class="text-capitalize mt-3">
            @foreach ($dresses as $dress)
                <p class="mt-4">{{ $dress->fabric }}</p>
            @endforeach
        </div>

    </div>
@endsection
