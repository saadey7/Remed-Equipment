@extends('admin.layouts.layouts')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/admin/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Question Option</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="pd-20">
                <div class="modal fade bs-example-modal-lg" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="modelHeading">Add new Question Option</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="ItemForm" name="ItemForm"  enctype="multipart/form-data">
                                <input type="hidden" name="Item_id" id="Item_id">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Option Name</label>
                                                <input class="form-control" type="text" id="title" name="title" >
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Question</label>
                                                <select class="js-example-basic-single form-control " id="question_id" name="question_id">
                                                    @foreach($questions as $question)
                                                  <option value="{{$question->id}}">{{$question->title}}</option>
                                                  @endforeach
                                                </select>
                                            </div>
                                        </div>

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
                        Question Option
                    </div>
                    <div class="col-md-8">
                    <div class="pull-right">
                           <a href="#" class=" float-right btn btn-primary btn-sm "  id="createNewItem" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
                              Add Question Option
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
                            <th>No</th>
                            <th>Question</th>
                            <th>Option</th>
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
                        dom: 'Bfrtip',
                        "buttons": [
                            {
                                "extend": 'excel',
                                "text": '<i class="fa fa-file-excel" style="color: green;"> Excel</i>',
                                "titleAttr": 'Excel',
                                "action": newexportaction,
                                exportOptions: {
                                    columns: ':visible'
                                }
                            },
                            {
                                "extend": 'csv',
                                "text": '<i class="fa fa-file" style="color: green;"> Csv</i>',
                                "titleAttr": 'CSV',
                                "action": newexportaction,
                                exportOptions: {
                                    columns: ':visible'
                                }
                            },
                            {
                                "extend": 'pdf',
                                "text": '<i class="fa fa-file-pdf" style="color: green;"> Pdf</i>',
                                "titleAttr": 'PDF',
                                "action": newexportaction,
                                exportOptions: {
                                    columns: ':visible'
                                }
                            },
                            {
                                "extend": 'print',
                                "text": '<i class="fa fa-print" style="color: green;"> Print</i>',
                                "titleAttr": 'Print',
                                "action": newexportaction,
                                exportOptions: {
                                    columns: ':visible'
                                }
                            },
                            'colvis'],
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('question-option.index') }}",
                        scrollCollapse: true,
                        autoWidth: false,
                        responsive: true,
                        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                        language: {
                            info: "_START_-_END_ of _TOTAL_ entries",
                            searchPlaceholder: "Search",

                        },
                        columns: [
                            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                            {data: 'question.title', name: 'question.title'},
                            {data: 'title', name: 'title'},
                            {data: 'action', name: 'action', orderable: false, searchable: false},
                        ]
                    });
                    $("#import_file").change(function(){
                        $('input').removeAttr('required');
                    });

//Create New Product
                    $('#createNewItem').click(function () {
                        $('.ajax-loader').css("visibility", "visible");
                        $('#image-container').empty();
                        $('#saveBtn').show();
                        $('.csv-import').show();
                        $('input').attr('readonly', false);
                        $('textarea').attr('readonly', false);
                        $('select').attr('disabled', false);
                        $('input:radio').attr('disabled', false);
                        $("input[type=text]").attr('required', true);
                        $("input[type=number]").attr('required', true);
                        $('#saveBtn').val("create-Item");
                        $('#Item_id').val('');
                        $('#ItemForm').trigger("reset");
                        $('#modelHeading').html("Create New Option for Question");
                        $('#ajaxModel').modal('show');
                        $('.ajax-loader').css("visibility", "hidden");
                    });

//Submit Edit and Create
                    $('body').on('submit', '#ItemForm', function (e) {
                        e.preventDefault();
                        $('#saveBtn').html('Sending..');
                        $('.ajax-loader').css("visibility", "visible");
                        var formData = new FormData(this);
                        $.ajax({
                            data: formData,
                            url: "{{ route('question-option.store') }}",
                            type: "POST",
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function (data) {
                                $('#saveBtn').html('Save Changes');
                                $('#ItemForm').trigger("reset");
                                alert(data.success);
                                $('#ajaxModel').modal('hide');
                                $('.ajax-loader').css("visibility", "hidden");
                                table.draw();
                            },
                            error: function (data) {
                                $('.ajax-loader').css("visibility", "hidden");
                                alert(data.error);
                                $('#saveBtn').html('Save Changes');
                            }
                        });
                    });



