@extends('admin.layouts.login_master')

@section('title')
  Reset Password
@endsection

<!-- Main Content -->
@section('content')
<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
          <a href="javascript:void(0);">Admin<b>BSB</b></a>
          <small>Admin Panel - Mahmoud Salem</small>
        </div>
        <div class="card">
            <div class="body">
              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
                <form id="forgot_password" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}
                    <div class="msg">
                        Enter your email address that you used to register. We'll send you an email with a
                        link to reset your password.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
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

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">RESET MY PASSWORD</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="/adminpanel/login">Sign In!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
  {!! Html::script('admin/js/pages/examples/forgot-password.js') !!}
@endsection
