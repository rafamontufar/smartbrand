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
        <link href="{{ URL::asset('assets/css/theme-purple.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="nav-container">
            <a id="top"></a>
            <nav class="absolute transparent">
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
                              <a class="btn btn-sm btn-filled" href="{{URL::route('login')}}">Log in</a>
                              <a class="btn btn-sm btn-filled" href="{{URL::route('login')}}">Start Now!</a>
                          </div>
                        <!--end of menu module-->

                    </div>
                    <!--end of module group-->
                </div>
            </nav>
        </div>
        <div class="main-container">
            <section class="bg-primary pb0">
                <div class="container pt80">
                    <div class="row mb24 mb-xs-0">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            <h1 class="large">Your Audience Like You’ve Never Seen Before.</h1>
                            <p class="lead">
                                Connect your social networks to EUREKA! and get datailed infromation
                                <br /> about your audience, keywords and tips to improve future content.
                            </p>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row mb80 mb-xs-24">
                        <div class="col-sm-6 col-sm-offset-3">
                            <form class="form-newsletter halves" data-success="Thanks for your registration, we will be in touch shortly." data-error="Please fill all fields correctly.">
                                <input type="text" name="email" class="transparent validate-email validate-required  signup-email-field" placeholder="Email" />
                                <button type="submit" class="btn-white">Start Now!</button>
                                <iframe srcdoc="<form action=&quot;http://mrareco.createsend.com/t/d/s/dyikkh/&quot; method=&quot;post&quot; id=&quot;subForm&quot;>     <p>         <label for=&quot;fieldName&quot;>Name</label><br />         <input id=&quot;fieldName&quot; name=&quot;cm-name&quot; type=&quot;text&quot; />     </p>     <p>         <label for=&quot;fieldEmail&quot;>Email</label><br />         <input id=&quot;fieldEmail&quot; name=&quot;cm-dyikkh-dyikkh&quot; type=&quot;email&quot; required />     </p>     <p>         <button type=&quot;submit&quot;>Subscribe</button>     </p> </form>" class="mail-list-form">
                                </iframe>
                            </form>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <img alt="image" src="{{ URL::asset('assets/img/app1.png') }}" />
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="bg-dark pt120 pb120 pt-xs-40 pb-xs-40">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-2">
                            <div class="feature feature-3 mb64 mb-xs-24">
                                <div class="left">
                                    <i class="ti-signal icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h4 class="mb16">Connect</h4>
                                    <p>
                                        Connect your social network
                                    </p>
                                </div>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="feature feature-3 mb64 mb-xs-24">
                                <div class="left">
                                    <i class="ti-bar-chart icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h4 class="mb16">Measure</h4>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                                    </p>
                                </div>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-sm-6 col-md-4 col-md-offset-2">
                            <div class="feature feature-3 mb-xs-24">
                                <div class="left">
                                    <i class="ti-layers icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h4 class="mb16">Silky Parallax</h4>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                                    </p>
                                </div>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="feature feature-3">
                                <div class="left">
                                    <i class="ti-heart icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h4 class="mb16">Engage</h4>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                                    </p>
                                </div>
                            </div>
                            <!--end of feature-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="bg-primary">
                <div class="container">
                    <div class="row mb64 mb-xs-24">
                        <div class="col-sm-12 text-center">
                            <h3>More social networks soon!</h3>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row mb40 mb-xs-24">
                        <div class="col-sm-6 col-sm-offset-3">
                            <form class="form-newsletter halves" data-success="Thanks for your registration, we will be in touch shortly." data-error="Please fill all fields correctly.">
                                <input type="text" name="email" class="mb0 transparent validate-email validate-required  signup-email-field" placeholder="Email Address" />
                                <button type="submit" class="btn-white mb0">Get upgrade info</button>
                                <iframe srcdoc="<!-- Begin MailChimp Signup Form --><link href=&quot;https://cdn-images.mailchimp.com/embedcode/classic-081711.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;><style type=&quot;text/css&quot;> #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }   /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */</style><div id=&quot;mc_embed_signup&quot;><form action=&quot;//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=94d040322a&quot; method=&quot;post&quot; id=&quot;mc-embedded-subscribe-form&quot; name=&quot;mc-embedded-subscribe-form&quot; class=&quot;validate&quot; target=&quot;_blank&quot; novalidate>    <div id=&quot;mc_embed_signup_scroll&quot;>   <h2>Subscribe to our mailing list</h2><div class=&quot;indicates-required&quot;><span class=&quot;asterisk&quot;>*</span> indicates required</div><div class=&quot;mc-field-group&quot;>    <label for=&quot;mce-EMAIL&quot;>Email Address  <span class=&quot;asterisk&quot;>*</span></label>   <input type=&quot;email&quot; value=&quot;&quot; name=&quot;EMAIL&quot; class=&quot;required email&quot; id=&quot;mce-EMAIL&quot;></div><div class=&quot;mc-field-group&quot;>  <label for=&quot;mce-FNAME&quot;>First Name </label>    <input type=&quot;text&quot; value=&quot;&quot; name=&quot;FNAME&quot; class=&quot;&quot; id=&quot;mce-FNAME&quot;></div><div class=&quot;mc-field-group&quot;> <label for=&quot;mce-LNAME&quot;>Last Name </label> <input type=&quot;text&quot; value=&quot;&quot; name=&quot;LNAME&quot; class=&quot;&quot; id=&quot;mce-LNAME&quot;></div>   <div id=&quot;mce-responses&quot; class=&quot;clear&quot;>      <div class=&quot;response&quot; id=&quot;mce-error-response&quot; style=&quot;display:none&quot;></div>     <div class=&quot;response&quot; id=&quot;mce-success-response&quot; style=&quot;display:none&quot;></div>   </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->    <div style=&quot;position: absolute; left: -5000px;&quot;><input type=&quot;text&quot; name=&quot;b_77142ece814d3cff52058a51f_94d040322a&quot; tabindex=&quot;-1&quot; value=&quot;&quot;></div>    <div class=&quot;clear&quot;><input type=&quot;submit&quot; value=&quot;Subscribe&quot; name=&quot;subscribe&quot; id=&quot;mc-embedded-subscribe&quot; class=&quot;button&quot;></div>    </div></form></div><script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script><!--End mc_embed_signup-->" class="mail-list-form">
                                </iframe>
                            </form>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h5 class="fade-half">
                                <strong>Free for early adopters</strong>
                            </h5>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <footer class="footer-1 bg-dark">

                <!--end of container-->
                <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
            </footer>
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
