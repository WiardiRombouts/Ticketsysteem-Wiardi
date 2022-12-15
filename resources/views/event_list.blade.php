@extends('layouts.base')

@section('content')
    <h1>Events</h1>
    <table class="table">
        <thead>
            
        </thead>
        <tbody>

            <div class="row row-cols-4">
                @foreach ($events as $event)
                <div class="card m-10" style="width: 18rem;">
                    <img src="{{$event->photo}}" class="card-img-top" alt="...">
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
            @endforeach
            </div>


            

        </tbody>
    </table>



@endsection
