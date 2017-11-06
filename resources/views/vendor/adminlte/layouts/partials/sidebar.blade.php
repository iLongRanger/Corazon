<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">

                        <img src="{{ Auth::user()->photo ? $user->photo->file:'/img/avatar.png'}}" class="img-circle" alt="User Image" />

                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional)
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">

            <!-- Optionally, you can add icons to the links -->
            <li class="active">
                <a href="{{ url('home') }}"><i class='fa fa-home text-red'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a>
            </li>
            <li class="header text-center"><span>HEAD OFFICE</span></li>
            <li class="treeview">
                <a href=""><i class="fa fa-user text-purple"></i><span>System User</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/users"><i class="fa fa-users text-blue"></i><span>All Users</span></a></li>
                    <li><a href="/users/create"><i class="fa fa-user-plus text-success"></i><span>New User</span></a></li>
                </ul>

            </li>
            <li class="treeview">
                <a href=""><i class="fa fa-institution text-blue"></i><span>Department</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/departments"><i class="fa fa-institution text-success"></i><span>All Department</span></a></li>
                    <li><a href="/departments/create"><i class="fa fa-plus text-success"></i><span>New Department</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href=""><i class="fa fa-male text-blue"></i><span>Roles</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/roles"><i class="fa fa-male text-success"></i><span>All Roles</span></a></li>
                    <li><a href="/roles/create"><i class="fa fa-plus text-success"></i><span>New Role</span></a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

