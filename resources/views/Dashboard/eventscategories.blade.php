<?php use Carbon\Carbon; ?>

@extends('layouts.masterDash')
@section('dashcontent')
  @if (isset($categories[0]))
<?php $cnt=1?>
<h2 class=" mt-3">Current Categories</h2>

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Category Name</th>
      <th>Created From</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $categorie)
    <tr>
      <th scope="row">{{$cnt++}}</th>
      <td>{{$categorie->name}}</td>
      <td>{{ (new Carbon($categorie->created_at ))->diffForHumans() }}</td>
      <td>
        @if($categorie->name!="All")
        <a href="/dash/eventscategories/delete/{{$categorie->id}}"><button class="btn btn-danger" style="cursor:pointer">Delete</button></a>
        @endif
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endif

<h2 class=" mt-3">New Category</h2>
<div class="form-group">

  <form method="POST" action="/dash/eventscategories" enctype="multipart/form-data">
    {{csrf_field()}}


    <div class="form-group">
      <label for="name" class="col-md-4 control-label">Category Name</label>

      <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" required maxlength="12" required placeholder="12 Character At Most">
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
