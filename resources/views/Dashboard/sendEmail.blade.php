@extends('layouts.masterDash')
@section('dashcontent')
  <form action="/dash/sendemail" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="to" class="col-md-4 control-label">To</label>
        <div class="col-md-8">
          <input class="form-control" name="to" type="email" />
        </div>
    </div>

    <div class="form-group">
        <label for="title" class="col-md-4 control-label">Email Title</label>
        <div class="col-md-8">
          <input class="form-control" name="title" type="text" />
        </div>
    </div>


    <div class="form-group">
        <label for="content" class="col-md-4 control-label">Email Content</label>
        <div class="col-md-8">
          <textarea  class="form-control" name="content"></textarea>
        </div>
    </div>
    <div class="form-group mt-2">
      <div class="col-md-6 col-md-offset-4">
          <button style="cursor:pointer" type="submit" class="btn btn-primary">
              Send
          </button>
      </div>
    </div>

  </form>
@endsection
