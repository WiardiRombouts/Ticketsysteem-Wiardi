@extends('layouts.base')

@section('content')
<h1>Uw Tickets</h1>
@foreach ($tickets as $ticket)
    @foreach($events as $event)
        @if (Auth::user()->id == $ticket->user_id && $ticket->event_id == $event->id) 
        <div class="row row-cols-4">
            <div class="card m-10" style="width: 18rem;">
                <div class="qrcode m-10">
                    {!! QrCode::size(175)->generate($ticket->qr_hash) !!}
                </div>
                <img src="{{$event->photo}}" class="card-img-top" alt="event picture">
                <div class="card-body">
                <h5 class="card-title">{{$event->name}}</h5>
                <p class="card-text">{{$event->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$event->event_start}}</li>
                <li class="list-group-item">{{$event->event_end}}</li>
                <li class="list-group-item">{{$event->available_tickets}}</li>
                <li class="list-group-item">{{$event->location}}</li>
                <li class="list-group-item">{{$event->price}}</li>
                </ul>
                <div class="card-body">
                <a href="{{ Route('ticket') }}" class="card-link">Koop Ticket</a>
                </div>
            </div>
        
        </div>
        @endif
    @endforeach
@endforeach

@endsection