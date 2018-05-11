@extends('layouts.masterDash')

@section('dashcontent')
<div class="container">
  <div class="col-sm-4">

      <form method="post" action="/dash/location">

        {{csrf_field()}}

        <div class="form-group">
            <label for="">Map</label>
            <input type="text" class="form-control" id="searchmap" />
            <div id="map-canvas" class="form-control mt-2" style="width: 500px; height: 400px;"></div>
        </div>

        <div class="form-group">
            <label for="">Lat</label>
            <input type="text" value="{{$data['lat']}}" class="form-control input-sm" name="lat" id="lat" required/>
        </div>

        <div class="form-group">
            <label for="">Lng</label>
            <input type="text" value="{{$data['lng']}}" class="form-control input-sm" name="lng" id="lng" required/>
        </div>

        <input type="submit"  class="btn btn-primary mb-5" style="cursor:pointer" value="Save" />

      </form>

  </div>
</div>

@endsection

@section('js')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHbVEm3mj0p0_BecffMsQTMlHN1I1rlLU&libraries=places" type="text/javascript">
  </script>
  <script>
    var map = new google.maps.Map(document.getElementById("map-canvas"),{
      center:{
        lat:{{$data['lat']}},
        lng:{{$data['lng']}}
      },
      zoom:15
    });
    var marker = new google.maps.Marker({
      position:{
        lat:{{$data['lat']}},
        lng:{{$data['lng']}}
      },
      map:map,
      draggable:true
    });

    var searchbox = new google.maps.places.SearchBox(document.getElementById("searchmap"));

    google.maps.event.addListener(searchbox,'places_changed',function(){
      var places = searchbox.getPlaces();
      var bounds = new google.maps.LatLngBounds();
      var i,place;
      for(i=0;place=places[i];i++)
      {
        bounds.extend(place.geometry.location);
        marker.setPosition(place.geometry.location);//set new marker position
      }
      map.fitBounds(bounds);
      map.setZoom(15);
    });

    google.maps.event.addListener(marker,'position_changed',function(){
      var lat = marker.getPosition().lat();
      var lng = marker.getPosition().lng();
      $('#lat').val(lat);
      $('#lng').val(lng);
      console.log(lat);
    });

  </script>


@endsection
