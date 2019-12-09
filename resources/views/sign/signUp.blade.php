@extends('sign')
@section('maincontent')
    <div class="wrapper  pa-0">
        <header class="sp-header">
            <div class="sp-logo-wrap pull-left">
                <a href="{{ url('dashboard') }}">
                    {{--<img class="brand-img mr-10" src="{{ asset('img/logo.png') }}" alt="brand"/>--}}
                    <p class="fa ti-layout-media-center-alt" style="font-size: 20px;"></p>
                    <span class="brand-text"> PATIENT-CHECK</span>
                </a>
            </div>
            <div class="form-group mb-0 pull-right">
                <span class="inline-block pr-10">Already have an account?</span>
                <a class="inline-block btn btn-success  btn-rounded btn-outline" href="{{ url('/') }}">Sign In</a>
            </div>
            <div class="clearfix"></div>
        </header>

        <!-- Main Content -->

        <div class="page-wrapper pa-0 ma-0 auth-page">
            <div class="container-fluid">
                <!-- Row -->
                <div class="table-struct full-width full-height">
                    <div class="table-cell vertical-align-middle auth-form-wrap">
                        <div class="auth-form  ml-auto mr-auto no-float">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                        @include('sign.flash-message')
                                    <img src="{{ asset('img/images00.jpeg') }}" style="width: 60%; margin-left:20%; margin-right:20%"><br><br>
                                    <div class="mb-30">
                                        <h4 class="text-center txt-dark mb-10">TO SIGN UP TO SIGN IN THE APP</h4>
                                        <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                    </div>
                                    <div class="form-wrap">
                                        <form action="{{ url('signUp') }}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="exampleInputUsername_2">Username</label>
                                                <input type="text" class="form-control" required="" id="exampleInputUsername_2" placeholder="Enter Username" name="username">
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label mb-10" for="exampleInputEmail_2">Email</label>
                                                    <input type="email" class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter your Email" name="email">
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label mb-10" for="exampleInputFullname_2">Full Name</label>
                                                    <input type="text" class="form-control" required="" id="exampleInputFullname_2" placeholder="Enter Fullname" name="fullname">
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                                                <input type="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Enter password" name="password">
                                            </div>
                                            <div class="form-group">
                                                    <label class="pull-left control-label mb-10" for="exampleInputconpwd_2">Confirm Password</label>
                                                    <input type="password" class="form-control" required="" id="exampleInputconpwd_2" placeholder="Enter password" name="conpwd">
                                            </div>
                                            <div class="form-group">
                                                    <label class="pull-left control-label mb-10" for="exampleImage_2">Select Avatar</label>
                                                    <input type="file" class="form-control" id="exampleImage_2" name="avatar">
                                            </div>
                                            {{-- <div class="form-group">
                                                <div class="checkbox-primary pr-10 pull-left">
                                                    <input id="checkbox_2" required="" type="checkbox">
                                                    <label for="checkbox_2"> I agree to all <span class="txt-primary">Term</span> </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div> --}}
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-success  btn-rounded">sign up</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>

        </div>
        <!-- /Main Content -->
    </div>
@endsection
<!-- form value check javascript -->
@section('javascript')
    <script>
        $(document).ready(function(){
            $("form").submit(function(){
                var pwd = $("#exampleInputpwd_2").val();
                var n_pwd = $("#exampleInputconpwd_2").val();
                if (pwd != n_pwd ){
                    alert("Please enter the password!");
                    return false;
                }
            });
        });
    </script>
@endsection
