<!DOCTYPE html>
<html>

<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="asset/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="asset/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="asset/frontend/css/animate.css">
    <link rel="stylesheet" type="text/css" href="asset/frontend/css/font.css">
    <link rel="stylesheet" type="text/css" href="asset/frontend/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="asset/frontend/css/slick.css">
    <link rel="stylesheet" type="text/css" href="asset/frontend/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="asset/frontend/css/theme.css">
    <link rel="stylesheet" type="text/css" href="asset/frontend/css/style.css">
    <!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <header id="header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_top">
                        <div class="header_top_left">
                            <ul class="top_nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="pages/contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="header_top_right">
                            <p>Friday, December 05, 2045</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_bottom">
                        <div class="logo_area"><a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a></div>
                        <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Navbar Start -->
        
        </section>
        <!-- Navbar end -->
      
        @yield('content')
        <!--Content Right -->
        @include("clients.layouts.contentRight")
        <!--ContentRight End -->
    </div>
    </section>
    <!--Footer Start -->
    @include("clients.layouts.footer")
    <!--Footer End -->
    </div>
    <!--Script Start -->
    @include("clients.layouts.script")
    <!--Script End -->
</body>

</html>