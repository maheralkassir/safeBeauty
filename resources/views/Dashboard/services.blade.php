<?php use Carbon\Carbon; ?>

@extends('layouts.masterDash')
@section('dashcontent')
  @if (isset($services[0]))
<?php $cnt=1?>
<h2 class=" mt-3">Current Service</h2>

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Doctor Name</th>
      <th>Hint</th>
      <th>Views</th>
      <th>Likes</th>
      <th>Created From</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($services as $service)
    <tr>
      <th scope="row">{{$cnt++}}</th>
      <td>{{$service->title}}</td>
      <td>{{$service->drname}}</td>
      <td>{{$service->hint}}</td>
      <td>{{$service->seenTimes}}</td>
      <td>{{$service->likes}}</td>
      <td>{{ (new Carbon($service->created_at ))->diffForHumans() }}</td>
      <td>
        <a href="/dash/services/view/{{$service->id}}"><button style="cursor:pointer" class="btn btn-success">See More</button></a>
        <a href="/dash/services/edit/{{$service->id}}"><button class="btn btn-primary" style="cursor:pointer">Edit</button></a>
        <a href="/dash/services/delete/{{$service->id}}"><button class="btn btn-danger" style="cursor:pointer">Delete</button></a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endif

<h2 class=" mt-3">New Service</h2>
<div class="form-group">

  <form method="POST" action="/dash/services" enctype="multipart/form-data">
    {{csrf_field()}}


    <div class="form-group">
      <label for="title" class="col-md-4 control-label">Title</label>

      <div class="col-md-6">
        <input id="title" type="text" class="form-control" name="title" required maxlength="20" required placeholder="20 Character At Most">
      </div>
    </div>

    <div class="form-group">
      <label for="drname" class="col-md-4 control-label">Doctor Name</label>

      <div class="col-md-6">
        <input id="drname" type="text" class="form-control" name="drname" required maxlength="20" required placeholder="20 Character At Most">
      </div>
    </div>

    <div class="form-group">
      <label for="hint" class="col-md-4 control-label">Hint</label>

      <div class="col-md-6">
        <input id="hint" type="text" class="form-control" name="hint" maxlength="60" required placeholder="60 Character At Most">
      </div>
    </div>

    <div class="form-group">
      <label for="content" class="col-md-4 control-label">Description</label>

      <div class="col-md-8">
        <textarea class="form-control" id="content" name="content"></textarea>
      </div>
    </div>

    <div class="form-group{{ $errors->has('imageurl') ? ' has-error' : '' }}">
      <label for="imageurl" class="col-md-4 control-label">Service Image</label>

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
@endsection @section('js')

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('content');
</script>

@endsection
