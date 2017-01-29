@extends('admin.layouts.master')
@section('title')
  Add User
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
                <i class="material-icons">group</i>Users
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
                              ALL USERS
                          </h2>
                          <ul class="header-dropdown m-r--5">
                              <li class="dropdown">
                                  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="material-icons">more_vert</i>
                                  </a>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="{{ url('/adminpanel/users/create') }}"><i class="material-icons">add</i> Add User</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <div class="body">
                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Join At</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tfoot>
                                  <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Join At</th>
                                      <th>Action</th>
                                  </tr>
                              </tfoot>
                              <tbody>
                                @foreach($users as $user)
                                  <tr>
                                      <td>{{ $user->name }}</td>
                                      <td>{{ $user->email }}</td>
                                      <td>{{ $user->created_at->diffForHumans() }}</td>
                                      <td>
                                        @if($user->id == 1)
                                        <a href="#" class="btn btn-danger waves-effect" disabled="disabled"><i class="material-icons">delete</i></a>
                                        <a href="{{ url('/adminpanel/users/'. $user->id . '/edit') }}" class="btn btn-success waves-effect"><i class="material-icons">mode_edit</i></a>

                                        @else
                                        <a href="{{ url('/adminpanel/users/'. $user->id . '/delete') }}" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                        <a href="{{ url('/adminpanel/users/'. $user->id . '/edit') }}" class="btn btn-success"><i class="material-icons">mode_edit</i></a>
                                        @endif
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
@endsection
