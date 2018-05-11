<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from getbootstrap.com/docs/4.0/examples/dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Oct 2017 14:57:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Safe Center Administrator Area</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dash/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('dash/dist/css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Safe Center Administration Area</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">

            <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
             </form>
          </li>
        </ul>


      </div>
    </nav>


    <div class="container-fluid">

      <div class="row">

        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <h3 class="text-center">{{ Auth::user()->name }}</h3>
            </li>

          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link {{$a[0]}}" href="/dash/slider">Slider<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{$a[1]}}" href="/dash/videos">Videos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{$a[2]}}" href="/dash/services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{$a[3]}}" href="/dash/footer">Footer Info</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link {{$a[4]}}" href="/dash/doctorsay">Doctors Says</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{$a[5]}}" href="/dash/sponsers">Sponsers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{$a[6]}}" href="/dash/eventscategories">Events Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{$a[7]}}" href="/dash/events">Events</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link {{$a[8]}}" href="/dash/sendemail">Send Email</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{$a[9]}}" href="/dash/location">Location</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{$a[10]}}" href="/dash/aboutus">About us</a>
            </li>
          </ul>

        </nav>

      </div>
    </div>
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
      @yield('dashcontent')
    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('dash/code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{asset('dash/assets/js/vendor/jquery.min.html')}}"><\/script>')</script>
    <script src="{{asset('dash/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('dash/dist/js/bootstrap.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('dash/assets/js/ie10-viewport-bug-workaround.js')}}"></script>
    @yield('js')

  </body>

<!-- Mirrored from getbootstrap.com/docs/4.0/examples/dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Oct 2017 14:57:40 GMT -->
</html>
