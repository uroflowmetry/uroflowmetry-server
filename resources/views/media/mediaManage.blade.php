@extends('base')
@section('maincontent')
    <div class="page-wrapper">
        <div class="container-fluid pt-25">
            <!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Images</h6>
                                    </div>
                                    <div class=" pull-right">
                                            <button class="btn btn-xs btn-rounded">
                                                    <form style="width:100%" action="{{ url('/media') }}" method="GET">
                                                            {{ csrf_field() }}
                                                        @if ($media_txt)
                                                        <input type="text" class="form-control" name="media_txt" value="{{ $media_txt }}" style="width:100%;">
                                                        @else
                                                        <input type="text" class="form-control" name="media_txt" placeholder="Search" style="width:80%;">
                                                        @endif
                                                    </form>
                                            </button>
                                    </div>

									<div class="clearfix"></div>
                                </div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="gallery-wrap">
											<div class="portfolio-wrap project-gallery">

												<ul id="portfolio_1" class="portf auto-construct  project-gallery" data-col="3">
                                                    @foreach ($medias as $media)
                                                    <li  class="item tall thumbnail"   data-src="{{ asset('storage/check_images/'.$media->image_name) }}" data-sub-html="<h6>App User: {{ $media -> app_user }}</h6>
                                                        <p>POLLINGSTATIONNAME: {{ $media -> POLLINGSTATIONNAME }}</p>
                                                        <p>REGIONNAME: {{ $media -> REGIONNAME }}</p>
                                                        <p>DISTRICTNAME: {{ $media -> DISTRICTNAME }}</p>
                                                        <p>CONSTITUENCYNAME: {{ $media -> CONSTITUENCYNAME }}</p>
                                                        <p>ELECTORALAREA: {{ $media -> ELECTORALAREA }}</p>
                                                        <p>UPLOADED TIME: {{ $media -> uploaded_time }}</p>">
														<a href="">
														<img src="{{ asset('storage/check_images/'.$media->image_name) }}"  alt="Image description" style="height: 400px;">
                                                        <span class="hover-cap" style="height:100px;padding-top:5px;font-size:9px;">
                                                            <p>POLLINGSTATIONNAME: {{ $media -> POLLINGSTATIONNAME }}</p>
                                                            <p>REGIONNAME: {{ $media -> REGIONNAME }}</p>
                                                            <p>DISTRICTNAME: {{ $media -> DISTRICTNAME }}</p>
                                                            <p>CONSTITUENCYNAME: {{ $media -> CONSTITUENCYNAME }}</p>
                                                            <p>ELECTORALAREA: {{ $media -> ELECTORALAREA }}</p>
                                                            <p>App User: {{ $media -> app_user }}</p>
                                                        </span>
														</a>
                                                    </li>
                                                    @endforeach
                                                </ul>

											</div>
                                        </div>
                                        @if ($num>12)
                                        <div>
                                            <div class="pull-right">
                                                    {{ $medias -> links() }}
                                            </div>
                                        </div>
                                    @endif
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
    <!-- Gallery JavaScript -->
    <script src="{{ asset('dist/js/isotope.js') }}"></script>
    <script src="{{ asset('dist/js/lightgallery-all.js') }}"></script>
    <script src="{{ asset('dist/js/froogaloop2.min.js') }}"></script>
    <script src="{{ asset('dist/js/gallery-data.js') }}"></script>
@endsection
