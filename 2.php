<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Appuccino (2)</title>
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/css/responsive.css" rel="stylesheet" type="text/css">
<!--     <link href="./styles/css/jquery.mobile-1.2.0.css" rel="stylesheet" type="text/css"> -->
    <link href="./styles/css/jquery.mobile-1.2.0.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="scripts/js/html5shiv.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
    <div class="container-narrow">

        <div class="row-fluid">
            <div class="span6">


                <!-- Activity Feed -->

                <div data-role="page" id="myorders">
                    <div class="static-header" data-role="header">
                        <h1>Appuccino</h1>
                    </div><!-- /header -->

                    <div data-role="content" data-theme="d">
                        <h2>My Orders</h2>

                            <!-- list -->
                            <ul class="nav nav-tabs nav-stacked activity-list">
                                <li><a href="#myorders-detail1">
                                    <i class="icon-chevron-right"></i>
                                        <div class="media">
                                            <div class="media-body">
                                            <h4 class="media-heading">Altura Coffee</h4><br />
                                            <p>1x Flat White</p>

                                            <p>Est. til ready: 10mins</p>
                                                                                    </div>
                                    </div>
                                </a></li>



                            </ul>

                    </div><!-- /content -->

                    <div data-role="footer" data-theme="d">
                        <?php require("navigation.php");?>
                    </div><!-- /footer -->
                </div><!-- /page -->





                <!-- Order detail -->

                <div data-role="page" id="myorders-detail1">
                    <div class="static-header" data-role="header">
                        <h1>Appuccino</h1>
                    </div><!-- /header -->

                    <div data-role="content" data-theme="d">
                        <h2></h2>

                            <!-- list -->
                            <ul class="nav nav-tabs nav-stacked activity-list">
                                <li><a href="#shop-alturacoffee">
                                    <i class="icon-chevron-right"></i>
                                        <div class="media">
                                            <div class="media-body">
                                            <h4 class="media-heading">Altura Coffee</h4><br />
                                            <p>1x Flat White</p>

                                            <p>Est. til ready: 10mins</p>

                                            <button style="width:100%" class="btn" data-role="none">Pause</button><br /><br />
                                            <button style="width:100%" class="btn btn-danger" data-role="none">Cancel</button>

                                        </div>
                                    </div>
                                </a></li>



                            </ul>

                    </div><!-- /content -->

                    <div data-role="footer" data-theme="d">
                        <?php require("navigation.php");?>
                    </div><!-- /footer -->
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
