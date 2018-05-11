@extends('layouts.masterDash')

@section('dashcontent')
<div class="container">
  <div class="col-sm-4">
      <div class="form-group">
          <label for="">Map</label>
          <div id="map-canvas" class="form-control mt-2" style="width: 500px; height: 400px;"></div>
          <a style="hover:none;color:black;text-decoration:none" href="/dash/location/update"><button style="cursor:pointer" class="btn btn-danger mt-4">Update Location</button></a>
      </div>
  </div>
</div>

@endsection

@section('js')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHbVEm3mj0p0_BecffMsQTMlHN1I1rlLU&libraries=places" type="text/javascript">
  </script>
  <script>
    var map = new google.maps.Map(document.getElementById("map-canvas"),{
      center:{
        lat:{{$data->lat}},
        lng:{{$data->lng}}
      },
      zoom:15
    });
    var marker = new google.maps.Marker({
      position:{
        lat:{{$data->lat}},
        lng:{{$data->lng}}
      },
      map:map,
      draggable:false
    });


  </script>


@endsection
