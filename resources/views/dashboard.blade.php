<!DOCTYPE html>
<!--

TABLE OF CONTENTS.

Use search to find needed section.

===================================================================

|  1. $BODY                        |  Body                        |
|  2. $MAIN_NAVIGATION             |  Main navigation             |
|  3. $NAVBAR_ICON_BUTTONS         |  Navbar Icon Buttons         |
|  4. $MAIN_MENU                   |  Main menu                   |
|  5. $UPLOADS_CHART               |  Uploads chart               |
|  6. $EASY_PIE_CHARTS             |  Easy Pie charts             |
|  7. $EARNED_TODAY_STAT_PANEL     |  Earned today stat panel     |
|  8. $RETWEETS_GRAPH_STAT_PANEL   |  Retweets graph stat panel   |
|  9. $UNIQUE_VISITORS_STAT_PANEL  |  Unique visitors stat panel  |
|  10. $SUPPORT_TICKETS            |  Support tickets             |
|  11. $RECENT_ACTIVITY            |  Recent activity             |
|  12. $NEW_USERS_TABLE            |  New users table             |
|  13. $RECENT_TASKS               |  Recent tasks                |

===================================================================

-->


<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>EUREKA!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Open Sans font from Google CDN -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">

    <!-- Pixel Admin's stylesheets -->
    <link href="{{URL::asset('assets/stylesheets/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/stylesheets/pixel-admin.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/stylesheets/widgets.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/stylesheets/rtl.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/stylesheets/themes.min.css')}}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="{{URL::asset('assets/javascripts/ie.min.js' )}}"></script>
    <![endif]-->
</head>


<!-- 1. $BODY ======================================================================================

	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'      - Sets text direction to right-to-left
	* 'main-menu-right'    - Places the main menu on the right side
	* 'no-main-menu'       - Hides the main menu
	* 'main-navbar-fixed'  - Fixes the main navigation
	* 'main-menu-fixed'    - Fixes the main menu
	* 'main-menu-animated' - Animate main menu
-->
<body class="theme-default main-menu-animated">

<script>var init = [];</script>
<!-- Demo script --> <script src="{{URL::asset('assets/demo/demo.js')}}"></script> <!-- / Demo script -->

