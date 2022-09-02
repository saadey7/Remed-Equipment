<!--  ====== header-area-start=======================================  -->
<header>
        <div class="header-area header-area3">
            <div class="header header3 position-absolute pt-30 pb-22 extra-padding-55">
                <div class="container-fluid">
                    <div id="header-sticky" class="header-bottom home3-header-bottom">
                        <div class="row align-items-center justify-content-lg-between position-relative">
                            <div class="col-xxl-3 col-xl-2 col-lg-3  col-md-4  col-sm-8 col-8 pr-md-0">
                                <div class="logo-area">
                                    <div class="logo3 z-index1 position-relative">
                                        <a href="index.html" class="d-block" data-toggle="tooltip" data-selector="true"
                                            data-placement="bottom" title="stepmeds">
                                            <img src="/Web/images/logo/logo-white.png" alt="stepmeds">
                                        </a>
                                    </div><!-- /logo -->
                                </div>
                            </div><!-- /col -->
                            <div
                                class="col-xxl-6 col-xl-7 col-lg-7 col-md-1 col-sm-1 col-1 pr-0 pl-0 d-flex align-items-center justify-content-center position-static d-none d-lg-block">
                                <div class="main-menu main-menu-3">
                                    <nav id="mobile-menu">
                                        <ul class="d-block">
                                            <li>
                                                <a class="{{ (request()->is('home')) ? 'active' : '' }} {{ (request()->is('/')) ? 'active' : '' }}" href="home">Home</a>
                                            </li>
                                            <li>
                                                <a class="{{ (request()->is('shop')) ? 'active' : '' }}" href="shop">Shop</a>
                                            </li>
                                            <li>
                                                <a class="{{ (request()->is('aboutus')) ? 'active' : '' }}" href="aboutus">About Us</a>
                                            </li>
                                            <li>
                                                <a class="{{ (request()->is('contactus')) ? 'active' : '' }}" href="contactus">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!-- /main-menu -->
                            </div><!-- /col -->
                            <div
                                class="col-xxl-3 col-xl-3  col-lg-2 col-md-8  col-sm-3 col-4  pl-0 d-flex  align-items-center justify-content-end">
                                <div class="header-right d-flex align-items-center">

                                    <ul class="h-shop position-relative pl-25 d-md-block">
                                        <li class="position-relative">
                                            <!-- /header-cart-wrapper -->

                                            <div
                                                class="header-shopping-cart-details border-t-gray1 mt-1 position-absolute bg-white pl-30 pr-30 pt-35 pb-60">
                                                <div class="h-shop-cart-contetn pt-20 over-x-hidden over-y-scroll">
                                                    <h5 class="mb-30 font500 position-relative hvr3">Your Cartdddd</h5>
                                                    <p>No products in the cart.</p>
                                                </div>
                                                <div class="d-sm-flex justify-content-between">
                                                    <a data-animation="fadeInUp" data-delay="1.7s" href="#"
                                                        class="web-btn h2-web-btn mt-25 d-inline-block text-uppercase white h3-theme-bg position-relative over-hidden pl-30 pr-30 ptb-12 line-height-1 font12">view
                                                        cart</a>
                                                    <a data-animation="fadeInUp" data-delay="1.7s" href="#"
                                                        class="web-btn h2-web-btn mt-25 d-inline-block text-uppercase white h3-theme-bg position-relative over-hidden pl-30 pr-30 ptb-12 line-height-1 font12">checkout</a>
                                                </div>
                                            </div><!-- /header-shopping-cart -->
                                        </li>
                                    </ul><!-- /h-shop -->
                                    <div class="d-block d-lg-none">
                                        <a class="mobile-menubar pt-0 ml-20" href="javascript:void(0);"><span
                                                class="icon-menu"></span></a>
                                    </div><!-- /mobile-menubar -->
                                </div><!-- /header-right -->
                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /header-bottom -->
                </div><!-- /container-f -->
            </div><!-- /header -->
        </div><!-- /header-area -->
    </header>
    <!--  header-area-end  -->

    <!--  ====== header extra info start================================== -->
    <!-- side-mobile-menu start -->
    <div class="side-mobile-menu bg-white pt-20 pb-30 pl-40 pr-40 pb-100 hm3">
        <div class="close-icon d-flex justify-content-end mt-0">
            <a class="close-menu d-block" href="javascript:void(0);"><span class="icon-clear"></span></a>
        </div>

        <div class="mobile-menu mt-10"></div><!-- /header-right -->


        <h6 class="light-black-color2 font600 mt-30 pb-1 border-primary-b d-inline-block">Contact us</h6>
        <ul class="contact-add mt-20">
            <li class="mb-15 primary-color">
                <span class="pr-1"><i class="fas fa-map-marker-alt"></i></span>
                PO Box 16122 Collins Street Victoria 8007 Australia
            </li>
            <li class="mb-20 primary-color">
                <span class="pr-1"><i class="far fa-envelope"></i></span>
                contact@example.com
            </li>
            <li class="mb-15">
                <a class=" primary-color" href="tell:+01500123994"><span class="pr-1"><i
                            class="fas fa-phone"></i></span> +01 500 123 994</a>
            </li>
        </ul>
    </div><!-- /side-mobile-menu -->
    <div class="body-overlay"></div>
    <!-- header extra info end  -->

    <!-- header search details start -->
    <div class="header-search-details text-center white-bg pt-55 pl-60 pr-60">
        <div class="close-icon d-flex justify-content-end mt-20">
            <a class="close-menu d-block" href="javascript:void(0);"><span class="icon-clear"></span></a>
        </div>
        <div class="header-search-content mt-100 ml-130 mr-130">
            <h3 class="">Search in:</h3>
            <ul class="d-flex justify-content-center mt-25">
                <li><a class="active" href="shop.html">All categories</a></li>
                <li><a href="shop.html">Clothing</a></li>
                <li><a href="shop.html">Electronics</a></li>
                <li><a href="shop.html">Home Accessories</a></li>
                <li><a href="shop.html">Best selling product</a></li>
            </ul>
            <form action="#" class="position-relative mt-50">
                <input class="form-control rounded-0 h5-theme-color" type="text" placeholder="Enter Keyword...">
                <a class="position-absolute primary-color d-block" href="#"><span class="icon-search"></span></a>
            </form>
        </div>
    </div><!-- /extra-info -->
    <!-- header extra info end  -->