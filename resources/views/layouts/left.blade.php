<div class="left-sidebar">
    <!-- 用户信息 -->
    {{--<div class="tpl-sidebar-user-panel">--}}
        {{--<div class="tpl-user-panel-slide-toggleable">--}}
            {{--<div class="tpl-user-panel-profile-picture">--}}
                {{--<img src="assets/img/user04.png" alt="">--}}
            {{--</div>--}}
            {{--<span class="user-panel-logged-in-text">--}}
              {{--<i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>--}}
              {{--禁言小张--}}
          {{--</span>--}}
            {{--<a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- 菜单 -->
    <ul class="sidebar-nav">
        <li class="sidebar-nav-link">
            <a href="javascript:;" class="sidebar-nav-sub-title active">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 授课助手
                <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico sidebar-nav-sub-ico-rotate"></span>
            </a>
            <ul class="sidebar-nav sidebar-nav-sub" style="display: block;">
                <li class="sidebar-nav-link"><a href="/skzs/andmobile"><span class="am-icon-angle-right sidebar-nav-link-logo"></span>安卓手机端</a></li>
                <li class="sidebar-nav-link"><a href="/skzs/andtv"><span class="am-icon-angle-right sidebar-nav-link-logo"></span>安卓tv端</a></li>
                <li class="sidebar-nav-link"><a href="/skzs/andboard"><span class="am-icon-angle-right sidebar-nav-link-logo"></span>安卓白板端</a></li>
                <li class="sidebar-nav-link"><a href="/skzs/andlauncher"><span class="am-icon-angle-right sidebar-nav-link-logo"></span>安卓launcher</a></li>
                <li class="sidebar-nav-link"><a href="/skzs/iosmobile"><span class="am-icon-angle-right sidebar-nav-link-logo"></span>ios手机端</a></li>
                <li class="sidebar-nav-link"><a href="/skzs/launcherPush"><span class="am-icon-angle-right sidebar-nav-link-logo"></span>launcher软件推送</a></li>
                <li class="sidebar-nav-link"><a href="/skzs/launcherSwitch"><span class="am-icon-angle-right sidebar-nav-link-logo"></span>launcher开关</a></li>
            </ul>
        </li>

    </ul>
</div>

<script>
    $(function () {
        var url = location.pathname;
        $("[href='"+url+"']").addClass("sub-active");
    });
</script>