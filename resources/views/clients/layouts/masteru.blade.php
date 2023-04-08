<!DOCTYPE html>
<html>

<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/asset/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/asset/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/asset/frontend/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/asset/frontend/css/font.css">
    <link rel="stylesheet" type="text/css" href="/asset/frontend/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="/asset/frontend/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/asset/frontend/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/asset/frontend/css/theme.css">
    <link rel="stylesheet" type="text/css" href="/asset/frontend/css/style.css">
   
   
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
         <!-- Header Start -->
        @include("clients.layouts.header")
        <!-- Header end -->
        <!-- Navbar Start -->
        
        
        <!-- Navbar end -->
      
        @yield('content')
        <!--Content Right -->
        
        <!--ContentRight End -->
    </div>
    </section>
    <!--Footer Start -->
    @include("clients.layouts.footer")
    <!--Footer End -->
    </div>
    <!--Script Start -->
    @include("clients.layouts.script")
    @yield('script');
    <!--Script End -->
</body>

</html>