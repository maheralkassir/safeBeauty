<?php use Carbon\Carbon; ?>
@extends('layouts.masterDash')
@section('dashcontent')
  @if (isset($slides[0]))
    <h2>Current Slides</h2>
  @endif
    <div class="row">

      @foreach ($slides as $slide)

        <div class="col-md-5 m-2 col-xs-12  col-sm-12" style="background-color:#FAFAFA;min-width:100px;min-height:200px">

          <div class="panel panel-default">

            <div class="panel-heading mt-1">
              <span>{{$slide->title}}</span>
              <span class="pull-right">{{ (new Carbon($slide->created_at ))->diffForHumans() }}</span>
            </div>

            <hr />

            <div class="panel-body slide">
              <img class="profile-img slide" src="{{ URL::to('/') }}/SliderImages/{{$slide->url}}">
            </div>

            <hr />

            <div class="panel-footer clearfix">
              <a><i style="font-size:25px;cursor:pointer;color:red" class="fa fa-trash-o pull-right mb-3"  data-toggle="modal" data-target="#myModal{{$slide->id}}"></i></a>

              <div class="modal fade" id="myModal{{$slide->id}}" role="dialog">

                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">

                    <div class="modal-body">
                      <h4 class="modal-title">Are you Sure ?</h4>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" style="cursor:pointer" data-dismiss="modal">No</button>
                      <button type="button" class="btn btn-default" style="cursor:pointer"><a style="hover:none;color:black;text-decoration:none" href="/dash/slider/delete/{{$slide->id}}">Yes</a></button>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      @endforeach

    </div>



      <h2 class=" mt-3">New Slide</h2>
  <div class="form-group">

    <form method="POST" action="/dash/slider"  enctype="multipart/form-data">
      {{csrf_field()}}


      <div class="form-group">
          <label for="title" class="col-md-4 control-label">Title</label>

          <div class="col-md-6">
              <input id="title" type="text" class="form-control" name="title" required>
          </div>
      </div>

        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
          <label for="image" class="col-md-4 control-label">Slide Image</label>

          <div class="col-md-6">
              <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}" required autofocus>

              @if ($errors->has('image'))
                  <span class="help-block">
                      <strong>{{ $errors->first('image') }}</strong>
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
