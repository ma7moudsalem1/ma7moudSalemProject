@extends('admin.layouts.master')
@section('title')
  Edit Personal Perofile
@endsection
@section('header')

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
                <li class="active">
                      <i class="material-icons">person</i> Personal

               </li>
            </ol>
        </div>
        @include('admin.layouts.message')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="header">
                            <h2>
                                Edit Personal Profile
                                <small>All fields required.</small>
                            </h2>
                        </div>
                    <div class="body">
                      {!! Form::open([
                        'url' => '/adminpanel/profile',
                        'method' => 'POST',
                        'file' => 'true'
                        ]) !!}
                          @foreach($personalProfile as $profile)
                              <span>{{ $profile->slug }}</span>

                                <div class="form-group{{ $errors->has($profile->dataname) ? ' has-error' : '' }}">
                                    <div class="form-line">
                                      @if($profile->type == 0)
                                        {!! Form::text($profile->dataname, $profile->value , ['class' => 'form-control']) !!}
                                      @else
                                        {!! Form::textarea($profile->dataname, $profile->value , ['class' => 'form-control', 'id' => 'tinymce']) !!}
                                      @endif

                                      @if ($errors->has($profile->dataname))
                                        <span class="help-block" style="color:red">
                                          <strong>{{ $errors->first($setting->namesetting) }}</strong>
                                        </span>
                                      @endif
                                    </div>
                                  </div>
                          @endforeach
                          <a href="{{ url('/adminpanel/image/1/edit') }}" class="btn btn-success">Edit image profile</a><br><br><br>
                          <button type="submit" class="btn btn-primary btn-lg">
                            <i class="material-icons">save</i>
                              Save
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
    <!-- TinyMCE -->
    {!! Html::script('public/admin/plugins/tinymce/tinymce.js') !!}

    <!-- Custom Js -->
    {!! Html::script('public/admin/js/pages/forms/editors.js') !!}
@endsection
