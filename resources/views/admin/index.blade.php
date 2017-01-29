@extends('admin.layouts.master')

@section('title')
  Dashboard
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
          <ol class="breadcrumb" style="float:right">
              <li class="active">
                <i class="material-icons">home</i> Dashboard
              </li>
          </ol>
        </div>
        <div class="clearfix"></div>
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">PROJECTS</div>
                        <div class="number count-to" data-from="0" data-to="{{ $projects }}" data-speed="1500" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">code</i>
                    </div>
                    <div class="content">
                        <div class="text">SKILLS</div>
                        <div class="number count-to" data-from="0" data-to="{{ $skills }}" data-speed="1500" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">WEBSITE MESSAGES</div>
                        <div class="number count-to" data-from="0" data-to="{{ $messages }}" data-speed="1500" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">CURRENT ADMINS</div>
                        <div class="number count-to" data-from="0" data-to="{{ $users }}" data-speed="1500" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->

        <div class="row clearfix">
            <!-- Visitors -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="body bg-pink">
                        <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                             data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                             data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                             data-fill-Color="rgba(0, 188, 212, 0)">
                            Lastest Admin Added
                        </div>
                        <ul class="dashboard-stat-list">
                          @foreach($lastestAdmin as $admin)
                            <li>
                                {{ $admin->name }}
                                <span class="pull-right">{{ $admin->created_at->diffForHumans() }}</span>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Visitors -->
            <!-- Latest Social Trends -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="body bg-cyan">
                        <div class="m-b--35 font-bold">SOCIAL LINKS</div>
                        <ul class="dashboard-stat-list">
                          @foreach($social as $link)
                            <li>
                                {{ $link->name }}
                                <span class="pull-right">
                                    <a href="{{ 'http://'. $link->link_url }}" target="_blank"><i class="material-icons">trending_up</i></a>
                                </span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Latest Social Trends -->
            <!-- Answered Tickets -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="body bg-teal">
                        <div class="font-bold m-b--35">Latest Added Skills</div>
                        <ul class="dashboard-stat-list">
                          @foreach($lastestSkills as $skill)
                            <li>
                                <a href="{{ url('/adminpanel/skills/'.$skill->id.'/edit') }}" style="color:#FFF">{{ $skill->title }}</a>
                                <span class="pull-right">{{ $skill->range_skill }}%</span>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Answered Tickets -->
        </div>

        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2>Latest Messages</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="{{ url('/adminpanel/messages') }}">See All</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($lastestMessage as $message)
                                    <tr>
                                        <td><a href="{{ url('/adminpanel/messages/'.$message->id.'/show') }}">{{ $message->name }}</a></td>
                                        <td><a href="{{ url('/adminpanel/messages/'.$message->id.'/show') }}">{{ $message->subject }}</a></td>
                                        <td><a href="{{ url('/adminpanel/messages/'.$message->id.'/show') }}">{{ $message->email }}</a></td>
                                        <td><span class="label bg-{{ checkLookStutes($message->view) }}">{{ checkStutes($message->view) }}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
            <!-- Browser Usage -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Admin Notes</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="{{ url('/adminpanel/sitesettings') }}">Write Note</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div><p>{{ getSettings('notes') }}</p></div>
                    </div>
                </div>
            </div>
            <!-- #END# Browser Usage -->
        </div>
    </div>
</section>
@endsection

@section('footer')

      <!-- Custom Js -->
      {!! Html::script('public/admin/js/pages/index.js') !!}
@endsection
