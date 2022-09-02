@extends('layouts.weblayout')
@section('content')

<style>
.name {
    background: transparent;
    border: none;
}

.name:hover {
    color: #4c80fa;
}
.name i{
    font-size:38px;
    color:#3dbebd;
}
.name i:hover{
    color:#000;
    transition:  0.5s ease-out;
}

@media (max-width: 768px) {
    .con {
        margin-top: 35%;
        margin-bottom: 25%;
    }

}
</style>
<!-- ======slider-area-start=========================================== -->
<div class="position-relative slider3">
    <div class="slider-area over-hidden slider-dots2">
        <div class="slider-active">
            <div class="single-slider slider-height3 d-flex align-items-center"
                data-background="/Web/images/slider/h3-slider1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center">
                            <div class="slider-content con position-absolutes mt--12">
                                <h2 data-animation="fadeInLeft" data-delay="1s"
                                    class="text-white mb-1 text-capitalize pb-15 font500 font-pt sell">Sell Your Used
                                    Equipment</h2>
                                <p class="text-white font300 pb-12 think" style="margin-right:40%;"
                                    data-animation="fadeInLeft" data-delay="1.5s">
                                    Thinking about replacing or disposing of your equipment, you are at the right place.
                                    At Remed equipmentwe buy high end used medical equipment from hospitals, clinics,
                                    labs, manufacturers, dsitributors and other acute fascilities and offer fast and
                                    reliable payments.
                                </p>
                                <a data-animation="fadeInUp" data-delay="1.7s" href="contactus"
                                    class="web-btn h3-web-btn  d-inline-block text-uppercase white h3-theme-bg position-relative over-hidden pl-30 pr-30 ptb-17">
                                    Contact Us</a>
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /single-slider -->
            <div class="single-slider slider-height3 d-flex align-items-center"
                data-background="/Web/images/slider/h3-slider2.jpg">
                <div class="slider-img slider-3-img" data-animation="fadeInUp" data-delay="1s">
                    <img src="/Web/images/slider/slider-img.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5  col-lg-6  col-md-6  col-sm-12 col-12 d-flex align-items-center">
                            <div class="slider-content position-absolutes mt--12 z-index1">
                                <h2 data-animation="fadeInLeft" data-delay="1s"
                                    class="text-white mb-1 text-capitalize pb-15 font500 font-pt">Buy Top Quality
                                    Equipment</h2>
                                <p class="text-white font300 pb-12" data-animation="fadeInLeft" data-delay="1.5s">
                                    Thinking about replacing or disposing of your equipment, you are at the right place.
                                    At Remed equipmentwe buy high end used medical equipment from hospitals, clinics,
                                    labs, manufacturers, dsitributors and other acute fascilities and offer fast and
                                    reliable payments.
                                </p>
                                <a data-animation="fadeInUp" data-delay="1.7s" href="shop"
                                    class="web-btn h3-web-btn  d-inline-block text-uppercase white h3-theme-bg position-relative over-hidden pl-30 pr-30 ptb-17">
                                    See Products</a>
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /single-slider -->
        </div><!-- /slider-active -->
    </div>
    <div class="slider-pattern position-absolute bottom0 right0">
        <img src="/Web/images/bg/Pattern1.png" alt="">
    </div>
</div>
<!-- slider-area-end=  -->

