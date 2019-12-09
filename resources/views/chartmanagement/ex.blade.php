@extends('base')
@section('maincontent')
    <div class="page-wrapper">
        <div class="container-fluid pt-25">
            <!-- Row -->
					<div class="row">
						<div class="col-md-12">

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
    <!-- Gallery JavaScript -->
    <script src="{{ asset('dist/js/isotope.js') }}"></script>
    <script src="{{ asset('dist/js/lightgallery-all.js') }}"></script>
    <script src="{{ asset('dist/js/froogaloop2.min.js') }}"></script>
    <script src="{{ asset('dist/js/gallery-data.js') }}"></script>
    <script>
        var lga="";
        var ward="";
        var station = "";
        var ward_c=0;
        var station_c=0;
        var result = "";
        @foreach ($exs as $ex)

        @endforeach
    </script>
@endsection
