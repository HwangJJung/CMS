<!DOCTYPE html>

<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PlanA</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Customizable CSS -->
    <link href="css/main.css" rel="stylesheet" data-skrollr-stylesheet>
    <link href="css/blue.css" rel="stylesheet" title="Color">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,900,300,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic" rel="stylesheet">

    <!-- Icons/Glyphs -->
    <link href="fonts/fontello.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- ============================================================= HEADER ============================================================= -->

<header>
    <div class="navbar">

        <div class="navbar-header">
            <div class="container">

                <ul class="info pull-left">
                    <li><a href="#"><i class="icon-mail-1 contact"></i> {{ CONTACT_EMAIL }}</a></li>
                    {{--<li><i class="icon-mobile contact"></i> +00 (123) 456 78 90</li>--}}
                </ul>
                <!-- /.info -->

                <ul class="social pull-right">
                    <li><a href={{ CONTACT_FB }}><i class="icon-s-facebook"></i></a></li>
                    {{--<li><a href="#"><i class="icon-s-gplus"></i></a></li>--}}
                    {{--<li><a href="#"><i class="icon-s-twitter"></i></a></li>--}}
                    {{--<li><a href="#"><i class="icon-s-pinterest"></i></a></li>--}}
                    {{--<li><a href="#"><i class="icon-s-behance"></i></a></li>--}}
                    {{--<li><a href="#"><i class="icon-s-dribbble"></i></a></li>--}}
                </ul>
                <!-- /.social -->

                <!-- ============================================================= LOGO MOBILE ============================================================= -->

                <a class="navbar-brand" href="#"><img src="/images/PlanA_LOGO_s.png" class="logo" alt=""></a>

                <!-- ============================================================= LOGO MOBILE : END ============================================================= -->

                <a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i
                            class='icon-menu-1'></i></a>

            </div>
            <!-- /.container -->
        </div>
        <!-- /.navbar-header -->

        <div class="yamm">
            <div class="navbar-collapse collapse">
                <div class="container">

                    <!-- ============================================================= LOGO ============================================================= -->

                    <a class="navbar-brand" href="{!! $main[0]['url'] !!}"><img src="/images/PlanA_LOGO_s.png" class="logo" alt=""></a>

                    <!-- ============================================================= LOGO : END ============================================================= -->


                    <!-- ============================================================= MAIN NAVIGATION ============================================================= -->

                    <ul class="nav navbar-nav">

                        <li class="">
                            <a href="#hero" class="scrollTo">PLAN A</a>
                        </li>
                        <!-- /.dropdown -->

                        <li class="">
                            <a href="#philosophy" class="scrollTo">PHILOSOPHY</a>
                        </li>
                        <!-- /.dropdown -->

                        <li class="">
                            <a href="#people" class="scrollTo">PEOPLE</a>
                        </li>
                        <!-- /.dropdown -->

                        <li class="">
                            <a href="#showpieces" class="scrollTo">SHOWPIECE</a>
                        </li>
                        <!-- /.dropdown -->

                        <li class="">
                            <a href="#history" class="scrollTo">COMPANY HISTORY</a>
                        </li>
                        <!-- /.dropdown -->

                        <li class="">
                            <a href="#contacts" class="scrollTo">CONTACTS</a>
                        </li>
                        <!-- /.dropdown -->

                        <li class="dropdown pull-right searchbox">
                            <a href="#" class="dropdown-toggle js-activated"><i class="icon-search"></i></a>

                            <div class="dropdown-menu">
                                <form id="search" class="navbar-form search" role="search">
                                    <input type="search" class="form-control" placeholder="Type to search">
                                    <button type="submit" class="btn btn-default btn-submit icon-right-open"></button>
                                </form>
                            </div>
                            <!-- /.dropdown-menu -->
                        </li>
                        <!-- /.searchbox -->
                    </ul>
                    <!-- /.nav -->
                    @auth('edit')
                    <div id="bar-nav">
                        <ul class="nav navbar-nav navbar-right">
                            @if ($bar)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        {!! $side !!} <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach($bar as $item)
                                            <li>
                                                <a href="{!! $item['url'] !!}">
                                                    {!! ((!$item['icon'] == '') ? '<i class="fa fa-'.$item['icon'].' fa-fw"></i> ' : '') !!}{{ $item['title'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                        <li class="divider"></li>
                                        <li>
                                            <a href="{!! URL::route('account.logout') !!}">
                                                <i class="fa fa-power-off fa-fw"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li {!! (Request::is('account/login') ? 'class="active"' : '') !!}>
                                <a href="{!! URL::route('account.login') !!}">
                                    Login
                                </a>
                                </li>
                                @if (Config::get('credentials.regallowed'))
                                    <li {!! (Request::is('account/register') ? 'class="active"' : '') !!}>
                                    <a href="{!! URL::route('account.register') !!}">
                                        Register
                                    </a>
                                    </li>
                                @endif
                            @endif
                        </ul>
                    </div>
                    @endauth
                    <!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->

                </div>
                <!-- /.container -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.yamm -->
    </div>
    <!-- /.navbar -->
</header>

<!-- ============================================================= HEADER : END ============================================================= -->


<!-- ============================================================= MAIN ============================================================= -->

<main>
    @yield('content')
</main>

<!-- ============================================================= MAIN : END ============================================================= -->


<!-- ============================================================= FOOTER ============================================================= -->

<footer class="dark-bg">
    <div class="container inner">
        <div class="row">

            <div class="col-md-4 col-sm-8 inner">
                <h4>Who we are</h4>
                <a href="#"><img class="logo img-intext" src="images/logo-white.svg" alt=""></a>

                <p>Magnis modipsae voloratati andigen daepeditem quiate re porem que aut labor. Laceaque eictemperum
                    quiae sitiorem rest non restibusaes maio es dem tumquam.</p>
                <a href="about.html" class="txt-btn">More about us</a>
            </div>
            <!-- /.col -->

            <div class="col-md-4 col-sm-8 inner">
                <h4>People</h4>

                <div class="row thumbs gap-xs">

                    <div class="col-xs-6  thumb">
                        <figure class="member">
                            <div class="icon-overlay icn-link">
                                <a href="#"><img src="images/art/pocket01.jpg" class="img-circle"></a>
                            </div>
                            <!-- /.icon-overlay -->
                        </figure>
                    </div>
                    <!-- /.thumb -->

                    <div class="col-xs-6  thumb">
                        <figure class="member">
                            <div class="icon-overlay icn-link">
                                <a href="#"><img src="images/art/pocket02.jpg" class="img-circle" ></a>
                            </div>
                            <!-- /.icon-overlay -->
                        </figure>
                    </div>
                    <!-- /.thumb -->
                </div>
                <div class="row thumbs gap-xs">
                    <div class="col-xs-6  thumb">
                        <figure class="member">
                            <div class="icon-overlay icn-link">
                                <a href="#"><img src="images/art/pocket03.jpg" class="img-circle"></a>
                            </div>
                            <!-- /.icon-overlay -->
                        </figure>
                    </div>
                    <!-- /.thumb -->

                    <div class="col-xs-6  thumb">
                        <figure class="member">
                            <div class="icon-overlay icn-link">
                                <a href="#"><img src="images/art/pocket04.jpg" class="img-circle" ></a>
                            </div>
                            <!-- /.icon-overlay -->
                        </figure>
                    </div>
                    <!-- /.thumb -->
                </div>
                <!-- /.row -->
            </div>


            <!-- /.col -->
            <!--<div class="col-md-4 col-sm-8 inner">-->
            <!--<h4>People </h4>-->

            <!--<div class="row thumbs gap-xs">-->

            <!--<div class="col-xs-6 thumb">-->
            <!--<figure class="icon-overlay icn-link">-->
            <!--<a href="portfolio-post.html"><img src="images/art/pocket01.jpg" alt=""></a>-->
            <!--</figure>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.thumb &ndash;&gt;-->

            <!--<div class="col-xs-6 thumb">-->
            <!--<figure class="icon-overlay icn-link">-->
            <!--<a href="portfolio-post.html"><img src="images/art/pocket02.jpg" alt=""></a>-->
            <!--</figure>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.thumb &ndash;&gt;-->

            <!--<div class="col-xs-6 thumb">-->
            <!--<figure class="icon-overlay icn-link">-->
            <!--<a href="portfolio-post.html"><img src="images/art/pocket03.jpg" alt=""></a>-->
            <!--</figure>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.thumb &ndash;&gt;-->

            <!--<div class="col-xs-6 thumb">-->
            <!--<figure class="icon-overlay icn-link">-->
            <!--<a href="portfolio-post.html"><img src="images/art/pocket04.jpg" alt=""></a>-->
            <!--</figure>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.thumb &ndash;&gt;-->

            <!--</div>-->
            <!--&lt;!&ndash; /.row &ndash;&gt;-->
            <!--</div>-->
            <!--&lt;!&ndash; /.col &ndash;&gt;-->




            <div class="col-md-4 col-sm-8 inner">
                <h4>Latest works</h4>

                <div class="row thumbs gap-xs">

                    <div class="col-xs-6 thumb">
                        <figure class="icon-overlay icn-link">
                            <a href="portfolio-post.html"><img src="images/art/work02.jpg" alt=""></a>
                        </figure>
                    </div>
                    <!-- /.thumb -->

                    <div class="col-xs-6 thumb">
                        <figure class="icon-overlay icn-link">
                            <a href="portfolio-post.html"><img src="images/art/work03.jpg" alt=""></a>
                        </figure>
                    </div>
                    <!-- /.thumb -->

                    <div class="col-xs-6 thumb">
                        <figure class="icon-overlay icn-link">
                            <a href="portfolio-post.html"><img src="images/art/work07.jpg" alt=""></a>
                        </figure>
                    </div>
                    <!-- /.thumb -->

                    <div class="col-xs-6 thumb">
                        <figure class="icon-overlay icn-link">
                            <a href="portfolio-post.html"><img src="images/art/work01.jpg" alt=""></a>
                        </figure>
                    </div>
                    <!-- /.thumb -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->



        </div>
        <!-- /.row -->
    </div>
    <!-- .container -->

    <div class="footer-bottom">
        <div class="container inner">
            <p class="pull-left">© 2014 REEN. All rights reserved.</p>
            <ul class="footer-menu pull-right">
                <li><a href="#hero" class="scrollTo">PLAN A</a></li>
                <li><a href="#philosophy" class="scrollTo">PHILOSOPHY</a></li>
                <li><a href="#people" class="scrollTo">PEOPLE</a></li>
                <li><a href="#showpieces" class="scrollTo">SHOWPIECE</a></li>
                <li><a href="#history" class="scrollTo">COMPANY HISTORY</a></li>
                <li><a href="#contacts" class="scrollTo">CONTACTS</a></li>
            </ul>
            <!-- .footer-menu -->
        </div>
        <!-- .container -->
    </div>
    <!-- .footer-bottom -->
</footer>

<!-- ============================================================= FOOTER : END ============================================================= -->

<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-hover-dropdown.min.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/skrollr.stylesheets.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/waypoints-sticky.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.easytabs.min.js"></script>
<script src="js/viewport-units-buggyfill.js"></script>
<script src="js/scripts.js"></script>

<!-- OnScroll CSS3 Animations for Modern Browsers and IE10+ -->
<!--[if !IE]> -->
<script src="js/onscroll.js"></script>
<!-- <![endif]-->
</body>
</html>