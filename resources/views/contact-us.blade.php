@extends('layouts.weblayout')
@section('content')
<!-- ======slider-area-start=========================================== -->
<div class="slider-area over-hidden">
    <div class="single-slider page-height3 d-flex align-items-center" data-background="/Web/images/bg/image.jpg">
        <div class="container">
            <div class="row">
                <div
                    class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div class="page-title mt-10 text-center">
                        <h2 class="text-capitalize font600 mb-10" style="color:white;">Contact us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a class="primary-color" href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active text-capitalize" aria-current="page">Contact
                                    us</li>
                            </ol>
                        </nav>
                    </div><!-- /page title -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /single-slider -->
</div>
<!-- slider-area-end  -->

<!-- ====== map-area-start=============================================== -->
<div class="map-area mt-100">
    <div class="container">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.739437128524!2d-112.03815768505712!3d40.6576737793378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87528d869d1ee20d%3A0x335b2f731059605a!2sUSANA%20Amphitheatre!5e0!3m2!1sen!2sbd!4v1608483260130!5m2!1sen!2sbd"></iframe>
        </div><!-- /map -->
    </div><!-- /container -->
</div>
<!-- map-area-end -->

<!-- ====== contact-area-start================================ -->
<div class="contact-area">
    <div class="container">
        <div class="row pb-100">
            <div class="col-xl-6  col-lg-6  col-md-12  col-sm- col-">
                <div class="contact-form-left mt-60">
                    <div class="section-title text-left">
                        <h4 class="c-title mb-35 font600 title d-inline-block position-relative">Our Main Office
                        </h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div><!-- /section-title -->
                    <div class="c-contact d-sm-flex">
                        <span class="black-color pr-1">Address: &nbsp;&nbsp;</span>
                        <p class="primary-color">1234 Heaven Stress, Beverly Hill, Melbourne, USA.</p>
                    </div>
                    <div class="c-email d-sm-flex">
                        <span class="black-color pr-1">Email: &nbsp;&nbsp;</span>
                        <p class="primary-color">Contact@homesstheme.com</p>
                    </div>
                    <div class="c-number d-sm-flex">
                        <span class="black-color pr-1">Number Phone: &nbsp;&nbsp;</span>
                        <p class="primary-color">(800) 123 456 789, (800) 987 654 321</p>
                    </div>
                    <div class="c-fax d-sm-flex">
                        <span class="black-color pr-1">Fax: &nbsp;&nbsp;</span>
                        <p class="primary-color">(+100) 123 456 7890 – (+100) 123 456 7891</p>
                    </div>
                    <div class="c-social-link d-sm-flex align-items-center mt-15">
                        <span class="primary-color d-inline-block pr-10">Social Share:</span>
                        <ul class="social-link d-flex  align-items-center">
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div><!-- /c-social-link -->
                </div>
            </div><!-- /col -->
            <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                <div class="contact-form-right mt-60">
                    <h4 class="c-title mb-35 font600 title d-inline-block position-relative">Drop Us A Message
                    </h4>
                    <form action="#">
                        <div class="contact-form">
                            <label>Name</label>
                            <div class="name">
                                <input type="text" class="form-control primary-bg2 border-0 mt-2 py-2" name="r-name"
                                    id="r-name">
                            </div>
                            <label class="mt-25">Email</label>
                            <div class="email">
                                <input type="email" class="form-control primary-bg2 border-0 mt-2  py-2" name="email"
                                    id="r-email">
                            </div>
                            <label class="mt-25">Your Message</label>
                            <textarea name="message" class="form-control primary-bg2 border-0 mt-2 pt-30 pb-30"
                                id="message"></textarea>
                        </div><!-- /name-and-email -->
                        <a href="#"
                            class="web-btn d-inline-block text-capitalize white mt-40  h2-theme-color position-relative over-hidden pl-50 pr-50 ptb-17"
                            style="background-color: #43d5cb; border: 1px solid #43d5cb; border-radius: 0.25rem;">send
                            message</a>
                    </form>
                </div>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</div>
<!-- contact-area-end  -->
@endsection