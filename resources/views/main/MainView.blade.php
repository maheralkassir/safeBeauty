<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">

  <title>Safe Beauty Clinic</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <link rel="stylesheet" href="{{asset('Template Files/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('Template Files/css/animations.css')}}">

  <link rel="stylesheet" href="{{asset('Template Files/css/main.css')}}">
  <link href="{{asset('Template Files/css/full-slider.css')}}" rel="stylesheet">
  <script src="{{asset('Template Files/js/vendor/modernizr-2.6.2.min.js')}}"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!--[if lt IE 9]>
            <script src="js/vendor/respond.min.js"></script>
            <![endif]-->
</head>

<body class="frontpage">
  <div id="top"></div>
  <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
  <style>
    .frontpage #header {

      background-color: #fff;
    }

    .sf-menu>li>a {
      color: #e125b1;
    }
  </style>

  <header id="header">
    <div class="container">
      <div class="row">
        <a class="navbar-brand" href="#top"><img src="{{asset('Template Files/images/logo.png')}}"></a>
        <div class="col-sm-12 mainmenu_wrap">
          <div class="main-menu-icon visible-xs"><span></span><span></span><span></span></div>
          <ul id="mainmenu" class="nav menu sf-menu responsive-menu superfish">

            <li class="">
              <a href="#about">About</a>

            </li>
            <li class="">
              <a href="#services">Services</a>
            </li>
            <li class="">
              <a href="#portfolio">Events</a>
            </li>
            <li class="">
              <a href="#video">video</a>
            </li>
            <li class="">
              <a href="#reservation">Online Reservation</a>
            </li>
            <li class="">
              <a href="#contact">Contact</a>
            </li>

          </ul>
        </div>

      </div>
    </div>

  </header>

  @if (isset($slides[0]))
    <section id="land" class="parallax">
      <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
          <?php $dcnt = -1;?>
          @foreach ($slides as $key)
            <?php
              if($dcnt == -1){
                $clas="active";
              }else{
                $clas="";
              }
              $dcnt++;
            ?>
            <li data-target="#myCarousel" data-slide-to="{{$dcnt}}" class="{{$clas}}"></li>
          @endforeach
        </ol>
        <style>
          .carousel-caption {
            padding-bottom: 300px;
          }
          .carousel-caption h2 {

            color: #e125b1;
          }
        </style>


        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
          @if (isset($slides[0]))
            <div class="item active item-full">
              <!-- Set the first background image using inline CSS below. -->
              <div class="fill" style="background-image:url('/SliderImages/{{$slides[0]->url}}');"></div>
              <div class="carousel-caption">
                <h2>{{$slides[0]->title}}</h2>
              </div>
            </div>
          @endif
          <?php $cnt = 1 ?>

          @foreach ($slides as $slide)
            @if ($cnt++ !== 1)
              <div class="item item-full">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/SliderImages/{{$slide->url}}');"></div>
                <div class="carousel-caption">
                  <h2>{{$slide->title}}</h2>
                </div>
              </div>
            @endif
          @endforeach
        </div>
          <!-- Controls -->
          <a style="color:#e125b1;" class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span style="color:#e125b1;" class="icon-prev"></span>
          </a>
          <a style="color:#e125b1;" class="right carousel-control" href="#myCarousel" data-slide="next">
              <span style="color:#e125b1;" class="icon-next"></span>
          </a>

      </header>

    </section>
  @endif

  <section id="slide_tabs" class="grey_section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="nav nav-tabs nav-justified main-tab">
            <li class="active">
              <a data-toggle="tab" class="slide1" href="#1">Hair Transplant</a>
            </li>
            <li class="">
              <a data-toggle="tab" class="slide2" href="#2">Female Department</a>
            </li>
            <li class="">
              <a data-toggle="tab" class="slide3" href="#3">Nutrition Programs</a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="1" class="tab-pane fade active in">
              <div class="row">
                <div class="col-md-4 col-sm-6">

                  <h3>Latest News</h3>
                  <div id="carousel-news-massage" class="carousel slide" data-ride="carousel">

                    <!-- Controls -->
                    <div class="carousel-controls">
                      <a class="" href="#carousel-news-massage" data-slide="prev">
                                            <i class="arrow-icon-left-open-mini"></i>
                                        </a>
                      <a class="" href="#carousel-news-massage" data-slide="next">
                                            <i class="arrow-icon-right-open-mini"></i>
                                        </a>
                    </div>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                    <img class="media-object" src="{{asset('Template Files/example/top-face1.jpg')}}" alt="">
                                                </a>
                          <div class="media-body">
                            <p>
                              Ullamco laboris nialiquid exea commodi consat. Ut enim minim veniam norud exotation.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                    <img class="media-object" src="{{asset('Template Files/example/top-face2.jpg')}}" alt="">
                                                </a>
                          <div class="media-body">
                            <p>
                              Veniam norud exotation. Ut enim minim ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                    <img class="media-object" src="{{asset('Template Files/example/top-face3.jpg')}}" alt="">
                                                </a>
                          <div class="media-body">
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>

                    </div>


                  </div>
                  <!-- eof carousel -->


                </div>



                <div class="col-md-4 col-sm-6">
                  <h3>Contact Info</h3>
                  <p>
                    <i class="rt-icon-earth"></i> <strong>Damacuss Syria</strong> Shahbander St.
                  </p>
                  <p>
                    <i class="rt-icon-newspaper"></i> +963 941111961
                  </p>
                  <p>
                    <i class="rt-icon-email2"></i> <a href="mailto:info@SafeBeautyClinic.co">info@SafeBeautyClinic.co</a>
                  </p>

                </div>



                <div class="col-md-4 col-sm-12">

                  <h3>Testimonials</h3>
                  <div id="carousel-testimonials-massage" class="carousel slide" data-ride="carousel">

                    <!-- Controls -->
                    <div class="carousel-controls">
                      <a class="" href="#carousel-testimonials-massage" data-slide="prev">
                                            <i class="arrow-icon-left-open-mini"></i>
                                        </a>
                      <a class="" href="#carousel-testimonials-massage" data-slide="next">
                                            <i class="arrow-icon-right-open-mini"></i>
                                        </a>
                    </div>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                    <img class="media-object" src="{{asset('Template Files/example/top-face3.jpg')}}" alt="">
                                                </a>
                          <div class="media-body">
                            <h4 class="media-heading">Sidra</h4>
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                    <img class="media-object" src="{{asset('Template Files/example/top-face4.jpg')}}" alt="">
                                                </a>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                    <img class="media-object" src="{{asset('Template Files/example/top-face1.jpg')}}" alt="">
                                                </a>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>

                    </div>


                  </div>
                  <!-- eof carousel -->


                </div>


              </div>
            </div>
            <!-- #1 -->


            <div id="2" class="tab-pane fade">

              <div class="row">
                <div class="col-md-4 col-sm-6">

                  <h3>Latest News</h3>
                  <div id="carousel-news-cosmetics" class="carousel slide" data-ride="carousel">

                    <!-- Controls -->
                    <div class="carousel-controls">
                      <a class="" href="#carousel-news-cosmetics" data-slide="prev">
                                            <i class="arrow-icon-left-open-mini"></i>
                                        </a>
                      <a class="" href="#carousel-news-cosmetics" data-slide="next">
                                            <i class="arrow-icon-right-open-mini"></i>
                                        </a>
                    </div>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                    <img class="media-object" src="{{asset('Template Files/example/top-face6.jpg')}}" alt="">
                                                </a>
                          <div class="media-body">
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                    <img class="media-object" src="{{asset('Template Files/example/top-face5.jpg')}}" alt="">
                                                </a>
                          <div class="media-body">
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                    <img class="media-object" src="{{asset('Template Files/example/top-face2.jpg')}}" alt="">
                                                </a>
                          <div class="media-body">
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- eof carousel -->


                </div>


                <div class="col-md-4 col-sm-6">
                  <h3>Contact Info</h3>
                  <p>
                    <i class="rt-icon-earth"></i> <strong>65 Santa Monica Blvd</strong>, LA, CA 97845, US
                  </p>
                  <p>
                    <i class="rt-icon-newspaper"></i> +91 544 567 8943
                  </p>
                  <p>
                    <i class="rt-icon-email2"></i> <a href="mailto:fitness@HealthBeauty.com">fitness@HealthBeauty.com</a>
                  </p>

                </div>



                <div class="col-md-4 col-sm-12">

                  <h3>Testimonials</h3>
                  <div id="carousel-testimonials-cosmetics" class="carousel slide" data-ride="carousel">

                    <div class="carousel-controls">
                      <!-- Controls -->
                      <a class="" href="#carousel-testimonials-cosmetics" data-slide="prev">
                                        <i class="arrow-icon-left-open-mini"></i>
                                    </a>
                      <a class="" href="#carousel-testimonials-cosmetics" data-slide="next">
                                        <i class="arrow-icon-right-open-mini"></i>
                                    </a>
                    </div>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                <img class="media-object" src="{{asset('Template Files/example/top-face4.jpg')}}" alt="">
                                            </a>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                <img class="media-object" src="{{asset('Template Files/example/top-face5.jpg')}}" alt="">
                                            </a>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                <img class="media-object" src="{{asset('Template Files/example/top-face6.jpg')}}" alt="">
                                            </a>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- eof carousel -->


                </div>

              </div>


            </div>
            <!-- #2 -->


            <div id="3" class="tab-pane fade">


              <div class="row">
                <div class="col-md-4 col-sm-6">

                  <h3>Latest News</h3>
                  <div id="carousel-news-spa" class="carousel slide" data-ride="carousel">

                    <div class="carousel-controls">
                      <!-- Controls -->
                      <a class="" href="#carousel-news-spa" data-slide="prev">
                                        <i class="arrow-icon-left-open-mini"></i>
                                    </a>
                      <a class="" href="#carousel-news-spa" data-slide="next">
                                        <i class="arrow-icon-right-open-mini"></i>
                                    </a>
                    </div>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                <img class="media-object" src="{{asset('Template Files/example/top-face4.jpg')}}" alt="">
                                            </a>
                          <div class="media-body">
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                <img class="media-object" src="{{asset('Template Files/example/top-face3.jpg')}}" alt="">
                                            </a>
                          <div class="media-body">
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                <img class="media-object" src="{{asset('Template Files/example/top-face5.jpg')}}" alt="">
                                            </a>
                          <div class="media-body">
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- eof carousel -->


                </div>


                <div class="col-md-4 col-sm-6">
                  <h3>Contact Info</h3>
                  <p>
                    <i class="rt-icon-earth"></i> <strong>65 Santa Monica Blvd</strong>, LA, CA 97845, US
                  </p>
                  <p>
                    <i class="rt-icon-newspaper"></i> +91 544 567 8943
                  </p>
                  <p>
                    <i class="rt-icon-email2"></i> <a href="mailto:fitness@HealthBeauty.com">fitness@HealthBeauty.com</a>
                  </p>

                </div>



                <div class="col-md-4 col-sm-12">

                  <h3>Testimonials</h3>
                  <div id="carousel-testimonials-spa" class="carousel slide" data-ride="carousel">

                    <div class="carousel-controls">
                      <!-- Controls -->
                      <a class="" href="#carousel-testimonials-spa" data-slide="prev">
                                        <i class="arrow-icon-left-open-mini"></i>
                                    </a>
                      <a class="" href="#carousel-testimonials-spa" data-slide="next">
                                        <i class="arrow-icon-right-open-mini"></i>
                                    </a>
                    </div>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                <img class="media-object" src="{{asset('Template Files/example/top-face2.jpg')}}" alt="">
                                            </a>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                <img class="media-object" src="{{asset('Template Files/example/top-face6.jpg')}}" alt="">
                                            </a>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="media">
                          <a class="pull-left" href="#">
                                                <img class="media-object" src="{{asset('Template Files/example/top-face1.jpg')}}" alt="">
                                            </a>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>
                              Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                            </p>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                  <!-- eof carousel -->


                </div>


              </div>

            </div>
            <!-- #3 -->
          </div>
          <!-- .tab-content -->
        </div>
        <!-- .col-sm-12 -->
      </div>
      <!-- .row -->
    </div>
    <!-- .container -->
  </section>

  <section id="info" class="grey_section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h1>safe beauty clinic</h1>
          <h3>for <strong><span class="highlight">Beauty Saloons</span></strong> , <strong><span class="highlight">Region · Medical Center ·  Cosmetic </span></strong> & <strong><span class="highlight">Personal Care</span></strong></h3>
          <p>
            Now we have 3 hospitals and 3 centers in Damascus and Tartus.
          </p>
          <p>
            <a href="#" class="theme_btn">Know More</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  @if(isset($about))
    <section id="about" class="light_section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="block-header"><strong>About</strong> Us</h2>
          </div>
        </div>

        <?php echo html_entity_decode(htmlentities($about->content));?>

      </div>
    </section>
  @endif

  @if (isset($services[0]))
    <section id="services" class="color_section">
      <div class="container">
        <div class="row to_animate">
          <div class="col-sm-12 text-center">
            <h2 class="block-header">Our <strong>Services</strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <!-- col-md-offset-1 -->

            <!--vertical slider -->
            <div class="vertical-slider">
              <?php $cnt = 1;?>
              @foreach ($services as $service)
                @if ($cnt % 2 == 0)
                  <?php $class="darkgrey_section";$cnt++;?>
                @else
                  <?php $class="light_section";$cnt++;?>
                @endif
                <div class="slide media {{$class}}">
                  <a href="#" class="pull-left">
                                <img src="{{asset('/ServiceImages')}}/{{$service->imageurl}}" alt="seifbeauty" class="media-object">
                                <!--     <img src="example/services/tattoo.jpg" alt="image01" class="media-object"> -->
                            </a>

                  <div class="media-body">
                    <h3>{{$service->title}}</h3>

                    <p><a href="singleservice/{{$service->id}}">See More</a></p>
                    <p>{{$service->hint}}</p>
                    <p class="team-social">
                      <a href="#">{{$service->seenTimes}} <span class="glyphicon glyphicon-eye-open"></span></a>

                      @if ($service->liked == null)
                        <i onclick="like({{$service->id}})"  style="color:gray;font-size:15px;cursor:pointer;" class="fa fa-thumbs-o-up likesym{{$service->id}}">{{$service->likes}}</i>
                      @else
                        <i onclick="like({{$service->id}})"  style="color:#6E77FE;font-size:15px;cursor:pointer;" class="fa fa-thumbs-o-up likesym{{$service->id}}">{{$service->likes}}</i>
                      @endif

                      <div class="fb-share-button" data-href="http://127.0.0.1:8000/singleservice/{{$service->id}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
                    </p>
                  </div>
                </div>

              @endforeach

            </div>
            <!-- End of vertical slider -->
          </div>
        </div>
      </div>
    </section>
  @endif

  @if (isset($events[0]))
    <section id="portfolio" class="light_section">
      <div class="container-fluid">
        <div class="row to_animate">
          <div class="col-sm-12 text-center">
            <h2 class="block-header">Event</h2>
          </div>
        </div>
        <div id="portfolio_wrapper" class="row">
          <div class="text-center filters col-sm-12">
            <ul id="filtrable">
              <li><a class="selected" data-filter="*" href="#">All</a></li>
              @foreach ($categs as $categ)
                <li><a data-filter=".df{{$categ->id}}" href="#" class="">{{$categ->name}}</a></li>
              @endforeach
            </ul>
            <div class="clearfix"></div>
          </div>
          <!-- Items -->
          <ul class="items-row row cols-3 portfolio filtrable clearfix isotope" id="isotopeContainer">
            @foreach ($events as $event)
              <li class="item col-sm-6 col-md-4 isotope-item df{{$event->eventcateg_id}}">
                <div class="portfolio_item_image">
                  <img alt="" src="{{asset('/events')}}/{{$event->url}}">
                  <div class="portfolio_links">
                    <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="{{asset('/events')}}/{{$event->url}}"></a>
                  </div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
        <!--eof portfolio_wrapper-->

      </div>
    </section>
  @endif

  @if (isset($videos[0]))
    <section id="video" class="light_section">
      <div class="container-fluid">
        <div class="row to_animate">
          <div class="col-sm-12 text-center">
            <h2 id="vd" class="block-header">Video</h2>
          </div>
        </div>
        <ul class="items-row row cols-3 portfolio filtrable clearfix isotope" id="isotopeContainer">
            @foreach ($videos as $video)
              <li class="item col-sm-6 col-md-4 isotope-item graphicdesign webdesign">
                <div style="position:relative;">
                  <span style="left:185px; position:relative; ">{{$video->title}}</span>
                  <video width="400" controls>
                  <source src="{{asset('/Videos')}}/{{$video->url}}" type="video/mp4">
                      Your browser does not support HTML5 video.
                </video>
                </div>
              </li>
            @endforeach
        </ul>
      </div>
    </section>
  @endif

  <section id="reservation" class="darkgrey_section">
    <div class="container">
      <div class="row to_animate">
        <div class="col-sm-12 text-center">
          <h2 class="block-header"><strong>Online </strong> Reservation</h2>
          <p>Please fill in the details below to request a reservation, and we will get back to you as soon as possible.</p>
        </div>
      </div>

      <div class="row">
        <div class="block col-sm-6 col-sm-push-3 to_animate" data-animation="slideExpandUp">
          <form class="contact-form" method="post" action="/">
            <p class="contact-form-name">
              <label for="name">Name <span class="required">*</span></label>
              <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
            </p>
            <p class="contact-form-email">
              <label for="email">Email <span class="required">*</span></label>
              <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
            </p>
            <p class="contact-form-subject">
              <label for="subject">Tel <span class="required">*</span></label>
              <input type="text" aria-required="true" size="30" value="" name="tel" id="tel" class="form-control" placeholder="Tel">
            </p>
            <p class="contact-form-subject">
              <label for="subject">Country <span class="required">*</span></label>
              <input type="text" aria-required="true" size="30" value="" name="country" id="country" class="form-control" placeholder="Tel">
            </p>
            <p class="contact-form-subject">
              <label for="subject">Preferred data <span class="required">*</span></label>
              <input type="text" aria-required="true" size="30" value="" name="data" id="data" class="form-control" placeholder="Tel">
            </p>
            <p class="form-group contact-form-subject">
              <label for="sel1">Choose Service:</label>
              <select class="form-control" id="sel1">
                                                    <option value="Slimming Without Surgery">Slimming Without Surgery</option>

                                                    <option value="Liposuction">Liposuction</option>

                                                    <option value="Sweat X">Sweat X</option>

                                                    <option value="Face">Face</option>

                                                    <option value="Dental">Dental</option>

                                                    <option value="Hair Removal">Hair Removal</option>

                                                    <option value="Hair Implants">Hair Implants</option>

                                                    <option value="Tattoo Removal">Tattoo Removal</option>

                                                    <option value="Varices">Varices</option>

                                                    <option value="Wrinkles & Scars">Wrinkles & Scars</option>

                                                    <option value="Breast">Breast</option>

                                                </select>
            </p>
            <p class="contact-form-message">
              <label for="message">Message</label>
              <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
            </p>



            <p class="contact-form-submit vertical-margin-40 text-center">
              <input type="submit" value="RESERVATION Now" id="contact_form_submit" name="contact_submit" class="theme_btn">
            </p>
          </form>
        </div>

      </div>

    </div>
  </section>

  @if (isset($says[0]))
    <section id="testimonials" class="color_section parallax gradient">
      <div class="container">
        <div class="row to_animate">
          <div class="col-sm-12 text-center">
            <h2 class="block-header"><strong>Doctors</strong> Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center">

            <div id="carousel-testimonials-fullwidth" class="carousel slide widget_testimonials block">
              <!-- Carousel Pager
                          <a class="carousel-control left" href="#carousel-testimonials-fullwidth" data-slide="prev"></a>
                          <a class="carousel-control right" href="#carousel-testimonials-fullwidth" data-slide="next"></a>
                      -->
              <!-- Indicators -->
              <ol class="carousel-indicators">
                @if($says->count() > 0)
                  <li data-target="#carousel-testimonials-fullwidth" data-slide-to="0" class="active"></li>
                @endif
                <?php $cnt=1; ?>
                @while ($cnt < $says->count())
                  <li data-target="#carousel-testimonials-fullwidth" data-slide-to="{{$cnt++}}"></li>
                @endwhile
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <h4 class="carousel-introtext">
                                  {{$says[0]->content}}
                              </h4>
                  <p class="carousel-readmore">
                    {{$says[0]->name}}
                  </p>
                </div>
                <?php $cnt=1; ?>
                @foreach ($says as $say)
                  @if ($cnt++ != 1)
                    <div class="item">
                      <h4 class="carousel-introtext">
                        {{$say->content}}
                                </h4>
                      <p class="carousel-readmore">
                        {{$say->name}}
                      </p>
                    </div>
                  @endif
                @endforeach
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  @endif

  <section id="map" class="dark_section"></section>

  <section id="contact" class="darkgrey_section last_content_section">
    <div class="container">

      <div class="row to_animate">
        <div class="col-sm-12 text-center">
          <h2 class="block-header text-center">Contact Us</h2>
          <p>Damascus - syria </p>
          <p id="social">
            <a class="socialico-facebook" href="#" title="Facebook">#</a>
            <a class="socialico-twitter" href="#" title="Twitter">#</a>
            <a class="socialico-google" href="#" title="Google">#</a>
            <a class="socialico-linkedin" href="#" title="Lindedin">#</a>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="block col-sm-6 col-sm-push-3 to_animate" data-animation="slideExpandUp">
          <form class="contact-form" method="post" action="/">
            <p class="contact-form-name">
              <label for="name">Name <span class="required">*</span></label>
              <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
            </p>
            <p class="contact-form-email">
              <label for="email">Email <span class="required">*</span></label>
              <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
            </p>
            <p class="contact-form-subject">
              <label for="subject">Subject <span class="required">*</span></label>
              <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
            </p>
            <p class="contact-form-message">
              <label for="message">Message</label>
              <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
            </p>
            <p class="contact-form-submit vertical-margin-40 text-center">
              <input type="submit" value="Send Now" id="contact_form_submit" name="contact_submit" class="theme_btn">
            </p>
          </form>
        </div>

      </div>

    </div>
  </section>

  @if (isset($sponsers[0]))
    <section id="partners" class="dark_section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="owl-carousel partners">

              @foreach ($sponsers as $sponser)
                <a href="{{$sponser->sponurl}}" style="hover:none;color:black;text-decoration:none;"  target="_blank">
                  <div class="item">
                    <img style=" transform: none; background:none" alt="" src="{{asset('/SponsersLogos')}}/{{$sponser->imageurl}}">
                  </div>
                </a>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  <footer id="footer" class="dark_section">
    <div class="container">
      <div class="row">


        <div class="block widget_text col-md-3 col-sm-4 to_animate">
          <h3>Contact Info</h3>
          <p>{{$footer->address}}<br>
            <span><strong>Phone:</strong> </span>{{$footer->phone}}<br>
            <span><strong>Email:</strong> </span>
            <a href="mailto:info@company.com">{{$footer->email}}</a><br>
          </p>
        </div>


        <div class="block subscribe col-md-3 col-sm-4 to_animate">
          <h3>Newsletter</h3>
          <p>Please, subscribe to our latest news to be updated.</p>
          <form id="signup" action="/" method="get" class="form-inline">
            <div class="form-group">
              <input name="email" id="mailchimp_email" type="email" class="form-control" placeholder="Email">
            </div>
            <button type="submit" class="theme_btn">GO!</button>
            <div id="response"></div>
          </form>
        </div>


        <div class="block widget_tweet col-md-3 col-sm-4 to_animate">
          <h3>Twitter Widget</h3>
          <div class="twitter"></div>
        </div>

        <div class="block widget_schedule col-md-3 col-sm-4 to_animate">
          <h3>Opening Hours</h3>
          <dl class="dl-horizontal">
            @foreach ($opens as $open)
              <?php $op = $open[1];$cl = end($open); ?>
              @if ($op != $cl)
                <dt>{{$open[1]}}-{{end($open)}}</dt>
              @else
                <dt>{{$open[1]}}</dt>
              @endif
              <dd><strong>{{$open[0]}}</strong></dd>
            @endforeach
          </dl>
        </div>




      </div>
    </div>
  </footer>


  <section id="copyright" class="light_section">
    <div class="container">
      <div class="row">

        <div class="col-sm-12 text-center">

          {{$footer->copyright}}

        </div>
      </div>
    </div>
  </section>

  <div class="preloader">
    <div class="preloaderimg"></div>
  </div>

  <script src="{{asset('Template Files/js/vendor/jquery-1.11.1.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery-migrate-1.2.1.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/bootstrap.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/placeholdem.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/hoverIntent.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/superfish.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.actual.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.appear.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquerypp.custom.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.elastislide.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.flexslider-min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.ui.totop.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.isotope.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.easypiechart.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jflickrfeed.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.sticky.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/owl.carousel.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.fractionslider.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.scrollTo-min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.localscroll-min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.parallax-1.1.3.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.bxslider.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.funnyText.min.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/jquery.countTo.js')}}"></script>
  <script src="{{asset('Template Files/js/vendor/grid.js')}}"></script>
  <script src="{{asset('Template Files/twitter/jquery.tweet.min.js')}}"></script>
  <script src="{{asset('Template Files/js/plugins.js')}}"></script>
  <script src="{{asset('Template Files/js/main.js')}}"></script>

  <!-- Map Scripts -->
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO_m-piuRxGs-53CT8k33Q8MlId9tLnjg&callback=initMap" type="text/javascript"></script>

  <script type="text/javascript">
    var lat;
    var lng;
    var map;

    function attachSecretMessage(marker, message) {
      var infowindow = new google.maps.InfoWindow({
        content: message
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
      });
    }

    window.dxmapLoadMap = function() {
      var center = new google.maps.LatLng(lat, lng);
      var settings = {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 18,
        draggable: true,
        scrollwheel: true,
        center: center
      };
      map = new google.maps.Map(document.getElementById('map'), settings);

      var marker = new google.maps.Marker({
        position: center,
        title: 'Map title',
        map: map
      });
      marker.setTitle('Map title'.toString());
      //type your map title and description here
      attachSecretMessage(marker, '<h3>Map title</h3>Map HTML description');
    }


    //type your address after "address="
    jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=Damascus,AbdArRahmanShahBandar&sensor=true', function(data) {
      lat = {{$map->lat}};
      lng = {{$map->lng}};
    }).complete(function() {
      dxmapLoadMap();
    });
  </script>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <script>
  function like(service_id)
  {
    $.get('/like/' + service_id,function(data){
      if(data == 'Like') {
        $(".likesym"+service_id).html(parseInt($(".likesym"+service_id).html()) + 1);
        $(".likesym"+service_id).css('color',"#6E77FE");
      }
      else {
        $(".likesym"+service_id).html(parseInt($(".likesym"+service_id).html()) - 1);
        $(".likesym"+service_id).css('color','gray');
      }
      return data;
    });
  };
  </script>
</body>

</html>
