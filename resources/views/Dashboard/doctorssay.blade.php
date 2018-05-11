<?php use Carbon\Carbon; ?>

@extends('layouts.masterDash')
@section('dashcontent')
  @if (isset($says[0]))
<?php $cnt=1?>
<h2 class=" mt-3">Current Says</h2>

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Doctor Name</th>
      <th>Doctors' Say</th>
      <th>Created From</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($says as $say)
    <tr>
      <th scope="row">{{$cnt++}}</th>
      <td>{{$say->name}}</td>
      <td>{{$say->content}}</td>
      <td>{{ (new Carbon($say->created_at ))->diffForHumans() }}</td>
      <td>
        <a href="/dash/doctorssay/edit/{{$say->id}}"><button class="btn btn-primary" style="cursor:pointer">Edit</button></a>
        <a href="/dash/doctorssay/delete/{{$say->id}}"><button class="btn btn-danger" style="cursor:pointer">Delete</button></a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endif

<h2 class=" mt-3">New Say</h2>
<div class="form-group">

  <form method="POST" action="/dash/doctorsay" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
      <label for="name" class="col-md-4 control-label">Doctor Name</label>

      <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" required maxlength="20" required placeholder="20 Character At Most">
      </div>
    </div>

    <div class="form-group">
      <label for="content" class="col-md-4 control-label">Doctor Say</label>

      <div class="col-md-6">
        <input id="content" type="text" class="form-control" name="content" maxlength="70" required placeholder="70 Character At Most">
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
