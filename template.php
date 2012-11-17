<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Appspresso</title>
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
    <script type="text/javascript" src="scripts/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="scripts/js/jquery.mobile-1.2.0.js"></script>
    <script type="text/javascript" src="appacino.js"></script>
</head>

<body>
    <div id="yo">
    <div class="">

        <div class="row-fluid">
            <div class="span6">
                <!-- Start of first page: #one -->

                <div data-role="page" id="one">
                    <div data-role="header">
                        <h1 style="">Appaccino</h1>
                    </div><!-- /header -->

                    <div data-role="content">

                        <!--
<p><a href="#two" data-role="button">Show page "two"</a></p>

-->
                        <p><a href="#popup-login" data-role="button" data-rel="dialog" data-transition="pop">Login</a></p>
                        <p><a href="#popup-register" data-role="button" data-rel="dialog" data-transition="pop">Register</a></p>
                    </div><!-- /content -->

                    <div data-role="footer" data-theme="d">
                        <?php require_once("navigation.php");?>
                    </div><!-- /footer -->
                </div><!-- /page one -->




                <!-- Start of second page: #two -->

                <div data-role="page" id="two" data-theme="a">
                    <div data-role="header">
                        <h1>Two</h1>
                    </div><!-- /header -->

                    <div data-role="content" data-theme="a">
                        <h2>Two</h2>

                        <p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>

                        <p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>

                        <p><a href="#one" data-direction="reverse" data-role="button" data-theme="b">Back to page "one"</a></p>
                    </div><!-- /content -->

                    <div data-role="footer">
                        <h4>Page Footer</h4>
                    </div><!-- /footer -->
                </div><!-- /page two -->
                <!-- Start of third page: #popup -->

                <div data-role="page" id="popup-login">
                    <div data-role="header" data-theme="e">
                        <h1>Login</h1>
                    </div><!-- /header -->
                    <div data-role="content" data-theme="d">
                        <form>
                            <input type="text" placeholder="Email">
                            <input type="password" placeholder="Password">
                        </form>
                        <p><a href="#feed" data-role="button" data-inline="true" data-icon="back">Login</a></p>
                        <p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back</a></p>
                    </div><!-- /content -->

                    <div data-role="footer">
                        <h4>Page Footer</h4>
                    </div><!-- /footer -->
                </div><!-- /page popup-login -->

                <div data-role="page" id="popup-register">
                    <div data-role="header" data-theme="e">
                        <h1>Register</h1>
                    </div><!-- /header -->
                    <div data-role="content" data-theme="d">
                        <form>
                            <input type="text" placeholder="Email">
                            <input type="password" placeholder="Password">
                        </form>
                        <p><a href="#feed" data-role="button" data-inline="true" data-icon="back">Register</a></p>
                    </div><!-- /content -->

                    <div data-role="footer">
                        <h4>Page Footer</h4>
                    </div><!-- /footer -->
                </div><!-- /page popup -->
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
