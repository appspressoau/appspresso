<?php
    $footer = '<div data-role="footer" data-theme="d">
                        <div id="footer">

                            <div id="global-nav" data-role="controlgroup" data-type="horizontal">
                                <ul>
                                    <li><a href="3.php" data-role="button" data-ajax="false"><i class="icon-screenshot"></i></a></li>
                                    <li><a href="1.php" data-role="button" data-ajax="false"><i class="icon-comments"></i></a></li>
                                    <li class="active"><a href="4.php" data-role="button" data-ajax="false"><i class="icon-list-ol"></i></a></li>
                                </ul>
                            </div><!-- /#global-nav-->

                        </div><!-- /#footer -->
                    </div><!-- /footer -->';
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Appuccino</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content=""><!-- App splash screen -->
    <link rel="apple-touch-startup-image" href="img/splash.png"><!-- Fullscreen app -->
    <meta name="apple-mobile-web-app-capable" content="yes"><!-- Alter the staus bar (default|black|black-translucent) -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black"><!-- Le styles -->

    <link href="./styles/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
  body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

    </style>
    <meta name="viewport" content="initial-scale=1.0">
    <link href="./styles/css/responsive.css" rel="stylesheet" type="text/css">
<!--     <link href="./styles/css/jquery.mobile-1.2.0.css" rel="stylesheet" type="text/css"> -->
    <link href="./styles/css/jquery.mobile-1.2.0.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="scripts/js/html5shiv.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/Icon@2x.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/Icon-72.png">
    <link rel="apple-touch-icon-precomposed" href="img/Icon.png">
    <script type="text/javascript" src="scripts/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="scripts/js/jquery.mobile-1.2.0.js"></script>
    <script type="text/javascript" src="appacino.js"></script>
</head>

