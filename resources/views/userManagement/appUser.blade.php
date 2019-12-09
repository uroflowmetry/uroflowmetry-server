@extends('base')

@section('css')
    <!-- vector map CSS -->
    <link href="{{ asset('vendors/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Footable CSS -->
    <link href="{{ asset('vendors/bower_components/FooTable/compiled/footable.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('maincontent')
    <div class="page-wrapper">
        <div class="container-fluid pt-25">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">App Users</h6>
                            </div>
                            @if (Session::get('is_admin')==1)
                            <div class="pull-right">
                                <button type="button" class="btn btn-success btn-rounded btn-sm" data-toggle="modal" data-target="#uploadAppUser"><span class="zmdi zmdi-download"></span> Users Upload</button>
                            </div>
                            @endif
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    @if (Session::get('is_admin')==1)
                                        <table id="footable_2" class="table" data-filtering="false" data-paging="false" data-sorting="true"
                                        >
                                    @else
                                        <table id="footable_2" class="table" data-filtering="false" data-paging="false" data-sorting="true" data-editing="false">
                                    @endif
                                        <thead>
                                        <tr>
                                            <th data-name="id" data-breakpoints="xs" data-type="number">UID</th>
                                            <th data-name="username">Username</th>
                                            <th data-name="fullname" data-breakpoints="xs">Full Name</th>
                                            <th data-name="lga" data-breakpoints="xs sm">Region Name</th>
                                            <th data-name="ward" data-breakpoints="xs sm">District Name</th>
                                            <th data-name="station" data-breakpoints="xs sm">Electrol Area</th>
                                            <th data-name="station" data-breakpoints="xs sm">Polling station Name</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($appusers as $appuser)
                                                <tr>
                                                    <td>{{ $appuser -> uid }}</td>
                                                    <td>{{ $appuser -> username }}</td>
                                                    <td>{{ $appuser -> full_name }}</td>
                                                    <td>{{ $appuser -> REGIONNAME }}</td>
                                                    <td>{{ $appuser -> DISTRICTNAME }}</td>
                                                    <td>{{ $appuser -> ELECTORALAREA }}</td>
                                                    <td>{{ $appuser -> POLLINGSTATIONNAME }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        {{-- <tfoot>
                                            <tr>
                                                <td colspan="6">
                                                    <button type="button" class="btn btn-primary">
                                                        <span class="fooicon fooicon-pencil" aria-hidden="true"></span>
                                                        Add appuser
                                                    </button>
                                                </td>
                                            </tr>
                                        </tfoot> --}}

                                    </table>
                                    <div>
                                        <div class="pull-right">
                                            @if (!$appusers -> isEmpty())
                                                {{ $appusers -> links() }}
                                            @endif
                                        </div>
                                    </div>

                                    <!--Editor-->
                                    <div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
                                        <div class="modal-dialog" role="document">
                                            <form class="modal-content form-horizontal" id="editor">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <h5 class="modal-title" id="editor-title"></h5>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="number" id="id" name="id" class="hidden"/>
                                                    <div class="form-group required">
                                                        <label for="username" class="col-sm-3 control-label">User Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="username" name="username" placeholder="User Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="fullname" class="col-sm-3 control-label">Full Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-group required">
                                                        <label for="unitid" class="col-sm-3 control-label">Polling unit id</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="unitid" name="unitid" placeholder="Polling Unit Id" required>
                                                        </div>
                                                    </div> --}}
                                                    <div class="form-group required">
                                                            <label for="lga" class="col-sm-3 control-label">LGA Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="lga" name="lga" placeholder="LGA Name" required>
                                                            </div>
                                                    </div>
                                                    <div class="form-group required">
                                                            <label for="ward" class="col-sm-3 control-label">WARD Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="ward" name="ward" placeholder="WARD Name" required>
                                                            </div>
                                                    </div>
                                                    <div class="form-group required">
                                                            <label for="station" class="col-sm-3 control-label">Station Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="station" name="station" placeholder="Polling Station Name" required>
                                                            </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="uploadAppUser" role="dialog">
                                            <div class="modal-dialog">

                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Upload App Users</h4>
                                                </div>
                                                <form action="{{ url('/upload_csv') }}" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body text-center">
                                                        <h6>Select the CSV</h6><br>
                                                        <input type="file" name="csv_users" id="csv_users">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>

                                              </div>

                                            </div>
                                    </div>
                                    <!--/Editor-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('vendors/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/FooTable/compiled/footable.min.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ asset('dist/js/footable-data-app.js') }}"></script> --}}
    <script>
            /*FooTable Init*/
    $(document).ready(function () {
        "use strict";

        /*Init FooTable*/
        $('#footable_1,#footable_3').footable();

        /*Editing FooTable*/
        var $modal = $('#editor-modal'),
        $editor = $('#editor'),
        $editorTitle = $('#editor-title'),
        $userrole = $('#userlevel-toggle'),
        ft = FooTable.init('#footable_2', {
            editing: {
                enabled: true,
                /*Editing FooTable
                addRow: function(){
                    $modal.removeData('row');
                    $editor[0].reset();
                    $editorTitle.text('Add a new App User');
                    $modal.modal('show');
                },
                */
                addRow: function(){
                    location.href = "{{ url('app_signUp') }}";
                },
                editRow: function(row){
                    var values = row.val();
                    $editor.find('#id').val(values.id);
                    $editor.find('#username').val(values.username);
                    $editor.find('#fullname').val(values.fullname);
                    $editor.find('#lga').val(values.lga);
                    $editor.find('#ward').val(values.ward);
                    $editor.find('#station').val(values.station);
                    $modal.data('row', row);
                    $editorTitle.text('Edit the ' + values.username + ' app user');
                    $modal.modal('show');
                },
                deleteRow: function(row){
                    if (confirm('Are you sure you want to delete the row?')){
                        var values = row.val();
                        var uid=values.id;
                        row.delete();
                        $.ajax({
                            url: "/user/app-user/delete",
                            type: "POST",
                            data:{
                                "_token": "{{ csrf_token() }}",
                                "uid":uid,
                            },
                            success:function(result){
                            }
                        });
                    }
                }
            }
        }),
        uid = 10;

        $editor.on('submit', function(e){
            if (this.checkValidity && !this.checkValidity()) return;
            e.preventDefault();
            var row = $modal.data('row'),
                values = {
                    id: $editor.find('#id').val(),
                    username: $editor.find('#username').val(),
                    fullname: $editor.find('#fullname').val(),
                    lga: $editor.find('#lga').val(),
                    ward: $editor.find('#ward').val(),
                    station: $editor.find('#station').val(),
                    // signupdate: moment($editor.find('#signupdate').val(), 'YYYY-MM-DD'),
                    // lastdate: moment($editor.find('#lastdate').val(), 'YYYY-MM-DD')
                };
            if (row instanceof FooTable.Row){
                $.ajax({
                    url: "/user/app-user/update",
                    type: "POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        "id":values.id,
                        "username":values.username,
                        "fullname":values.fullname,
                        "station":values.station,
                        "ward":values.ward,
                        "lga":values.lga,

                    },
                    success:function(result){
                        row.val(values);
                    }
                });
            } else {
                $.ajax({
                    url: "/user/app-user/add",
                    type: "POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        "username":values.username,
                        "fullname":values.fullname,
                        "station":values.station,
                        "ward":values.ward,
                        "lga":values.lga,
                    },
                    success:function(result){
                        location.reload();
                    }
                });
            }
            $modal.modal('hide');
        });
    });
    // check the csv file..
    $("form").submit(function(){
        var filename = $("#csv_users").val();
        // get the filename;
        if (filename == ""){
            alert("Please select the upload file!");
            return false;
        } else{
            var extension = filename.replace(/^.*\./, '');
            // If there is no dot anywhere in filename, we would have extension == filename,
            // so we account for this possibility now
            if (extension == filename) {
                extension = '';
            } else {
                // if there is an extension, we convert to lower case
                extension = extension.toLowerCase();
                if (extension == 'csv'){
                    return true;
                } else{
                    alert("Please select the CSV file!");
                    return false;
                }
            }
        }
    });

    </script>
@endsection
