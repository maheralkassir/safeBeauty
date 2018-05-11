@extends('layouts.masterDash')
@section('dashcontent')

<div class="container">

  <h1 style="color:#FF07B8" class="text-center">{{$service['title']}} By Dr.<string>{{$service->drname}}</string></h1>
  <p class="text-center"><strong>{{$service->hint}}</strong></p>

  <div class="row">

    <div class="col-md-3"></div>
    <div class="col-md-6">
      <img class="profile-img slide" src="{{ URL::to('/') }}/ServiceImages/{{$service->imageurl}}">
    </div>

  </div>

    <div class="mt-3">
      <div style="font-size:30px"><?php echo html_entity_decode(htmlentities($service->content));?></div>
    </div>

    <div class="row mt-2 mb-5">

      <div class="col-md-6 col-sm-12">
        <a href="/dash/services/edit/{{$service->id}}"><button style="min-width:100%;cursor:pointer" class="btn btn-primary">Edit</button></a>
      </div>

      <div class="col-md-6 col-sm-12">
        <a href="/dash/services/delete/{{$service->id}}"><button style="min-width:100%;cursor:pointer" class="btn btn-danger">Delete</button></a>
      </div>

    </div>

</div>
@endsection
