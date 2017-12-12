@extends("layouts/base")

@section("body")
<body data-type="login" class="theme-white">
{{--<script src="assets/js/theme.js"></script>--}}
<div class="am-g tpl-g">

    <div class="tpl-login">
        <div class="tpl-login-content">
            {{--<div class="tpl-login-logo">--}}

            {{--</div>--}}



            <form class="am-form tpl-form-line-form" action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <div class="am-form-group">
                    <input type="text" class="tpl-form-input" id="email" name="email" placeholder="请输入账号" value="{{ old('email') }}">

                </div>

                <div class="am-form-group">
                    <input type="password" class="tpl-form-input" name="password" id="password" placeholder="请输入密码" value="{{ old('password') }}">

                </div>
                <div class="am-form-group tpl-login-remember-me">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember-me">

                        记住密码
                    </label>

                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                        {{--Forgot Your Password?--}}
                    {{--</a>--}}
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
