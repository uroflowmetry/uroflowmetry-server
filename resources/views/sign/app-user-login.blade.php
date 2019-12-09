@extends('sign')
@section('maincontent')
    <div class="wrapper  pa-0">
        <header class="sp-header">
            <div class="sp-logo-wrap pull-left">
                <a href="index.html">
                    <img class="brand-img mr-10" src="{{ asset('img/logo.png') }}" alt="brand"/>
                    <span class="brand-text">Elction Analyse</span>
                </a>
            </div>
            <div class="form-group mb-0 pull-right">
                <span class="inline-block pr-10">Do not have an account?</span>
                <a class="inline-block btn btn-primary  btn-rounded btn-outline" href="{{ url('app_signUp') }}">Sign Up</a>
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
                                    <img src="{{ asset('img/logo_img.png') }}" style="width: 60%; margin-left:20%; margin-right:20%"><br><br>
                                    <div class="mb-30">
                                        <h3 class="text-center txt-dark mb-10">Sign In to App</h3>
                                        <p class="text-center"><a class="inline-block btn btn-success  btn-rounded btn-outline" href="{{ url('/') }}">normal user login!</a></p><br>
                                        <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                    </div>
                                    <div class="form-wrap">
                                        <form action="{{ url('app_signIn') }}" method="POST">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="exampleInputEmail_2">Username</label>
                                                <input type="text" class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter Username" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                                                <div class="clearfix"></div>
                                                <input type="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Enter password" name="password">
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary  btn-rounded">sign in</button>
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