<!-- ====== product-items-area-start ========================================= -->
<div class="product-category-area product-category-area3 hm3 wow fadeInUp animated" data-wow-duration=".9s">
    <div class="product-category-bg white-bg position-relative">
        <div class="container  position-relative">
            <ul
                class="product-category-active h2-gray-border10 pt-25 pb-55 d-xl-flex align-items-center justify-content-between">
                <li class="single-product-category position-relative text-center d-inline-block mt-25">
                    <form action="shop">
                        <input type="hidden" name="category" value="Higiene">
                        <button type="submit" class="name"><i class="fal fa-briefcase-medical"></i></button>
                    </form>
                    <h5 class="mt-10">Higiene</h5>
                </li>
                <li class="single-product-category position-relative text-center d-inline-block mt-25">
                    <form action="shop">
                        <input type="hidden" name="category" value="Equipment">
                        <button type="submit" class="name"><i class="fal fa-stethoscope"></i></button>
                    </form>
                    <h5 class="mt-10">Equipment</h5>
                </li>
                <li class="single-product-category position-relative text-center d-inline-block mt-25">
                    <form action="shop">
                        <input type="hidden" name="category" value="Dentist">
                        <button type="submit" class="name"><i class="fal fa-tooth"></i></button>
                    </form>
                    <h5 class="mt-10">Dentist</h5>
                </li>
                <li class="single-product-category position-relative text-center d-inline-block mt-25">
                    <form action="shop">
                        <input type="hidden" name="category" value="Needles">
                        <button type="submit" class="name"><i class="fal fa-hospital-alt"></i></button>
                    </form>
                    <h5 class="mt-10">Needles</h5>
                </li>
                <li class="single-product-category position-relative text-center d-inline-block mt-25">
                    <form action="shop">
                        <input type="hidden" name="category" value="Oxygen">
                        <button type="submit" class="name"><i class="fal fa-lungs"></i></button>
                    </form>
                    <h5 class="mt-10">Oxygen</h5>
                </li>
                <li class="single-product-category position-relative text-center d-inline-block mt-25">
                    <form action="shop">
                        <input type="hidden" name="category" value="Devices">
                        <button type="submit" class="name"><i class="fal fa-stretcher"></i></button>
                    </form>
                    <h5 class="mt-10">Devices</h5>
                </li>
                <li class="single-product-category position-relative text-center d-inline-block mt-25">
                    <form action="shop">
                        <input type="hidden" name="category" value="Medicine">
                        <button type="submit" class="name"><i class="fal fa-pills"></i></button>
                    </form>
                    <h5 class="mt-10">Medicine</h5>
                </li>
                <li class="single-product-category position-relative text-center d-inline-block mt-25">
                    <form action="shop">
                        <input type="hidden" name="category" value="Otoscope">
                        <button type="submit" class="name"><i class="fal fa-procedures"></i></button>
                    </form>
                    <h5 class="mt-10">Otoscope</h5>
                </li>
            </ul>
        </div><!-- /container -->
    </div><!-- /product-category-bg -->
</div>
<!-- product-items-area-end  -->


<!-- ====== Featured-Product-area-start ========================================= -->
<div class="Featured-product-area mb-30 hm3">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-15">
                <div class="section-title pt-10 text-center">
                    <h3 class="font-pt light-black-color2 pb-1">Featured
                        Top Product</h3>
                    <p class="light-black-color7 font300">Sed ut perspiciatis undeous omniiste natusing errorings</p>
                </div><!-- /section-title -->
            </div><!-- /col -->
            <div class="row h3-purchased-product-active white-bg">
                @foreach($feature as $feature)
                <div class="col-xl-4 col-lg-12  col-md-6  col-sm-6 col-12 plr-14">
                    <div class="single-product mb-10">
                        <div class="single-product-img position-relative over-hidden">
                            <div class="most-purchased-item-img  position-relative text-center">
                                <a class="position-relative d-block" href="product-details.html">
                                    <img src="{{$feature->product_image}}" alt="product" width="251" height="251">
                                </a>
                            </div>
                            <div class="single-product-info text-center transition-3">
                                <h6 class="light-black-color2">
                                    <form action="product_details" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$feature->id}}">
                                        <button type="submit" class="name">{{$feature->product_name}}</button>
                                    </form>
                                </h6>
                                <ul class="single-product-price d-flex mt-2 transition-3 justify-content-center">
                                    <li>
                                        <span class="theme-color d-inline-block font600">Rs.
                                            {{$feature->product_price}}</span>
                                    </li>
                                </ul>
                                <!-- /single-product-price -->
                            </div>
                        </div><!-- /single-product-img -->
                    </div><!-- /single-product -->
                </div><!-- /col -->
                @endforeach
            </div><!-- /row -->
        </div><!-- /row -->
    </div><!-- /container -->
</div>
<!-- Featured-Product-area-end  -->


<!-- ====== Featured-Product-area-start ========================================= -->
<div class="off-banner-area pt-60 mb-30 hm3">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-xxl-4 col-xl-4  col-lg-4  col-md-12  col-sm-12 col-12 pb-15">
                <div class="section-title mb-50">
                    <h3 class="font-pt light-black-color2 pb-1 pr-50 mb-40">Effective & Reliable
                        Protective Equipment</h3>
                    <p class="light-black-color7 font300 pb-10">We
                        mainly export equipment to under developed
                        Countries to fascilitate health care system.</p>
                    <a data-animation="fadeInUp" data-delay="1.7s" href="shop"
                        class="web-btn h3-web-btn  d-inline-block text-uppercase white h3-theme-bg position-relative over-hidden pl-30 pr-30 ptb-17 shop-collection-btn">Shop
                        Collection</a>
                </div><!-- /section-title -->
            </div><!-- /col -->
            <div class="col-xxl-8 col-xl-8  col-lg-8  col-md-12  col-sm-12 col-12 position-relative">
                <div class="off-banner-area mb-50 pl-40 wow fadeInRight animated pr-60" data-wow-duration="1.5s">
                    <img class="width100" src="/Web/images/banner/home3/off-banner1.jpg" alt="">
                </div>
                <div class="b-pattern2 position-absolute">
                    <img src="/Web/images/bg/Pattern-banner.png" alt="">
                </div>
            </div><!-- /col -->
        </div><!-- /row -->
    </div><!-- /container -->
