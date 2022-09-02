@extends('admin.layouts.layouts')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid shadow-sm p-3 bg-white rounded">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Customers Quotes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active text-dark">Customers Quotes</li>
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
            <table class="table shadow-sm p-3 mb-2 bg-white rounded">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User name</th>
                        <th scope="col">User Number</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($quotes as $order)
                    <tr>
                        <td scope="row">{{$loop->index}}</td>
                        <td>{{$order->username}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->product->product_name}}</td>
                        <td>{{$order->product->product_price}}</td>
                        <td>
                            <form action="quote_detail" method ="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$order->id}}">
                                <button type="submit" class="btn btn-primary">View Detail</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
        var auto_refresh = setInterval(
            function() {
                $('#status').load('').fadeIn("slow");
            }, 1000);
    </script> -->
    <!-- <script>
    $('#myModal').on('shown.bs.modal', function() {
        let x = $(this).attr('data-id');
        alert(x);
        $('#myInput').trigger('focus')
    })
    </script> -->
</div>
@endsection