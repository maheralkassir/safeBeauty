@extends('layouts.masterDash')
@section('dashcontent')
  <form method="POST" action="/dash/footer" enctype="multipart/form-data">
    {{csrf_field()}}


    <div class="form-group">
      <label for="address" class="col-md-4 control-label">Address</label>

      <div class="col-md-6">
        <input id="address" value="{{$footer['address']}}" type="text" class="form-control" name="address" required>
      </div>
    </div>

    <div class="form-group">
      <label for="phone" class="col-md-4 control-label">Phone</label>

      <div class="col-md-6">
        <input id="phone" type="number" value="{{$footer['phone']}}" class="form-control" name="phone" maxlength="14" required>
      </div>
    </div>

    <div class="form-group">
      <label for="email" class="col-md-4 control-label">Email</label>

      <div class="col-md-6">
        <input id="email" type="email" value="{{$footer['email']}}" class="form-control" name="email" required >
      </div>
    </div>

    <div class="form-group">
      <label for="" class="col-md-4 control-label">Copyright</label>

      <div class="col-md-6">
        <input id="copyright" type="text" value="{{$footer['copyright']}}" class="form-control" name="copyright" required >
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

  <form method="POST" action="/dash/footer/openhours" enctype="multipart/form-data">
    {{csrf_field()}}

    <table class="table">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>From</th>
          <th>To</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Saturday</th>
          <td><input type="time" name="d11" class="form-control" /></td>
          <td><input type="time" name="d12" class="form-control" /></td>
        </tr>

        <tr>
          <th scope="row">Sunday</th>
          <td><input type="time" name="d21" class="form-control" /></td>
          <td><input type="time" name="d22" class="form-control" /></td>
        </tr>

        <tr>
          <th scope="row">Monday</th>
          <td><input type="time" name="d31" class="form-control" /></td>
          <td><input type="time" name="d32" class="form-control" /></td>
        </tr>

        <tr>
          <th scope="row">Tuesday</th>
          <td><input type="time" name="d41" class="form-control" /></td>
          <td><input type="time" name="d42" class="form-control" /></td>
        </tr>

        <tr>
          <th scope="row">Wednesday</th>
          <td><input type="time" name="d51" class="form-control" /></td>
          <td><input type="time" name="d52" class="form-control" /></td>
        </tr>

        <tr>
          <th scope="row">Thursday</th>
          <td><input type="time" name="d61" class="form-control" /></td>
          <td><input type="time" name="d62" class="form-control" /></td>
        </tr>


        <tr>
          <th scope="row">Friday</th>
          <td><input type="time" name="d61" class="form-control" /></td>
          <td><input type="time" name="d62" class="form-control" /></td>
        </tr>


        <tr>
          <th scope="row">Saturday</th>
          <td><input type="time" name="d71" class="form-control" /></td>
          <td><input type="time" name="d72" class="form-control" /></td>
        </tr>

      </tbody>
    </table>

    <div class="form-group">
      <div class="col-md-4 col-md-offset-4">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">
              Update
          </button>
      </div>
    </div>

  </form>

@endsection
