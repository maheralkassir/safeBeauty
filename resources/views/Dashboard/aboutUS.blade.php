@extends('layouts.masterDash')
@section('dashcontent')
  <form action="/dash/aboutus/update" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="content" class="col-md-4 control-label">About us</label>
        <div class="col-md-8">
          <textarea id="article-ckeditor" class="form-control" name="content" placeholder="About Us">@if(isset($about)){{$about->content}}@endif</textarea>
        </div>
        <div class="form-group mt-2">
          <div class="col-md-6 col-md-offset-4">
              <button style="cursor:pointer" type="submit" class="btn btn-primary">
                  Update
              </button>
          </div>
        </div>
    </div>
  </form>
@endsection
@section('js')

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace('article-ckeditor');
  </script>

  @endsection
