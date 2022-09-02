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
</style>
<!-- ======slider-area-start=========================================== -->
<div class="slider-area over-hidden">
    <div class="single-slider page-height3 d-flex align-items-center"
        data-background="/Web/images/bg/purchased-item-bg.jpg">
        <div class="container">
            <div class="row">
                <div
                    class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div class="page-title mt-10 text-center">
                        <h2 class="text-capitalize font600 mb-10">Our Shop</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a class="primary-color" href="index.html">Home</a></li>
                                <li class="breadcrumb-item active text-capitalize" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div><!-- /page title -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /single-slider -->
</div>
<!-- slider-area-end  -->


<!-- ====== product-area-start================================ -->
<div class="product-area shop-product mt-20 mb-100">
    <div class="container">
        <div class="product-content single-product-tab-content">
        </div><!-- /row -->
        <div class="product-wrapper mt-1">
            <div class="row">
                <div class="col-xl-3  col-lg-4  col-md-12  col-sm-12 col-12">
                    <div class="shop-sidebar-area pt-80">
                        <div class="row">
                            <div class="col-xl-12  col-lg-12  col-md-6  col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                        <div class="sidebar-widget mb-20">
                                            <h6
                                                class="mb-15 title font600 sidebar-title d-inline-block position-relative pb-1">
                                                Product Categories</h6>
                                            <ul>
                                                <li class="pb-15 d-block">
                                                    <form action="">
                                                        <input type="hidden" name="category" value="Higiene">
                                                        <input type="submit" value="Higiene" class="name">
                                                    </form>
                                                </li>
                                                <li class="pb-15 d-block">
                                                    <form action="">
                                                        <input type="hidden" name="category" value="Equipment">
                                                        <input type="submit" value="Equipment" class="name">
                                                    </form>
                                                </li>
                                                <li class="pb-15 d-block">
                                                    <form action="">
                                                        <input type="hidden" name="category" value="Dentist">
                                                        <input type="submit" value="Dentist" class="name">
                                                    </form>
                                                </li>
                                                <li class="pb-15 d-block">
                                                    <form action="">
                                                        <input type="hidden" name="category" value="Needles">
                                                        <input type="submit" value="Needles" class="name">
                                                    </form>
                                                </li>
                                                <li class="pb-15 d-block">
                                                    <form action="">
                                                        <input type="hidden" name="category" value="Devices">
                                                        <input type="submit" value="Devices" class="name">
                                                    </form>
                                                </li>
                                                <li class="pb-15 d-block">
                                                    <form action="">
                                                        <input type="hidden" name="category" value="Oxygen">
                                                        <input type="submit" value="Oxygen" class="name">
                                                    </form>
                                                </li>
                                                <li class="pb-15 d-block">
                                                    <form action="">
                                                        <input type="hidden" name="category" value="Devices">
                                                        <input type="submit" value="Devices" class="name">
                                                    </form>
                                                </li>
                                                <li class="pb-15 d-block">
                                                    <form action="">
                                                        <input type="hidden" name="category" value="Medicine">
                                                        <input type="submit" value="Medicine" class="name">
                                                    </form>
                                                </li>
                                                <li class="pb-15 d-block">
                                                    <form action="">
                                                        <input type="hidden" name="category" value="Otoscope">
                                                        <input type="submit" value="Otoscope" class="name">
                                                    </form>
                                                </li>
                                            </ul>
                                        </div><!-- /sidebar-widget -->
                                    </div><!-- /col -->
                                    <!-- /col -->
                                </div><!-- /row -->
                            </div><!-- /col -->
                            <!-- /col -->
                            <!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /shop-sidebar-area -->
                </div><!-- /col -->
                <div class="col-xl-9  col-lg-8  col-md-12  col-sm-12 col-12">

                    <!-- shop-header start -->
                    <div class="row">
                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                            <div class="shop-header pt-70 mb-20">
                                <div class="row align-items-center position-relative s-top-nv">
                                    <div
                                        class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-15 position-static pl-xl-0">
                                        <div
                                            class="shop-header-right d-flex align-items-center justify-content-between">
                                            <ul class="d-flex  align-items-center s-fil-vm clear-both">
                                                <li>
                                                    <div class="view-mode d-flex align-items-center">
                                                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link active border-0"
                                                                    id="profile-tab" data-bs-toggle="tab"
                                                                    data-bs-target="#profile" type="button" role="tab"
                                                                    aria-controls="profile-tab" aria-selected="false">
                                                                    <span><i class="fas fa-bars"></i></span>
                                                                </button>
                                                            </li>
                                                        </ul><!-- /view-mode-tab nav -->
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /col -->
                                </div><!-- /row -->
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                    <!-- shop-header end -->

                    <!-- shop-content start -->

                    <div class="tab-content" id="myTabContent">
                        <!-- product-list-area -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            @foreach($data as $data)
                            <div class="row">
                                <div class="single-pro-list d-sm-flex p-0 px-0">
                                    <div class="col-xl-5 col-lg-5  col-md-5  col-sm-5 col-12 plr-14">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img class=" border-gray1" src="{{$data->product_image}}"
                                                        alt="product" width="100%" height="210">
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- /col -->
                                    <div class="col-xl-7 col-lg-7  col-md-7  col-sm-7 col-12 plr-14">
                                        <div class="single-product-info  mb-40">
                                            <h5 class="light-black-color2 font500">
                                                <form action="product_details" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$data->id}}">
                                                    <button type="submit" class="name">{{$data->product_name}}</button>
                                                </form>
                                                <ul class="single-product-price d-flex mt-2 mb-15">
                                                    <li>
                                                        <span class="theme-color d-inline-block font600">Rs.
                                                            {{$data->product_price}}</span>
                                                    </li>
                                                </ul><!-- /single-product-price -->
                                                <p class="light-black-color5 font300 mb-40">
                                                    {{$data->product_short_description}}</p>
                                                <div class=" d-flex align-items-center mb-25">
                                                    <div class="pro-list-btn d-inline-block">
                                                        <button type="button"
                                                            class="web-btn h2-theme-border1 d-inline-block rounded-0 text-capitalize white h2-theme-bg position-relative over-hidden pl-35 pr-35 ptb-17"
                                                            data-toggle="modal" data-target="#myModal{{$data->id}}">
                                                            Request For Quote
                                                        </button>
                                                        <div class="modal fade" id="myModal{{$data->id}}" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Request For Quote
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close"
                                                                            style="background:transparent; border:none;">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <form action="sendQuote" method="post"
                                                                        enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-lg-6 input-group mb-3">
                                                                                    <input type="product_name"
                                                                                        class="form-control"
                                                                                        name="product_name"
                                                                                        value="{{$data->product_name}}"
                                                                                        aria-label="Username"
                                                                                        aria-describedby="basic-addon1"
                                                                                        readonly>
                                                                                </div>
                                                                                <div class="col-lg-6 input-group mb-3">
                                                                                    <input type="product_name"
                                                                                        class="form-control"
                                                                                        name="product_model"
                                                                                        value="{{$data->product_model}}"
                                                                                        aria-label="Username"
                                                                                        aria-describedby="basic-addon1"
                                                                                        readonly>
                                                                                </div>
                                                                            </div>


                                                                            <div class="row">
                                                                                <div class="col-lg-6 input-group mb-3">
                                                                                    <input type="hidden"
                                                                                        name="product_id"
                                                                                        value="{{$data->id}}">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="username"
                                                                                        placeholder="Enter Your Name"
                                                                                        aria-label="Username"
                                                                                        aria-describedby="basic-addon1"
                                                                                        required>
                                                                                </div>
                                                                                <div class="col-lg-6 input-group mb-3">
                                                                                    <input type="email"
                                                                                        class="form-control"
                                                                                        name="email"
                                                                                        placeholder="Enter Your Email"
                                                                                        aria-label="Email"
                                                                                        aria-describedby="basic-addon1"
                                                                                        required>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-lg-4 input-group mb-3">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="company"
                                                                                        placeholder="Company Name"
                                                                                        aria-label="Username"
                                                                                        aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="col-lg-4 input-group mb-3">
                                                                                    <input type="tel"
                                                                                        class="form-control"
                                                                                        name="number"
                                                                                        placeholder="Contact Number"
                                                                                        aria-label="Contact Number"
                                                                                        aria-describedby="basic-addon1"
                                                                                        required>
                                                                                </div>
                                                                                <div class="col-lg-4 input-group mb-3">
                                                                                    <input type="country"
                                                                                        class="form-control"
                                                                                        name="country"
                                                                                        placeholder="Country"
                                                                                        aria-label="EmaCountryil"
                                                                                        aria-describedby="basic-addon1"
                                                                                        required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-group">
                                                                                <input type="address"
                                                                                    class="form-control" name="address"
                                                                                    placeholder="Address"
                                                                                    aria-label="Address"
                                                                                    aria-describedby="basic-addon1"
                                                                                    required>
                                                                            </div>
                                                                            <br>
                                                                            <div class="input-group">
                                                                                <textarea class="form-control"
                                                                                    id="exampleFormControlTextarea1"
                                                                                    name="enquiry" rows="3"
                                                                                    placeholder="Detail of your enquiry"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Request For
                                                                                Quote</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div><!-- /single-product-img -->
                                    </div><!-- /col -->
                                </div><!-- /single-pro-list -->
                            </div>
                            @endforeach
                        </div><!-- /tab-pane 1 -->
                    </div>

                    <!-- ====== pagination-area-start================================ -->
                    <div class="pagination-area mt-50 over-hidden position-relative">
                        <div class="row">
                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                <nav class="pagination-page" aria-label="Page navigation example">
                                    <ul class="pagination align-items-center justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link prev" href="#">
                                                <i class="fas fa-angle-left"></i>
                                                Prev
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item">
                                            <a class="page-link next" href="#">
                                                Next <i class="fas fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div>
                    <!-- ====== pagination-area-start================================ -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /product-wrapper -->
    </div><!-- /product-content -->
</div><!-- /container -->
@endsection