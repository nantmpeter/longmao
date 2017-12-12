@extends("layouts/base")

@section("body")
<body data-type="login" class="theme-white">
{{--<script src="assets/js/theme.js"></script>--}}
<div class="am-g tpl-g">

    <div class="tpl-login">
        <div class="tpl-login-content">
            {{--<div class="tpl-login-logo">--}}

            {{--</div>--}}



            <form class="am-form tpl-form-line-form" action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}
                <div class="am-form-group">
                    <input type="text" class="tpl-form-input" id="name" name="name" placeholder="请输入账号" value="{{ old('name') }}">

                </div>

                <div class="am-form-group">
                    <input type="text" class="tpl-form-input" id="email" name="email" placeholder="请输入邮箱" value="{{ old('email') }}">

                </div>

                <div class="am-form-group">
                    <input type="password" class="tpl-form-input" name="password" id="password" placeholder="请输入密码" value="{{ old('password') }}">

                </div>


                <div class="am-form-group">
                    <input type="password" class="tpl-form-input" name="password_confirmation" id="password_confirmation" placeholder="请确认密码" value="{{ old('password') }}">

                </div>



                <div class="am-form-group">

                    <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

                </div>
            </form>
        </div>
    </div>
</div>

</body>
@endsection
