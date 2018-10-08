<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('images/avatar-default-icon.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>管理人員</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">目錄</li>
            <li class="active">
                <a href="{{ route('backend.news.index') }}">
                    <i class="fa fa-flag"></i> 
                    <span>最新消息</span>
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
    </aside>