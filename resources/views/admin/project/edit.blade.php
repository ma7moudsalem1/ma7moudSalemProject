@extends('admin.layouts.master')
@section('title')
  Edit {{ $projectSingle->title }}
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
                  <a href="{{ url('/adminpanel/projects') }}">
                      <i class="material-icons">personal_video</i> Portfolio
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
                                Edit {{ $projectSingle->title }}'s info
                                <small>All fields required.</small>
                            </h2>
                        </div>
                    <div class="body">

                        {!! Form::model($projectSingle, [
                            'method' => 'PATCH',
                            'files' => 'true',
                            'route' => ['projects.update', $projectSingle->id]
                            ]) !!}
                              @include('admin.project.form')
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
