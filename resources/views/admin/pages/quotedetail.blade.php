@extends('admin.layouts.layouts')
@section('content')
<style>
    #main-image{
        width:400px;
        height:300px;
    }
    @media (min-width: 820px) and (max-width: 1180px) {
        #main-image{
            width: 100%;
        }
    }
    @media (max-width: 768px){
        #main-image{
            width: 100%;
            height: 100%;
        }
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid shadow-sm p-3 bg-white rounded">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Quote Detail</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Quote</a></li>
                        <li class="breadcrumb-item active text-dark">Quote Detail</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        @include('admin.pages.flash-message')
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card" style="padding: 3px 20px 3px 20px">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="images p-3">
                                    <div class="text-center p-4"> <img id="main-image"
                                            src="{{$quote->product->product_image}}" /> </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product p-4">
                                    <div class="mt-4 mb-3">
                                        <p class="lead fw-bold mb-3" style="color: #f37a27;">Product Detail</p>
                                        <div class="row">
                                            <div class="col-6 mb-3">
                                                <p class="small text-muted mb-1">Name</p>
                                                <p>{{$quote->product->product_name}}</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <p class="small text-muted mb-1">Model</p>
                                                <p>{{$quote->product->product_model}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mb-3">
                                                <p class="small text-muted mb-1">Price</p>
                                                <p>{{$quote->product->product_price}}</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <p class="small text-muted mb-1">Category</p>
                                                <p>{{$quote->product->product_category}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="about">{{$quote->product->product_short_description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-3">
                                <p class="lead fw-bold mb-3" style="color: #f37a27;">User Detail</p>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <p class="small text-muted mb-1">Name</p>
                                        <p>{{$quote->username}}</p>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <p class="small text-muted mb-1">Email</p>
                                        <p>{{$quote->email}}</p>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <p class="small text-muted mb-1">Mobile Number</p>
                                        <p>{{$quote->contact}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <p class="small text-muted mb-1">Company Name</p>
                                        <p>{{$quote->company}}</p>
                                    </div>
                                    <div class="col-8 mb-3">
                                        <p class="small text-muted mb-1">Address</p>
                                        <p>{{$quote->address}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <p class="small text-muted mb-1">Enquiry</p>
                                        <p>{{$quote->enquiry}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
    </script>
    <!-- <script>
    $('#myModal').on('shown.bs.modal', function() {
        let x = $(this).attr('data-id');
        alert(x);
        $('#myInput').trigger('focus')
    })
    </script> -->
</div>
@endsection