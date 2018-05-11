<?php use Carbon\Carbon; ?>

@extends('layouts.masterDash')
@section('dashcontent')

<div class="form-group">

  <form method="POST" action="/dash/doctorssay/update/{{$say->id}}" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
      <label for="name" class="col-md-4 control-label">Doctor Name</label>

      <div class="col-md-6">
        <input id="name" type="text" class="form-control" value="{{$say->name}}" name="name" required maxlength="20" required placeholder="20 Character At Most">
      </div>
    </div>

    <div class="form-group">
      <label for="content" class="col-md-4 control-label">Doctor Say</label>

      <div class="col-md-6">
        <input id="content" type="text" class="form-control" value="{{$say->content}}" name="content" maxlength="70" required placeholder="70 Character At Most">
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4 col-md-offset-4">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">
              Update
          </button>
      </div>
    </div>

  </form>
</div>

@endsection
