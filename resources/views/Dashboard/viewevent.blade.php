@extends('layouts.masterDash')
@section('dashcontent')

<div class="container">

  <h1 style="color:#FF07B8" class="text-center">{{$event->name}}</h1>
  <p class="text-center"><strong>Category Name : {{$event->catname}}</strong></p>
  <div class="row">

    <div class="col-md-3"></div>
    <div class="col-md-6">
      <img class="profile-img slide" src="{{ URL::to('/') }}/events/{{$event->url}}">
    </div>

  </div>


    <div class="row mt-2 mb-5">

      <div class="col-md-12 col-sm-12">
        <a href="/dash/events/delete/{{$event->id}}"><button style="min-width:100%;cursor:pointer" class="btn btn-danger">Delete</button></a>
      </div>

    </div>

</div>
@endsection
