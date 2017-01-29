@extends('admin.layouts.master')
@section('title')
  Edit  {{ $image->slag }} Image
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
                  <a href="{{ url('/adminpanel/sitesettings') }}">
                      <i class="material-icons">settings</i> Site Settengs
                  </a>
               </li>
                <li class="active">
                      <i class="material-icons">mode_edit</i> Edit {{ $image->slag }} Image
                </li>
            </ol>
        </div>
        @include('admin.layouts.message')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="card">
                  <div class="header">
                            <h2>
                                Edit {{ $image->slag }}'s image
                                <small>All fields required.</small>
                            </h2>
                        </div>
                    <div class="body">

                        {!! Form::model($image, [
                            'method' => 'PATCH',
                            'files' => 'true',
                            'route' => ['image.update', $image->id]
                            ]) !!}

                            @if($image->image != '')
                              {!! Html::image(checkImage($image->image), $image->slag, ['width' => '300', 'height' => '200', 'class' => 'img-resposive','style' => 'margin-bottom:20px']) !!}
                            @endif
                            <br>

                                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                    <div class="form-line">
                                       {!! Form::file("image", null , ['class' => 'form-control', 'id' => 'image']) !!}
                                        @if ($errors->has('image'))
                                          <span class="help-block" style="color:red">
                                              <strong>{{ $errors->first('image') }}</strong>
                                          </span>
                                        @endif

                                    </div><br><br>
                                    <button type="submit" class="btn btn-primary btn-lg" style="float:left">
                                        <i class="material-icons">save</i>
                                        Save
                                    </button>
                                    <br /><br />

                                </div>



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
