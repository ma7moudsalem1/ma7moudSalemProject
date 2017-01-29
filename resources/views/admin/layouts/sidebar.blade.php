<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{!! Request::root() !!}/public/admin/images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                <div class="email">{{ Auth::user()->email }}</div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN PANEL</li>


                <li class="{{ set_active(['adminpanel']) }}">
                    <a href="{{ url('/adminpanel') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                {{-- Inbox Management --}}
                <li class="{{ set_active(['adminpanel/messages']) }}">
                    <a href="{{ url('/adminpanel/messages') }}">
                        <i class="material-icons">mail</i>
                        <span>Messages</span>
                    </a>
                </li>
                {{-- Inbox Management --}}

                {{-- Personal Profile Management --}}
                <li class="{{ set_active(['adminpanel/profile']) }}">
                    <a href="{{ url('/adminpanel/profile') }}">
                        <i class="material-icons">person</i>
                        <span>Edit Personal Section</span>
                    </a>
                </li>
                {{-- End Personal Profile Management --}}

                {{-- Skills Management --}}
                <li class="{{ set_active(['adminpanel/skills']) }} {{  set_active(['adminpanel/skills/create']) }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">code</i>
                        <span>Skills</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ url('/adminpanel/skills') }}">
                              <i class="material-icons">toc</i>
                                <span>View Skills</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/adminpanel/skills/create') }}">
                              <i class="material-icons">add</i>
                                <span>Add Skill</span>
                            </a>
                        </li>
                      </ul>
                </li>
                {{-- End Skills Management --}}

                {{-- Project Management --}}
                <li class="{{ set_active(['adminpanel/projects']) }} {{ set_active(['adminpanel/projects/create']) }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">personal_video</i>
                        <span>Portoflio</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ url('/adminpanel/projects') }}">
                              <i class="material-icons">toc</i>
                                <span>View Projects</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/adminpanel/projects/create') }}">
                              <i class="material-icons">add</i>
                                <span>Add Project</span>
                            </a>
                        </li>
                      </ul>
                </li>
                {{-- End Project Management --}}


                {{-- Socail Link Management --}}
                <li class="{{ set_active(['adminpanel/social']) }} {{ set_active(['adminpanel/social/create']) }} ">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">link</i>
                        <span>Social Links</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ url('/adminpanel/social') }}">
                              <i class="material-icons">toc</i>
                                <span>View Links</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/adminpanel/social/create') }}">
                              <i class="material-icons">add</i>
                                <span>Add Link</span>
                            </a>
                        </li>
                      </ul>
                </li>
                {{-- End Social Management --}}

                {{-- Site Management --}}
                <li class="{{ set_active(['adminpanel/sitesettings']) }}">
                    <a href="{{ url('/adminpanel/sitesettings') }}">
                        <i class="material-icons">settings</i>
                        <span>Site Settings</span>
                    </a>
                </li>
                {{-- End Site Management --}}

                {{-- Users Management --}}
                <li class="{{ set_active(['adminpanel/users']) }} {{ set_active(['adminpanel/users/create']) }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">group</i>
                        <span>Manage Users</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ url('/adminpanel/users') }}">
                              <i class="material-icons">toc</i>
                                <span>View Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/adminpanel/users/create') }}">
                              <i class="material-icons">add</i>
                                <span>Add User</span>
                            </a>
                        </li>
                      </ul>
                </li>
                {{-- End Users Management --}}
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
