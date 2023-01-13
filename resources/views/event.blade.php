
@extends('layouts.base')

@section('content')
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card row">
    
    <div class="card-body">
      <form class="row g-3" name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route ('createEvent')}}" enctype="multipart/form-data">
       @csrf
        <div class="form-group col-md-6">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control" required="">
        </div>
        <div class="form-group col-md-6">
          <label for="image">Foto</label>
          <input type="file" id="image" name="image" class="form-control" accept="image/png, img/gif, image/jpeg, image/jpg" required="">
        </div>
        <div class="form-group col-md-5">
          <label for="event_start">Begin datum</label>
          <input type="date" id="event_start" name="event_start" class="form-control" required="">
        </div>
        <div class="form-group col-md-5">
          <label for="event_end">Eind datum</label>
          <input type="date" id="event_end" name="event_end" class="form-control" required="">
        </div>
        <div class="form-group col-md-2">
          <label for="available_tickets">Maximale Tickets</label>
          <input type="number" id="available_tickets" name="available_tickets" class="form-control" required="">
        </div>
        <div class="form-group col-md-4">
          <label for="location">Plaats</label>
          <input type="text" id="location" name="location" class="form-control" required="">
        </div>
        <div class="form-group col-md-4">
          <label for="price">prijs</label>
          <input type="number" id="price" name="price" class="form-control" required="">
        </div>
        <div class="form-group col-md-4">
          <label for="preorder_price">Preorder prijs</label>
          <input type="number" id="preorder_price" name="preorder_price" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="description">Beschrijving</label>
          <textarea id="description" name="description" class="form-control" rows="4" placeholder="Beschrijving/uitleg van evenemement"></textarea>
        </div>
        
        <button type="submit" class="btn btn-warning">Submit</button>
      </form>
    </div>
  </div>
</div>  

@endsection