<body>
    <div class="container-narrow">

        <div class="row-fluid">
            <div class="span6">


                <!-- Activity Feed -->

                <div data-role="page" id="stores">
                    <div class="static-header" data-role="header">
                        <h1>Appuccino</h1>
                    </div><!-- /header -->
                    <div class="submenu"><h2>Belong</h2></div>

                    <div data-role="content" data-theme="d">



                            <!-- list -->

                            <div class="btn-group">
                                <a class="btn active" data-role="none">Stores</a>
                                <a class="btn" data-role="none" href="#fiends">Fiends</a>
                            </div>

                            <h3 class="sub">Leaderboard</h3>

                            <ul class="nav nav-tabs nav-stacked activity-list">
                                <li><a href="#shop-alturacoffee">
                                    <i class="icon-chevron-right"></i>
                                        <div class="media">
                                            <i class="icon-map-marker media-object pull-left"></i>
                                            <div class="media-body">

                                            <h4 class="media-heading"><i class="icon-trophy"></i>Altura Coffee</h4><br />
                                            <!-- Nested media object -->
                                            <div class="media">
                                                <span class="label label-success">3,142 sips</span>
                                            </div>
                                        </div>
                                    </div>
                                </a></li>


                                <li><a href="#">
                                    <i class="icon-chevron-right"></i>
                                        <div class="media">
                                            <i class="icon-map-marker media-object pull-left"></i>                                            <div class="media-body">
                                            <h4 class="media-heading">Kaffe Haus</h4><br />
                                            <!-- Nested media object -->
                                            <div class="media">
                                                <span class="label label-success">2,456 sips</span>

                                            </div>
                                        </div>
                                    </div>
                                </a></li>



                            </ul>

                    </div><!-- /content -->

                    <!--  Footer -->
                    <?php echo $footer; ?>
                </div><!-- /page -->



                <div data-role="page" id="fiends">
                    <div class="static-header" data-role="header">
                        <h1>Appuccino</h1>
                    </div><!-- /header -->
                    <div class="submenu"><h2>Belong</h2></div>
                    <div data-role="content" data-theme="d">



                            <!-- list -->
                            <div data-role="page" id="nearby"></div>

                            <div class="btn-group">
                                <a class="btn " data-role="none" href="#stores">Stores</a>
                                <a class="btn active" data-role="none">Fiends</a>
                            </div>

                            <h3 class="sub">Your rank</h3>
                            <ul class="nav nav-tabs nav-stacked activity-list">

                            <li><a href="#">
                                    <i class="icon-chevron-right"></i>
                                        <div class="media">
                                            <img class="media-object pull-left" src="content/users/3.png" alt="" width="48" height="48">
                                            <div class="media-body">
                                            <h4 class="media-heading"><i class="icon-trophy"></i>Ashley Holman</h4>
                                            <div class="media">

                                            <span class="label label-success">1,337 sips</span>
                                            </div>
                                            </div>
                                            </div>
                                </a></li>
                            </ul>

                            <h3 class="sub">Leaderboard</h3>

                            <ul class="nav nav-tabs nav-stacked activity-list">

                            <li><a href="#">
                                    <i class="icon-chevron-right"></i>
                                        <div class="media">
                                            <img class="media-object pull-left" src="content/users/3.png" alt="" width="48" height="48">
                                            <div class="media-body">
                                            <h4 class="media-heading"><i class="icon-trophy"></i>Ashley Holman</h4>
                                            <div class="media">

                                            <span class="label label-success">1,337 sips</span>
                                            </div>
                                            </div>
                                            </div>
                                </a></li>
                            <li><a href="#">
                                    <i class="icon-chevron-right"></i>
                                        <div class="media">
                                            <img class="media-object pull-left" src="content/users/1.png" alt="1" width="48" height="48">
                                            <div class="media-body">
                                            <h4 class="media-heading">Zoe Bogner</h4>
                                            <div class="media">
                                            <span class="label label-success">302 sips</span>
                                            </div>
                                            </div>
                                            </div>
                                </a></li>


                        </ul>

                    </div><!-- /content -->

                    <!--  Footer -->
                    <?php echo $footer; ?>
                </div><!-- /page -->




                <div data-role="page" id="shop-alturacoffee">
                    <div class="static-header" data-role="header">
                        <a href="#stores"><button class="btn btn-inverse" data-role="none" >back</button></a>
                        <h1>Appuccino</h1>
                    </div><!-- /header -->
                    <div class="submenu"><h2>Discover</h2></div>

                    <div data-role="content" data-theme="d">
                        <div class="shop-rating">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-empty"></i>
                        </div>
                        <h2><i class="icon-trophy"></i> Altura Coffee</h2>

                        <div class="shop-tags">
                            <span class="label label-success">Fair Trade</span>
                            <span class="label label-success">Single Origin</span>
                        </div>
                        <span class="label label-success">3,142 sips</span>
                        <br /><br />

                        <div class="shop-actions">
                        <a class="btn" data-role="none" href="#rate-altura">Rate your coffee</a></div>

                        <ul class="nav nav-tabs nav-stacked activity-list">
                            <li><a href="#">
                                    <i class="icon-chevron-right"></i>
                                        <div class="media">
                                            <img class="media-object pull-left" src="content/users/1.png" alt="1" width="48" height="48">
                                            <div class="media-body">
                                            <h4 class="media-heading">Zoe Bogner</h4>
                                            <div class="media">
                                            "Mmmmm, hazelnuts!"<br />
                                            Rating: <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-empty"></i>
                                            </div>
                                            </div>
                                            </div>
                                </a></li>

                                <li><a href="#">
                                    <i class="icon-chevron-right"></i>
                                        <div class="media">
                                            <img class="media-object pull-left" src="content/users/3.png" alt="" width="48" height="48">
                                            <div class="media-body">
                                            <h4 class="media-heading">Ashley Holman</h4>
                                            <div class="media">
                                            Drank a large latte, extra hot, brewed by <span class="brewer" href="#bmcb">Brewey McBrewer</span>.
                                            </div>
                                            </div>
                                            </div>
                                </a></li>
                        </ul>


                    </div><!-- /content -->

                    <!-- Footer-->
                    <?php echo $footer; ?>
                </div><!-- /page -->

            </div>
        </div>
        <hr>


    </div><!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./scripts/js/jquery-1.8.2.min.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-transition.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-alert.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-modal.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-dropdown.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-scrollspy.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-tab.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-tooltip.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-popover.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-button.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-collapse.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-carousel.js" type="text/javascript">
</script><script src="./scripts/js/bootstrap-typeahead.js" type="text/javascript">
</script><script src="./scripts/js/jquery.mobile-1.2.0.js" type="text/javascript">
</script>
</body>
</html>
