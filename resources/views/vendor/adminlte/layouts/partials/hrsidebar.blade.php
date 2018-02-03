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

            <li class="header text-center"><span>Maintanance</span></li>
            <li>
                <a href="/departments"><i class="fa  fa-building text-purple"></i>
                        <span>
                            Departments
                        </span>
                </a>
            </li>
            <li>
                <a href="/roles"><i class="fa  fa-anchor text-purple"></i>
                    <span>
                            Roles
                        </span>
                </a>
            </li>

            <li class="header text-center"><span>On Boarding</span></li>

                    <li class="treeview">
                        <a href=""><i class="fa fa-user text-purple"></i><span>Personal Information</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="/personal"><i class="fa fa-users text-blue"></i><span>All Records</span></a></li>
                            <li><a href="/personal/create"><i class="fa fa-user-plus text-success"></i><span>New Record</span></a></li>
                        </ul>

                    </li>

                    <li class="treeview">
                        <a href=""><i class="fa fa-newspaper-o text-purple"></i><span>Pre Employment Records</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="/pre_employment"><i class="fa fa-database text-blue"></i><span>All Records</span></a></li>
                            <li><a href="/pre_employment/create"><i class="fa fa-plus text-success"></i><span>New Record</span></a></li>
                        </ul>

                    </li>

                    <li class="treeview">
                        <a href=""><i class="fa fa-black-tie text-purple"></i><span>Employment Records</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="/employment"><i class="fa fa-database text-blue"></i><span>All Records</span></a></li>
                            <li><a href="/employment/create"><i class="fa fa-plus text-success"></i><span>New Record</span></a></li>
                        </ul>
                    </li>

            <li class="header text-center"><span>Employee Management</span></li>
            <li class="treeview">
                <a href=""><i class="fa fa-dollar text-purple"></i><span>Payroll Management</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/payroll"><i class="fa fa-database text-blue"></i><span>All Payrolls</span></a></li>
                    <li><a href="/payroll/create"><i class="fa fa-plus text-success"></i><span>New Payroll</span></a></li>
                </ul>
            </li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

