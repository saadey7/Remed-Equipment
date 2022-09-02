@extends('admin.layouts.layouts')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid shadow-sm p-3 bg-white rounded">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">User List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active text-dark">Users</li>
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
                        <th scope="col">User ID</th>
                        <th scope="col">User Image</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User Number</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $user)
                        <tr>
                            <td scope="row">{{$user->id}}</td>
                            <td><img src="{{$user->image}}" alt="" width=100 height=100></td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->phone_no}}</td>
                            @if($user->status == '0')
                                <td style="color: red">Offline</td>
                            @endif
                            @if($user->status == '1')
                                <td style="color: green">Online</td>
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