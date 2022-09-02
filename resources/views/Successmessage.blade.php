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
                        <h2 class="text-capitalize font600 mb-10" style="color:white;"></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a class="primary-color" href="index.html"></a>
                                </li>
                                <li class="breadcrumb-item active text-capitalize" aria-current="page">
                                </li>
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
            <div class="row justify-content-center">
                <div class="col-6 jumbotron text-center">
                    <i class="fas fa-check-circle" style="font-size:120px; color:green;"></i>
                    <br><br><br>
                    <p class="lead"><strong>Your Quote Successfully Send</p>
                    <hr>
                    <p class="lead">
                        <form action="product_details" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                            <button type="submit" class="btn btn-primary">Go To Back</button>
                        </form>
                    </p>
                </div>
            </div>
            <!-- /row -->
        </div><!-- /product-wrapper -->
    </div><!-- /product-content -->
</div><!-- /container -->
<!-- product-area-end  -->
@endsection