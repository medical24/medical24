<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
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
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Dashboard</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Department</span></a></li>
            <li class="treeview">
            <li><a href="#"><i class='fa fa-link'></i> <span>Doctor</span></a></li>
            <li class="treeview">
            <li><a href="#"><i class='fa fa-link'></i> <span>Patient</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Nurse</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Pharmacist</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Laboratorist</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Accountant</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Monitor Hospital</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class='fa fa-link'></i>View Appointment</a></li>
                    <li><a href="#"><i class='fa fa-link'></i>View Payment</a></li>
                    <li><a href="#"><i class='fa fa-link'></i>View Operation Report</a></li>
                    <li><a href="#"><i class='fa fa-link'></i>View Bed Status</a></li>
                    <li><a href="#"><i class='fa fa-link'></i>View Birth Report</a></li>
                    <li><a href="#"><i class='fa fa-link'></i>View Death Report</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Profile</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
