@extends('layouts.base')

@section('content')
    <h1>Events</h1>
    <table class="table">
        <thead>
            
        </thead>
        <tbody>
            {{-- <a href="{{ Route('ticket') }}" class="btn btn-warning">Ga naar ticket pagina</a> --}}

            <div class="row row-cols-4">
                @foreach ($events as $event)
                <div class="card m-10" style="width: 18rem;">
                    <img src="{{$event->photo}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$event->name}}</h5>
                        <p class="card-text">Beschrijving: {{$event->description}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Startdatum: {{$event->event_start}}</li>
                        <li class="list-group-item">EindDatum: {{$event->event_end}}</li>
                        <li class="list-group-item">Beschikbare Tickets: {{$event->available_tickets}}</li>
                        <li class="list-group-item">Locatie: {{$event->location}}</li>
                        <li class="list-group-item">Prijs: {{$event->price}}</li>
                    </ul>
                    <div class="card-body">
                        @if($event->available_tickets > 0)
                            <form action="{{ Route('createTicket', $event->id) }}" method="POST">
                                @csrf
                                <input type="hidden" id="event" name="event" value="{{$event->id}}">
                                <button type="submit" class="btn btn-warning">Koop 1 ticket</button>

                            </form>
                        @else
                        <form action="" method="POST">
                            @csrf
                            {{-- <input type="hidden" id="event" name="event" value="{{$event->id}}"> --}}
                            <button type="submit" class="btn" disabled="">Geen tickets beschikbaar!</button>

                        </form>
                        @endif
                    </div>
                </div>
            @endforeach
            </div>


            

        </tbody>
    </table>



@endsection
