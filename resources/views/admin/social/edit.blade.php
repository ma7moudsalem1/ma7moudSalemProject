@extends('admin.layouts.master')
@section('title')
  Edit {{ $link->name }}
@endsection

@section('header')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
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
                  <a href="{{ url('/adminpanel/social') }}">
                      <i class="material-icons">link</i> Social Link
                  </a>
               </li>
                <li class="active">
                      <i class="material-icons">mode_edit</i> {{ $link->name }}
                </li>
            </ol>
        </div>
        @include('admin.layouts.message')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="header">
                            <h2>
                                Edit {{ $link->name }} info
                                <small>All fields required.</small>
                            </h2>
                        </div>
                    <div class="body">

                        {!! Form::model($link, [
                            'method' => 'PATCH',
                            'route' => ['social.update', $link->id]
                            ]) !!}
                              @include('admin.social.form')
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <script type="text/javascript">
    $('select').select2();
  </script>
@endsection
