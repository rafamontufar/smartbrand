<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Eureka! connect with user's emotions.</title>
        <meta name="viewport" content="width=device-width, initial-scale=0.9">
        <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('assets/css/themify-icons.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('assets/css/flexslider.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('assets/css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('assets/css/ytplayer.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('assets/css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class="nav-container">
            <a id="top"></a>
            <nav>
                <div class="nav-bar">
                    <div class="module left">
                        <a href="index.html">
                            <img class="logo logo-light" alt="Foundry" src="{{ URL::asset('assets/img/logo-light.png') }}" />
                            <img class="logo logo-dark" alt="Foundry" src="{{ URL::asset('assets/img/logo-dark.png') }}" />
                        </a>
                    </div>
                    <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="module-group right">
                      <div class="row">
                          <div class="col-sm-12 text-center">
                              <a class="btn btn-sm btn-filled" href="index.html">Home</a>
                          </div>
                        <!--end of menu module-->

                    </div>
                    <!--end of module group-->
                </div>

                    <!--end of module group-->
                </div>
            </nav>
        </div>
        <div class="main-container">
            <section class="cover fullscreen image-bg overlay">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="{{ URL::asset('assets/img/home12.jpg') }}" />
                </div>
                <div class="container v-align-transform">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
                            <div class="feature bordered text-center">
                                <h4 class="uppercase">Login Here</h4>

                                {!! Form::open(array('route' => ['redirect.auth.provider','google'] )) !!}                            
                                    
                                    <button type="submit" class="btn btn-block btn-social btn-lg btn-google" style="background-color: #dd4b39;color: white">
                                        <span class="fa fa-google"></span>
                                            Login with Google
                                    </button>
                                            
                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            
        </div>
        <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/flickr.js') }}"></script>
        <script src="{{ URL::asset('assets/js/flexslider.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/lightbox.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/masonry.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/twitterfetcher.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/spectragram.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/ytplayer.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/countdown.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/parallax.js') }}"></script>
        <script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
    </body>
</html>

<link rel="stylesheet" type="text/css" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.12.0/bootstrap-social.min.css') }}">

