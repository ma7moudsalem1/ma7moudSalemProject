@extends('admin.layouts.master')
@section('title')
  Messages
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
                <i class="material-icons">mail</i> Messages
             </li>
          </ol>
        </div>
          @include('admin.layouts.message')
        <!-- Basic Examples -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>
                              ALL Messages
                          </h2>

                      </div>
                      <div class="body">
                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Subject</th>
                                      <th>Time</th>
                                      <th>Stutes</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tfoot>
                                  <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Subject</th>
                                      <th>Time</th>
                                      <th>Stutes</th>
                                      <th>Action</th>
                                  </tr>
                              </tfoot>
                              <tbody>
                                @foreach($messages as $message)
                                  <tr>
                                      <td><a href="{{ url('/adminpanel/messages/'. $message->id . '/show') }}">{{ $message->name }}</a></td>
                                      <td><a href="{{ url('/adminpanel/messages/'. $message->id . '/show') }}">{{ $message->email }}</a></td>
                                      <td><a href="{{ url('/adminpanel/messages/'. $message->id . '/show') }}">{{ substr($message->subject, 0, 50) }} </a></td>
                                      <td>{{ $message->created_at }}</td>
                                      <td><span class="label bg-{{ checkLookStutes($message->view) }}">{{ checkStutes($message->view) }}</span></td>
                                      <td>

                                        <a href="{{ url('/adminpanel/messages/'. $message->id . '/delete') }}" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                        <a href="{{ url('/adminpanel/messages/'. $message->id . '/show') }}" class="btn btn-info"><i class="material-icons">slideshow</i></a>

                                      </td>
                                  </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <!-- #END# Basic Examples -->
    </div>
</section>
@endsection

@section('footer')
  {!! Html::script('public/admin/plugins/jquery-datatable/jquery.dataTables.js') !!}
  {!! Html::script('public/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') !!}
  {!! Html::script('public/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') !!}
  {!! Html::script('public/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') !!}
  {!! Html::script('public/admin/plugins/jquery-datatable/extensions/export/jszip.min.js') !!}
  {!! Html::script('public/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js') !!}
  {!! Html::script('public/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') !!}

  {!! Html::script('public/admin/js/pages/tables/jquery-datatable.js') !!}
  <!-- SweetAlert Plugin Js -->
  {!! Html::script('public/admin/alert/sweetalert.min.js') !!}

@endsection
