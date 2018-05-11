
@extends('layouts.masterDash')
@section('dashcontent')
<h2 class=" mt-3">Edit Sponser</h2>
<div class="form-group">

  <form method="POST" action="/dash/sponsers/update/{{$sponser->id}}" enctype="multipart/form-data">

    {{csrf_field()}}


    <div class="form-group">
      <label for="name" class="col-md-4 control-label">Name</label>

      <div class="col-md-6">
        <input id="name" type="text" value="{{$sponser->name}}" class="form-control" name="name" required maxlength="20" required placeholder="20 Character At Most">
      </div>
    </div>

    <div class="form-group">
      <label for="sponurl" class="col-md-4 control-label">Sponser Website URL</label>

      <div class="col-md-6">
        <input id="sponurl" value="{{$sponser->sponurl}}" type="url" class="form-control" name="sponurl" required>
      </div>
    </div>

    <img class="m-3" style="max-width:500px;max-height:500px;" src="{{ URL::to('/') }}/SponsersLogos/{{$sponser->imageurl}}">

    <div class="form-group{{ $errors->has('imageurl') ? ' has-error' : '' }}">
      <label for="imageurl" class="col-md-4 control-label">Sponser Logo</label>

      <div class="col-md-3 col-xs-6">
        <input id="imageurl" type="file" class="form-control" name="imageurl" value="{{ old('imageurl') }}" autofocus> @if ($errors->has('imageurl'))
        <span class="help-block">
                  <strong>{{ $errors->first('imageurl') }}</strong>
              </span> @endif
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4 col-md-offset-4">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">
              Edit
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
