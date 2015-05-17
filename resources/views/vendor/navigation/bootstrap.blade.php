{{--<header>--}}
{{--<div class="navbar {!! ($inverse == true) ? 'navbar-inverse' : 'navbar-default' !!} navbar-fixed-top">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="{!! $main[0]['url'] !!}">{{ $title }}</a>--}}
        {{--</div>--}}
        {{--<div class="collapse navbar-collapse">--}}
            {{--<div id="main-nav">--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--@foreach($main as $item)--}}
                        {{--<li{!! ($item['active'] ? ' class="active"' : '') !!}>--}}
                            {{--<a href="{!! $item['url'] !!}">--}}
                                {{--{!! ((!$item['icon'] == '') ? '<i class="fa fa-'.$item['icon'].' fa-inverse fa-fw"></i> ' : '') !!}{{ $item['title'] }}--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div id="bar-nav">--}}
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--@if ($bar)--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                                {{--{!! $side !!} <b class="caret"></b>--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--@foreach($bar as $item)--}}
                                    {{--<li>--}}
                                        {{--<a href="{!! $item['url'] !!}">--}}
                                            {{--{!! ((!$item['icon'] == '') ? '<i class="fa fa-'.$item['icon'].' fa-fw"></i> ' : '') !!}{{ $item['title'] }}--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
                                {{--<li class="divider"></li>--}}
                                {{--<li>--}}
                                    {{--<a href="{!! URL::route('account.logout') !!}">--}}
                                        {{--<i class="fa fa-power-off fa-fw"></i> Logout--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--@else--}}
                        {{--<li {!! (Request::is('account/login') ? 'class="active"' : '') !!}>--}}
                            {{--<a href="{!! URL::route('account.login') !!}">--}}
                                {{--Login--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--@if (Config::get('credentials.regallowed'))--}}
                            {{--<li {!! (Request::is('account/register') ? 'class="active"' : '') !!}>--}}
                                {{--<a href="{!! URL::route('account.register') !!}">--}}
                                    {{--Register--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--@endif--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--</header>--}}

{{--<!-- ============================================================= HEADER ============================================================= -->--}}

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

                <a class="navbar-brand" href="#"><img src="/assets/images/PlanA_LOGO_s.png" class="logo" alt=""></a>

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

                    <a class="navbar-brand" href="/"><img src="/assets/images/PlanA_LOGO_s.png" class="logo" alt=""></a>

                    <!-- ============================================================= LOGO : END ============================================================= -->


                    <!-- ============================================================= MAIN NAVIGATION ============================================================= -->

                    <ul class="nav navbar-nav">

                        <li class="">
                            <a href="/hero" class="scrollTo">PLAN A</a>
                        </li>
                        <!-- /.dropdown -->

                        <li class="">
                            <a href="/philosophy" class="scrollTo">PHILOSOPHY</a>
                        </li>
                        <!-- /.dropdown -->

                        <li class="">
                            <a href="/people" class="scrollTo">PEOPLE</a>
                        </li>
                        <!-- /.dropdown -->

                        <li class="">
                            <a href="/showpieces" class="scrollTo">SHOWPIECE</a>
                        </li>
                        <!-- /.dropdown -->

                        <li class="">
                            <a href="/history" class="scrollTo">COMPANY HISTORY</a>
                        </li>
                        <!-- /.dropdown -->

                        <li class="">
                            <a href="/contacts" class="scrollTo">CONTACTS</a>
                        </li>
                        <!-- /.dropdown -->

                        {{--<li class="dropdown pull-right searchbox">--}}
                            {{--<a href="#" class="dropdown-toggle js-activated"><i class="icon-search"></i></a>--}}

                            {{--<div class="dropdown-menu">--}}
                                {{--<form id="search" class="navbar-form search" role="search">--}}
                                    {{--<input type="search" class="form-control" placeholder="Type to search">--}}
                                    {{--<button type="submit" class="btn btn-default btn-submit icon-right-open"></button>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                            {{--<!-- /.dropdown-menu -->--}}
                        {{--</li>--}}
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
