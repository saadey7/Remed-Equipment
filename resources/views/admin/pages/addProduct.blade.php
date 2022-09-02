@extends('admin.layouts.layouts')
@section('content')
<style>
th,
td {
    text-align: center;
}

@media (max-width: 768px) {
    .table{

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
                    <h1 class="m-0 text-dark">Add Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active text-dark">Add Products</li>
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
                <div class="mt-2">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#myModal">
                        Add New Product
                    </button>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="store" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="product_name"
                                                        placeholder="Enter Product Name" aria-label="Username"
                                                        aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="product_model"
                                                        placeholder="Enter Product Model" aria-label="Username"
                                                        aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="input-group mb-3">
                                                    <input type="price" min="1" class="form-control"
                                                        name="product_price" placeholder="Enter Product Price"
                                                        aria-label="Amount (to the nearest dollar)">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group mb-3">
                                                    <select name="product_category" class="form-control">
                                                        <option selected disabled>Select Category</option>
                                                        <option value="Higiene">Higiene</option>
                                                        <option value="Equipment">Equipment</option>
                                                        <option value="Dentist">Dentist</option>
                                                        <option value="Needles">Needles</option>
                                                        <option value="Oxygen">Oxygen</option>
                                                        <option value="Devices">Devices</option>
                                                        <option value="Medicine">Medicine</option>
                                                        <option value="Otoscope">Otoscope</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" accept="image/*" name="image" onchange="loadFile(event)"
                                                required>
                                            <img id="output" width="50" height="50" />
                                        </div>

                                        <label for="description" class="form-label">Product Short Description</label>
                                        <div class="input-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                name="short_description" rows="3"></textarea>
                                        </div>
                                        <br>
                                        <label for="description" class="form-label">Product Long Description</label>
                                        <div class="input-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                name="long_description" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add Product</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Featured Product</th>
                        <th scope="col">Most Purchased</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td><img src="{{$data->product_image}}" alt="" width="50" height="50"></td>
                        <td>{{$data->product_name}}</td>
                        <td>Rs {{$data->product_price}}</td>
                        <td>
                            @if($data->featured_product == 1)
                            <form id="formName" action="feature" method="post">
                                @csrf
                                <input type="hidden" name="pro_id" value="{{$data->id}}">
                                <button type="submit"
                                    style="border:none; background:none; font-size:30px; color:green;">
                                    <i class="fas fa-check-square"></i>
                                </button>
                            </form>
                            @endif
                            @if($data->featured_product == 0)
                            <form id="formName" action="feature" method="post">
                                @csrf
                                <input type="hidden" name="pro_id" value="{{$data->id}}">
                                <button type="submit" style="border:none; background:none; font-size:30px;">
                                    <i class="far fa-square"></i>
                                </button>
                            </form>
                            @endif
                        </td>
                        <td>
                            @if($data->purchased_item == 1)
                            <form id="formName" action="most_purchase" method="post">
                                @csrf
                                <input type="hidden" name="pro_id" value="{{$data->id}}">
                                <button type="submit"
                                    style="border:none; background:none; font-size:30px; color:green;">
                                    <i class="fas fa-check-square"></i>
                                </button>
                            </form>
                            @endif
                            @if($data->purchased_item == 0)
                            <form id="formName" action="most_purchase" method="post">
                                @csrf
                                <input type="hidden" name="pro_id" value="{{$data->id}}">
                                <button type="submit" style="border:none; background:none; font-size:30px;">
                                    <i class="far fa-square"></i>
                                </button>
                            </form>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#update{{$data->id}}"><i class="fas fa-edit"></i></button>
                            <div class="modal fade" id="update{{$data->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <form action="update" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="product_name"
                                                                value="{{$data->product_name}}" aria-label="Username"
                                                                aria-describedby="basic-addon1" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="product_model"
                                                                value="{{$data->product_model}}" aria-label="Username"
                                                                aria-describedby="basic-addon1" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="input-group mb-3">
                                                            <input type="price" min="1" class="form-control"
                                                                name="product_price" value="{{$data->product_price}}"
                                                                aria-label="Amount (to the nearest dollar)">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="input-group mb-3">
                                                            <select name="product_category" class="form-control">
                                                                <option selected>{{$data->product_category}}</option>
                                                                <option value="Higiene">Higiene</option>
                                                                <option value="Equipment">Equipment</option>
                                                                <option value="Dentist">Dentist</option>
                                                                <option value="Needles">Needles</option>
                                                                <option value="Oxygen">Oxygen</option>
                                                                <option value="Devices">Devices</option>
                                                                <option value="Medicine">Medicine</option>
                                                                <option value="Otoscope">Otoscope</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <input type="file" accept="image/*" name="product_image"
                                                        value="{{$data->product_image}}" onchange="File(event)"
                                                        required>
                                                    <img id="output1" width="50" height="50"
                                                        src="{{$data->product_image}}" />
                                                </div>

                                                <label for="description" class="form-label text-left">Product Short
                                                    Description</label>
                                                <div class="input-group">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        name="short_description"
                                                        rows="3">{{$data->product_short_description}}</textarea>
                                                </div>
                                                <br>
                                                <label for="description" class="form-label text-left">Product Long
                                                    Description</label>
                                                <div class="input-group">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        name="long_description"
                                                        rows="3">{{$data->product_long_description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update Product</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#delete{{$data->id}}"><i class="fas fa-trash"></i></button>
                            <div class="modal fade" id="delete{{$data->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <form action="delete" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                <p>Are you sure you want to delete this product?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-danger">Yes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
    <script>
    var File = function(event) {
        var output = document.getElementById('output1');
        output.src = URL.createObjectURL(event.target.files[0]);
        output = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
    </script>
    <script>
    $(document).ready(function() {
        $("#formname").on("change", "input:checkbox", function() {
            $("#formname").submit();
        });
    });
    </script>
</div>
@endsection