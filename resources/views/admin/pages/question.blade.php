@extends('admin.layouts.layouts')
@section('content')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/admin/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Question</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="pd-20">
                <div class="modal fade bs-example-modal-lg" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="modelHeading">Add new Question</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="ItemForm" name="ItemForm"  enctype="multipart/form-data">
                                <input type="hidden" name="Item_id" id="Item_id">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" type="text" id="title" name="title">
                                    </div>

                                    <hr>
                                    <div class="row csv-import">
                                        <div class="text-center col-md-12 col-sm-12">
                                            <h4>Import by CSV or Excel</h4>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <input class="form-control-file" type="file" id="import_file" name="import_file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="action_button" id="saveBtn" value="create" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col-md-4">
                        <i class="fas fa-table"></i>
                        Question
                    </div>
                    <div class="col-md-8">
                        <div class="pull-right">
                            <a href="#" class=" float-right btn btn-primary btn-sm "  id="createNewItem" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
                                Add Question
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered data-table-level"  width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Question ID</th>
                            <th>Title</th>
                            <th class="datatable-nosort" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!--End Section -->
        @endsection
        @section('page-script')
            <script type="text/javascript">
                $(function () {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var table = $('.data-table-level').DataTable({
                        buttons: ['csv', 'excel', 'pdf', 'print'],
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('question.index') }}",
                        scrollCollapse: true,
                        autoWidth: false,
                        responsive: true,
                        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                        language: {
                            info: "_START_-_END_ of _TOTAL_ entries",
                            searchPlaceholder: "Search",

                        },
                        columns: [
                            {data: 'id', name: 'id'},
                            {data: 'title', name: 'title'},
                            {data: 'action', name: 'action', orderable: false, searchable: false},
                        ]

                    });

//Create New Notification
                    $('#createNewItem').click(function () {
                        $('.ajax-loader').css("visibility", "visible");
                        $('#image-container').empty();
                        $('#saveBtn').show();
                         $('.csv-import').show();
                        $('input').attr('readonly', false);
                        $('textarea').attr('readonly', false);
                        $('input:radio').attr('disabled', false);
                        $('#saveBtn').val("create-Item");
                        $('#Item_id').val('');
                        $('#hidden_image').val('');
                        $('#category-modal-preview').attr('src', 'https://via.placeholder.com/150');
                        $('#ItemForm').trigger("reset");
                        $('#modelHeading').html("Create New Category");
                        $('#ajaxModel').modal('show');
                        $('.ajax-loader').css("visibility", "hidden");
                    });

//Submit Edit and Create
                    $('body').on('submit', '#ItemForm', function (e) {
                        e.preventDefault();
                        $('#saveBtn').html('Sending..');
                        var formData = new FormData(this);
                        $.ajax({
                            data: formData,
                            url: "{{ route('question.store') }}",
                            type: "POST",
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function (data) {
                                $('#saveBtn').html('Save Changes');
                                $('#ItemForm').trigger("reset");
                                $('#ajaxModel').modal('hide');
                                table.draw();
                            },
                            error: function (data) {
                                alert(data.error);
                                $('#saveBtn').html('Save Changes');
                            }
                        });
                    });



//Edit
                    $('body').on('click', '.editItem', function () {
                        $('.ajax-loader').css("visibility", "visible");
                        $('#category-modal-preview').attr('src', 'https://via.placeholder.com/150');
                        $('#saveBtn').show();
                         $('.csv-import').hide();
                        $('input').attr('readonly', false);
                        $('textarea').attr('readonly', false);
                        $('input:radio').attr('disabled', false);
                        var Item_id = $(this).data('id');
                        $.get("{{ route('question.index') }}" +'/' + Item_id +'/edit', function (data) {
                            $('#modelHeading').html("Edit Category");
                            $('#saveBtn').val("edit-category");
                            $('#ajaxModel').modal('show');
                            $('#Item_id').val(data.id);
                            $('#title').val(data.title);

                            $('.ajax-loader').css("visibility", "hidden");
                        })
                    });

//View
                    $('body').on('click', '.viewItem', function () {
                        $('.ajax-loader').css("visibility", "visible");
                        $('#category-modal-preview').attr('src', 'https://via.placeholder.com/150');
                        var Item_id = $(this).data('id');
                        $.get("{{ route('question.index') }}" +'/' + Item_id +'/edit', function (data) {
                            $('#modelHeading').html("View Category");
                            $('#saveBtn').hide();
                            $('#ItemForm input').attr('readonly', true);
                            $('#ItemForm textarea').attr('readonly', true);
                            $('#ItemForm #thumbnail_image').hide();
                            $('#ItemForm input:radio').attr('disabled', true);
                            $('#ajaxModel').modal('show');
                            $('#Item_id').val(data.id);
                            $('#title').val(data.title);
                            $('.ajax-loader').css("visibility", "hidden");
                        })
                    });


//Delete
                    $('body').on('click', '.deleteItem', function () {

                        var Item_id = $(this).data("id");

                        // if( confirm("Are You sure want to delete !"))
                        // {
                            $.ajax({
                                type: "DELETE",
                                url: "{{ route('question.store') }}"+'/'+Item_id,
                                success: function (data) {
                                    table.draw();
                                },
                                error: function (data) {
                                    console.log('Error:', data);
                                }
                            });
                        // }

                    });

                });

                function readURL(preview,hidden,id) {
                    var $i = $("#" + id), // Put file input ID here
                        input = $i[0]; // Getting the element from jQuery
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $("#" + preview).attr('src', e.target.result);
                        };
                        reader.readAsDataURL(input.files[0]);
                        $("#" + preview).removeClass(hidden);
                        $('#start').hide();
                    }
                }


            </script>
@endsection
