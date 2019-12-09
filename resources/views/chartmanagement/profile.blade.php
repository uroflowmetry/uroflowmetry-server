@extends('base')
@section('css')
    <!-- Morris Charts CSS  and Javascript-->
    {{--  <link href="{{ asset('/vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet" type="text/css"/>  --}}
    {{--  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">  --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    {{--  <!-- Flot Charts JavaScript -->
	<script src="{{ asset('vendors/bower_components/Flot/excanvas.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/Flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/Flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/Flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/Flot/jquery.flot.time.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/Flot/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/Flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>    --}}

@endsection
@section('maincontent')
    <div class="page-wrapper" style="min-height: 900px;">
        <div class="container-fluid pt-25">
            <!-- Row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Profile</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    @if (Session::get('is_admin')==1)
                                        <table id="footable_2" class="table" data-filtering="true" style="table:hover;" data-paging="false" data-sorting="true">
                                            @else
                                                <table id="footable_2" class="table" data-filtering="true" data-paging="false" data-sorting="true" data-editing="false">
                                                    @endif

                                                    <tbody>
                                                        @foreach ($userData as $userData)
                                                            <tr>
                                                                <td>Your Email</td>
                                                                <td>{{ $userData -> email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Doctor Email
                                                                </td>
                                                                <td>{{ $userData -> doctoremail }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </table>
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
                    <p style="color:aliceblue">2019 &copy; Analyse. build by Knight</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </div>
@endsection

@section('javascript')
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    {{--  <!-- Morris Charts JavaScript -->  --}}
    {{--  <script src="{{ asset('vendors/bower_components/raphael/raphael.min.js') }}/"></script>
    <script src="{{ asset('vendors/bower_components/morris.js/morris.min.js') }}"></script>  --}}
    <script>
        $(document).ready(function() {
            $(".click-mine").click(function () {
                var i;
                var patientname=$(this).find("td:eq(1)").text();
                console.log(patientname);
                var patientdata=$(this).find("td:last-child").text();
                console.log(patientdata);
                graphdata=patientdata.split(",");
                console.log(graphdata);
                var info=[];
                for(i=0; i<graphdata.length;i++){
                    info.push({ x: i*2+1, y: parseFloat(graphdata[i]) });}
                console.log(info);
                var options = {
                    animationEnabled: true,
                    title:{
                        text:patientname+"'s situation",
                    },

                    axisY: {
                        title: "velocity (on second)",
                        prefix: "ml/s",
                        includeZero: false
                    },
                    data: [{
                        yValueFormatString: "#.##ml/s",
                        xValueFormatString: "s",
                        type: "spline",
                        dataPoints: info
                    }]
                };

                $("#chartContainer").CanvasJSChart(options);

            });

        });
    </script>
    <script>
        window.onload = function () {
            var info=[{ x: 1, y: 0 },
                { x: 3, y: 18 },
                { x: 5, y: 23 },
                { x: 7, y: 14 },
                { x: 9, y: 14 },
                { x: 11, y: 21 },
                { x: 13, y: 20 },
                { x: 15, y: 19 },
                { x: 17, y: 17 },
                { x: 19, y: 21 },
            ]

            var options = {
                animationEnabled: true,
                title:{
                    text: "Patient's Situation"
                },

                axisY: {
                    title: "velocity (in second)",
                    prefix: "ml/s",
                    includeZero: false
                },
                data: [{
                    yValueFormatString: "#.##ml/s",
                    xValueFormatString: "s",
                    type: "spline",
                    dataPoints: info
                }]
            };
            $("#chartContainer").CanvasJSChart(options);

        }
    </script>

    {{--  pie chart  --}}
    {{--  <script src="{{ asset('dist/js/flot-data.js') }}"></script>  --}}
    {{--  bar chart  --}}
    {{--  <script src="{{ asset('dist/js/morris-data.js') }}"></script>  --}}
@endsection
