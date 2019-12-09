@extends('sign')
@section('maincontent')
    <div class="wrapper  pa-0">
        <header class="sp-header">
            <div class="sp-logo-wrap pull-left">
                <a href="index.html">
                    <img class="brand-img mr-10" src="{{ asset('img/logo.png') }}" alt="brand"/>
                    <span class="brand-text">Elction</span>
                </a>
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
                                        <h3 class="text-center txt-dark mb-10">KOKI STATE GUBERNATORIAL 2019 ELECTION RESULT</h3>
                                        <h6 class="text-center nonecase-font txt-grey">Enter your Suggestion!!</h6>
                                    </div>
                                    <div class="form-wrap">
                                        <form action="{{ url('app_action') }}" method="POST">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                            <div class="form-group">
                                                    <label class="control-label mb-10" for="pdp">PDP</label>
                                                    <input type="number" class="form-control" required="" id="pdp" placeholder="PEOPLE'S DEMOCRATIC PARTY" name="pdp">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="apc">APC</label>
                                                <input type="number" class="form-control" required="" id="apc" placeholder="ALL PROGRESSIVE CONGRESS" name="apc">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label mb-10" for="adc">ADC</label>
                                                <input type="number" class="form-control" required="" id="apc" placeholder="AFRICAN DEMOCRATIC CONGRESS" name="adc">
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label mb-10" for="apga">APGA</label>
                                                    <input type="number" class="form-control" required="" id="apga" placeholder="ALL PROGRESSIVE GRAND ALLIANCE" name="apga">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="others">OTHERS</label>
                                                <input type="number" class="form-control" required="" id="others" placeholder="OTHERS" name="others">
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label mb-10" for="invalid">INVALID</label>
                                                    <input type="number" class="form-control" required="" id="invalid" placeholder="INVALID" name="invalid">
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-success  btn-rounded">SUBMIT</button>
                                                <button type="button" class="btn btn-primary  btn-rounded" style="margin-left:10px;"><a href="{{ url('/app_signin') }}">CANCEL</a></button>
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
