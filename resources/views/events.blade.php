@extends('layouts.app')

@section('content')

    <div class="row">

        @foreach($events as $event)
            <div class="col-3">
                <div class="card" style="margin-bottom: 20px;">
                    <img class="card-img-top img-fluid" src="{{ asset('storage/images/' . $event->image) }}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="height: 50px;">{{ $event->name }}</h5>
                        <p class="card-text">{{ str_limit($event->description, 100) }}</p>
                        <p class="card-text">
                            <small class="text-muted">Acontecerá em {{ $event->date->format('d/m/Y - h:i') }}</small>
                        </p>
                        <a href="{{ route('events.show', $event->id) }}" class="btn float-right">Ver evento</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection