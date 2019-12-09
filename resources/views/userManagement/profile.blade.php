@extends('base')

@section('css')
{{--  <!-- Calendar CSS -->  --}}
<link href="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('maincontent')
    <div class="page-wrapper">
        <div class="container-fluid pt-25">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default card-view  pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body  pa-0">
                                <div class="profile-box">
                                    <div class="profile-cover-pic">

                                        <div class="profile-image-overlay"></div>
                                    </div>
                                    <div class="profile-info text-center">
                                        <div class="profile-img-wrap">
                                            <img class="inline-block mb-10" src="{{ asset('storage/avatars/'.Session::get('avatar')) }}" alt="user"/>

                                        </div>
                                        <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success">{{ $profile -> fullname }}</h5>
                                        <h6 class="block capitalize-font pb-20">{{ $profile -> role }}</h6>
                                    </div>
                                    <div class="social-info">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <span class="counts block head-font"><span class="counter-anim">{{ $admin }}</span></span>
                                                <span class="counts-text block">Total Admins</span>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <span class="counts block head-font"><span class="counter-anim">{{ $normaluser }}</span></span>
                                                <span class="counts-text block">Normal Users</span>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <span class="counts block head-font"><span class="counter-anim">{{ $tweets }}</span></span>
                                                <span class="counts-text block">Tweets</span>
                                            </div>
                                        </div>
                                        {{-- <button class="btn btn-success btn-block  btn-anim mt-30" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><span class="btn-text">edit profile</span></button>
                                        <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Row -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="">
                                                                    <div class="panel-wrapper collapse in">
                                                                        <div class="panel-body pa-0">
                                                                            <div class="col-sm-12 col-xs-12">
                                                                                <div class="form-wrap">
                                                                                    <form action="#" method="POST">
                                                                                        <div class="form-body overflow-hide">
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputuname_1">User Name</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                                                    <input type="text" class="form-control" id="exampleInputuname_1" placeholder=" {{ $profile -> username }}" name="username">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputEmail_1">Email</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                                                                    <input type="email" class="form-control" id="exampleInputEmail_1" placeholder="{{ $profile -> email }}" name="email">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputContact_1">Full Name</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                                                    <input type="text" class="form-control" id="exampleInputContact_1" placeholder="{{ $profile -> fullname }}" name="fullname">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                    <label class="control-label mb-10" for="upload_1">Avatar</label><br><br><br><br><br>
                                                                                                    <div class="profile-info text-center">
                                                                                                            <div class="profile-img-wrap">
                                                                                                                <img class="inline-block mb-10" src="{{ asset('storage/avatars/'.Session::get('avatar')) }}" alt="user"/>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div class="input-group">
                                                                                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                                                        <input type="file" class="form-control" id="upload_1" placeholder="{{ $profile -> avatar }}" name="avatar">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-actions mt-10">
                                                                                            <button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
{{--  <!-- Calender JavaScripts -->  --}}
<script src="{{ asset('vendors/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('vendors/jquery-ui.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('dist/js/fullcalendar-data.js') }}"></script>
@endsection
