@extends('layouts.masterDash')
@section('dashcontent')

<div class="container">

  <h1 style="color:#FF07B8" class="text-center">{{$sponser['name']}}</h1>
  <p class="text-center"><a href="{{$sponser->sponurl}}"><strong>{{$sponser->sponurl}}</strong></a></p>

  <div class="row">

    <div class="col-md-3"></div>
    <div class="col-md-6">
      <img class="profile-img slide" src="{{ URL::to('/') }}/SponsersLogos/{{$sponser->imageurl}}">
    </div>

  </div>


  <div class="row mt-2 mb-5">

    <div class="col-md-6 col-sm-12">
      <a href="/dash/sponsers/edit/{{$sponser->id}}"><button style="min-width:100%;cursor:pointer" class="btn btn-primary">Edit</button></a>
    </div>

    <div class="col-md-6 col-sm-12">
      <a href="/dash/sponsers/delete/{{$sponser->id}}"><button style="min-width:100%;cursor:pointer" class="btn btn-danger">Delete</button></a>
    </div>

  </div>

</div>
@endsection
