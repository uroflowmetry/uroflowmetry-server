<div class="fixed-sidebar-left" style="background-image:url({{ URL::asset('img/rogue/bg_start.png') }})">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            {{--<span>Main</span>--}}
            <span></span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            @if ($page_name=='chart')
                <a class="active" href="{{ url('chart') }}">
            @else
                <a href="{{ url('chart') }}">
            @endif
                <div class="pull-left">
                    <i class="fa fa-line-chart mr-20"></i>
                    <span class="right-nav-text">Chart Analysis</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <li>
            @if ($page_name=='Profile')
                <a class="active" href="{{url('profile')}}">
                    @else
                        <a href="{{url('profile')}}">
                            @endif
                            <div class="pull-left">
                                <i class="fa fa-user-circle mr-20"></i>
                                {{--<i class="zmdi icon_profile mr-20"></i>--}}
                                <span class="right-nav-text">Profile</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
        </li>

    </ul>
</div>
