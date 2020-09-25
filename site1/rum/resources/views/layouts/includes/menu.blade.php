<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="index.html">
                <span class="text">R.U.M System</span>
            </a>
            <button type="button" class="nav-toggle"><i data-toggle="expanded"
                    class="ik ik-toggle-right toggle-icon"></i></button>
            <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
        </div>

        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">@lang('language.Navigation')</div>
                    <div class="nav-item @if(Request::is('')||Request::is('home/*')||Request::is('home')) active @endif">
                        <a href="/home"><i class="ik ik-home"></i><span>@lang('language.Dashboard')</span></a>
                    </div>
                    <div class="nav-item @if(Request::is('project/*')||Request::is('project')) active @endif">
                        <a href="/project"><i class="ik ik-folder"></i><span>@lang('language.Project')</span></a>
                    </div>
                    <div class="nav-item @if(Request::is('employee/*')||Request::is('employee')) active @endif">
                        <a href="/employee"><i class="ik ik-user"></i><span>@lang('language.Employee')</span></a>
                    </div>
                    <div class="nav-item">
                        <a href=""><i class="ik ik-users"></i><span>@lang('language.Client')</span></a>
                    </div>
                    <div class="nav-item">
                        <a href=""><i class="ik ik-bar-chart-2"></i><span>@lang('language.Statistics')</span></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>