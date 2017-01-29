@extends('admin.layouts.master')
@section('title')
  Portfolio
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
                <i class="material-icons">personal_video</i> Portfolio
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
                              ALL PROJECTS
                          </h2>
                          <ul class="header-dropdown m-r--5">
                              <li class="dropdown">
                                  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="material-icons">more_vert</i>
                                  </a>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="{{ url('/adminpanel/projects/create') }}"><i class="material-icons">add</i> Add Project</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <div class="body">
                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                              <thead>
                                  <tr>
                                      <th>Projuct Title</th>
                                      <th>Project Description</th>
                                      <th>Project Link</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tfoot>
                                  <tr>
                                      <th>Projuct Title</th>
                                      <th>Project Description</th>
                                      <th>Project Link</th>
                                      <th>Action</th>
                                  </tr>
                              </tfoot>
                              <tbody>
                                @foreach($projects as $project)
                                  <tr>
                                      <td><a href="{{ url('/adminpanel/projects/'. $project->id . '/edit') }}">{{ $project->title }}</a></td>
                                      <td><a href="{{ url('/adminpanel/projects/'. $project->id . '/edit') }}">{{ substr($project->dis, 0, 50) }} ...</a></td>
                                      <td><a href="{{ url('/adminpanel/projects/'. $project->id . '/edit') }}">{{ $project->link_url }}</a></td>
                                      <td>

                                        <a href="{{ url('/adminpanel/projects/'. $project->id . '/delete') }}" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                        <a href="{{ url('/adminpanel/projects/'. $project->id . '/edit') }}" class="btn btn-success"><i class="material-icons">mode_edit</i></a>

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
