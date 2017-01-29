@extends('admin.layouts.master')
@section('title')
  Show {{ $message->subject }}
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
                  <a href="{{ url('/adminpanel/messages') }}">
                      <i class="material-icons">mail</i> Messages
                  </a>
               </li>
                <li class="active">
                      <i class="material-icons">slideshow</i> {{ $message->subject }}
                </li>
            </ol>
        </div>
        @include('admin.layouts.message')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="header">
                            <h2>
                                Subject: {{ $message->subject }}
                                <small>From: {{ $message->name }}</small>
                                <small>Email: {{ $message->email }}</small>
                                <small>Sending Time: {{ $message->created_at}}</small>
                            </h2>
                            <a href=" {{ url('/adminpanel/messages/'.$message->id.'/delete') }}" style="float:right" class="btn btn-danger">
                              <i class="material-icons">delete</i>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    <div class="body">

                      <textarea name="message" disabled rows="10" style="width:100%">{{ $message->message }}</textarea>

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
