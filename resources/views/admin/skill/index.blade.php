@extends('admin.layouts.master')
@section('title')
  All Sills
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
                <i class="material-icons">code</i> Skills
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
                              ALL SKILLS
                          </h2>
                          <ul class="header-dropdown m-r--5">
                              <li class="dropdown">
                                  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="material-icons">more_vert</i>
                                  </a>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="{{ url('/adminpanel/skills/create') }}"><i class="material-icons">add</i> Add Skill</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <div class="body">
                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                              <thead>
                                  <tr>
                                      <th>Skill Title</th>
                                      <th>Skill Range</th>
                                      <th>Skill Color Show</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tfoot>
                                  <tr>
                                      <th>Skill Title</th>
                                      <th>Skill Range</th>
                                      <th>Skill Color Show</th>
                                      <th>Action</th>
                                  </tr>
                              </tfoot>
                              <tbody>
                                @foreach($skills as $skill)
                                  <tr>
                                      <td><a href="{{ url('/adminpanel/skills/'. $skill->id . '/edit') }}">{{ $skill->title }}</a></td>
                                      <td><a href="{{ url('/adminpanel/skills/'. $skill->id . '/edit') }}">{{ $skill->range_skill }} %</a></td>
                                      <td><a href="{{ url('/adminpanel/skills/'. $skill->id . '/edit') }}">{{ setColor($skill->color) }}</a></td>
                                      <td>

                                        <a href="{{ url('/adminpanel/skills/'. $skill->id . '/delete') }}" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                        <a href="{{ url('/adminpanel/skills/'. $skill->id . '/edit') }}" class="btn btn-success"><i class="material-icons">mode_edit</i></a>

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
