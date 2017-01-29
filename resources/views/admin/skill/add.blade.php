@extends('admin.layouts.master')
@section('title')
  Add Skill
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
                  <a href="{{ url('/adminpanel/skills') }}">
                      <i class="material-icons">code</i> Skills
                  </a>
               </li>
                <li class="active">
                      <i class="material-icons">add</i> Add
                </li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="header">
                            <h2>
                                Add New Skill
                                <small>All fields required.</small>
                            </h2>
                        </div>
                    <div class="body">
                      {!! Form::open([
                          'method' => 'POST',
                          'url' => '/adminpanel/skills'
                          ]) !!}
                      @include('admin.skill.form')
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
