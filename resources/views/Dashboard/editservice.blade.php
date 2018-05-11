
@extends('layouts.masterDash')
@section('dashcontent')
<h2 class=" mt-3">Edit Service</h2>
<div class="form-group">

  <form method="POST" action="/dash/services/edit/{{$service->id}}" enctype="multipart/form-data">
    {{csrf_field()}}


    <div class="form-group">
      <label for="title" class="col-md-4 control-label">Title</label>

      <div class="col-md-6">
        <input id="title" type="text" class="form-control" name="title" value={{$service->title}} required maxlength="20" required placeholder="20 Character At Most">
      </div>
    </div>

    <div class="form-group">
      <label for="drname" class="col-md-4 control-label">Doctor Name</label>

      <div class="col-md-6">
        <input id="drname" type="text" class="form-control" name="drname" value={{$service->drname}} required maxlength="20" required placeholder="20 Character At Most">
      </div>
    </div>

    <div class="form-group">
      <label for="hint" class="col-md-4 control-label">Hint</label>

      <div class="col-md-6">
        <input id="hint" type="text" class="form-control" value={{$service->hint}} name="hint" maxlength="60" required placeholder="60 Character At Most">
      </div>
    </div>

    <div class="form-group">
      <label for="content" class="col-md-4 control-label">Description</label>

      <div class="col-md-8">
        <textarea class="form-control" id="content" name="content">{{$service->content}}</textarea>
      </div>
    </div>
    <img class="m-3" style="max-width:500px;max-height:500px;" src="{{ URL::to('/') }}/ServiceImages/{{$service->imageurl}}">
    <div class="form-group{{ $errors->has('imageurl') ? ' has-error' : '' }}">
      <label for="imageurl" class="col-md-4 control-label">Service Image</label>

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
