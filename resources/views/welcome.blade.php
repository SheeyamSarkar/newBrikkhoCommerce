<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>বৃক্ষ</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->

    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon.png')}}"/>
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png"> -->

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/settings.css')}}" media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">

    <!-- COLORS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="loader">
    <div class="loader-container">
        <img src="images/load.gif" alt="" class="loader-site spinner">
    </div>
</div>

<div id="wrapper">
    <div class="topbar clearfix">
        <div class="container">
            <div class="row-fluid">
                <div class="col-md-6 text-left">
                    <div class="social">
                        <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                        <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i
                                    class="fa fa-twitter"></i></a>
                        <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i
                                    class="fa fa-google-plus"></i></a>
                        <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i
                                    class="fa fa-linkedin"></i></a>
                        <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Youtube"><i
                                    class="fa fa-youtube"></i></a>
                        <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i
                                    class="fa fa-pinterest"></i></a>
                    </div><!-- end social -->
                </div><!-- end left -->
                <div class="col-md-6 text-right">
                    <p>
                        <strong><i class="fa fa-phone"></i></strong> +90 543 123 45 67 &nbsp;&nbsp;
                        <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                    </p>
                </div><!-- end left -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end topbar -->

    <header class="header">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <nav class="navbar yamm navbar-default">
                        <div class="container-full">
                            <div class="navbar-table">
                                <div class="navbar-cell">
                                    <div class="navbar-header">
                                        <a class="navbar-brand" href="index.html"><img
                                                    src="{{asset('frontend/images/logo.png')}}" alt="Ova"></a>
                                        <div>
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                                    data-target="#bs-example-navbar-collapse-2">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="fa fa-bars"></span>
                                            </button>
                                        </div>
                                    </div><!-- end navbar-header -->
                                </div><!-- end navbar-cell -->

                                <div class="navbar-cell stretch">
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                        <div class="navbar-cell">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown"
                                                                                class="dropdown-toggle active">Home <b
                                                                class="fa fa-angle-down"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="yamm-content clearfix">
                                                                <div class="row-fluid">
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <p>Homepages</p>
                                                                        <ul>
                                                                            <li><a href="index.html">Default Version</a>
                                                                            </li>
                                                                            <li><a href="index-boxed.html">Boxed
                                                                                    Version</a></li>
                                                                            <li><a href="index-alt.html">Home
                                                                                    Alternative</a></li>
                                                                            <li><a href="index-blog.html">Home
                                                                                    Blogging</a></li>
                                                                            <li>
                                                                                <a href="maintenance.html">Maintenance</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <p>Blog Styles</p>
                                                                        <ul>
                                                                            <li><a href="blog.html">Blog Right
                                                                                    Sidebar</a></li>
                                                                            <li><a href="blog-1.html">Blog Left
                                                                                    Sidebar</a></li>
                                                                            <li><a href="blog-2.html">Blog Fullwidth</a>
                                                                            </li>
                                                                            <li><a href="blog-3.html">Blog List
                                                                                    Style</a></li>
                                                                            <li><a href="blog-single-1.html">Blog
                                                                                    Single</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <p>Gallery Styles</p>
                                                                        <ul>
                                                                            <li><a href="gallery-1.html">Gallery Version
                                                                                    One</a></li>
                                                                            <li><a href="gallery-2.html">Gallery Version
                                                                                    Two</a></li>
                                                                            <li><a href="gallery-3.html">Gallery Version
                                                                                    Three</a></li>
                                                                            <li><a href="gallery-4.html">Gallery Version
                                                                                    Four</a></li>
                                                                            <li><a href="gallery-5.html">Gallery Version
                                                                                    Masonry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <p>Subscribe Now</p>
                                                                        <div class="well">
                                                                            <form method="post">
                                                                                <input class="form-control" name="name"
                                                                                       placeholder="Full Name"
                                                                                       type="text">
                                                                                <input class="form-control"
                                                                                       name="username"
                                                                                       placeholder="Your Email"
                                                                                       type="email">
                                                                                <button class="btn btn-primary"
                                                                                        type="submit">Subscribe
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown has-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                       role="button" aria-expanded="false">Pages <span
                                                                class="fa fa-angle-down"></span></a>
                                                    <ul class="dropdown-menu start-left" role="menu">
                                                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                               role="button" aria-expanded="false">Dropdown <span
                                                                        class="fa fa-angle-right"></span></a>
                                                            <ul class="dropdown-menu show-left" role="menu">
                                                                <li><a href="#">Sub Menu 1</a></li>
                                                                <li><a href="#">Sub Menu 2</a></li>
                                                                <li><a href="#">Sub Menu 3</a></li>
                                                                <li><a href="#">Sub Menu 4</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="team.html">Team Members</a></li>
                                                        <li><a href="testimonials.html">Testimonials</a></li>
                                                        <li><a href="elements.html">Elements</a></li>
                                                        <li><a href="404.html">Not Found (404)</a></li>
                                                        <li><a href="page-sidebar.html">Page Sidebar</a></li>
                                                        <li><a href="page-fullwidth.html">Page Fullwidth</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown has-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                       role="button" aria-expanded="false">Shop <span
                                                                class="fa fa-angle-down"></span></a>
                                                    <ul class="dropdown-menu start-left" role="menu">
                                                        <li><a href="shop.html">Shop Sidebar</a></li>
                                                        <li><a href="shop-1.html">Shop Fullwidth</a></li>
                                                        <li><a href="shop-single.html">Shop Single Fullwidth</a></li>
                                                        <li><a href="shop-single-1.html">Shop Single Sidebar</a></li>
                                                        <li><a href="shop-checkout.html">Shop Checkout</a></li>
                                                        <li><a href="shop-cart.html">Shopping Cart</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </div><!-- end navbar-cell -->
                                    </div><!-- /.navbar-collapse -->
                                </div><!-- end navbar cell -->
                            </div><!-- end navbar-table -->
                        </div><!-- end container fluid -->
                    </nav><!-- end navbar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </header>

    <div class="slider-section">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="500"
                        data-thumb="../images/slider_02.jpg" data-saveperformance="off" data-title="Garden">
                        <img src="{{asset('frontend/images/slider_02.jpg')}}" alt="fullslide1"
                             data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                             data-x="center"
                             data-y="230"
                             data-speed="1000"
                             data-start="800"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Dress Up Your
                            Home for Sparkling Holidays
                        </div>
                        <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                             data-x="center"
                             data-y="295"
                             data-speed="1000"
                             data-start="1200"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Welcome to the
                            Garden Shop
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="500"
                        data-thumb="../images/slider_01.jpg" data-saveperformance="off" data-title="Garden">
                        <img src="{{asset('frontend/images/slider_01.jpg')}}" alt="fullslide1"
                             data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                             data-x="center"
                             data-y="230"
                             data-speed="1000"
                             data-start="800"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">A Great Theme
                            For Garden Shop
                        </div>
                        <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                             data-x="center"
                             data-y="295"
                             data-speed="1000"
                             data-start="1200"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">designing your
                            dream garden
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="section grey">
        <div class="container">
            <div class="general-title text-center">
                <h4>What We Offer</h4>
                <p class="lead">Listed below four reasons to choose us!</p>
                <hr>
            </div><!-- end general title -->

            <div class="row module-wrapper text-center">
                <div class="col-md-3 col-sm-3 why-us">
                    <img src="{{asset('frontend/images/icon_01.png')}}" alt="" class="wow fadeIn">
                    <strong>garden watering systems</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Curabitur euismod enim a metus adipiscing
                        aliquam. </p>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 why-us">
                    <img src="{{asset('frontend/images/icon_02.png')}}" alt="" class="wow fadeIn">
                    <strong>preparing landscape</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Curabitur euismod enim a metus adipiscing
                        aliquam. </p>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 why-us">
                    <img src="{{asset('frontend/images/icon_03.png')}}" alt="" class="wow fadeIn">
                    <strong>garden fence</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Curabitur euismod enim a metus adipiscing
                        aliquam. </p>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 why-us">
                    <img src="{{asset('frontend/images/icon_04.png')}}" alt="" class="wow fadeIn">
                    <strong>garden supplies</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Curabitur euismod enim a metus adipiscing
                        aliquam. </p>
                </div><!-- end col -->
            </div><!-- end module-wrapper -->

            <hr class="invis">

            <div id="owl-sticky" class="row sticky-row">
                <div class="sticky-col">
                    <div class="imageWrapper">
                        <img src="{{asset('frontend/images/stick_02.jpg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="big-meta">
                        <h3><a href="services.html">Pool Supplies</a></h3>
                    </div>
                </div>
                <div class="sticky-col">
                    <div class="imageWrapper">
                        <img src="{{asset('frontend/images/stick_05.jpg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="big-meta">
                        <h3><a href="services.html">Tree Planting</a></h3>
                    </div>
                </div>
                <div class="sticky-col">
                    <div class="imageWrapper">
                        <img src="{{asset('frontend/images/stick_04.jpg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="big-meta">
                        <h3><a href="services.html">Garden Supplies</a></h3>
                    </div>
                </div>
            </div><!-- end row -->


        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section white">
        <div class="container">
            <div class="general-title text-center">
                <h4>Our Team</h4>
                <p class="lead">Listed below our awesome team members!</p>
                <hr>
            </div><!-- end general title -->
            <div class="row module-wrapper text-center">
                <div class="col-md-3 col-sm-3 team-member">
                    <div class="entry">
                        <img class="img-responsive" src="{{asset('frontend/images/team_01.jpg')}}" alt="">
                        <div class="magnifier">
                            <div class="buttons">
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-google-plus"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
                            </div>
                        </div><!-- end magnifier -->
                    </div><!-- end entry -->
                    <h4>Jonny DOE</h4>
                    <p>Cras dapibus. Vivamus elementum semper Aenean vulementum semper Aenean vulputate eleifend
                        tellus. </p>
                </div><!-- end team_member -->

                <div class="col-md-3 col-sm-3 team-member">
                    <div class="entry">
                        <img class="img-responsive" src="{{asset('frontend/images/team_02.jpg')}}" alt="">
                        <div class="magnifier">
                            <div class="buttons">
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-google-plus"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
                            </div>
                        </div><!-- end magnifier -->
                    </div><!-- end entry -->
                    <h4> Amanda DARKIL</h4>
                    <p>Cras dapibus. Vivamus elementum semper Aenean vulementum semper Aenean vulputate eleifend
                        tellus. </p>
                </div><!-- end team_member -->

                <div class="col-md-3 col-sm-3 team-member">
                    <div class="entry">
                        <img class="img-responsive" src="{{asset('frontend/images/team_03.jpg')}}" alt="">
                        <div class="magnifier">
                            <div class="buttons">
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-google-plus"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
                            </div>
                        </div><!-- end magnifier -->
                    </div><!-- end entry -->
                    <h4> Linda MERRY</h4>
                    <p>Cras dapibus. Vivamus elementum semper Aenean vulementum semper Aenean vulputate eleifend
                        tellus. </p>
                </div><!-- end team_member -->

                <div class="col-md-3 col-sm-3 team-member">
                    <div class="entry">
                        <img class="img-responsive" src="{{asset('frontend/images/team_04.jpg')}}" alt="">
                        <div class="magnifier">
                            <div class="buttons">
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-google-plus"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
                                <a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
                            </div>
                        </div><!-- end magnifier -->
                    </div><!-- end entry -->
                    <h4> Boby TYLON</h4>
                    <p>Cras dapibus. Vivamus elementum semper Aenean vulementum semper Aenean vulputate eleifend
                        tellus. </p>
                </div><!-- end team_member -->
            </div><!-- row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section grey">
        <div class="container">
            <div class="general-title text-center">
                <h4>Shopping</h4>
                <p class="lead">Listed below our awesome shop items!</p>
                <hr>
            </div><!-- end general title -->

            <div class="row module-wrapper shop-layout text-center">
                <div class="col-md-3 col-sm-3 shop-item">
                    <div class="entry">
                        <img class="img-responsive" src="{{asset('frontend/images/shop_01.jpg')}}" alt="">
                        <div class="magnifier">
                            <div class="buttons">
                                <a class="st" rel="bookmark" href="shop-checkout.html"><span
                                            class="fa fa-shopping-cart"></span></a>
                                <a class="st" rel="bookmark" href="shop-single.html"><span
                                            class="fa fa-link"></span></a>
                            </div>
                        </div><!-- end magnifier -->
                    </div><!-- end entry -->
                    <h4><a href="shop-single.html">Green Shovel </a></h4>
                    <small>$21.00</small>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <span>(12)</span>
                    </div>
                </div><!-- end shop_item -->

                <div class="col-md-3 col-sm-3 shop-item">
                    <div class="entry">
                        <img class="img-responsive" src="{{asset('frontend/images/shop_02.jpg')}}" alt="">
                        <div class="magnifier">
                            <div class="buttons">
                                <a class="st" rel="bookmark" href="shop-checkout.html"><span
                                            class="fa fa-shopping-cart"></span></a>
                                <a class="st" rel="bookmark" href="shop-single.html"><span
                                            class="fa fa-link"></span></a>
                            </div>
                        </div><!-- end magnifier -->
                    </div><!-- end entry -->
                    <h4><a href="shop-single.html">Water Filling Cans</a></h4>
                    <small>$21.00</small>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>(3)</span>
                    </div>
                </div><!-- end shop_item -->

                <div class="col-md-3 col-sm-3 shop-item">
                    <div class="entry">
                        <img class="img-responsive" src="{{asset('frontend/images/shop_03.jpg')}}" alt="">
                        <div class="magnifier">
                            <div class="buttons">
                                <a class="st" rel="bookmark" href="shop-checkout.html"><span
                                            class="fa fa-shopping-cart"></span></a>
                                <a class="st" rel="bookmark" href="shop-single.html"><span
                                            class="fa fa-link"></span></a>
                            </div>
                        </div><!-- end magnifier -->
                    </div><!-- end entry -->
                    <h4><a href="shop-single.html">Custom Yellow Pot</a></h4>
                    <small>$21.00</small>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <span>(6)</span>
                    </div>
                </div><!-- end shop_item -->

                <div class="col-md-3 col-sm-3 shop-item">
                    <div class="entry">
                        <img class="img-responsive" src="{{asset('frontend/images/shop_04.jpg')}}" alt="">
                        <div class="magnifier">
                            <div class="buttons">
                                <a class="st" rel="bookmark" href="shop-checkout.html"><span
                                            class="fa fa-shopping-cart"></span></a>
                                <a class="st" rel="bookmark" href="shop-single.html"><span
                                            class="fa fa-link"></span></a>
                            </div>
                        </div><!-- end magnifier -->
                    </div><!-- end entry -->
                    <h4><a href="shop-single.html">Dual-Batch Compost Tumbler </a></h4>
                    <small>$21.00</small>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>(22)</span>
                    </div>
                </div><!-- end shop_item -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section white padding-bottom">
        <div class="container">
            <div class="general-title text-center">
                <h4>Testimonials</h4>
                <p class="lead">Listed below our awesome vets and testimonials and clients!</p>
                <hr>
            </div><!-- end general title -->

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row testimonials">
                        <div class="col-sm-4">
                            <blockquote>
                                <p class="clients-words">Hi there, Lorem iam nonummy nibh euismod tincidunt ut laoreet
                                    dolore Lorem ipsum dolor sit amet.</p>
                                <span class="clients-name text-primary">— Amanda corey</span>
                                <img class="img-circle img-thumbnail" src="{{asset('frontend/images/testi_01.jpg')}}"
                                     alt="">
                            </blockquote>
                        </div>
                        <div class="col-sm-4">
                            <blockquote>
                                <p class="clients-words">Awesome Lorem iam nonummy nibh euismod tincidunt ut laoreet
                                    dolore Lorem ipsum dolor sit amet. </p>
                                <span class="clients-name text-primary">— Factory nn (@facnnteam)</span>
                                <img class="img-circle img-thumbnail" src="{{asset('frontend/images/testi_02.jpg')}}"
                                     alt="">
                            </blockquote>
                        </div>
                        <div class="col-sm-4">
                            <blockquote>
                                <p class="clients-words">PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt
                                    ut laoreet dolore Lorem ipsum dolor sit amet.</p>
                                <span class="clients-name text-primary">— Big daniel mon</span>
                                <img class="img-circle img-thumbnail" src="{{asset('frontend/images/testi_03.jpg')}}"
                                     alt="">
                            </blockquote>
                        </div>
                    </div>
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section darkbg fullscreen paralbackground parallax"
             style="background-image:url('frontend/images/parallax_01.jpg');" data-img-width="1688"
             data-img-height="1125" data-diff="100">
        <div class="overlay customoverlay"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-5">
                    <div class="text-center image-center">
                        <img src="{{asset('frontend/images/device_03.png')}}" alt=""
                             class="img-responsive wow fadeInUp">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="videobg text-right">
                        <h1>Multipurpose Garden Template</h1>
                        <p>Full access control of the background video effects, just play with buttons below!<br>Letraset
                            sheets containing Lorem Ipsum passages,</p>
                        <button class="btn btn-default">PURCHASE NOW</button>
                        <button class="btn btn-default">READ MORE</button>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section white">
        <div class="container">
            <div class="general-title text-center">
                <h4>Our Plans & Pricings</h4>
                <p class="lead">Listed below our awesome plans</p>
                <hr>
            </div><!-- end general title -->

            <div class="pricing-tables">
                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="plan">
                            <div class="head">
                                <h2>Starter</h2>
                            </div>
                            <div class="price">
                                <h3><span class="symbol">$</span>12</h3>
                                <h4>per serving</h4>
                            </div>
                            <ul class="item-list">
                                <li><strong>Garden</strong> Service</li>
                                <li><strong>Forest</strong> Planning</li>
                                <li><strong>Garden</strong> Party</li>
                                <li><strong>Preparing</strong> Landscape</li>
                                <li><strong>Garde</strong> Fence</li>
                            </ul>
                            <button type="button" class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="plan">
                            <div class="head">
                                <h2>Business</h2>
                            </div>
                            <div class="price">
                                <h3><span class="symbol">$</span>24</h3>
                                <h4>per serving</h4>
                            </div>
                            <ul class="item-list">
                                <li><strong>Garden</strong> Service</li>
                                <li><strong>Forest</strong> Planning</li>
                                <li><strong>Garden</strong> Party</li>
                                <li><strong>Preparing</strong> Landscape</li>
                                <li><strong>Garde</strong> Fence</li>
                            </ul>
                            <button type="button" class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="plan">
                            <div class="head">
                                <h2>Premium</h2>
                            </div>
                            <div class="price">
                                <h3><span class="symbol">$</span>48</h3>
                                <h4>per serving</h4>
                            </div>
                            <ul class="item-list">
                                <li><strong>Garden</strong> Service</li>
                                <li><strong>Forest</strong> Planning</li>
                                <li><strong>Garden</strong> Party</li>
                                <li><strong>Preparing</strong> Landscape</li>
                                <li><strong>Garde</strong> Fence</li>
                            </ul>
                            <button type="button" class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="plan">
                            <div class="head">
                                <h2>Ultimate</h2>
                            </div>
                            <div class="price">
                                <h3><span class="symbol">$</span>92</h3>
                                <h4>per serving</h4>
                            </div>
                            <ul class="item-list">
                                <li><strong>Garden</strong> Service</li>
                                <li><strong>Forest</strong> Planning</li>
                                <li><strong>Garden</strong> Party</li>
                                <li><strong>Preparing</strong> Landscape</li>
                                <li><strong>Garde</strong> Fence</li>
                            </ul>
                            <button type="button" class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                </div> <!-- row-->
            </div> <!-- pricing-tables -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section darkbg fullscreen paralbackground parallax"
             style="background-image:url('frontend/images/parallax_01.jpg');" data-img-width="1688"
             data-img-height="1125" data-diff="100">
        <div class="overlay lightoverlay"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="contact-details">
                        <h2>FOR ONLINE APPOINTMENT PLEASE CALL US TODAY</h2>
                        <h1>+90 1234-567-890</h1>
                        <h2>Envato INC 22 Elizabeth Str. Melbourne Victoria 8777. Australia</h2>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section grey">
        <div class="container">
            <div class="general-title text-center">
                <h4>From the Blog</h4>
                <p class="lead">We shared best articles for garde lowers</p>
                <hr>
            </div><!-- end general title -->

            <div class="row module-wrapper blog-widget">
                <div class="col-md-4 col-sm-6">
                    <div class="blog-wrapper">
                        <div class="blog-title">
                            <a class="category_title" href="#" title="">GARDEN SUPPLIES</a>
                            <h2><a href="blog-single-1.html" title="">How to find best garden tools?</a></h2>
                            <div class="blog-image">
                                <a href="blog-single-1.html" title=""><img src="frontend/images/blog_01.jpg" alt=""
                                                                           class="img-responsive"></a>
                            </div><!-- end image -->
                            <div class="post-meta">
                                    <span>
                                    <i class="fa fa-user"></i>
                                    <a href="#">John</a>
                                    </span>
                                <span>
                                    <i class="fa fa-tag"></i>
                                    <a href="#">Pet</a>
                                    </span>
                                <span>
                                    <i class="fa fa-comments"></i>
                                    <a href="#">19 Comments</a>
                                    </span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since theown printer took.</p>
                            <a href="blog-single-1.html" class="readmore">Read more</a>
                        </div><!-- end desc -->
                    </div><!-- end blog-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6">
                    <div class="blog-wrapper">
                        <div class="blog-title">
                            <a class="category_title" href="#" title="">GARDEN MARKETING</a>
                            <h2><a href="blog-single-1.html" title="">2015 Tips - Garden and Forest</a></h2>
                            <div class="blog-image">
                                <a href="blog-single-1.html" title=""><img src="frontend/images/blog_02.jpg" alt=""
                                                                           class="img-responsive"></a>
                            </div><!-- end image -->
                            <div class="post-meta">
                                    <span>
                                    <i class="fa fa-user"></i>
                                    <a href="#">Jenny</a>
                                    </span>
                                <span>
                                    <i class="fa fa-tag"></i>
                                    <a href="#">Market</a>
                                    </span>
                                <span>
                                    <i class="fa fa-comments"></i>
                                    <a href="#">44 Comments</a>
                                    </span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since theown printer took.</p>
                            <a href="blog-single-1.html" class="readmore">Read more</a>
                        </div><!-- end desc -->
                    </div><!-- end blog-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6">
                    <div class="blog-wrapper">
                        <div class="blog-title">
                            <a class="category_title" href="#" title="">GARDEN SHOPPING</a>
                            <h2><a href="blog-single-1.html" title="">Sand choice in Garden</a></h2>
                            <div class="blog-image">
                                <a href="blog-single-1.html" title=""><img src="frontend/images/blog_03.jpg" alt=""
                                                                           class="img-responsive"></a>
                            </div><!-- end image -->
                            <div class="post-meta">
                                    <span>
                                    <i class="fa fa-user"></i>
                                    <a href="#">Bob Doe</a>
                                    </span>
                                <span>
                                    <i class="fa fa-tag"></i>
                                    <a href="#">Shop</a>
                                    </span>
                                <span>
                                    <i class="fa fa-comments"></i>
                                    <a href="#">0 Comment</a>
                                    </span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since theown printer took.</p>
                            <a href="blog-single-1.html" class="readmore">Read more</a>
                        </div><!-- end desc -->
                    </div><!-- end blog-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section white">
        <div class="container">
            <div class="general-title text-center">
                <h4>Appointment Form</h4>
                <hr>
                <p class="lead">Let's appointment now with our custom form</p>
            </div><!-- end general title -->

            <div class="row">
                <div class="col-md-8">
                    <div class="appoform-wrapper noborder">
                        <form method="post">
                            <fieldset class="row-fluid appoform">
                                <div class="col-md-6">
                                    <label class="sr-only">Appointment time</label>
                                    <input id="datepicker" type="text" placeholder="Appointment time"
                                           class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="sr-only">Your name</label>
                                    <input type="text" placeholder="Your full name *" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="sr-only">Phone number</label>
                                    <input type="text" placeholder="Phone number *" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="sr-only">Email address</label>
                                    <input type="email" placeholder="Email address *" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="sr-only">Select Gardener</label>
                                    <select class="selectpicker" data-style="btn-white">
                                        <option value="12">-- Select Gardener --</option>
                                        <option value="amanda">Amanda JOE</option>
                                        <option value="mark">Mark DOE</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="sr-only">Select Service</label>
                                    <select class="selectpicker" data-style="btn-white">
                                        <option value="12">-- Select Service --</option>
                                        <option value="12">Garden Watering</option>
                                        <option value="13">Preparing Landscape</option>
                                        <option value="15">Garden Fence</option>
                                        <option value="14">Garden Supplies</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                        <textarea placeholder="Add extra notes" class="form-control"> 
                                            
                                        </textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="reset" class="btn btn-primary btn-block btn-lg">Send Now</button>
                                </div>
                            </fieldset>
                        </form>
                    </div><!-- end form-container -->
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="workinghours">
                        <ul>
                            <li>Weekdays <span>9:00am - 7:00pm</span></li>
                            <li>Weekend <span>9:00am - 7:00pm</span></li>
                            <li>Phone <span>+90 534 970 00 00</span></li>
                            <li>Fax <span>+90 534 970 00 01</span></li>
                            <li>E-Mail <span>support@yoursite.com</span></li>
                            <li>Website <span>yoursite.com</span></li>
                        </ul>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="callout-section grey">
        <div class="container">
            <div class="row callout text-left">
                <div class="col-md-7">
                    <h3>Interesting our works and services?</h3>
                    <p class="lead">The standard chunk of Lorem Ipsu from "de Finibus Bonorum" by Cicero are also
                        reproduced in their exact original form, accompanied. Donec id elit non mi porta gravida at eget
                        metus.</p>
                    <a href="#" class="btn btn-default">Get In Touch Now</a>
                </div>

                <div class="col-md-5 hidden-xs hidden-sm">
                    <div class="text-center image-center image-center2">
                        <img src="frontend/images/woman.png" alt="" class="img-responsive wow fadeInUp">
                    </div>
                </div>
            </div><!-- end callout -->
        </div><!-- end container -->
    </section><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row module-wrapper">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Recent posts</h4>
                        </div><!-- end title -->

                        <div class="recent-post-widget">
                            <ul class="recent-posts">
                                <li>
                                    <p><a href="blog-single-1.html" title=""><img src="images/blog_01.jpg" alt=""
                                                                                  class="alignleft">How to find best dog
                                            food?</a></p>
                                    <span>12 May 2014</span>
                                </li>
                                <li>
                                    <p><a href="blog-single-1.html" title=""><img src="images/blog_02.jpg" alt=""
                                                                                  class="alignleft">What About Your Dog
                                            Toths?</a></p>
                                    <span>06 May 2014</span>
                                </li>
                            </ul><!-- end latest-tweet -->
                        </div><!-- end twitter-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Twitter Feed</h4>
                        </div><!-- end widget -->

                        <div class="twitter-widget">
                            <ul class="latest-tweets">
                                <li>
                                    <p><a href="#" title="">@Mark</a> Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Integer lorem quam.</p>
                                    <span>2 hours ago</span>
                                </li>
                                <li>
                                    <p><a href="#" title="">@Envato</a> Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Integer lorem quam.</p>
                                    <span>2 hours ago</span>
                                </li>
                            </ul><!-- end latest-tweet -->
                        </div>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Contact Details</h4>
                        </div>
                        <ul class="site-links">
                            <li><i class="fa fa-link"></i> www.yoursite.com</li>
                            <li><i class="fa fa-envelope"></i> info@yoursite.com</li>
                            <li><i class="fa fa-phone"></i> +90 123 45 67</li>
                            <li><i class="fa fa-fax"></i> +90 123 45 68</li>
                            <li><i class="fa fa-home"></i> Envato INC 22 Elizabeth Str 8777.</li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Useful Links</h4>
                        </div>
                        <ul class="site-links">
                            <li><a href="index.html">Default Version</a></li>
                            <li><a href="index-boxed.html">Boxed Version</a></li>
                            <li><a href="team.html">Our Team Members</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="services.html">Our Services</a></li>
                            <li><a href="contact.html">Get In Touch</a></li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </footer>

    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <p>© 2015 Show WP Pty Ltd. by <a href="http://showwp.com" title="Show WP">Show WP</a></p>
                </div><!-- end col -->
                <div class="col-md-6 text-right">
                    <ul class="list-inline">
                        <li><a href="#">Terms of Usage</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->
</div><!-- end wrapper -->

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.js')}}"></script>
<script src="{{asset('frontend/js/retina.js')}}"></script>
<script src="{{asset('frontend/js/parallax.js')}}"></script>
<script src="{{asset('frontend/js/wow.js')}}"></script>
<script src="{{asset('frontend/js/carousel.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>

<!-- SLIDER REV -->
<script src="{{asset('frontend/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.themepunch.revolution.min.js')}}"></script>
<script>
    jQuery(document).ready(function () {
        jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1170,
                startheight: 600,
                hideThumbs: 200,
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview2",
                touchenabled: "on",
                onHoverStop: "on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [10, 7, 4, 3, 2, 5, 4, 3, 2, 1],
                parallaxDisableOnMobile: "off",
                keyboardNavigation: "off",
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                forceFullWidth: "off",
                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ""
            });
    });
</script>

<script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui-timepicker-addon.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-select.js')}}"></script>
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('.selectpicker').selectpicker();
        $("#datepicker").datepicker();
    })(jQuery);
</script>

</body>
</html>