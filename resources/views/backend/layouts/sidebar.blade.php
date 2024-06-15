    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
            height="60" width="60">
    </div>

    {{-- nav-bar --}}
    @include('backend.layouts.nav')
    {{-- nav-bar --}}

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ url('uploads/profile/' . @$getrecord[0]->profile) }}" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}"
                            class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>

                    </li>


                    <li class="nav-item">
                        <a href="{{ route('admin.Home') }}"
                            class="nav-link {{ Route::is('admin.Home') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-home"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.About_me') }}"
                            class="nav-link {{ Route::is('admin.About_me') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-info-circle"></i>
                            <p>
                                About me
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.skillSet') }}"
                            class="nav-link {{ Route::is('admin.skillSet') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-award"></i>
                            <p>
                                Skill sets
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.portfolio') }}"
                            class="nav-link {{ Route::is('admin.portfolio','admin.portfolio.add','admin.portfolio.edit') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-briefcase"></i>
                            <p>
                                Portfolio
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.blog') }}"
                            class="nav-link {{ Route::is('admin.blog') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-blog"></i>
                            <p>
                                Blog
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.contact') }}"
                            class="nav-link {{ Route::is('admin.contact') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-address-book"></i>
                            <p>
                                Contact
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.logout') }}" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
