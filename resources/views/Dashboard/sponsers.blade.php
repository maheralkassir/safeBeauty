<?php use Carbon\Carbon; ?>

@extends('layouts.masterDash')
@section('dashcontent')
  @if (isset($sponsers[0]))
<?php $cnt=1?>
<h2 class=" mt-3">Current Sponsers</h2>

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>URL</th>
      <th>Created From</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($sponsers as $sponser)
    <tr>
      <th scope="row">{{$cnt++}}</th>
      <td>{{$sponser->name}}</td>
      <td>{{$sponser->sponurl}}</td>
      <td>{{ (new Carbon($sponser->created_at ))->diffForHumans() }}</td>
      <td>
        <a href="/dash/sponsers/view/{{$sponser->id}}"><button style="cursor:pointer" class="btn btn-success">See More</button></a>
        <a href="/dash/sponsers/edit/{{$sponser->id}}"><button class="btn btn-primary" style="cursor:pointer">Edit</button></a>
        <a href="/dash/sponsers/delete/{{$sponser->id}}"><button class="btn btn-danger" style="cursor:pointer">Delete</button></a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endif

<h2 class=" mt-3">Add Sponser</h2>
<div class="form-group">

  <form method="POST" action="/dash/sponsers" enctype="multipart/form-data">
    {{csrf_field()}}


    <div class="form-group">
      <label for="name" class="col-md-4 control-label">Name</label>

      <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" required maxlength="20" required placeholder="20 Character At Most">
      </div>
    </div>

    <div class="form-group">
      <label for="sponurl" class="col-md-4 control-label">Sponser Website URL</label>

      <div class="col-md-6">
        <input id="sponurl" type="url" class="form-control" name="sponurl" required>
      </div>
    </div>

    <div class="form-group{{ $errors->has('imageurl') ? ' has-error' : '' }}">
      <label for="imageurl" class="col-md-4 control-label">Sponser Logo</label>

      <div class="col-md-3 col-xs-6">
        <input id="imageurl" type="file" class="form-control" name="imageurl" value="{{ old('imageurl') }}" required autofocus> @if ($errors->has('imageurl'))
        <span class="help-block">
                  <strong>{{ $errors->first('imageurl') }}</strong>
              </span> @endif
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4 col-md-offset-4">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">
              Add
          </button>
      </div>
    </div>

  </form>
</div>
@endsection
