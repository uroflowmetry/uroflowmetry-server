@extends('base')
@section('css')
    <!-- Morris Charts CSS  and Javascript-->
    {{--  <link href="{{ asset('/vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet" type="text/css"/>  --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
@endsection

@section('maincontent')
<div class="page-wrapper">
    <div class="container-fluid pt-25">
        <!-- Row -->
        <div>
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Result Counter</h6>
                </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                        <div class="txt-dark block counter">
                                                                <div class="counter-anim img-circle text-center" id="ndc" style="background-color:red ; width:80px;height:80px;padding-top:25px;margin:auto;">
                                                                    {{ $ndc}}
                                                                </div>
                                                        </div><br>
                                                        <div class="weight-500 uppercase-font block">NDC</div>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <img src="{{ asset('img/party/ndc.jpg') }}" width="60%" class="img-thumbnail">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                <div class="txt-dark block counter">
                                                        <div class="counter-anim img-circle text-center"  id="npp" style="background-color:red ; width:80px;height:80px;padding-top:25px;margin:auto;">
                                                            {{ $npp}}
                                                        </div>
                                                </div><br>
                                                <div class="weight-500 uppercase-font block">NPP</div>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                <img src="{{ asset('img/party/npp.png') }}" width="60%" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                <div class="txt-dark block counter">
                                                        <div class="counter-anim img-circle text-center" id="cpp" style="background-color:red ; width:80px;height:80px;padding-top:25px;margin:auto;">
                                                            {{ $cpp}}
                                                        </div>
                                                    </div><br>
                                                <div class="weight-500 uppercase-font block">CPP</div>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                <img src="{{ asset('img/party/cpp.jpg') }}" width="60%" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                <div class="txt-dark block counter">
                                                        <div class="counter-anim img-circle text-center" id="pnc" style="background-color:red ; width:80px;height:80px;padding-top:25px;margin:auto;">
                                                            {{ $pnc}}
                                                        </div>
                                                    </div><br>
                                                <div class="weight-500 uppercase-font block">PNC</div>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                <img src="{{ asset('img/party/pnc.jpg') }}" width="60%" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                <div class="txt-dark block counter">
                                                        <div class="counter-anim img-circle text-center" id="ppp" style="background-color:red ; width:80px;height:80px;padding-top:25px;margin:auto;">
                                                            {{ $ppp}}
                                                        </div>
                                                    </div><br>
                                                <div class="weight-500 uppercase-font block">PPP</div>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                <img src="{{ asset('img/party/ppp.jpg') }}" width="60%" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <div class="sm-data-box">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left">
                                                    <div class="txt-dark block counter">
                                                        <div class="counter-anim img-circle text-center" id="others" style="background-color:red ; width:80px;height:80px;padding-top:25px;margin:auto;">
                                                                {{ $others}}
                                                    </div>
                                                    </div><br>
                                                    <div class="weight-500 uppercase-font block">OTHERS</div>
                                            </div>
                                            {{-- <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                <i class="icon-flag  data-right-rep-icon txt-light-grey"></i>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-1 col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <div class="sm-data-box">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left">
                                                <div class="txt-dark block counter">
                                                    <div class="counter-anim img-circle text-center" id="invalid" style="background-color:red ; width:80px;height:80px;padding-top:25px;margin:auto;">
                                                        {{ $invalid}}
                                                    </div>
                                                </div><br>
                                                <div class="weight-500 uppercase-font block">INVALID</div>
                                            </div>
                                            {{-- <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                <i class="icon-flag  data-right-rep-icon txt-light-grey"></i>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- /Row -->

        <div class="row">
            <div class="col-lg-8">
                     <div class="panel panel-default card-view">
                         <div class="panel-heading">
                             <div class="pull-left">
                                 <h6 class="panel-title txt-dark">Bar Chart</h6>
                             </div>
                             <div class="clearfix"></div>
                         </div>
                         <div class="panel-wrapper collapse in">
                             <div class="panel-body">
                                 <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                 <div id="morris_bar_chart" class="morris-chart"></div>
                             </div>
                         </div>
                     </div>
            </div>
            <div class="col-lg-4">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Pie chart</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div id="morris_donut_chart" class="morris-chart donut-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Row -->
        <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Results</h6>
                            </div>
                                <div class="pull-right">
                                    @if ($filter=='REGIONNAME')
                                        <button class="btn btn-success btn-md btn-rounded"><a href="{{ url('/dashboard?filter=REGIONNAME') }}">REGIONNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=DISTRICTNAME') }}">DISTRICTNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=CONSTITUENCYNAME') }}">CONSTITUENCYNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=ELECTORALAREA') }}">ELECTORALAREA</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=POLLINGSTATIONNAME') }}">POLLINGSTATIONNAME</a></button>
                                    @elseif($filter=='DISTRICTNAME')
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=REGIONNAME') }}">REGIONNAME</a></button>
                                        <button class="btn btn-success btn-md btn-rounded"><a href="{{ url('/dashboard?filter=DISTRICTNAME') }}">DISTRICTNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=CONSTITUENCYNAME') }}">CONSTITUENCYNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=ELECTORALAREA') }}">ELECTORALAREA</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=POLLINGSTATIONNAME') }}">POLLINGSTATIONNAME</a></button>
                                    @elseif($filter=='CONSTITUENCYNAME')
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=REGIONNAME') }}">REGIONNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=DISTRICTNAME') }}">DISTRICTNAME</a></button>
                                        <button class="btn btn-success btn-md btn-rounded"><a href="{{ url('/dashboard?filter=CONSTITUENCYNAME') }}">CONSTITUENCYNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=ELECTORALAREA') }}">ELECTORALAREA</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=POLLINGSTATIONNAME') }}">POLLINGSTATIONNAME</a></button>
                                    @elseif($filter=='ELECTORALAREA')
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=REGIONNAME') }}">REGIONNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=DISTRICTNAME') }}">DISTRICTNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=CONSTITUENCYNAME') }}">CONSTITUENCYNAME</a></button>
                                        <button class="btn btn-success btn-md btn-rounded"><a href="{{ url('/dashboard?filter=ELECTORALAREA') }}">ELECTORALAREA</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=POLLINGSTATIONNAME') }}">POLLINGSTATIONNAME</a></button>
                                    @else
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=REGIONNAME') }}">REGIONNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=DISTRICTNAME') }}">DISTRICTNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=CONSTITUENCYNAME') }}">CONSTITUENCYNAME</a></button>
                                        <button class="btn btn-primary btn-md btn-rounded"><a href="{{ url('/dashboard?filter=ELECTORALAREA') }}">ELECTORALAREA</a></button>
                                        <button class="btn btn-success btn-md btn-rounded"><a href="{{ url('/dashboard?filter=POLLINGSTATIONNAME') }}">POLLINGSTATIONNAME</a></button>
                                    @endif
                                    <button class="btn btn-rounded">
                                        <form style="width:100%" action="{{ url('/dashboard') }}" method="GET">
                                                {{ csrf_field() }}
                                            @if ($search_txt)
                                            <input type="text" class="form-control" name="search_txt" value="{{ $search_txt }}" style="width:100%;">
                                            @else
                                            <input type="text" class="form-control" name="search_txt" placeholder="Search" style="width:100%;">
                                            @endif
                                        </form>
                                    </button>
                                </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <table id="footable_2" class="table" data-filtering="true" data-paging="true" data-sorting="true">
                                        <thead>
                                        <tr>
                                            <th data-name="id" data-breakpoints="xs" data-type="number">{{ $filter }}</th>
                                            <th data-name="ndc">NDC</th>
                                            <th data-name="npp">NPP</th>
                                            <th data-name="cpp" data-breakpoints="xs">CPP</th>
                                            <th data-name="pnc" data-breakpoints="xs sm">PNC</th>
                                            <th data-name="ppp" data-breakpoints="xs sm">PPP</th>
                                            <th data-name="others" data-breakpoints="xs sm">OTHERS</th>
                                            <th data-name="invalid" data-breakpoints="xs sm md">INVALID</th>
                                            <th data-name="total" data-breakpoints="xs sm md">TOTAL VOTES</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if ($results)
                                                @foreach ($results as $result)
                                                <tr>
                                                    <td>{{ $result -> $filter }}</td>
                                                    <td>{{ $result -> ndc }}</td>
                                                    <td>{{ $result -> npp }}</td>
                                                    <td>{{ $result -> cpp }}</td>
                                                    <td>{{ $result -> pnc }}</td>
                                                    <td>{{ $result -> ppp }}</td>
                                                    <td>{{ $result -> others }}</td>
                                                    <td>{{ $result -> invalid }}</td>
                                                    <td>{{ $result -> ndc + $result -> npp + $result -> cpp + $result -> pnc + $result -> ppp + $result -> others + $result -> invalid }}</td>
                                                </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td>Results: no</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            @endif

                                            <tr>
                                                <td style="font-weight:bold;color:white;">Total</td>
                                                <td style="font-weight:bold;color:white;">{{ $ndc }}</td>
                                                <td style="font-weight:bold;color:white;">{{ $npp }}</td>
                                                <td style="font-weight:bold;color:white;">{{ $cpp }}</td>
                                                <td style="font-weight:bold;color:white;">{{ $pnc }}</td>
                                                <td style="font-weight:bold;color:white;">{{ $ppp }}</td>
                                                <td style="font-weight:bold;color:white;">{{ $others }}</td>
                                                <td style="font-weight:bold;color:white;">{{ $invalid }}</td>
                                                <td style="font-weight:bold;color:white;">{{ $invalid + $others + $ndc + $npp + $cpp + $pnc + $ppp }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div>
                                        <div class="pull-right">
                                            {{-- @if ($filter != "LGA_NAME") --}}
                                                {{ $results -> links() }}
                                            {{-- @endif --}}
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- /Row -->
    </div>

    <!-- Footer -->
    <footer class="footer container-fluid pl-30 pr-30">
        <div class="row">
            <div class="col-sm-12">
                <p>2019 &copy; Analyse. build by FTF</p>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

</div>
@endsection

@section('javascript')
    <script src="{{ asset('js/dashboard.js') }}"></script>
    {{--  <!-- Morris Charts JavaScript -->  --}}
    {{--  <script src="{{ asset('vendors/bower_components/raphael/raphael.min.js') }}/"></script>
    <script src="{{ asset('vendors/bower_components/morris.js/morris.min.js') }}"></script>  --}}
    <script>
    $(document).ready(function(){
            var ndc = {{ $ndc }};
            var npp = {{ $npp }};
            var cpp = {{ $cpp }};
            var pnc = {{ $pnc }};
            var ppp = {{ $ppp }};
            var others = {{ $others }};
            var invalid = {{ $invalid }};
            var total_value = ndc + npp + cpp + pnc+ ppp+ others + invalid;
            chart(ndc,npp,cpp,pnc,ppp,others,invalid,total_value);
            function chart(){
                Morris.Bar({
                    element: 'morris_bar_chart',
                    data: [{
                        Party: 'NDC',
                        TotalCounter: ndc
                    }, {
                        Party: 'NPP',
                        TotalCounter: npp
                    }, {
                        Party: 'CPP',
                        TotalCounter: cpp
                    }, {
                        Party: 'PNC',
                        TotalCounter: pnc
                    }, {
                        Party: 'PPP',
                        TotalCounter: ppp
                    }, {
                        Party: 'OTHERS',
                        TotalCounter: others
                    }, {
                        Party: 'INVALID',
                        TotalCounter: invalid
                    }],
                    xkey: 'Party',
                    ykeys: ['TotalCounter'],
                    labels: ['TotalCounter'],
                    barRatio: 0.4,
                    xLabelAngle: 0,
                    pointSize: 1,
                    barOpacity: 1,
                    pointStrokeColors:['#8BC34A'],
                    behaveLikeLine: true,
                    grid: true,
                    gridTextColor:'#878787',
                    hideHover: 'auto',
                    resize: true,
                    gridTextFamily:"Roboto",
                    {{--  barColors: ['#8BC34A'],  --}}
                    barColors:function (row, series, type) {
                        {{--  console.log("--> "+row.label, series, type);  --}}
                        if(row.label == "NDC") return "red";
                        else if(row.label == "NPP") return "green";
                        else if(row.label == "CPP") return "chocolate";
                        else if(row.label == "PNC") return "lavender";
                        else if(row.label == "PPP") return "blue";
                        else if(row.label == "OTHERS") return "yellow";
                        else if(row.label == "INVALID") return "#8BC34A";
                    }
                });

                Morris.Donut({
                        element: 'morris_donut_chart',
                        data: [{
                            label: "NDC (%)",
                            value: Math.round(ndc/total_value*10000)/100
                        }, {
                            label: "NPP (%)",
                            value: Math.round(npp/total_value*10000)/100
                        }, {
                            label: "CPP (%)",
                            value: Math.round(cpp/total_value*10000)/100
                        },{
                            label: "PNC (%)",
                            value: Math.round(pnc/total_value*10000)/100
                        },{
                            label: "PPP (%)",
                            value: Math.round(ppp/total_value*10000)/100
                        },{
                            label: "OTHERS (%)",
                            value: Math.round(others/total_value*10000)/100
                        },{
                            label: "INVALID (%)",
                            value: Math.round(invalid/total_value*10000)/100
                        }],
                        colors: ['red', 'green', 'chocolate', 'lavender', 'blue','yellow', '#8BC34A'],
                        resize: true,
                        labelColor: '#878787',
                });
                $("div svg text").attr("style","font-family: Roboto").attr("font-weight","400");
            }
            setInterval(represent_total, 10000);
            function represent_total(){
                $.ajax({
                    url: "/dashboard/realtime",
                    type: "POST",
                    data:{
                        "_token": "{{ csrf_token() }}"
                    },
                    success:function(result){
                        result = $.parseJSON(result);
                        counter = 0;
                        n_ndc = result[0];
                        n_npp = result[1];
                        n_cpp = result[2];
                        n_pnc = result[3];
                        n_ppp = result[4];
                        n_others = result[5];
                        n_invalid = result[6];
                        n_total_valuse = n_ndc+n_npp+n_cpp+n_pnc+n_ppp+n_others+n_invalid;
                        if (n_ndc != ndc){
                            counter +=1;
                            ndc = n_ndc;
                            $('#ndc').empty();
                            $('#ndc').append(n_ndc);
                        }
                        if (n_npp != npp){
                            counter +=1;
                            npp = n_npp;
                            $('#npp').empty();
                            $('#npp').append(n_npp);
                        }
                        if (n_cpp != cpp){
                            counter +=1;
                            cpp = n_cpp;
                            $('#adc').empty();
                            $('#adc').append(n_cpp);
                        }
                        if (n_pnc != pnc){
                            counter +=1;
                            pnc = n_pnc;
                            $('#apga').empty();
                            $('#apga').append(n_pnc);
                        }
                        if (n_ppp != ppp){
                            counter +=1;
                            ppp = n_ppp;
                            $('#apga').empty();
                            $('#apga').append(n_ppp);
                        }
                        if (n_others != others){
                            counter +=1;
                            others = n_others;
                            $('#others').empty();
                            $('#others').append(n_others);
                        }
                        if (n_invalid != invalid){
                            counter +=1;
                            invalid = n_invalid;
                            $('#invalid').empty();
                            $('#invalid').append(n_invalid);
                        }
                        if (counter > 0){
                            $('#morris_bar_chart').empty();
                            $('#morris_donut_chart').empty();
                            chart(ndc,npp,cpp,pnc,ppp,others,invalid,n_total_valuse);
                        }
                    }
                });
            }
    });

    </script>
        <script>
            window.onload = function () {

                var options = {
                    animationEnabled: true,
                    title:{
                        text: "Monthly Sales - 2017"
                    },
                    axisX: {
                        valueFormatString: "MMM"
                    },
                    axisY: {
                        title: "Sales (in USD)",
                        prefix: "$",
                        includeZero: false
                    },
                    data: [{
                        yValueFormatString: "$#,###",
                        xValueFormatString: "MMMM",
                        type: "spline",
                        dataPoints: [
                            { x: new Date(2017, 0), y: 25060 },
                            { x: new Date(2017, 1), y: 27980 },
                            { x: new Date(2017, 2), y: 33800 },
                            { x: new Date(2017, 3), y: 49400 },
                            { x: new Date(2017, 4), y: 40260 },
                            { x: new Date(2017, 5), y: 33900 },
                            { x: new Date(2017, 6), y: 48000 },
                            { x: new Date(2017, 7), y: 31500 },
                            { x: new Date(2017, 8), y: 32300 },
                            { x: new Date(2017, 9), y: 42000 },
                            { x: new Date(2017, 10), y: 52160 },
                            { x: new Date(2017, 11), y: 49400 }
                        ]
                    }]
                };
                $("#chartContainer").CanvasJSChart(options);

            }
        </script>
        <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    {{--  pie chart  --}}
    {{--  <script src="{{ asset('dist/js/flot-data.js') }}"></script>  --}}
    {{--  bar chart  --}}
    {{--  <script src="{{ asset('dist/js/morris-data.js') }}"></script>  --}}
@endsection
