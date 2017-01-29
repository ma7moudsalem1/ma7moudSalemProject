@extends('admin.layouts.master')
@section('title')
  Edit User
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb" style="float:right">
                <li>
                  <a href="{{ url('/adminpanel') }}">
                      <i class="material-icons">home</i> Dashboard
                  </a>
                </li>
                <li>
                  <a href="{{ url('/adminpanel/users') }}">
                      <i class="material-icons">groupe</i> Users
                  </a>
               </li>
                <li class="active">
                      <i class="material-icons">mode_edit</i> Edit
                </li>
            </ol>
        </div>
        @include('admin.layouts.message')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="header">
                            <h2>
                                Edit {{ $user->name }}'s info
                                <small>All fields required.</small>
                            </h2>
                        </div>
                    <div class="body">

                        {!! Form::model($user, [
                            'method' => 'PATCH',
                            'route' => ['users.update', $user->id]
                            ]) !!}
                              @include('admin.user.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="header">
                            <h2>
                                Change {{ $user->name }}'s password

                            </h2>
                        </div>
                    <div class="body">

                      {!! Form::open([
                          'method' => 'POST',
                          'url' => '/adminpanel/users/changepassword'
                          ]) !!}
                          <input type="hidden" name="user_id" value="{{ $user->id }}" />
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="form-line">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block" style="color:red">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">
                              <i class="material-icons">save</i>
                                Change
                            </button>


                      {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
<!-- Autosize Plugin Js -->
  {!! Html::script('public/admin/plugins/autosize/autosize.js') !!}

  {!! Html::script('public/admin/js/pages/forms/basic-form-elements.js') !!}

@endsection
