@extends('admin.layouts.master')
@section('title')
  Edit Site Settings
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
                      <i class="material-icons">settings</i> Site Setting

               </li>
            </ol>
        </div>
        @include('admin.layouts.message')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="header">
                            <h2>
                                Edit Site Settings
                                <small>All fields required.</small>
                            </h2>
                        </div>
                    <div class="body">
                      {!! Form::open([
                        'url' => '/adminpanel/sitesettings',
                        'method', 'POST'
                        ]) !!}
                          @foreach($siteSetting as $setting)
                              <span>{{ $setting->slug }}</span>

                                <div class="form-group{{ $errors->has($setting->namesetting) ? ' has-error' : '' }}">
                                    <div class="form-line">
                                      @if($setting->type == 0)
                                        {!! Form::text($setting->namesetting, $setting->value , ['class' => 'form-control']) !!}
                                      @elseif($setting->type == 2)
                                        {!! Form::color($setting->namesetting, $setting->value , ['class' => 'form-control']) !!}
                                      @else
                                        {!! Form::textarea($setting->namesetting, $setting->value , ['class' => 'form-control']) !!}
                                      @endif

                                      @if ($errors->has($setting->namesetting))
                                        <span class="help-block" style="color:red">
                                          <strong>{{ $errors->first($setting->namesetting) }}</strong>
                                        </span>
                                      @endif
                                    </div>
                                  </div>
                          @endforeach

                            @foreach($images as $image)
                            <a href="{{ url('/adminpanel/image/'.$image->id.'/edit') }}">
                              {!! Html::image(checkImage(getMainImages($image->slag)), $image->slag, ['width' => '150', 'height' => '120', 'title'=> $image->slag, 'class' => 'img-resposive','style' => 'margin-right:20px']) !!}
                            </a>
                            @endforeach
                            <br><br>
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

@endsection
