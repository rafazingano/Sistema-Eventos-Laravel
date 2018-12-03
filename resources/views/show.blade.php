@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <form action="{{ route('events.purchased', $event->id) }}" method="post">
                @csrf
                <img class="card-img-top img-fluid" src="{{ asset('storage/images/' . $event->image) }}" alt="Card image cap">
                <h2>{{ $event->name }}</h2>
                <p>{{ $event->description }}</p>
                <p>
                <h2 class="text-dark">Acontecerá em {{ $event->date->format('d/m/Y - h:i') }}</h2>
                </p>
                <p>
                    Valor de cada ingresso: {{ number_format($event->price, 2, ',', '.') }}
                </p>
                <button type="submit" class="btn btn-primary">
                    Comprar
                </button>
            </form>
        </div>
    </div>

@endsection