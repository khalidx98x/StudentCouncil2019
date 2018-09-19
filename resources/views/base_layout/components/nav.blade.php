<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="heading">
            <h3 class="uppercase">Features</h3>
        </li>

        <li class="nav-item start">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">@lang('lang.admin')</span>

                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('admins.create')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.create admin') </span>
                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="{{route('admins.index')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.admins') </span>
                    </a>
                </li>

            </ul>
        </li>



        <li class="nav-item start">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">@lang('lang.user')</span>

                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('user.index')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.show users') </span>
                    </a>
                </li>

            </ul>
        </li>


        <li class="nav-item start">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">@lang('lang.departments')</span>

                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('department.index')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.show departments') </span>
                    </a>
                </li>

                <li class="nav-item start ">
                    <a href="{{route('department.create')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.create department') </span>
                    </a>
                </li>

                <li class="nav-item start ">
                    <a href="{{route('department.addActivity')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.add activity') </span>
                    </a>
                </li>

            </ul>
        </li>
        {{--khalid navs--}}



        <li class="nav-item ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">@lang('lang.south committee')</span>

                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('south.index')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.south committee details') </span>
                    </a>
                </li>

                <li class="nav-item start ">
                    <a href="{{route('south.create')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.add description') </span>
                    </a>
                </li>

                <li class="nav-item start ">
                    <a href={{--we add the activity create rout here--}}class="nav-link ">
                    <i class="icon-bar-chart"></i>
                    <span class="title">@lang('lang.add activity') </span>
                    </a>
                </li>

            </ul>
        </li>

        {{--your seconde nav --}}
        {{--abood nav --}}


        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-refresh"></i>
                <span class="title">@lang('lang.slider')</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="{{route('slider.upload')}}" class="nav-link ">
                        <span class="title">@lang('lang.upload image')</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-bag"></i>
                <span class="title">@lang('lang.colleges')</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="{{route('colleges.add')}}" class="nav-link ">
                        <span class="title">@lang('lang.add colleges')</span>
                    </a>
                </li>

            </ul>
        </li>

    </ul>


    </ul>
    <!-- END SIDEBAR MENU -->
</div>