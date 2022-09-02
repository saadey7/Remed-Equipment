@extends('admin.layouts.layouts')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid shadow-sm p-3 bg-white rounded">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Driver List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active text-dark">Drivers</li>
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
                        <th scope="col">Driver ID</th>
                        <th scope="col">Driver Image</th>
                        <th scope="col">Driver Name</th>
                        <th scope="col">Driver Number</th>
                        <th scope="col">Vehicle Type</th>
                        <th scope="col">Vehicle No</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($driver as $driver)
                    <tr>
                        <td scope="row">{{$driver->id}}</td>
                        <td><img src="{{$driver->image}}" alt="" width=100 height=100></td>
                        <td>{{$driver->username}}</td>
                        <td>{{$driver->phone_no}}</td>
                        <td>{{$driver->vehicle_type}}</td>
                        <td>{{$driver->vehicle_no}}</td>
                        @if($driver->status == '0')
                            <td style="color: red">Offline</td>
                        @endif
                        @if($driver->status == '1')
                            <td style="color: green">Online</td>
                        @endif
                        @if($driver->driver_approve == '0')
                            <td>
                                <form action="approve" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$driver->id}}">
                                    <button class="btn btn-warning" type="submit">Approve</button>
                                </form>
                            </td>
                        @endif
                        @if($driver->driver_approve == '1')
                            <td style="color: green">Approved</td>
                        @endif
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
    $('#myModal').on('shown.bs.modal', function() {
        let x = $(this).attr('data-id');
        alert(x);
        $('#myInput').trigger('focus')
    })
    </script> -->
</div>
@endsection