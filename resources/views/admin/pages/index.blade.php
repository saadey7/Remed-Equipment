@extends('admin.layouts.layouts')
@section('content')
<style>
.table-wrapper {
    max-height: 500px;
    overflow: auto;
    display: inline-block;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid shadow-sm p-3 bg-white rounded">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Home</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active text-dark">Home</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$products}}</h3>

                            <p>Total Products</p>
                        </div>
                        <div class="icon">
                            <i class="fab fa-product-hunt"></i>
                        </div>
                        <a href="admin/addProduct" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$quotes}}</h3>

                            <p>Total Quote</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-quote-left nav-icon"></i>
                        </div>
                        <a href="admin/order" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div>
                <h5>Today Quotes</h5>
            </div>
            <div class=" col-12 table-wrapper">
                <table class="table shadow-sm p-3 mb-2 bg-white rounded">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Order ID</th>
                            <th scope="col">User Detail</th>
                            <th scope="col">Product Detail</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($today_quote) > 1)
                        @foreach($today_quote as $today_quote)
                        <tr>
                            <td scope="row">{{$loop->index}}</td>
                            <td>
                                <div class="user-info">
                                    <div class="user-info__basic">
                                        <h5 class="mb-0">{{$today_quote->username}}</h5>
                                        <p class="text-muted mb-0">{{$today_quote->contact}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{$today_quote->product->product_image}}" alt="User Img">
                                    </div>
                                    <div class="user-info__basic">
                                        <h5 class="mb-0">{{$today_quote->product->product_name}}</h5>
                                        <p class="text-muted mb-0">${{$today_quote->product->product_price}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form action="quote_detail" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$today_quote->id}}">
                                    <button type="submit" class="btn btn-primary">View Detail</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5">
                                <div class="alert alert-warning">
                                    <strong>Sorry!</strong> No Orders today
                                </div>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <br>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection