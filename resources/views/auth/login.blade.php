@extends('admin.layouts.login_master')
@section('title')
  Login
@endsection

@section('content')
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin Panel - Mahmoud Salem</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ url('/adminpanel/login') }}">
                    {{ csrf_field() }}
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block" style="color: red">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block" style="color: red">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink" {{ old('remember') ? 'checked' : ''}}>
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6 align-right">
                            <a href="{{ url('/password/reset') }}">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
  <!-- Validation Plugin Js -->
  {!! Html::script('public/admin/plugins/jquery-validation/jquery.validate.js') !!}

  {!! Html::script('public/admin/js/pages/examples/sign-in.js') !!}

@endsection
