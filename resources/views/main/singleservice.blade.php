<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Health&amp;Beauty</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="{{asset('Template Files/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('Template Files/css/animations.css')}}">
        <link rel="stylesheet" href="{{asset('Template Files/css/main.css')}}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="{{asset('Template Files/js/vendor/modernizr-2.6.2.min.js')}}"></script>
        <!--[if lt IE 9]>
            <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <header id="header">
            <div class="container"><div class="row">

                <a class="navbar-brand" href="./">Health<span class="highlight">&amp;</span>Beauty</a>



        </div></div>
    </header>

    <section class="dark_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header"><strong>Service</strong> Page</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="services media light_section">
                        <a href="#" class="pull-left">
                            <img src="{{asset('/ServiceImages')}}/{{$service->imageurl}}" alt="image01" class="media-object">
                        </a>

                        <div class="media-body">
                            <h3><a href="service-single.html">{{$service->title}}</a></h3>
                            <div class="services-description">
                                <p>{{$service->hint}}</p>
                                <p><?php echo html_entity_decode(htmlentities($service->content));?></p>


                                  @if ($service->liked == null)
                                    <p><i onclick="like({{$service->id}})"  style="color:gray;font-size:15px;cursor:pointer;" class="fa fa-thumbs-o-up likesym{{$service->id}}">{{$service->likes}}</i></p>
                                  @else
                                    <p><i onclick="like({{$service->id}})"  style="color:#6E77FE;font-size:15px;cursor:pointer;" class="fa fa-thumbs-o-up likesym{{$service->id}}">{{$service->likes}}</i></p>
                                  @endif
                                  <p class="fb-share-button" data-href="http://127.0.0.1:8000/singleservice/{{$service->id}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></p>

                                  <p><a href="#">{{$service->seenTimes}} <span class="glyphicon glyphicon-eye-open"></span></a></p>

                                <p class="with-icon person">{{$service->drname}}</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div></div>
    </section>



    <section class="color_section">
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



    <footer id="footer" class="dark_section">
        <div class="container">
            <div class="row">
                <div class="block widget_schedule col-md-3 col-sm-4">
                    <h3>Opening Hours</h3>
                    <dl class="dl-horizontal">
                        <dt>Monday-Friday</dt>
                        <dd><strong>9:00 - 21:00</strong></dd>
                        <dt>Saturday</dt>
                        <dd><strong>9:00 - 20:00</strong></dd>
                        <dt>Sunday</dt>
                        <dd><strong>9:00 - 16:00</strong></dd>
                    </dl>
                </div>


                <div class="block widget_tweet col-md-3 col-sm-4">
                    <h3>Twitter Widget</h3>
                    <div class="twitter"></div>
                </div>

                <div class="block widget_text col-md-3 col-sm-4">
                    <h3>Contact Info</h3>
                    <p>65 Santa Monica Blvd, LA, CA 97845, US<br>
                        <span><strong>Phone:</strong> </span>+91 544 567 8943<br>
                        <span><strong>Email:</strong> </span>
                        <a href="mailto:info@company.com">info@company.com</a><br>
                    </p>
                    <p>
                        <a class="socialico-twitter" href="#" title="Twitter">#</a>
                        <a class="socialico-facebook" href="#" title="Facebook">#</a>
                        <a class="socialico-google" href="#" title="Google">#</a>
                        <a class="socialico-linkedin" href="#" title="Lindedin">#</a>
                    </p>
                </div>


                <div class="block subscribe col-md-3 col-sm-4">
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

            </div>
        </div>
    </footer>


    <section id="copyright" class="light_section">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center">
                    Copyright - Sports &amp; Life Template by <a href="http://modernwebtemplates.com">MW Templates</a>
                </div>
            </div>
        </div>
    </section>


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


        <script src="{{asset('Template Files/js/plugins.js')}}"></script>
        <script src="{{asset('Template Files/js/main.js')}}"></script>
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
