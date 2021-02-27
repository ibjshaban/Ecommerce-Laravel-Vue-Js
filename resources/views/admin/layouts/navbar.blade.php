<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    @include('admin.layouts.menu')

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{ Storage::url(admin()->user()->avatar) }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{ Storage::url(admin()->user()->avatar) }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{ Storage::url(admin()->user()->avatar) }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-globe"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="{{ aurl('lang/ar') }}" class="dropdown-item">
                    <i class="fas fa-flag mr-2"></i> عربى
                </a>

                <div class="dropdown-divider"></div>
                <a href="{{ aurl('lang/en') }}" class="dropdown-item">
                    <i class="fas fa-flag mr-2"></i> English
                </a>

            </div>
        </li>
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ Storage::url(admin()->user()->avatar) }}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ admin()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    @if(!empty(admin()->user()->avatar))
                        <img src="{{ Storage::url(admin()->user()->avatar) }}" class="img-circle" alt="User Image">
                    @endif

                    <p>
                        {{ admin()->user()->name }}
                        <small>Member since {{ admin()->user()->created_at->toDateString() }}</small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="float-left">
                        <a href="{{ route('admin.show', admin()->user()->id) }}" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="float-right">
                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Storage::url(admin()->user()->avatar) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ admin()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            {{ trans('admin.dashboard') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}" class="nav-link active">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>{{ trans('admin.dashboard') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ aurl('settings') }}" class="nav-link">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>{{ trans('admin.settings') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ active_menu('admin')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            {{ trans('admin.admin') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('admin')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('admin') }}" class="nav-link">
                                <i class="fa fa-users pull-right nav-icon"></i>
                                <p>{{ trans('admin.admin') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ active_menu('users')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            {{ trans('admin.users') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('users')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('users') }}" class="nav-link">
                                <i class="fa fa-users pull-right nav-icon"></i>
                                <p>{{ trans('admin.users') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('users') }}?level=user" class="nav-link">
                                <i class="fa fa-users pull-right nav-icon"></i>
                                <p>{{ trans('admin.user') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('users') }}?level=vendor" class="nav-link">
                                <i class="fa fa-users pull-right nav-icon"></i>
                                <p>{{ trans('admin.vendor') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('users') }}?level=company" class="nav-link">
                                <i class="fa fa-users pull-right nav-icon"></i>
                                <p>{{ trans('admin.company') }}</p>
                            </a>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('countries')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-flag"></i>
                        <p>
                            {{ trans('admin.countries') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('countries')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('countries') }}" class="nav-link">
                                <i class="fa fa-flag pull-right nav-icon"></i>
                                <p>{{ trans('admin.countries') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('countries/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('cities')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-flag"></i>
                        <p>
                            {{ trans('admin.cities') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('cities')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('cities') }}" class="nav-link">
                                <i class="fa fa-flag pull-right nav-icon"></i>
                                <p>{{ trans('admin.cities') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('cities/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('states')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-flag"></i>
                        <p>
                            {{ trans('admin.states') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('states')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('states') }}" class="nav-link">
                                <i class="fa fa-flag pull-right nav-icon"></i>
                                <p>{{ trans('admin.states') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('states/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('departments')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            {{ trans('admin.departments') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('departments')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('departments') }}" class="nav-link">
                                <i class="fa fa-flag pull-right nav-icon"></i>
                                <p>{{ trans('admin.departments') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('departments/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('trademarks')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            {{ trans('admin.trademarks') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('trademarks')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('trademarks') }}" class="nav-link">
                                <i class="fa fa-flag pull-right nav-icon"></i>
                                <p>{{ trans('admin.trademarks') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('trademarks/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('manufacturers')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            {{ trans('admin.manufacturers') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('manufacturers')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('manufacturers') }}" class="nav-link">
                                <i class="fa fa-flag pull-right nav-icon"></i>
                                <p>{{ trans('admin.manufacturers') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('manufacturers/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('shipping')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            {{ trans('admin.shipping') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('shipping')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('shipping') }}" class="nav-link">
                                <i class="fa fa-flag pull-right nav-icon"></i>
                                <p>{{ trans('admin.shipping') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('shipping/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('malls')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            {{ trans('admin.malls') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('malls')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('malls') }}" class="nav-link">
                                <i class="fa fa-flag pull-right nav-icon"></i>
                                <p>{{ trans('admin.malls') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('malls/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('colors')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-paint-brush"></i>
                        <p>
                            {{ trans('admin.colors') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('colors')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('colors') }}" class="nav-link">
                                <i class="fa fa-paint-brush pull-right nav-icon"></i>
                                <p>{{ trans('admin.colors') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('colors/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('sizes')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-paint-brush"></i>
                        <p>
                            {{ trans('admin.sizes') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('sizes')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('sizes') }}" class="nav-link">
                                <i class="fa fa-paint-brush pull-right nav-icon"></i>
                                <p>{{ trans('admin.sizes') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('sizes/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('weights')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-paint-brush"></i>
                        <p>
                            {{ trans('admin.weights') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('weights')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('weights') }}" class="nav-link">
                                <i class="fa fa-paint-brush pull-right nav-icon"></i>
                                <p>{{ trans('admin.weights') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('weights/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_menu('products')[0] }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-tag"></i>
                        <p>
                            {{ trans('admin.products') }}
                            <i class="left fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ active_menu('products')[1] }}">
                        <li class="nav-item active">
                            <a href="{{ aurl('products') }}" class="nav-link">
                                <i class="fa fa-tag pull-right nav-icon"></i>
                                <p>{{ trans('admin.products') }}</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ aurl('products/create') }}" class="nav-link">
                                <i class="fa fa-plus pull-right nav-icon"></i>
                                <p>{{ trans('admin.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>Logout</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
