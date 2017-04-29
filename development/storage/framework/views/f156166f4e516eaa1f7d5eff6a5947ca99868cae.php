<!--Header Start-->
<header data-spy="affix" data-offset-top="1" class="clearfix">
    <section class="toolbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left_bar">
                    <ul class="left-none">

                        <?php if(show_login()): ?>
                            <li><a href="<?php echo e(route('frontend-login')); ?>"><i class="fa fa-user"></i>Login/Register</a></li>
                        <?php endif; ?>


                        <?php if(show_logout()): ?>
                            <li><a href="<?php echo e(route('frontend-logout')); ?>"><i class="fa fa-sign-out"></i>Logout</a></li>
                        <?php endif; ?>


                        <?php if(is_page_active('help-page')): ?>
                            <li><a href="<?php echo e(url('help-page')); ?>">Help Page</a></li>
                        <?php endif; ?>
                        <?php if(is_page_active('rules-page')): ?>
                            <li><a href="<?php echo e(url('rules-page')); ?>">Rules Page</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-lg-6 ">
                    <ul class="right-none pull-right company_info">
                        <li><a href="tel:18005670123"><i
                                        class="fa fa-phone"></i> <?php echo e(isset($settings['phone_number'])?$settings['phone_number']: '1-800-567-0123'); ?>

                            </a></li>
                        <li class="address"><a href="contact.html"><i
                                        class="fa fa-map-marker"></i> <?php echo e(isset($settings['address'])?$settings['address']: '107 Sunset Blvd., Beverly Hills, CA  90210'); ?>

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
                        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                            <span class="logo">
                                <?php if(isset($settings['picture'])): ?>
                                    <img style="    height: 61px;" src="<?php echo e(asset($settings['picture'])); ?>"
                                         alt="Auction">
                                <?php else: ?>
                                    <span class="primary_text">Auction</span> <span
                                            class="secondary_text">Template</span>

                                <?php endif; ?>

                            </span>

                        </a></div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">
                            <li class="<?php echo e(Helper::isActiveRoute('homepage')); ?>"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="<?php echo e(Helper::isActiveRoute('auction.index')); ?>"><a
                                        href="<?php echo e(route('auction.index')); ?>">Auctions</a></li>
                            <?php if(Auth::check()): ?>
                                <li ><a href="<?php echo e(route('user.account')); ?>">Account</a></li>
                            <?php endif; ?>

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
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventory <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="demo.html">Select View Demo</a></li>
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Boxed
                                            Layout <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="inventory-boxed-fullwidth.html">Boxed Fullwidth</a></li>
                                            <li><a href="inventory-boxed-sidebar-left.html">Boxed Sidebar Left</a></li>
                                            <li><a href="inventory-boxed-sidebar-right.html">Boxed Sidebar Right</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Wide
                                            Layout <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="inventory-wide-fullwidth.html">Wide Fullwidth</a></li>
                                            <li><a href="inventory-wide-sidebar-left.html">Wide Sidebar Left</a></li>
                                            <li><a href="inventory-wide-sidebar-right.html">Wide Sidebar Right</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="inventory-listing.html">Individual Listing</a></li>
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Vehicle
                                            Comparison <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="inventory-2-listing-comparison.html">2 Listing Comparison</a>
                                            </li>
                                            <li><a href="inventory-3-listing-comparison.html">3 Listing Comparison</a>
                                            </li>
                                            <li><a href="inventory-4-listing-comparison.html">4 Listing Comparison</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="service.html">Services</a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio-2-column.html">2 Column Portfolio</a></li>
                                    <li><a href="portfolio-2-column-details.html">2 Column Portfolio Details</a></li>
                                    <li><a href="portfolio-3-column.html">3 Column Portfolio</a></li>
                                    <li><a href="portfolio-3-column-details.html">3 Column Portfolio Details</a></li>
                                    <li><a href="portfolio-4-column.html">4 Column Portfolio</a></li>
                                    <li><a href="portfolio-4-column-details.html">4 Column Portfolio Details</a></li>
                                    <li><a href="portfolio-single-project-split.html">Portfolio Single Project Split</a>
                                    </li>
                                    <li><a href="portfolio-single-project-wide.html">Portfolio Single Project Wide</a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="contact.html">Contact</a></li>
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