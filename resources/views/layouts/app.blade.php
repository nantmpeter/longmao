@extends("layouts/base")
@section("body")
<body data-type="widgets" class="theme-white">
<div class="am-g tpl-g">
    <!-- 头部 -->
    <header>
        <!-- logo -->
        <div class="am-fl tpl-header-logo">
        {{--{{ config('app.name', 'Laravel') }}--}}

        <!-- <a href="javascript:;"><img src="/img/logo.png" alt=""></a> -->
        </div>
        <!-- 右侧内容 -->
        <div class="tpl-header-fluid">
            <!-- 侧边切换 -->
            <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
            </div>
            <!-- 搜索 -->
            {{--<div class="am-fl tpl-header-search">--}}
                {{--<form class="tpl-header-search-form" action="javascript:;">--}}
                    {{--<button class="tpl-header-search-btn am-icon-search"></button>--}}
                    {{--<input class="tpl-header-search-box" type="text" placeholder="搜索内容...">--}}
                {{--</form>--}}
            {{--</div>--}}
            <!-- 其它功能-->
            <div class="am-fr tpl-header-navbar">
                <ul>
                    @if (Auth::user())
                    <!-- 欢迎语 -->
                    <li class="am-text-sm tpl-header-navbar-welcome">
                        <a href="javascript:;">欢迎你, <span>{{ Auth::user()->name }}</span> </a>
                    </li>
                    @endif
                    <!-- 新邮件 -->
                    {{--<li class="am-dropdown tpl-dropdown" data-am-dropdown>--}}
                        {{--<a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>--}}
                            {{--<i class="am-icon-envelope"></i>--}}
                            {{--<span class="am-badge am-badge-success am-round item-feed-badge">4</span>--}}
                        {{--</a>--}}
                        {{--<!-- 弹出列表 -->--}}
                    {{--</li>--}}

                    <!-- 新提示 -->
                    {{--<li class="am-dropdown" data-am-dropdown>--}}
                        {{--<a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle>--}}
                            {{--<i class="am-icon-bell"></i>--}}
                            {{--<span class="am-badge am-badge-warning am-round item-feed-badge">5</span>--}}
                        {{--</a>--}}

                        {{--<!-- 弹出列表 -->--}}
                    {{--</li>--}}

                    <!-- 退出 -->
                    <li class="am-text-sm">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span class="am-icon-sign-out"></span> 退出
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>

    </header>
        @include('layouts.left')
        @yield('content')
</div>
    {{--<skzs></skzs>--}}
    <!-- Scripts -->
    @yield('script')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/amazeui.min.js') }}"></script>
    <script src="{{ asset('js/amazeui.datatables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
</body>

@endsection

