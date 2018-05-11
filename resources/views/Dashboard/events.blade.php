<?php use Carbon\Carbon; ?>

@extends('layouts.masterDash')
@section('dashcontent')
  @if (isset($events[0]))
<?php $cnt=1?>
<h2 class=" mt-3">Current Events</h2>

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Event Name</th>
      <th>Category Name</th>
      <th>Created From</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($events as $event)
    <tr>
      <th scope="row">{{$cnt++}}</th>
      <td>{{$event->name}}</td>
      <td>{{$event->catname}}</td>
      <td>{{ (new Carbon($event->created_at ))->diffForHumans() }}</td>
      <td>
        <a href="/dash/events/view/{{$event->id}}"><button style="cursor:pointer" class="btn btn-success">See More</button></a>
        <a href="/dash/events/delete/{{$event->id}}"><button class="btn btn-danger" style="cursor:pointer">Delete</button></a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endif

<h2 class=" mt-3">New Event</h2>
<div class="form-group">

  <form method="POST" action="/dash/events" enctype="multipart/form-data">
    {{csrf_field()}}


    <div class="form-group">
      <label for="name" class="col-md-4 control-label">Event Name</label>

      <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" required maxlength="20" required placeholder="20 Character At Most">
      </div>
    </div>

    <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
      <label for="url" class="col-md-4 control-label">Event Image</label>

      <div class="col-md-3 col-xs-6">
        <input id="url" type="file" class="form-control" name="url" value="{{ old('url') }}" required autofocus> @if ($errors->has('url'))
        <span class="help-block">
                  <strong>{{ $errors->first('url') }}</strong>
              </span> @endif
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Category</label>
        <div class="col-md-6">
        <select name="eventcateg_id" class="form-control">
            @foreach ($categories as $category)
              @if($category->name!="All")
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endif
            @endforeach
        </select>
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
