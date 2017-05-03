<!--Header Start-->
<header data-spy="affix" data-offset-top="1" class="clearfix">
    <section class="toolbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left_bar">
                    <ul class="left-none">

                        @if(show_login())
                            <li><a href="{{route('frontend-login')}}"><i class="fa fa-user"></i>Login/Register</a></li>
                        @endif


                        @if(show_logout())
                            <li><a href="{{route('frontend-logout')}}"><i class="fa fa-sign-out"></i>Logout</a></li>
                        @endif


                        @if (is_page_active('help-page'))
                            <li><a href="{{url('help-page')}}">Help Page</a></li>
                        @endif
                        @if (is_page_active('rules-page'))
                            <li><a href="{{url('rules-page')}}">Rules Page</a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-lg-6 ">
                    <ul class="right-none pull-right company_info">
                        <li><a href="tel:18005670123"><i
                                        class="fa fa-phone"></i> {{ isset($settings['phone_number'])?$settings['phone_number']: '1-800-567-0123' }}
                            </a></li>
                        <li class="address"><a href="contact.html"><i
                                        class="fa fa-map-marker"></i> {{ isset($settings['address'])?$settings['address']: '107 Sunset Blvd., Beverly Hills, CA  90210' }}
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="toolbar_shadow"></div>
    </section>
    <div class="bottom-header">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1"><span
                                    class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                    class="icon-bar"></span> <span class="icon-bar"></span></button>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <span class="logo">
                                @if(isset($settings['picture']))
                                    <img style="    height: 61px;" src="{{ asset($settings['picture']) }}"
                                         alt="Auction">
                                @else
                                    <span class="primary_text">PakAuction</span> <span
                                            class="secondary_text">Starter Business</span>

                                @endif

                            </span>

                        </a></div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">
                            <li class="{{ Helper::isActiveRoute('homepage') }}"><a href="{{ url('/') }}">Home</a></li>
                            <li class="{{ Helper::isActiveRoute('auction.index') }}"><a
                                        href="{{ route('auction.index') }}">Auctions</a></li>
                            @if(Auth::check())
                                <li ><a href="{{ route('user.account') }}">Account</a></li>
                            @endif
                            @if(isset($helpPage->post_status->status_title) and $helpPage->post_status->status_title == 'published')
                                <li>
                                    <a href="{{ url($helpPage->slug) }}">
                                        Help
                                    </a>
                                </li>

                                @endif
                            @if(isset($rulesPage->post_status->status_title) and $rulesPage->post_status->status_title == 'published')
                                <li>
                                    <a href="{{ url($rulesPage->slug) }}">
                                        Rules
                                    </a>
                                </li>

                                @endif
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Alternate
                                            Footers <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li class="active"><a href="index.html">Footer 1</a></li>
                                            <li><a href="index-footer-2.html">Footer 2</a></li>
                                            <li><a href="index-footer-3.html">Footer 3</a></li>
                                            <li><a href="index-footer-4.html">Footer 4</a></li>
                                            <li><a href="index-footer-5.html">Footer 5</a></li>
                                            <li><a href="index-footer-6.html">Footer 6</a></li>
                                            <li><a href="index-no-footer.html">No Footer</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="page-fullwidth.html">Fullwidth Page</a></li>
                                    <li><a href="page-sidebar.html">Sidebar Page</a></li>
                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                </ul>
                            </li>



                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <div class="header_shadow"></div>
    </div>
</header>
<!--Header End-->

<div class="clearfix"></div>