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
                                <h6 class="panel-title txt-dark">Normal Users</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    @if (Session::get('is_admin')==1)
                                        <table id="footable_2" class="table" data-filtering="true" data-paging="false" data-sorting="true">
                                    @else
                                        <table id="footable_2" class="table" data-filtering="true" data-paging="false" data-sorting="true" data-editing="false">
                                    @endif
                                        <thead>
                                        <tr>
                                            <th data-name="id" data-breakpoints="xs" data-type="number">ID</th>
                                            <th data-name="username">Username</th>
                                            <th data-name="email">Email</th>
                                            <th data-name="fullname" data-breakpoints="xs">Full Name</th>
                                            {{--  <th data-name="signupdate" data-breakpoints="xs sm" data-type="date" data-format-string="MMMM Do YYYY">Sign Up Date</th>
                                            <th data-name="lastdate" data-breakpoints="xs sm md" data-type="date" data-format-string="MMMM Do YYYY">Last Login Date</th>  --}}
                                            <th data-name="userlevel" data-breakpoints="xs sm">ROLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($normal_users as $normaluser)
                                                <tr>
                                                    <td>{{ $normaluser -> id }}<</td>
                                                    <td>{{ $normaluser -> patientname }}</td>
                                                    <td>{{ $normaluser -> checktime }}</td>
                                                    <td>{{ $normaluser -> measuredvolume }}</td>
                                                    {{--  <td>{{ $normaluser -> created_at }}</td>
                                                    <td>{{ $normaluser -> updated_at }}</td>  --}}
                                                    {{--  @if ( $normaluser -> is_admin ==1 )
                                                        <td>
                                                            Admin
                                                        </td>
                                                    @else
                                                        <td>
                                                            <button class="btn btn-primary">Normal User</button>
                                                        </td>
                                                    @endif  --}}
                                                    <td>{{ $normaluser -> measuredduration }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div>
                                        <div style="float:right;">
                                            @if (!$normal_users -> isEmpty())
                                            {{ $normal_users -> links() }}
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
                                                        <label for="email" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="fullname" class="col-sm-3 control-label">Full Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                            <label for="userlevel" class="col-sm-3 control-label">ROLE</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="userlevel" name="userlevel" style="display:none;" value="Normal User">
                                                                <input id="userlevel-toggle" type="checkbox" data-toggle="toggle" data-on="Admin" data-off="Normal User" data-onstyle="danger" data-offstyle="primary" data-width="200" data-height="40">
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
                                <!--/Editor-->
                                        </table>
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
                addRow: function(){
                    $modal.removeData('row');
                    $editor[0].reset();
                    $editorTitle.text('Add a new Normal User');
                    $modal.modal('show');
                },
                editRow: function(row){
                    var values = row.val();
                    $editor.find('#id').val(values.id);
                    $editor.find('#username').val(values.username);
                    $editor.find('#email').val(values.email);
                    $editor.find('#fullname').val(values.fullname);
                    $editor.find('#userlevel').val(values.userlevel);
                    if (values.userlevel == 'Admin'){
                        $userrole.prop('checked', true).change();
                    } else {
                        $userrole.prop('checked', false).change();
                    }
                    // $editor.find('#signupdate').val(values.signupdate);
                    // $editor.find('#lastdate').val(values.lastdate);

                    $modal.data('row', row);
                    $editorTitle.text('Edit the ' + values.username);
                    $modal.modal('show');
                },
                deleteRow: function(row){
                    if (confirm('Are you sure you want to delete the row?')){
                        var values = row.val();
                        var username=values.username;
                        row.delete();
                        $.ajax({
                            url: "/user/normal-user/delete",
                            type: "POST",
                            data:{
                                "_token": "{{ csrf_token() }}",
                                "username":username
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
                    email: $editor.find('#email').val(),
                    fullname: $editor.find('#fullname').val(),
                    userlevel: $editor.find('#userlevel').val(),
                    // signupdate: moment($editor.find('#signupdate').val(), 'YYYY-MM-DD'),
                    // lastdate: moment($editor.find('#lastdate').val(), 'YYYY-MM-DD')
                };
                var is_admin = 0;
                if ($userrole.prop('checked')){
                    is_admin = 1;
                } else {
                    is_admin = 0;
                }
            if (row instanceof FooTable.Row){
                $.ajax({
                    url: "/user/normal-user/update",
                    type: "POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        "id":values.id,
                        "username":values.username,
                        "email":values.email,
                        "fullname":values.fullname,
                        "is_admin":is_admin,
                    },
                    success:function(result){
                        if (is_admin == 1){
                            values.userlevel='Admin';
                        } else {
                            values.userlevel='Normal User';
                        }
                        row.val(values);
                    }
                });
            } else {
                $.ajax({
                    url: "/user/normal-user/add",
                    type: "POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        "username":values.username,
                        "email":values.email,
                        "fullname":values.fullname,
                        "is_admin":is_admin,
                    },
                    success:function(result){
                        location.reload();
                    }
                });
            }
            $modal.modal('hide');
        });
    });

    </script>
    {{--  <script src="{{ asset('js/normaluser.js') }}"></script>  --}}
@endsection
