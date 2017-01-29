<!-- Top Bar -->
<nav class="navbar">
   <div class="container-fluid">
       <div class="navbar-header">
           <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
           <a href="javascript:void(0);" class="bars"></a>
           <a class="navbar-brand" href="{{ url('/adminpanel') }}">Admin Panel - {{ getSettings() }}</a>
       </div>
       <div class="collapse navbar-collapse" id="navbar-collapse">
           <ul class="nav navbar-nav navbar-right">
               <!-- Call Search -->
               <li><a href="{!! Request::root() !!}" target="_blank"  class="" data-close="true"><i class="material-icons">remove_red_eye</i></a></li>
               <!-- #END# Call Search -->
               <!-- Notifications -->
               <li class="dropdown">
                   <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                       <i class="material-icons">mail_outline</i>
                       @unless(getCountUreadMessages() == 0)
                          <span class="label-count">
                            {{ getCountUreadMessages() }}
                          </span>
                       @endunless
                   </a>
                   <ul class="dropdown-menu">
                       <li class="header">New Messages</li>
                       <li class="body">
                           <ul class="menu">
                             @if(getCountUreadMessages() != 0)

                             @foreach(getUreadMessages() as $KeyMessage => $valueMessage)
                               <li>
                                   <a href="{{ url('/adminpanel/messages/' . $valueMessage->id . '/show') }}">
                                       <div class="icon-circle bg-light-green">
                                           <i class="material-icons">person_add</i>
                                       </div>
                                       <div class="menu-info">
                                           <h4>{{ $valueMessage->name }}</h4>
                                           <p>
                                               <i class="material-icons">access_time</i> {{$valueMessage->created_at->diffForHumans() }}
                                           </p>
                                       </div>
                                   </a>
                               </li>
                               @endforeach

                               @else
                               <li class="text-center">
                                   <a href="">
                                       <div class="menu-info">
                                           <h4>You haven't any new messages</h4>

                                       </div>
                                   </a>
                               </li>
                               @endif
                           </ul>
                       </li>
                       <li class="footer">
                           <a href="{{ url('/adminpanel/messages') }}">View All Messages</a>
                       </li>
                   </ul>
               </li>
               <!-- #END# Notifications -->

              <!-- <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>-->
                                  <li class="dropdown">
                   <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                       <i class="material-icons">more_vert</i>
                   </a>
                   <ul class="dropdown-menu">
                       <li>
                           <a href="{{ url('/adminpanel/users/'. Auth::user()->id .'/edit') }}"><i class="material-icons">person</i>Profile</a>
                       </li>
                       <li>
                           <a href="{{ url('/adminpanel/sitesettings') }}"><i class="material-icons">settings</i>Settings</a>
                       </li>
                       <li>
                           <a href="{{ url('/adminpanel/logout') }} javascript:void(0);"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Sign Out</a>
                           <form id="logout-form" action="{{ url('/adminpanel/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                           </form>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
   </div>
</nav>
<!-- #Top Bar -->
