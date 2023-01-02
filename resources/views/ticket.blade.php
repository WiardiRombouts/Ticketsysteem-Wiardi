@extends('layouts.base')

@section('content')
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route ('createTicket')}}">
       @csrf
        <div class="form-group m-2">
          <label for="event">Evenement</label>
          <select name="event" id="event" required="">
            @foreach ($events as $event)
              {{-- <input type="hidden" value="{{$event->available_tickets}}" name="available_tickets"> --}}
              <option value="{{$event->id}}">{{$event->name}}</option>
            @endforeach
          </select>
            
            
        </div>
       
        
        {{-- <h3><a class ="bi bi-pencil-square" id="change" href={{route('edit_event', $event->id)}}>change event</a></h3> --}}
        
        <button type="submit" class="btn btn-warning m-2">Submit</button>
      </form>
    </div>
  </div>
</div>  

@endsection