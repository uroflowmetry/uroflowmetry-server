<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Uroflowmetry</title>
	{{--  <meta name="description" content="Droopy is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Droopy Admin, Droopyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>  --}}
    @yield('css')
    @include('layouts.mainCss')

</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper  theme-6-active pimary-color-green">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap" style="width:450px;">
						{{--  <a href="{{ url('dashboard') }}">  --}}
                                <a>
                                    <h4>
                                        {{--<img class="brand-img" src="{{ asset('img/logo.png') }}" alt="brand" style="margin-right:0;">--}}
							<span class="brand-text">UROFLOWMETRY</span></H4>
						</a>
					</div>
				</div>
				{{--<a style="padding-top:15px;" id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>--}}
				{{--<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>--}}
				{{--<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>--}}
				{{--  <form id="search_form" role="search" class="top-nav-search collapse pull-left">
					<div class="input-group">
						<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
						<span class="input-group-btn">
						<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
						</span>
					</div>
				</form>  --}}
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
                    <li>
                        {{--<a id="open_right_sidebar" href="#" style="padding-top: 20px;"><i class="zmdi zmdi-settings top-nav-icon"></i></a>--}}
                    </li>
					<li class="dropdown auth-drp">
						{{--<a href="#" class="dropdown-toggle pr-0 fa fa-user-circle-o" data-toggle="dropdown"><img src="{{ asset('storage/avatars/'.Session::get('avatar')) }}" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>--}}
                        <a href="#" class="dropdown-toggle pr-0 fa fa-user-circle-o" style="font-size: 50px;" data-toggle="dropdown"><span class="user-online-status"></span></a>
                            <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                                <li>
                                    {{--<a href="{{ url('profile') }}"><i class="zmdi zmdi-account"></i><span>Profile</span></a>--}}
                                    <a href="{{url('profile')}}"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ url('logout') }}"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /Top Menu Items -->

            <!-- Left Sidebar Menu -->
            @include('layouts.leftSidebar')
            <!-- /Left Sidebar Menu -->

            <!-- Right Sidebar Menu -->
            @include('layouts.rightSidebar')
            <!-- /Right Sidebar Menu -->

            <!-- Main Content -->
            @yield('maincontent')
            <!-- /Main Content -->
        </div>
        <!-- /#wrapper -->

        <!-- JavaScript -->
        @include('layouts.mainJavascript')
        @yield('javascript')
        <script>
                setInterval(check_users, 3000);
                function check_users(){
                    $.ajax({
                        url:"/user/normal-user/check_online",
                        type:"POST",
                        data:{
                            "_token": "{{ csrf_token() }}"
                        },
                        success:function(result){
                           var re = JSON.parse(JSON.stringify(result));
                           var len = re.length;
                           for (i = 0; i < len; i++){
                               k = re[i].id;
                               o_c = $('#'+k).attr('n_status');
                               n_c = re[i].status;
                               if (o_c != n_c){
                                   $('#'+k).attr('n_status', n_c);
                                   if (n_c=='1'){
                                    $('#'+k).next().removeClass("default");
                                    $('#'+k).next().addClass("online");
                                   } else{
                                    $('#'+k).next().removeClass("online");
                                    $('#'+k).next().addClass("default");
                                   }
                               }
                           }
                        }
                    });
                }

                {{--  $(function() {
                    "use strict";

                    var defaultData = [
                        // all
                        {
                            text:'All IMGAES',
                            href: '0',
                            tags: ['0']
                        },


                        {
                            text: 'ADAVI',
                            href: 'ADAVI',
                            tags: ['11'],
                            nodes: [
                            {
                                text: 'ADAVI-EBA',
                                href: 'ADAVI-EBA',
                                tags: ['0'],
                            },
                            {
                                text: 'EGE/IRUVOCHINOMI',
                                href: 'EGE/IRUVOCHINOMI',
                                tags: ['0']
                            },
                            {
                                text: 'IDANUHUA',
                                href: 'IDANUHUA',
                                tags: ['0']
                            },
                            {
                                text: 'IKARAWORO/IDOBANYERE',
                                href: 'IKARAWORO/IDOBANYERE',
                                tags: ['0']
                            },
                            {
                                text: 'INO ZIOMI/IPAKU/OSISI',
                                href: 'INO ZIOMI/IPAKU/OSISI',
                                tags: ['0']
                            },
                            {
                                text: 'IRUVUCHEBA',
                                href: 'IRUVUCHEBA',
                                tags: ['0']
                            },
                            {
                                text: 'KUROKO I',
                                href: 'KUROKO I',
                                tags: ['0']
                            },
                            {
                                text: 'KUROKO II',
                                href: 'KUROKO II',
                                tags: ['0']
                            },
                            {
                                text: 'NAGAZI FARM CENTRE',
                                href: 'NAGAZI FARM CENTRE',
                                tags: ['0']
                            },
                            {
                                text: 'OGAMINANA',
                                href: 'OGAMINANA',
                                tags: ['0']
                            },
                            {
                                text: 'OKUNCHI/OZURI/ONIEKA',
                                href: 'OKUNCHI/OZURI/ONIEKA',
                                tags: ['0']
                            }
                            ]
                        },


                        {
                            text: 'AJAOKUTA',
                            href: 'AJAOKUTA',
                            tags: ['14'],
                            nodes: [
                              {
                                text: 'ABODI/PATESI',
                                href: 'ABODI/PATESI',
                                tags: ['0'],
                              },
                              {
                                text: 'ACHAGANA',
                                href: 'ACHAGANA',
                                tags: ['0']
                              },
                              {
                                text: 'ADOGO',
                                href: 'ADOGO',
                                tags: ['0']
                              },
                              {
                                text: 'ADOGU/APAMIRA/OGODO..',
                                href: 'ADOGU/APAMIRA/OGODO UHUOVENE',
                                tags: ['0']
                              },
                              {
                                text: 'BADOKO',
                                href: 'BADOKO',
                                tags: ['0']
                              },
                              {
                                text: 'EBIYA NORTH',
                                href: 'EBIYA NORTH',
                                tags: ['0']
                              },
                              {
                                text: 'EBIYA SOUTH',
                                href: 'EBIYA SOUTH',
                                tags: ['0']
                              },
                              {
                                text: 'GANAGA/TOWNSHIP',
                                href: 'GANAGA/TOWNSHIP',
                                tags: ['0']
                              },
                              {
                                text: 'ICHUWA/UPAJA',
                                href: 'ICHUWA/UPAJA',
                                tags: ['0']
                              },
                              {
                                text: 'OBANGEDE/OHUNENE/U..',
                                href: 'OBANGEDE/OHUNENE/UKOKO INYE&#039;RE',
                                tags: ['0']
                              },
                              {
                                text: 'ODONU/UNOSI',
                                href: 'ODONU/UNOSI',
                                tags: ['0']
                              },
                              {
                                text: 'OGIGIRI',
                                href: 'OGIGIRI',
                                tags: ['0']
                              },
                              {
                                text: 'OLD AJAOKUTA',
                                href: 'OLD AJAOKUT',
                                tags: ['0']
                              },
                              {
                                text: 'OMGBO',
                                href: 'OMGBO',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'ANKPA',
                            href: 'ANKPA',
                            tags: ['13'],
                            nodes: [
                              {
                                text: 'ANKPA  I',
                                href: 'ANKPA  I',
                                tags: ['0'],
                              },
                              {
                                text: 'ANKPA II',
                                href: 'ANKPA II',
                                tags: ['0']
                              },
                              {
                                text: 'ANKPA SUBURB  I',
                                href: 'ANKPA SUBURB  I',
                                tags: ['0']
                              },
                              {
                                text: 'ANKPA SUBURB II',
                                href: 'ANKPA SUBURB II',
                                tags: ['0']
                              },
                              {
                                text: 'ANKPA TOWNSHIP',
                                href: 'ANKPA TOWNSHIP',
                                tags: ['0']
                              },
                              {
                                text: 'ENJEMA  I',
                                href: 'ENJEMA  I',
                                tags: ['0']
                              },
                              {
                                text: 'ENJEMA  III',
                                href: 'ENJEMA  III',
                                tags: ['0']
                              },
                              {
                                text: 'ENJEMA  IV',
                                href: 'ENJEMA  IV',
                                tags: ['0']
                              },
                              {
                                text: 'ENJEMA II',
                                href: 'ENJEMA II',
                                tags: ['0']
                              },
                              {
                                text: 'OJOKU  I',
                                href: 'OJOKU  I',
                                tags: ['0']
                              },
                              {
                                text: 'OJOKU  III',
                                href: 'OJOKU  III',
                                tags: ['0']
                              },
                              {
                                text: 'OJOKU II',
                                href: 'OJOKU II',
                                tags: ['0']
                              },
                              {
                                text: 'OJOKU IV',
                                href: 'OJOKU IV',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'BASSA',
                            href: 'BASSA',
                            tags: ['10'],
                            nodes: [
                              {
                                text: 'AKUBA  I',
                                href: 'AKUBA  I',
                                tags: ['0'],
                              },
                              {
                                text: 'AKUBA  II',
                                href: 'AKUBA  II',
                                tags: ['0']
                              },
                              {
                                text: 'AYEDE/AKAKANA',
                                href: 'AYEDE/AKAKANA',
                                tags: ['0']
                              },
                              {
                                text: 'EFORO',
                                href: 'EFORO',
                                tags: ['0']
                              },
                              {
                                text: 'GBOLOKO',
                                href: 'GBOLOKO',
                                tags: ['0']
                              },
                              {
                                text: 'IKENDE',
                                href: 'IKENDE',
                                tags: ['0']
                              },
                              {
                                text: 'KPATA',
                                href: 'KPATA',
                                tags: ['0']
                              },
                              {
                                text: 'MOZUM',
                                href: 'MOZUM',
                                tags: ['0']
                              },
                              {
                                text: 'OZONGULO/KPANCHE',
                                href: 'OZONGULO/KPANCHE',
                                tags: ['0']
                              },
                              {
                                text: 'OZUGBE',
                                href: 'OZUGBE',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'DEKINA',
                            href: 'DEKINA',
                            tags: ['12'],
                            nodes: [
                              {
                                text: 'ABOCHO',
                                href: 'ABOCHO',
                                tags: ['0'],
                              },
                              {
                                text: 'ADUMU EGUME',
                                href: 'ADUMU EGUME',
                                tags: ['0']
                              },
                              {
                                text: 'ANYIGBA',
                                href: 'ANYIGBA',
                                tags: ['0']
                              },
                              {
                                text: 'DEKINA TOWN',
                                href: 'DEKINA TOWN',
                                tags: ['0']
                              },
                              {
                                text: 'EMEWE',
                                href: 'EMEWE',
                                tags: ['0']
                              },
                              {
                                text: 'IYALE',
                                href: 'IYALE',
                                tags: ['0']
                              },
                              {
                                text: 'ODU  I',
                                href: 'ODU  I',
                                tags: ['0']
                              },
                              {
                                text: 'ODU  II',
                                href: 'ODU  II',
                                tags: ['0']
                              },
                              {
                                text: 'OGANE INIGU',
                                href: 'OGANE INIGU',
                                tags: ['0']
                              },
                              {
                                text: 'OGBABEDE',
                                href: 'OGBABEDE',
                                tags: ['0']
                              },
                              {
                                text: 'OJIKPADALA',
                                href: 'OJIKPADALA',
                                tags: ['0']
                              },
                              {
                                text: 'OKURA OLAFIA',
                                href: 'OKURA OLAFIA',
                                tags: ['0']
                              },
                            ]
                        },

                        {
                            text: 'IBAJI',
                            href: 'IBAJI',
                            tags: ['10'],
                            nodes: [
                              {
                                text: 'AKPANYO',
                                href: 'AKPANYO',
                                tags: ['0'],
                              },
                              {
                                text: 'ANALO',
                                href: 'ANALO',
                                tags: ['0']
                              },
                              {
                                text: 'AYAH',
                                href: 'AYAH',
                                tags: ['0']
                              },
                              {
                                text: 'EJULE',
                                href: 'EJULE',
                                tags: ['0']
                              },
                              {
                                text: 'IYANO',
                                href: 'IYANO',
                                tags: ['0']
                              },
                              {
                                text: 'ODEKE',
                                href: 'ODEKE',
                                tags: ['0']
                              },
                              {
                                text: 'OJILA',
                                href: 'OJILA',
                                tags: ['0']
                              },
                              {
                                text: 'ONYEDEGA',
                                href: 'ONYEDEGA',
                                tags: ['0']
                              },
                              {
                                text: 'UJEH',
                                href: 'UJEH',
                                tags: ['0']
                              },
                              {
                                text: 'UNALE',
                                href: 'UNALE',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'IDAH',
                            href: 'IDAH',
                            tags: ['10'],
                            nodes: [
                              {
                                text: 'EDE',
                                href: 'EDE',
                                tags: ['0'],
                              },
                              {
                                text: 'EGA',
                                href: 'EGA',
                                tags: ['0']
                              },
                              {
                                text: 'ICHALA',
                                href: 'ICHALA',
                                tags: ['0']
                              },
                              {
                                text: 'IGALAOGBA',
                                href: 'IGALAOGBA',
                                tags: ['0']
                              },
                              {
                                text: 'IGECHEBA',
                                href: 'IGECHEBA',
                                tags: ['0']
                              },
                              {
                                text: 'OGEGELE',
                                href: 'OGEGELE',
                                tags: ['0']
                              },
                              {
                                text: 'OWOLI APA',
                                href: 'OWOLI APA',
                                tags: ['0']
                              },
                              {
                                text: 'SABON GARI',
                                href: 'SABON GARI',
                                tags: ['0']
                              },
                              {
                                text: 'UGWODA',
                                href: 'UGWODA',
                                tags: ['0']
                              },
                              {
                                text: 'UKWAJA',
                                href: 'UKWAJA',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'IGALAMELA/ODOLU',
                            href: 'IGALAMELA/ODOLU',
                            tags: ['10'],
                            nodes: [
                              {
                                text: 'AJAKA  I',
                                href: 'AJAKA  I',
                                tags: ['0'],
                              },
                              {
                                text: 'AJAKA  II',
                                href: 'AJAKA  II',
                                tags: ['0']
                              },
                              {
                                text: 'AKPANYA',
                                href: 'AKPANYA',
                                tags: ['0']
                              },
                              {
                                text: 'AVRUGO',
                                href: 'AVRUGO',
                                tags: ['0']
                              },
                              {
                                text: 'EKWULOKO',
                                href: 'EKWULOKO',
                                tags: ['0']
                              },
                              {
                                text: 'ODOLU',
                                href: 'ODOLU',
                                tags: ['0']
                              },
                              {
                                text: 'OFORACHI I',
                                href: 'OFORACHI I',
                                tags: ['0']
                              },
                              {
                                text: 'OFORACHI II',
                                href: 'OFORACHI II',
                                tags: ['0']
                              },
                              {
                                text: 'OJI-AJI',
                                href: 'OJI-AJI',
                                tags: ['0']
                              },
                              {
                                text: 'UBELE',
                                href: 'UBELE',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'IJUMU',
                            href: 'IJUMU',
                            tags: ['15'],
                            nodes: [
                              {
                                text: 'AIYEGUNLE',
                                href: 'AIYEGUNLE',
                                tags: ['0'],
                              },
                              {
                                text: 'AIYERE/ARIMAH',
                                href: 'AIYERE/ARIMAH',
                                tags: ['0']
                              },
                              {
                                text: 'AIYETORO  I',
                                href: 'AIYETORO  I',
                                tags: ['0']
                              },
                              {
                                text: 'AIYETORO  II',
                                href: 'AIYETORO  II',
                                tags: ['0']
                              },
                              {
                                text: 'EGBEDA EGGA/OKEDAYO',
                                href: 'EGBEDA EGGA/OKEDAYO',
                                tags: ['0']
                              },
                              {
                                text: 'EKINRIN ADE',
                                href: 'EKINRIN ADE',
                                tags: ['0']
                              },
                              {
                                text: 'IBGOLAYERE/ILAERE',
                                href: 'IBGOLAYERE/ILAERE',
                                tags: ['0']
                              },
                              {
                                text: 'IFFE/IKOYI/OKEJUMU',
                                href: 'IFFE/IKOYI/OKEJUMU',
                                tags: ['0']
                              },
                              {
                                text: 'ILETEJU/ORIGA',
                                href: 'ILETEJU/ORIGA',
                                tags: ['0']
                              },
                              {
                                text: 'IYAH/AYEH',
                                href: 'IYAH/AYEH',
                                tags: ['0']
                              },
                              {
                                text: 'IYAMOYE',
                                href: 'IYAMOYE',
                                tags: ['0']
                              },
                              {
                                text: 'IYARA',
                                href: 'IYARA',
                                tags: ['0']
                              },
                              {
                                text: 'ODOKORO',
                                href: 'ODOKORO',
                                tags: ['0']
                              },
                              {
                                text: 'OGALE/ADUGE',
                                href: 'OGALE/ADUGE',
                                tags: ['0']
                              },
                              {
                                text: 'OGIDI',
                                href: 'OGIDI',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'KABBA/BUNU',
                            href: 'KABBA/BUNU',
                            tags: ['15'],
                            nodes: [
                              {
                                text: 'AIYETEJU',
                                href: 'AIYETEJU',
                                tags: ['0'],
                              },
                              {
                                text: 'AIYETORO-KIRI',
                                href: 'AIYETORO-KIRI',
                                tags: ['0']
                              },
                              {
                                text: 'AIYEWA',
                                href: 'AIYEWA',
                                tags: ['0']
                              },
                              {
                                text: 'AKUTUPA-KIRI',
                                href: 'AKUTUPA-KIRI',
                                tags: ['0']
                              },
                              {
                                text: 'ASUTA',
                                href: 'ASUTA',
                                tags: ['0']
                              },
                              {
                                text: 'EGBEDA',
                                href: 'EGBEDA',
                                tags: ['0']
                              },
                              {
                                text: 'ILUKE',
                                href: 'ILUKE',
                                tags: ['0']
                              },
                              {
                                text: 'ODO-AKETE',
                                href: 'ODO-AKETE',
                                tags: ['0']
                              },
                              {
                                text: 'ODO-APE',
                                href: 'ODO-APE',
                                tags: ['0']
                              },
                              {
                                text: 'ODOLU',
                                href: 'ODOLU',
                                tags: ['0']
                              },
                              {
                                text: 'OKEBUKUN',
                                href: 'OKEBUKUN',
                                tags: ['0']
                              },
                              {
                                text: 'OKEDAYO',
                                href: 'OKEDAYO',
                                tags: ['0']
                              },
                              {
                                text: 'OKEKOKO',
                                href: 'OKEKOKO',
                                tags: ['0']
                              },
                              {
                                text: 'OLLE/OKE-OFIN',
                                href: 'OLLE/OKE-OFIN',
                                tags: ['0']
                              },
                              {
                                text: 'OTU',
                                href: 'OTU',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'KOGI . K. K.',
                            href: 'KOGI . K. K.',
                            tags: ['11'],
                            nodes: [
                              {
                                text: 'AKPASU',
                                href: 'AKPASU',
                                tags: ['0'],
                              },
                              {
                                text: 'CHIKARA NORTH',
                                href: 'CHIKARA NORTH',
                                tags: ['0']
                              },
                              {
                                text: 'CHIKARA SOUTH',
                                href: 'CHIKARA SOUTH',
                                tags: ['0']
                              },
                              {
                                text: 'GEGU-BEKI NORTH',
                                href: 'GEGU-BEKI NORTH',
                                tags: ['0']
                              },
                              {
                                text: 'GEGU-BEKI SOUTH',
                                href: 'GEGU-BEKI SOUTH',
                                tags: ['0']
                              },
                              {
                                text: 'GIRINYA',
                                href: 'GIRINYA',
                                tags: ['0']
                              },
                              {
                                text: 'IRENODU',
                                href: 'IRENODU',
                                tags: ['0']
                              },
                              {
                                text: 'KOTONKARFE SOUTH EAST',
                                href: 'KOTONKARFE SOUTH EAST',
                                tags: ['0']
                              },
                              {
                                text: 'ODAKI-KOTON KARFE',
                                href: 'ODAKI-KOTON KARFE',
                                tags: ['0']
                              },
                              {
                                text: 'TAWARI',
                                href: 'TAWARI',
                                tags: ['0']
                              },
                              {
                                text: 'UKWO-KOTON KARFE',
                                href: 'UKWO-KOTON KARFE',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'LOKOJA',
                            href: 'LOKOJA',
                            tags: ['10'],
                            nodes: [
                              {
                                text: 'EGGAN',
                                href: 'EGGAN',
                                tags: ['0'],
                              },
                              {
                                text: 'KAKANDA',
                                href: 'KAKANDA',
                                tags: ['0']
                              },
                              {
                                text: 'KUPA NORTH EAST',
                                href: 'KUPA NORTH EAST',
                                tags: ['0']
                              },
                              {
                                text: 'KUPA SOUTH WEST',
                                href: 'KUPA SOUTH WEST',
                                tags: ['0']
                              },
                              {
                                text: 'LOKOJA - A',
                                href: 'LOKOJA - A',
                                tags: ['0']
                              },
                              {
                                text: 'LOKOJA - B',
                                href: 'LOKOJA - B',
                                tags: ['0']
                              },
                              {
                                text: 'LOKOJA - C',
                                href: 'LOKOJA - C',
                                tags: ['0']
                              },
                              {
                                text: 'LOKOJA - D',
                                href: 'LOKOJA - D',
                                tags: ['0']
                              },
                              {
                                text: 'LOKOJA - E',
                                href: 'LOKOJA - E',
                                tags: ['0']
                              },
                              {
                                text: 'OWORO',
                                href: 'OWORO',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'MOPA MORO',
                            href: 'MOPA MORO',
                            tags: ['10'],
                            nodes: [
                              {
                                text: 'AGBAFOGUN',
                                href: 'AGBAFOGUN',
                                tags: ['0'],
                              },
                              {
                                text: 'AIYEDAYO/AIYEDARO',
                                href: 'AIYEDAYO/AIYEDARO',
                                tags: ['0']
                              },
                              {
                                text: 'AIYEDE/OKAGI',
                                href: 'AIYEDE/OKAGI',
                                tags: ['0']
                              },
                              {
                                text: 'ILETEJU - 1',
                                href: 'ILETEJU - 1',
                                tags: ['0']
                              },
                              {
                                text: 'ILLETEJU  - 2',
                                href: 'ILLETEJU  - 2',
                                tags: ['0']
                              },
                              {
                                text: 'ODOLE - 1',
                                href: 'ODOLE - 1',
                                tags: ['0']
                              },
                              {
                                text: 'ODOLE - 2',
                                href: 'ODOLE - 2',
                                tags: ['0']
                              },
                              {
                                text: 'OKEAGI/ILAI',
                                href: 'OKEAGI/ILAI',
                                tags: ['0']
                              },
                              {
                                text: 'OROKERE',
                                href: 'OROKERE',
                                tags: ['0']
                              },
                              {
                                text: 'TAKETE IDDE/OTAFUN',
                                href: 'TAKETE IDDE/OTAFUN',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'OFU',
                            href: 'OFU',
                            tags: ['11'],
                            nodes: [
                              {
                                text: 'ALOJI',
                                href: 'ALOJI',
                                tags: ['0'],
                              },
                              {
                                text: 'ALOMA',
                                href: 'ALOMA',
                                tags: ['0']
                              },
                              {
                                text: 'EJULE ALLAH',
                                href: 'EJULE ALLAH',
                                tags: ['0']
                              },
                              {
                                text: 'IBOKO/EFAKWU',
                                href: 'IBOKO/EFAKWU',
                                tags: ['0']
                              },
                              {
                                text: 'IGO',
                                href: 'IGO',
                                tags: ['0']
                              },
                              {
                                text: 'ITOBE/OKOKENYI',
                                href: 'ITOBE/OKOKENYI',
                                tags: ['0']
                              },
                              {
                                text: 'OCHADAMU',
                                href: 'OCHADAMU',
                                tags: ['0']
                              },
                              {
                                text: 'OFOKE',
                                href: 'OFOKE',
                                tags: ['0']
                              },
                              {
                                text: 'OGBONICHA',
                                href: 'OGBONICHA',
                                tags: ['0']
                              },
                              {
                                text: 'UGWOLAWO  - 2',
                                href: 'UGWOLAWO  - 2',
                                tags: ['0']
                              },
                              {
                                text: 'UGWOLAWO  - I',
                                href: 'UGWOLAWO  - I',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'OGORI MANGOGO',
                            href: 'OGORI MANGOGO',
                            tags: ['10'],
                            nodes: [
                              {
                                text: 'AIYEROMI',
                                href: 'AIYEROMI',
                                tags: ['0'],
                              },
                              {
                                text: 'ENI',
                                href: 'ENI',
                                tags: ['0']
                              },
                              {
                                text: 'ILETEJU',
                                href: 'ILETEJU',
                                tags: ['0']
                              },
                              {
                                text: 'OBATGBEN',
                                href: 'OBATGBEN',
                                tags: ['0']
                              },
                              {
                                text: 'OBINOYIN',
                                href: 'OBINOYIN',
                                tags: ['0']
                              },
                              {
                                text: 'OKESI',
                                href: 'OKESI',
                                tags: ['0']
                              },
                              {
                                text: 'OKIBO',
                                href: 'OKIBO',
                                tags: ['0']
                              },
                              {
                                text: 'OSHOBANE',
                                href: 'OSHOBANE',
                                tags: ['0']
                              },
                              {
                                text: 'OTURU OPOWUROYE',
                                href: 'OTURU OPOWUROYE',
                                tags: ['0']
                              },
                              {
                                text: 'UGUGU',
                                href: 'UGUGU',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'OKEHI',
                            href: 'OKEHI',
                            tags: ['11'],
                            nodes: [
                              {
                                text: 'EIKA / OHIZENYI',
                                href: 'EIKA / OHIZENYI',
                                tags: ['0'],
                              },
                              {
                                text: 'OBAIBA  I',
                                href: 'OBAIBA  I',
                                tags: ['0']
                              },
                              {
                                text: 'OBAIBA  II',
                                href: 'OBAIBA  II',
                                tags: ['0']
                              },
                              {
                                text: 'OBANGEDE / UHUODO',
                                href: 'OBANGEDE / UHUODO',
                                tags: ['0']
                              },
                              {
                                text: 'OBAROKE UVETE',
                                href: 'OBAROKE UVETE',
                                tags: ['0']
                              },
                              {
                                text: 'OBOROKE EBA',
                                href: 'OBOROKE EBA',
                                tags: ['0']
                              },
                              {
                                text: 'OBOROKE UVETE - II',
                                href: 'OBOROKE UVETE - II',
                                tags: ['0']
                              },
                              {
                                text: 'OHUEPE / OMAVI UBORO',
                                href: 'OHUEPE / OMAVI UBORO',
                                tags: ['0']
                              },
                              {
                                text: 'OHUETA',
                                href: 'OHUETA',
                                tags: ['0']
                              },
                              {
                                text: 'OKAITO / USUNGWEN',
                                href: 'OKAITO / USUNGWEN',
                                tags: ['0']
                              },
                              {
                                text: 'OKUEHU',
                                href: 'OKUEHU',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'OKENE',
                            href: 'OKENE',
                            tags: ['11'],
                            nodes: [
                              {
                                text: 'ABUGA/OZUJA',
                                href: 'ABUGA/OZUJA',
                                tags: ['0'],
                              },
                              {
                                text: 'BARIKI',
                                href: 'BARIKI',
                                tags: ['0']
                              },
                              {
                                text: 'IDOJI',
                                href: 'IDOJI',
                                tags: ['0']
                              },
                              {
                                text: 'OBEHIRA EBA',
                                href: 'OBEHIRA EBA',
                                tags: ['0']
                              },
                              {
                                text: 'OBEHIRA UVETTA',
                                href: 'OBEHIRA UVETTA',
                                tags: ['0']
                              },
                              {
                                text: 'OBESSA',
                                href: 'OBESSA',
                                tags: ['0']
                              },
                              {
                                text: 'OKENE-EBA / AGAS..',
                                href: 'OKENE-EBA / AGASSA/ AHACHE',
                                tags: ['0']
                              },
                              {
                                text: 'ONYUKOKO',
                                href: 'ONYUKOKO',
                                tags: ['0']
                              },
                              {
                                text: 'ORIETESU',
                                href: 'ORIETESU',
                                tags: ['0']
                              },
                              {
                                text: 'OTUTU',
                                href: 'OTUTU',
                                tags: ['0']
                              },
                              {
                                text: 'UPOGORO/ODENKU',
                                href: 'UPOGORO/ODENKU',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'OLAMABORO',
                            href: 'OLAMABORO',
                            tags: ['10'],
                            nodes: [
                              {
                                text: 'IMANE I',
                                href: 'IMANE I',
                                tags: ['0'],
                              },
                              {
                                text: 'IMANE II',
                                href: 'IMANE II',
                                tags: ['0']
                              },
                              {
                                text: 'OGUGU  I',
                                href: 'OGUGU  I',
                                tags: ['0']
                              },
                              {
                                text: 'OGUGU  II',
                                href: 'OGUGU  II',
                                tags: ['0']
                              },
                              {
                                text: 'OGUGU  III',
                                href: 'OGUGU  III',
                                tags: ['0']
                              },
                              {
                                text: 'OLAMABORO I',
                                href: 'OLAMABORO I',
                                tags: ['0']
                              },
                              {
                                text: 'OLAMABORO II',
                                href: 'OLAMABORO II',
                                tags: ['0']
                              },
                              {
                                text: 'OLAMABORO III',
                                href: 'OLAMABORO III',
                                tags: ['0']
                              },
                              {
                                text: 'OLAMABORO IV',
                                href: 'OLAMABORO IV',
                                tags: ['0']
                              },
                              {
                                text: 'OLAMABORO V',
                                href: 'OLAMABORO V',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'OMALA',
                            href: 'OMALA',
                            tags: ['11'],
                            nodes: [
                              {
                                text: 'ABEJUKOLO  I',
                                href: 'ABEJUKOLO  I',
                                tags: ['0'],
                              },
                              {
                                text: 'ABEJUKOLO  II',
                                href: 'ABEJUKOLO  II',
                                tags: ['0']
                              },
                              {
                                text: 'AKPACHA',
                                href: 'AKPACHA',
                                tags: ['0']
                              },
                              {
                                text: 'BAGAJI',
                                href: 'BAGAJI',
                                tags: ['0']
                              },
                              {
                                text: 'BAGANA',
                                href: 'BAGANA',
                                tags: ['0']
                              },
                              {
                                text: 'ICHEKE AJOPACHI',
                                href: 'ICHEKE AJOPACHI',
                                tags: ['0']
                              },
                              {
                                text: 'OGODU',
                                href: 'OGODU',
                                tags: ['0']
                              },
                              {
                                text: 'OJI-AJI',
                                href: 'OJI-AJI',
                                tags: ['0']
                              },
                              {
                                text: 'OKPATALA',
                                href: 'OKPATALA',
                                tags: ['0']
                              },
                              {
                                text: 'OLLA',
                                href: 'OLLA',
                                tags: ['0']
                              },
                              {
                                text: 'OPODA/OFEJIJI',
                                href: 'OPODA/OFEJIJI',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'YAGBA EAST',
                            href: 'YAGBA EAST',
                            tags: ['10'],
                            nodes: [
                              {
                                text: 'ALU/IGBAGUN/ORANRE',
                                href: 'ALU/IGBAGUN/ORANRE',
                                tags: ['0'],
                              },
                              {
                                text: 'EJUKU',
                                href: 'EJUKU',
                                tags: ['0']
                              },
                              {
                                text: 'IFE OLUKOTUN  I',
                                href: 'IFE OLUKOTUN  I',
                                tags: ['0']
                              },
                              {
                                text: 'IFE OLUKOTUN  II',
                                href: 'IFE OLUKOTUN  II',
                                tags: ['0']
                              },
                              {
                                text: 'ILAFIN/IDOFIN/ODO - OGBA',
                                href: 'ILAFIN/IDOFIN/ODO - OGBA',
                                tags: ['0']
                              },
                              {
                                text: 'ITEDO',
                                href: 'ITEDO',
                                tags: ['0']
                              },
                              {
                                text: 'JEGE/OKE/AGI OGBO..',
                                href: 'JEGE/OKE/AGI OGBOM/ISAO',
                                tags: ['0']
                              },
                              {
                                text: 'MAKUTU I',
                                href: 'MAKUTU I',
                                tags: ['0']
                              },
                              {
                                text: 'MAKUTU II',
                                href: 'MAKUTU II',
                                tags: ['0']
                              },
                              {
                                text: 'PONYAN',
                                href: 'PONYAN',
                                tags: ['0']
                              },
                            ]
                        },


                        {
                            text: 'YAGBA WEST',
                            href: 'YAGBA WEST',
                            tags: ['14'],
                            nodes: [
                              {
                                text: 'EJIBA',
                                href: 'EJIBA',
                                tags: ['0'],
                              },
                              {
                                text: 'ISAULU ESA/OKOLOK..',
                                href: 'ISAULU ESA/OKOLOKE/OKUNRAN',
                                tags: ['0']
                              },
                              {
                                text: 'IYAMERIN/IGBARUKU',
                                href: 'IYAMERIN/IGBARUKU',
                                tags: ['0']
                              },
                              {
                                text: 'ODO  EGBE',
                                href: 'ODO  EGBE',
                                tags: ['0']
                              },
                              {
                                text: 'ODO ARA OMI OGGA',
                                href: 'ODO ARA OMI OGGA',
                                tags: ['0']
                              },
                              {
                                text: 'ODO EGBE  I',
                                href: 'ODO EGBE  I',
                                tags: ['0']
                              },
                              {
                                text: 'ODO EGBE  II',
                                href: 'ODO EGBE  II',
                                tags: ['0']
                              },
                              {
                                text: 'ODO ERE OKE ERE',
                                href: 'ODO ERE OKE ERE',
                                tags: ['0']
                              },
                              {
                                text: 'ODO ERI OKOTO',
                                href: 'ODO ERI OKOTO',
                                tags: ['0']
                              },
                              {
                                text: 'OGBE',
                                href: 'OGBE',
                                tags: ['0']
                              },
                              {
                                text: 'OKE EGBE  I',
                                href: 'OKE EGBE  I',
                                tags: ['0']
                              },
                              {
                                text: 'OKE EGBE  II',
                                href: 'OKE EGBE  II',
                                tags: ['0']
                              },
                              {
                                text: 'OKE EGBE  III',
                                href: 'OKE EGBE  III',
                                tags: ['0']
                              },
                              {
                                text: 'OKE EGBE  IV',
                                href: 'OKE EGBE  IV',
                                tags: ['0']
                              },
                            ]
                        },
                    ];
                    // $('#treeview2').treeview({
                    //   levels: 1,
                    //   data: defaultData,
                    // }).on('nodeSelected', function(){
                    //     var id = $('#treeview').treeview('getSelected').text();
                    //     alert(id);
                    // });

                    var initSelectableTree = function() {
                        return $('#treeview2').treeview({
                            levels:1,
                          data: defaultData,
                          onNodeSelected: function(event, node) {
                            var id = node.href;
                            alert(id);
                            if (id == 0){
                                alert("ii")
                                window.location.href = '/media'
                            } else {
                                window.location.href = '/media/category?ward_name=' + id;
                            }

                          },
                        });
                      };
                    var $selectableTree = initSelectableTree();
                });  --}}
    </script>

</body>

</html>
