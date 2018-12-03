@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-12">
            <form action="{{ route('events.store', $event->id) }}" method="post">
                @csrf
                <img class="card-img-top img-fluid" src="{{ asset('storage/images/' . $event->image) }}"
                     alt="Card image cap" style="height: 100px">
                <h1>Finalizar compra</h1>
                <h2>{{ $event->name }}</h2>
                <p>{{ $event->description }}</p>
                <p>
                <h2 class="text-dark">Acontecerá em {{ $event->date->format('d/m/Y - h:i') }}</h2>
                </p>
                <p>
                    Valor de cada ingresso: {{ number_format($event->price, 2, ',', '.') }}
                </p>
                <p>
                    Quantidade:
                    <input type="number" name="amount" class="form-control col-1">
                </p>
                <button type="submit" class="btn btn-primary">
                    Finalizar
                </button>

            </form>
        </div>

    </div>

@endsection