@extends('sign')
@section('maincontent')
    <div class="wrapper  pa-0">
        <header class="sp-header">
            <div class="sp-logo-wrap pull-left">
                <a href="index.html">
                    <img class="brand-img mr-10" src="{{ asset('img/logo.png') }}" alt="brand"/>
                    <span class="brand-text">NATIONAL DEMOCRATIC CONGRESS 2020 NATIONAL ELECTIONS RESULTS DASHBOARD</span>
                </a>
            </div>
            {{-- <div class="form-group mb-0 pull-right">
                <span class="inline-block pr-10">Already have an account?</span>
                <a class="inline-block btn btn-primary  btn-rounded btn-outline" href="{{ url('/app_signin') }}">app Sign In</a>
            </div> --}}
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
                                    {{-- <img src="{{ asset('img/logo_img.png') }}" style="width: 60%; margin-left:20%; margin-right:20%"><br><br> --}}
                                    <div class="mb-30">
                                        <h3 class="text-center txt-dark mb-10">Add app user</h3>
                                        {{-- <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6> --}}
                                    </div>
                                    <div class="form-wrap">
                                        <form action="{{ url('app_signUp') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="exampleInputUsername_2">Username</label>
                                                @if (!empty($username))
                                                    <input type="text" class="form-control" required="" id="exampleInputUsername_2" value="{{ $username }}" name="username" disabled>
                                                @else
                                                    <input type="text" class="form-control" required="" id="exampleInputUsername_2" placeholder="Enter Username" name="username">
                                                @endif

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="exampleInputFullname_2">Full Name</label>
                                                @if (!empty($fullname))
                                                    <input type="text" class="form-control" required="" id="exampleInputFullname_2" value="{{ $fullname }}" name="fullname" disabled>
                                                @else
                                                <input type="text" class="form-control" required="" id="exampleInputFullname_2" placeholder="Enter Fullname" name="fullname">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                                                @if (!empty($password))
                                                    <input type="text" class="form-control" required="" id="exampleInputpwd_2" value="{{ $password }}" name="fullname" disabled>
                                                @else
                                                    <input type="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Enter password" name="password">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="lga">Select LGA</label>
                                                @if (!empty($lga))
                                                <input type="text" class="form-control" required="" id="lga" value="{{ $lga }}" name="lga" disabled>
                                                @else
                                                <select class="selectpicker lga_name" data-style="form-control btn-default btn-outline" name="lga" size="10">
                                                    <option value="">- Select LGA -</option>
                                                    <option value="ADAVI">ADAVI</option>
                                                    <option value="AJAOKUTA">AJAOKUTA</option>
                                                    <option value="ANKPA">ANKPA</option>
                                                    <option value="BASSA">BASSA</option>
                                                    <option value="DEKINA">DEKINA</option>
                                                    <option value="IBAJI">IBAJI</option>
                                                    <option value="IDAH">IDAH</option>
                                                    <option value="IGALAMELA/ODOLU">IGALAMELA/ODOLU</option>
                                                    <option value="IJUMU">IJUMU</option>
                                                    <option value="KABBA/BUNU">KABBA/BUNU</option>
                                                    <option value="KOGI . K. K.">KOGI . K. K.</option>
                                                    <option value="LOKOJA">LOKOJA</option>
                                                    <option value="MOPA MORO">MOPA MORO</option>
                                                    <option value="OFU">OFU</option>
                                                    <option value="OGORI MANGOGO">OGORI MANGOGO</option>
                                                    <option value="OKEHI">OKEHI</option>
                                                    <option value="OKENE">OKENE</option>
                                                    <option value="OLAMABORO">OLAMABORO</option>
                                                    <option value="OMALA">OMALA</option>
                                                    <option value="YAGBA EAST">YAGBA EAST</option>
                                                    <option value="YAGBA WEST">YAGBA WEST</option>
                                                </select>
                                                @endif
                                            </div>
                                            @if (empty($k))
                                                <div class="form-group text-center">
                                                    <button type="submit" class="btn btn-primary  btn-rounded">Next</button>
                                                    <a href="{{ url('/user/app-user') }}"><button type="button" class="btn btn-default  btn-rounded">Cancel</button></a>
                                                </div>
                                            @elseif($k=='1')
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Select WARD</label>
                                                    <select class="selectpicker" data-style="form-control btn-default btn-outline" name="ward" size="10">
                                                        <option value="">- Select Ward -</option>
                                                        @foreach ($wards as $ward)
                                                            <option value="{{ $ward -> WARD_NAME }}">{{ $ward -> WARD_NAME }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group text-center">
                                                        <button type="submit" class="btn btn-primary  btn-rounded">Next</button>
                                                        <a href="{{ url('/user/app-user') }}"><button type="button" class="btn btn-default  btn-rounded">Cancel</button></a>
                                                </div>
                                            @elseif($k=='2')
                                                <div class="form-group">
                                                    <label class="pull-left control-label mb-10" for="ward">Select WARD</label>                 <input type="text" class="form-control" required="" id="ward" value="{{ $ward }}" name="ward" disabled>
                                                </div>
                                                <div class="form-group">
                                                        <label class="control-label mb-10">Select POLLING STATION</label>
                                                        <select class="selectpicker" data-style="form-control btn-default btn-outline" name="station" size="10">
                                                            <option value="">- Select Polling Station -</option>
                                                            @foreach ($stations as $station)
                                                                <option value="{{ $station -> POLLING_STATION_LOCATION_NAME }}">{{ $station -> POLLING_STATION_LOCATION_NAME }}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                <div class="form-group text-center">
                                                    <button type="submit" class="btn btn-primary  btn-rounded">Register</button>
                                                    <a href="{{ url('/user/app-user') }}"><button type="button" class="btn btn-default  btn-rounded">Cancel</button></a>
                                                </div>
                                            @endif
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
@section('javascript')
    <script>
        $(document).ready(function(){
            $("form").submit(function(){
                var lga = $(".selectpicker").find(":selected").val();
                if (lga == ""){
                    alert("Please select the Select option!");
                    return false;
                }
            });
        });
    </script>
@endsection
