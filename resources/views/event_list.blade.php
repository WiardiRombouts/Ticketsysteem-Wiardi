@extends('layouts.base')

@section('content')
    <h1>Events</h1>
    <table class="table">
        <thead>
            
        </thead>
        <tbody>
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-md-5">
                        <tr>
                            
                            
                            <td>
                                <H1>{{$event->name}}</H1>
                                <img src="{{$event->photo}}" alt="foto">
                                <h2>{{$event->event_start}}</h2>
                                <h2>{{$event->event_end}}</h2>
                                <h2>{{$event->available_tickets}}</h2>
                                <h2>{{$event->location}}</h2>
                                <h2>{{$event->price}}</h2>
                                <h2>{{$event->description}}</h2>

                                <a class = "bi bi-plus" href="/template" id="button2">ticket</a>

                            </td>
                            
                        
                        </tr>
                    </div>
                    
                @endforeach
            </div>

        </tbody>
    </table>



@endsection