//Edit
                    $('body').on('click', '.editItem', function () {
                        $('.ajax-loader').css("visibility", "visible");
                        $('#saveBtn').show();
                        $('.csv-import').hide();
                        $('input').attr('readonly', false);
                        $('textarea').attr('readonly', false);
                        $('input:radio').attr('disabled', false);
                        $('select').attr('disabled', false);
                        var Item_id = $(this).data('id');
                        $.get("{{ route('question-option.index') }}" +'/' + Item_id +'/edit', function (data) {
                            $('#modelHeading').html("Edit Product");
                            $('#saveBtn').val("edit-product");
                            $('#ajaxModel').modal('show');
                            $('#Item_id').val(data.id);
                            $('#title').val(data.title);
                            $('#question_id').val(data.question_id);
                            $('.ajax-loader').css("visibility", "hidden");
                        })
                    });

//View
                    $('body').on('click', '.viewItem', function () {
                        $('.ajax-loader').css("visibility", "visible");
                        $('#category-modal-preview').attr('src', 'https://via.placeholder.com/150');
                        $('select').attr('disabled', true);
                        var Item_id = $(this).data('id');
                        $.get("{{ route('question-option.index') }}" +'/' + Item_id +'/edit', function (data) {
                            $('#modelHeading').html("View Option");
                            $('#saveBtn').hide();
                            $('.csv-import').hide();
                            $('#ItemForm input').attr('readonly', true);
                            $('#ItemForm textarea').attr('readonly', true);
                            $('#ItemForm #thumbnail_image').hide();
                            $('#ItemForm input:radio').attr('disabled', true);
                            $('#ajaxModel').modal('show');
                            $('#Item_id').val(data.id);
                            $('#title').val(data.title);
                            $('#question_id').val(data.question_id);
                            $('.ajax-loader').css("visibility", "hidden");
                        })

                    });

//Delete
                    $('body').on('click', '.deleteItem', function () {

                        var Item_id = $(this).data("id");

                        if( confirm("Are You sure want to delete !"))
                        {
                            $.ajax({
                                type: "DELETE",
                                url: "{{ route('question-option.store') }}"+'/'+Item_id,
                                success: function (data) {
                                    table.draw();
                                },
                                error: function (data) {
                                    console.log('Error:', data);
                                }
                            });
                        }
                    });
                });
/* For Export Buttons available inside jquery-datatable "server side processing" - Start
                - due to "server side processing" jquery datatble doesn't support all data to be exported
                - below function makes the datatable to export all records when "server side processing" is on */

                function newexportaction(e, dt, button, config) {
                    var self = this;
                    var oldStart = dt.settings()[0]._iDisplayStart;
                    dt.one('preXhr', function (e, s, data) {
                        // Just this once, load all data from the server...
                        data.start = 0;
                        data.length = 2147483647;
                        dt.one('preDraw', function (e, settings) {
                            // Call the original action function
                            if (button[0].className.indexOf('buttons-copy') >= 0) {
                                $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                            } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                                $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                                    $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                                    $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                            } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                                $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                                    $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                                    $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
                            } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                                $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                                    $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                                    $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                            } else if (button[0].className.indexOf('buttons-print') >= 0) {
                                $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
                            }
                            dt.one('preXhr', function (e, s, data) {
                                // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                                // Set the property to what it was before exporting.
                                settings._iDisplayStart = oldStart;
                                data.start = oldStart;
                            });
                            // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
                            setTimeout(dt.ajax.reload, 0);
                            // Prevent rendering of the full data to the DOM
                            return false;
                        });
                    });
                    // Requery the server with the new one-time export settings
                    dt.ajax.reload();
                };
                //For Export Buttons available inside jquery-datatable "server side processing" - End
            </script>
@endsection
