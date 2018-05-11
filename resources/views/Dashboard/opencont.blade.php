@extends('layouts.masterDash')
@section('dashcontent')
  <form method="POST" action="/dash/openinghours">
    <div calss="form-group">
      <input type="time" class="form-control" name="saturday" />
      <input type="submit" />
    </div>
  </form>
@endsection