</div>
<!-- Featured-Product-area-end  -->


<!-- ====== product-off-banner-area-start ========================================= -->

<!-- product-off-banner-area-end  -->


<!-- ====== brand-logo-area-start ========================================= -->
<div class="brand-logo-area bg-white over-hidden hm3">
    <div class="container border-t-gray pt-70 pb-70">
        <div class="mlr--55">
            <div class="row brand-active d-flex align-items-center ">
                <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                    <div class="text-center">
                        <a href="#" class="d-block">
                            <img class="d-inline-block" src="/Web/images/brand/brand1.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                    <div class="text-center">
                        <a href="#" class="d-block">
                            <img class="d-inline-block" src="/Web/images/brand/brand2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                    <div class="text-center">
                        <a href="#" class="d-block">
                            <img class="d-inline-block" src="/Web/images/brand/brand3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                    <div class="text-center">
                        <a href="#" class="d-block">
                            <img class="d-inline-block" src="/Web/images/brand/brand4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                    <div class="text-center">
                        <a href="#" class="d-block">
                            <img class="d-inline-block" src="/Web/images/brand/brand5.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                    <div class="text-center">
                        <a href="#" class="d-block">
                            <img class="d-inline-block" src="/Web/images/brand/brand6.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                    <div class="text-center">
                        <a href="#" class="d-block">
                            <img class="d-inline-block" src="/Web/images/brand/brand3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                    <div class="text-center">
                        <a href="#" class="d-block">
                            <img class="d-inline-block" src="/Web/images/brand/brand5.png" alt="">
                        </a>
                    </div>
                </div>
            </div><!-- /brand-active -->
        </div>
    </div><!-- /container -->
</div>
<!-- brand-logo-area-end  -->


<!-- ====== most-purchased-item-area-start================================ -->
<div class="most-purchased-item-area most-purchased-item-bg2 hm3 over-hidden pt-100 pb-130"
    data-background="/Web/images/bg/purchased-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-xl-9 col-lg-10  col-md-12  col-sm-12 col-12 offset-xxl-3 offset-xl-3 offset-lg-2">
                <div class="most-purchased-item-wrapper wow fadeInRight animated" data-wow-duration="1.5s">
                    <h3 class="font-pt text-white pb-1">Most Purchased Item</h3>

                    <div class="pl-15 pr-15">
                        <div class="row most-purchased-item-active  white-bg mt-25">
                            @foreach($purchase as $purchase)
                            <div class="col-xl-4 col-lg-3  col-md-6  col-sm-6 col-12 plr-14">
                                <div class="single-product mb-10">
                                    <div class="single-product-img position-relative over-hidden">
                                        <div class="most-purchased-item-img  position-relative text-center">
                                            <a class="position-relative d-block" href="#">
                                                <img src="{{$purchase->product_image}}" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-product-info text-center transition-3">
                                            <h6 class="light-black-color2">
                                                <form action="product_details" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$purchase->id}}">
                                                    <button type="submit"
                                                        class="name">{{$purchase->product_name}}</button>
                                                </form>
                                            </h6>
                                            <ul
                                                class="single-product-price d-flex mt-2 transition-3 justify-content-center">
                                                <li>
                                                    <span
                                                        class="theme-color d-inline-block font600">{{$purchase->product_price}}</span>
                                                </li>
                                            </ul><!-- /single-product-price -->
                                        </div>
                                    </div><!-- /single-product-img -->
                                </div><!-- /single-product -->
                            </div><!-- /col -->
                            <!-- /col -->
                            @endforeach
                        </div><!-- /row -->
                    </div>
                </div><!-- /most-purchased-item-wrapper -->
            </div><!-- /col -->
        </div><!-- /row -->
    </div><!-- /container -->
</div>
<!-- most-purchased-item-area-end  -->


<!-- ====== category-lineup-area-start=========================================== -->

<!-- category-lineup-area-end -->


<!-- ====== best-Product-area-start ========================================= -->

<!-- best-Product-area-end  -->


<!-- ====== Featured-Product-area-start ========================================= -->

<!-- Featured-Product-area-end  -->


<!-- ====== testimonial-area-start ========================================= -->

<script>
window.onload = function() {
    $('.slider-active').slick({
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        slidesToShow: 1,
        slidesToScroll: 1
    });
};
</script>
@endsection