<div id="main-wrapper">


    <!-- 2. $MAIN_NAVIGATION ===========================================================================

        Main navigation
    -->
    <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
        <!-- Main menu toggle -->
        <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>

        <div class="navbar-inner">
            <!-- Main navbar header -->
            <div class="navbar-header">

                <!-- Logo -->
                <a href="index.html" class="navbar-brand">
                    <div><img alt="Pixel Admin" src="assets/images/pixel-admin/main-navbar-logo.png"></div>
                    EUREKA!
                </a>

                <!-- Main navbar toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

            </div> <!-- / .navbar-header -->

            <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                <div>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">General</a>
                        </li>
                        <li>
                            <a href="#">Emotions</a>
                        </li>
                        <li>
                            <a href="#">Keywords</a>
                        </li>
                        <li>
                            <a href="#">Predictor</a>
                        </li>
                    </ul> <!-- / .navbar-nav -->

                    <div class="right clearfix">
                        <ul class="nav navbar-nav pull-right right-navbar-nav">

                            <!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================

                                                        Navbar Icon Buttons

                                                        NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

                                                        Classes:
                                                        * 'nav-icon-btn-info'
                                                        * 'nav-icon-btn-success'
                                                        * 'nav-icon-btn-warning'
                                                        * 'nav-icon-btn-danger'
                            -->


                            <!-- /3. $END_NAVBAR_ICON_BUTTONS -->


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                    <img src="assets/demo/avatars/1.jpg" alt="">
                                    <span>Lalo Ley</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><span class="label label-warning pull-right">New</span>Profile</a></li>
                                    <li><a href="#"><span class="badge badge-primary pull-right">New</span>Account</a></li>
                                    <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="pages-signin.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                                </ul>
                            </li>
                        </ul> <!-- / .navbar-nav -->
                    </div> <!-- / .right -->
                </div>
            </div> <!-- / #main-navbar-collapse -->
        </div> <!-- / .navbar-inner -->
    </div> <!-- / #main-navbar -->
    <!-- /2. $END_MAIN_NAVIGATION -->


    <!-- 4. $MAIN_MENU =================================================================================

            Main menu

            Notes:
            * to make the menu item active, add a class 'active' to the <li>
              example: <li class="active">...</li>
            * multilevel submenu example:
                <li class="mm-dropdown">
                  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
                  <ul>
                    <li>...</li>
                    <li class="mm-dropdown">
                      <a href="#"><span class="mm-text">Submenu item text 2</span></a>
                      <ul>
                        <li>...</li>
                        ...
                      </ul>
                    </li>
                    ...
                  </ul>
                </li>
    -->
    <div id="main-menu" role="navigation">
        <div id="main-menu-inner">
            <div class="menu-content top" id="menu-content-demo">
                <!-- Menu custom content demo
                     CSS:        styles/pixel-admin-less/demo.less or styles/pixel-admin-scss/_demo.scss
                     Javascript: html/assets/demo/demo.js
                 -->
                <div>
                    <div class="text-bg"><span class="text-slim">Welcome,</span> <span class="text-semibold">Lalo Ley</span></div>

                    <img src="assets/demo/avatars/1.jpg" alt="" class="">
                    <div class="btn-group">
                        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
                        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
                        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
                        <a href="#" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
                    </div>
                    <a href="#" class="close">&times;</a>
                </div>
            </div>
            <ul class="navigation">
                <li>
                    <a href="index.html"><i class="menu-icon fa fa-youtube"></i><span class="mm-text">Youtube</span></a>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-facebook"></i><span class="mm-text">Facebook</span><span class="label label-warning">Soon!</span></a>

                </li>
                <li>
                    <a href="stat-panels.html"><i class="menu-icon fa fa-twitter"></i><span class="mm-text">twitter</span></a>
                </li>
                <li>
                    <a href="widgets.html"><i class="menu-icon fa fa-instagram"></i><span class="mm-text">Instagram</span></a>
                </li>



            </ul> <!-- / .navigation -->

        </div> <!-- / #main-menu-inner -->
    </div> <!-- / #main-menu -->
    <!-- /4. $MAIN_MENU -->

    <div id="content-wrapper">
        <ul class="breadcrumb breadcrumb-page">
            <div class="breadcrumb-label text-light-gray">You are here: </div>
            <li><a href="#">Youtube</a></li>
            <li class="active"><a href="#">General</a></li>
        </ul>
        <div class="page-header">

            <div class="row">
                <!-- Page header, center on small screens -->
                <h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-dashboard page-header-icon"></i>&nbsp;&nbsp;General</h1>

                <div class="col-xs-12 col-sm-8">
                    <div class="row">
                        <hr class="visible-xs no-grid-gutter-h">
                        <!-- "Create project" button, width=auto on desktops -->
                        <div class="pull-right col-xs-12 col-sm-auto"><a href="#" class="btn btn-primary btn-labeled" style="width: 100%;"><span class="btn-label icon fa fa-plus"></span>Add Channel</a></div>

                        <!-- Margin -->
                        <div class="visible-xs clearfix form-group-margin"></div>

                        <!-- Search field -->

                    </div>
                </div>
            </div>
        </div> <!-- / .page-header -->


        <div class="col-sm-12">

            <!-- 6. $EXAMPLE_COMMENTS_COUNT ====================================================================

                    Comments count example
            -->
            <div class="stat-panel">
                <!-- Success background. vertically centered text -->
                <div class="stat-cell bg-danger valign-middle">
                    <!-- Stat panel bg icon -->
                    <i class="fa fa-comments bg-icon"></i>
                    <!-- Extra large text -->
                    <span class="text-xlg"><strong>{{$totalComments}}</strong></span><br>
                    <!-- Big text -->
                    <span class="text-bg">Comments</span><br>
                    <!-- Small text -->
                </div> <!-- /.stat-cell -->
            </div> <!-- /.stat-panel -->
            <!-- /6. $EXAMPLE_COMMENTS_COUNT -->

        </div>




        <!-- 6. $EASY_PIE_CHARTS ===========================================================================

                        Easy Pie charts
        -->
        <!-- Javascript -->
        <script>
            init.push(function () {
                // Easy Pie Charts
                var easyPieChartDefaults = {
                    animate: 2000,
                    scaleColor: false,
                    lineWidth: 6,
                    lineCap: 'square',
                    size: 90,
                    trackColor: '#e5e5e5'
                }
                $('#easy-pie-chart-1').easyPieChart($.extend({}, easyPieChartDefaults, {
                    barColor: PixelAdmin.settings.consts.COLORS[1]
                }));
                $('#easy-pie-chart-2').easyPieChart($.extend({}, easyPieChartDefaults, {
                    barColor: PixelAdmin.settings.consts.COLORS[1]
                }));
                $('#easy-pie-chart-3').easyPieChart($.extend({}, easyPieChartDefaults, {
                    barColor: PixelAdmin.settings.consts.COLORS[1]
                }));
            });
        </script>
        <!-- / Javascript -->







        <div class="row">
            <div class="col-xs-4">
                <!-- Centered text -->
                <div class="stat-panel text-center">
                    <div class="stat-row">
                        <!-- Dark gray background, small padding, extra small text, semibold text -->
                        <div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
                            <i class="fa fa-smile-o"></i>&nbsp;&nbsp;{{$goods}} positive
                        </div>
                    </div> <!-- /.stat-row -->
                    <div class="stat-row">
                        <!-- Bordered, without top border, without horizontal padding -->
                        <div class="stat-cell bordered no-border-t no-padding-hr">
                            <div class="pie-chart" data-percent="83" id="easy-pie-chart-1">
                                <div class="pie-chart-label">83%</div>
                            </div>
                        </div>
                    </div> <!-- /.stat-row -->
                </div> <!-- /.stat-panel -->
            </div>
            <div class="col-xs-4">
                <div class="stat-panel text-center">
                    <div class="stat-row">
                        <!-- Dark gray background, small padding, extra small text, semibold text -->
                        <div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
                            <i class="fa fa-frown-o"></i>&nbsp;&nbsp; {{$bads}} Negative
                        </div>
                    </div> <!-- /.stat-row -->
                    <div class="stat-row">
                        <!-- Bordered, without top border, without horizontal padding -->
                        <div class="stat-cell bordered no-border-t no-padding-hr">
                            <div class="pie-chart" data-percent="12" id="easy-pie-chart-2">
                                <div class="pie-chart-label">12%</div>
                            </div>
                        </div>
                    </div> <!-- /.stat-row -->
                </div> <!-- /.stat-panel -->
            </div>
            <div class="col-xs-4">
                <div class="stat-panel text-center">
                    <div class="stat-row">
                        <!-- Dark gray background, small padding, extra small text, semibold text -->
                        <div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
                            <i class="fa fa-meh-o"></i>&nbsp;&nbsp;{{$neutral}} Neutral
                        </div>
                    </div> <!-- /.stat-row -->
                    <div class="stat-row">
                        <!-- Bordered, without top border, without horizontal padding -->
                        <div class="stat-cell bordered no-border-t no-padding-hr">
                            <div class="pie-chart" data-percent="5" id="easy-pie-chart-3">
                                <div class="pie-chart-label">5%</div>
                            </div>
                        </div>
                    </div> <!-- /.stat-row -->
                </div> <!-- /.stat-panel -->
            </div>
        </div>
    </div>
    <!-- /6. $EASY_PIE_CHARTS -->


    <!-- 10. $TABLE_VARIATIONS =========================================================================

                    Table variations
    -->
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Table variations</span>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">



                    <!-- Success table -->
                    <div class="table-success">
                        <div class="table-header">
                            <div class="table-caption">
                                Positive Feedback words
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Feedback</th>
                                <th>Score</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $count = 1; ?>
                            @foreach($feeling->positive as $positive)
                            <tr>
                                <td>{{$count}}<?php $count++; ?></td>
                                <td>{{$positive->original_text}}</td>
                                <td>{{$positive->score}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- / Success table -->



                </div>
                <div class="col-sm-6">



                    <!-- Danger table -->
                    <div class="table-danger">
                        <div class="table-header">
                            <div class="table-caption">
                                Negative FeedBack words
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Feedback</th>
                                <th>Score</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $count = 1; ?>
                            @foreach($feeling->negative as $negative)
                                <tr>
                                    <td>{{$count}}<?php $count++; ?></td>
                                    <td>{{$negative->original_text}}</td>
                                    <td>{{$negative->score}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- / Danger table -->



                </div>
            </div>
        </div>
    </div>
    <!-- /10. $TABLE_VARIATIONS -->






    <!-- /9. $UNIQUE_VISITORS_STAT_PANEL -->

    <!-- Page wide horizontal line -->
    <hr class="no-grid-gutter-h grid-gutter-margin-b no-margin-t">

    <div class="row">

        <!-- 10. $SUPPORT_TICKETS ==========================================================================

                Support tickets
        -->
        <!-- Javascript -->
        <script>
            init.push(function () {
                $('#dashboard-support-tickets .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });
            })
        </script>
        <!-- / Javascript -->

        <div class="col-md-6">
            <div class="panel panel-success widget-support-tickets" id="dashboard-support-tickets">
                <div class="panel-heading">
                    <span class="panel-title"><i class="panel-title-icon fa fa-bullhorn"></i>Tags </span>
                </div> <!-- / .panel-heading -->
                <div class="panel-body tab-content-padding">
                    <!-- Panel padding, without vertical padding -->
                    <div class="panel-padding no-padding-vr">
                        @foreach($tags as $tag)
                        <div class="ticket">
                            <a href="" title="" class="ticket-title">{{$tag}}</a>
                        </div> <!-- / .ticket -->
                        @endforeach

                    </div>
                </div> <!-- / .panel-body -->
            </div> <!-- / .panel -->
        </div>
        <!-- /10. $SUPPORT_TICKETS -->

        <!-- 11. $RECENT_ACTIVITY ==========================================================================

                Recent activity
        -->
        <!-- Javascript -->
        <script>
            init.push(function () {
                $('#dashboard-recent .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });
            })
        </script>
        <!-- / Javascript -->

        <div class="col-md-6">


            <div class="panel panel-warning" id="dashboard-recent">
                <div class="panel-heading">
                    <span class="panel-title"><i class="panel-title-icon fa fa-fire text-danger"></i>Avoid </span>
                    <ul class="nav nav-tabs nav-tabs-xs">
                        <li class="active">
                            <a href="#dashboard-recent-comments" data-toggle="tab">Topics</a>
                        </li>
                        <li>
                            <a href="#dashboard-recent-threads" data-toggle="tab">Keywords</a>
                        </li>
                    </ul>
                </div> <!-- / .panel-heading -->
                <div class="tab-content">

                    <!-- Comments widget -->

                    <!-- Without padding -->
                    <div class="widget-comments panel-body tab-pane no-padding fade active in" id="dashboard-recent-comments">
                        <!-- Panel padding, without vertical padding -->
                        <div class="panel-padding no-padding-vr">
                            <div class="comment">
                                <img src="{{URL::asset('assets/demo/avatars/5.jpg')}}" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-by">
                                        <a href="#" title="">Denise Steiner</a> commented on <a href="#" title="">Article Name</a>
                                    </div>
                                    <div class="comment-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-actions">
                                        <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                        <a href="#"><i class="fa fa-times"></i>Remove</a>
                                        <span class="pull-right">2 hours ago</span>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->

                            <div class="comment">
                                <img src="{{URL::asset('assets/demo/avatars/3.jpg')}}" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-by">
                                        <a href="#" title="">Michelle Bortz</a> commented on <a href="#" title="">Article Name</a>
                                    </div>
                                    <div class="comment-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-actions">
                                        <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                        <a href="#"><i class="fa fa-times"></i>Remove</a>
                                        <span class="pull-right">2 hours ago</span>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->

                            <div class="comment">
                                <img src="{{URL::asset('assets/demo/avatars/2.jpg')}}" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-by">
                                        <a href="#" title="">Robert Jang</a> commented on <a href="#" title="">Article Name</a>
                                    </div>
                                    <div class="comment-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-actions">
                                        <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                        <a href="#"><i class="fa fa-times"></i>Remove</a>
                                        <span class="pull-right">2 hours ago</span>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->

                            <div class="comment">
                                <img src="{{URL::asset('assets/demo/avatars/4.jpg')}}" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-by">
                                        <a href="#" title="">Timothy Owens</a> commented on <a href="#" title="">Article Name</a>
                                    </div>
                                    <div class="comment-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-actions">
                                        <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                        <a href="#"><i class="fa fa-times"></i>Remove</a>
                                        <span class="pull-right">2 hours ago</span>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->

                            <div class="comment">
                                <img src="{{URL::asset('assets/demo/avatars/5.jpg')}}" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-by">
                                        <a href="#" title="">Denise Steiner</a> commented on <a href="#" title="">Article Name</a>
                                    </div>
                                    <div class="comment-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-actions">
                                        <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                        <a href="#"><i class="fa fa-times"></i>Remove</a>
                                        <span class="pull-right">2 hours ago</span>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->

                            <div class="comment">
                                <img src="{{URL::asset('assets/demo/avatars/3.jpg')}}" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-by">
                                        <a href="#" title="">Michelle Bortz</a> commented on <a href="#" title="">Article Name</a>
                                    </div>
                                    <div class="comment-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-actions">
                                        <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                        <a href="#"><i class="fa fa-times"></i>Remove</a>
                                        <span class="pull-right">2 hours ago</span>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->

                            <div class="comment">
                                <img src="{{URL::asset('assets/demo/avatars/2.jpg')}}" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-by">
                                        <a href="#" title="">Robert Jang</a> commented on <a href="#" title="">Article Name</a>
                                    </div>
                                    <div class="comment-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-actions">
                                        <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                        <a href="#"><i class="fa fa-times"></i>Remove</a>
                                        <span class="pull-right">2 hours ago</span>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->

                            <div class="comment">
                                <img src="{{URL::asset('assets/demo/avatars/4.jpg')}}" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-by">
                                        <a href="#" title="">Timothy Owens</a> commented on <a href="#" title="">Article Name</a>
                                    </div>
                                    <div class="comment-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-actions">
                                        <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                        <a href="#"><i class="fa fa-times"></i>Remove</a>
                                        <span class="pull-right">2 hours ago</span>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->

                            <div class="comment">
                                <img src="{{URL::asset('assets/demo/avatars/2.jpg')}}" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-by">
                                        <a href="#" title="">Robert Jang</a> commented on <a href="#" title="">Article Name</a>
                                    </div>
                                    <div class="comment-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-actions">
                                        <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                        <a href="#"><i class="fa fa-times"></i>Remove</a>
                                        <span class="pull-right">2 hours ago</span>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->

                            <div class="comment">
                                <img src="{{URL::asset('assets/demo/avatars/4.jpg')}}" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-by">
                                        <a href="#" title="">Timothy Owens</a> commented on <a href="#" title="">Article Name</a>
                                    </div>
                                    <div class="comment-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-actions">
                                        <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                        <a href="#"><i class="fa fa-times"></i>Remove</a>
                                        <span class="pull-right">2 hours ago</span>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->
                        </div>
                    </div> <!-- / .widget-comments -->

                    <!-- Threads widget -->

                    <!-- Without padding -->
                    <div class="widget-threads panel-body tab-pane no-padding fade" id="dashboard-recent-threads">
                        <div class="panel-padding no-padding-vr">
                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/2.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/3.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Michelle Bortz</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/4.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Timothy Owens</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/5.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Denise Steiner</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/2.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/2.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/3.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Michelle Bortz</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/4.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Timothy Owens</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/5.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Denise Steiner</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/2.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->
                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/2.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/3.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Michelle Bortz</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/4.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Timothy Owens</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/5.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Denise Steiner</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                            <div class="thread">
                                <img src="{{URL::asset('assets/demo/avatars/2.jpg')}}" alt="" class="thread-avatar">
                                <div class="thread-body">
                                    <span class="thread-time">14h</span>
                                    <a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
                                    <div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->
                        </div>
                    </div> <!-- / .panel-body -->
                </div>
            </div> <!-- / .widget-threads -->
        </div>
        <!-- /11. $RECENT_ACTIVITY -->
    </div>

    <!-- Page wide horizontal line -->
    <hr class="no-grid-gutter-h grid-gutter-margin-b no-margin-t">

    <div class="row">






        <!-- 12. $NEW_USERS_TABLE ==========================================================================

                New users table
        -->
        <div class="col-md-7">
            <div class="panel panel-dark panel-light-green">
                <div class="panel-heading">
                    <span class="panel-title"><i class="panel-title-icon fa fa-heart"></i>Loyal users</span>
                    <div class="panel-heading-controls">

                    </div> <!-- / .panel-heading-controls -->
                </div> <!-- / .panel-heading -->
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>NickName</th>
                        <th>Total comments</th>
                        <th>Channel</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="valign-middle">
                    @foreach($users as $user=>$total)
                    <tr>
                        <td>5</td>
                        <td>
                            <img src="{{URL::asset('assets/demo/avatars/2.jpg' )}}" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@976b24nkok</a>
                        </td>
                        <td>{{$user}}</td>
                        <td>{{$total}}</td>
                        <td>
                            @foreach($comments as $comment)
                                @if($comment['author']==$user)
                                    {{$comment['authorChannel']}}
                                    @break
                                @endif
                            @endforeach
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- / .panel -->
        </div>
        <!-- /12. $NEW_USERS_TABLE -->



    </div>
</div> <!-- / #content-wrapper -->
<div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- Pixel Admin's javascripts -->
<script src="{{URL::asset('assets/javascripts/bootstrap.min.js' )}}"></script>
<script src="{{URL::asset('assets/javascripts/pixel-admin.min.js' )}}"></script>

<script type="text/javascript">
    init.push(function () {
        // Javascript code here
    })
    window.PixelAdmin.start(init);
</script>

</body>
</html>
