<?php use Carbon\Carbon; ?>
@extends('layouts.masterDash')
@section('dashcontent')
  @if (isset($videos[0]))
    <h2>Current Videos</h2>
  @endif
    <div class="row">

      @foreach ($videos as $video)

        <div class="col-md-5 m-2  col-sm-12 col-xs-12" style="background-color:#FAFAFA;min-width:100px;min-height:200px">

          <div class="panel panel-default">

            <div class="panel-heading mt-1">
              <span>{{$video->title}}</span>
              <span class="pull-right">{{ (new Carbon($video->created_at ))->diffForHumans() }}</span>
            </div>

            <hr />

            <div class="panel-body slide">
              <video  width="100%" height="100%" controls>
                  <source src="{{ URL::to('/') }}/Videos/{{$video->url}}"/>
              </video>
            </div>

            <hr />

            <div class="panel-footer clearfix">
              <a><i style="font-size:25px;cursor:pointer;color:red" class="fa fa-trash-o pull-right mb-3"  data-toggle="modal" data-target="#myModal{{$video->id}}"></i></a>

              <div class="modal fade" id="myModal{{$video->id}}" role="dialog">

                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">

                    <div class="modal-body">
                      <h4 class="modal-title">Are you Sure ?</h4>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" style="cursor:pointer" data-dismiss="modal">No</button>
                      <button type="button" class="btn btn-default" style="cursor:pointer"><a style="hover:none;color:black;text-decoration:none" href="/dash/videos/{{$video->id}}">Yes</a></button>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      @endforeach

    </div>



      <h2 class=" mt-3">Add Video</h2>
  <div class="form-group">

    <form method="POST" action="/dash/videos"  enctype="multipart/form-data">
      {{csrf_field()}}


      <div class="form-group">
          <label for="title" class="col-md-4 control-label">Title</label>

          <div class="col-md-6">
              <input id="title" type="text" class="form-control" name="title" required>
          </div>
      </div>

        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
          <label for="video" class="col-md-4 control-label">Video</label>

          <div class="col-md-6">
              <input id="video" type="file" class="form-control" name="video" value="{{ old('video') }}" required autofocus>

              @if ($errors->has('video'))
                  <span class="help-block">
                      <strong>{{ $errors->first('video') }}</strong>
                  </span>
              @endif
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <button style="cursor:pointer" type="submit" class="btn btn-primary">
                  Add
              </button>
          </div>
        </div>

    </form>
  </div>

@endsection
