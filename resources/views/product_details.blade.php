@extends('layouts.weblayout')
@section('content')
<!-- ======slider-area-start=========================================== -->
<div class="slider-area over-hidden">
    <div class="single-slider page-height3 d-flex align-items-center"
        data-background="/Web/images/bg/purchased-item-bg.jpg">
        <div class="container">
            <div class="row">
                <div
                    class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div class="page-title mt-10 text-center">
                        <h2 class="text-capitalize font600 mb-10">Product details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a class="primary-color" href="index.html">Home</a></li>
                                <li class="breadcrumb-item active text-capitalize" aria-current="page">Product details
                                </li>
                            </ol>
                        </nav>
                    </div><!-- /page title -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /single-slider -->
</div>
<!-- slider-area-end=  -->


<!-- ====== shop page product-details-area-start================================ -->
<div class="product-details-area pro-top-thamb pro-bottom-thamb pt-80">
    @foreach($data as $data)
    <div class="container">
        <!-- product-details-tab-area start -->
        <div class="product-details-content">
            <div class="single-product-tab-content tab-content" id="myTabContent2">
                <div class="row">
                    <div class="col-xxl-7 col-xl-7  col-lg-6  col-md-11  col-sm-12 col-12">
                        <div class="product-left-img-tab mt-20">

                            <div class="d-flex align-items-start">
                                <!-- tab-nav -->

                                <!-- tab-content -->
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active position-relative" id="v-pills-home"
                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="product-gallery-btn position-absolute z-index1 right0 mt-10 mr-10">
                                            <a href="{{$data->product_image}}"
                                                class="zoom-gallery dark-black-color bg-white d-inline-block m-2 "
                                                data-fancybox="images"><i class="fas fa-compress"></i><img
                                                    class="width100 d-none" src="{{$data->product_image}}" alt=""></a>
                                        </div><!-- /product-gallery-btn -->
                                        <div class="product-img border-gray2">
                                            <img src='{{$data->product_image}}' alt="product" style="width: 600px;" />
                                        </div><!-- /product-img -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- /product-left-img-tab -->
                    </div><!-- /col -->
                    <div class="col-xxl-5 col-xl-5  col-lg-6  col-md-11  col-sm-12 col-12">
                        <div class="product-view-info mt-30">
                            <div class="product-left-img-info">
                                <h3 class="mb-20">{{$data->product_name}}</h3>
                                <div class="price pb-18">
                                    <span class="rc-price font700">Rs. {{$data->product_price}}</span>
                                </div>
                                <div class="p-info-text pr-55">
                                    <p class="gray-color2">{{$data->product_short_description}}</p>
                                </div>
                                <div class="all-info d-sm-flex align-items-center mt-35">
                                    <div class="pro-list-btn d-inline-block mr-10 mb-15">
                                        <button type="button" class="web-btn h2-theme-border1 d-inline-block rounded-0 text-capitalize white h2-theme-bg position-relative over-hidden pl-35 pr-35 ptb-17" data-toggle="modal"
                                            data-target="#myModal">
                                            Request For Quote
                                        </button>
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Request For Quote
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <form action="sendQuote" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-lg-6 input-group mb-3">
                                                                    <input type="product_name" class="form-control"
                                                                        name="product_name"
                                                                        value="{{$data->product_name}}"
                                                                        aria-label="Username"
                                                                        aria-describedby="basic-addon1" readonly>
                                                                </div>
                                                                <div class="col-lg-6 input-group mb-3">
                                                                    <input type="product_name" class="form-control"
                                                                        name="product_model"
                                                                        value="{{$data->product_model}}"
                                                                        aria-label="Username"
                                                                        aria-describedby="basic-addon1" readonly>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-lg-6 input-group mb-3">
                                                                    <input type="hidden" name="product_id" value="{{$data->id}}">
                                                                    <input type="text" class="form-control"
                                                                        name="username"
                                                                        placeholder="Enter Your Name"
                                                                        aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>
                                                                </div>
                                                                <div class="col-lg-6 input-group mb-3">
                                                                    <input type="email" class="form-control"
                                                                        name="email"
                                                                        placeholder="Enter Your Email"
                                                                        aria-label="Email"
                                                                        aria-describedby="basic-addon1" required>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-4 input-group mb-3">
                                                                    <input type="text" class="form-control"
                                                                        name="company"
                                                                        placeholder="Company Name"
                                                                        aria-label="Username"
                                                                        aria-describedby="basic-addon1">
                                                                </div>
                                                                <div class="col-lg-4 input-group mb-3">
                                                                    <input type="tel" class="form-control"
                                                                        name="number"
                                                                        placeholder="Contact Number"
                                                                        aria-label="Contact Number"
                                                                        aria-describedby="basic-addon1" required>
                                                                </div>
                                                                <div class="col-lg-4 input-group mb-3">
                                                                    <input type="country" class="form-control"
                                                                        name="country"
                                                                        placeholder="Country"
                                                                        aria-label="EmaCountryil"
                                                                        aria-describedby="basic-addon1" required>
                                                                </div>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="address" class="form-control"
                                                                    name="address"
                                                                    placeholder="Address"
                                                                    aria-label="Address"
                                                                    aria-describedby="basic-addon1" required>
                                                            </div>
                                                            <br>
                                                            <div class="input-group">
                                                                <textarea class="form-control"
                                                                    id="exampleFormControlTextarea1"
                                                                    name="enquiry" rows="3" placeholder="Detail of your enquiry"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Request For Quote</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="review-cat d-sm-flex align-items-center pt-20 pb-15">
                                    <li class="mb-1 mb-2 mr-6 d-inline-block">
                                        <span class="cat-title dark-black-color font600">Categories :</span>
                                    </li>
                                    <li class="mr-6 mb-2 d-inline-block position-relative">
                                        <a href="shop.html" class="gray-color2 font600">{{$data->product_category}}</a>
                                    </li>
                                </ul><!-- /review-cat -->
                            </div>
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!--  -->

            <div class="row">
                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                    <div class="product-review-tab-area mt-60">
                        <!-- ====== product-review-area-start============ -->
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active bg-transparent pl-0 title position-relative hvr2 font600"
                                    id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                            </li>
                        </ul>
                        <div class="tab-content mt-30" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="describe-area">
                                    <div class="product-details-text pr-10 mb-50">
                                        <p class="gray-color2 dc-text1 pb-6">
                                            {{$data->product_long_description}}
                                        </p>
                                    </div><!-- /review-area -->
                                </div>
                            </div>
                        </div>
                    </div><!-- product-review-area end -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /product-content -->
    </div><!-- /container -->
    @endforeach
</div>
<!-- product-area-end  -->
@endsection