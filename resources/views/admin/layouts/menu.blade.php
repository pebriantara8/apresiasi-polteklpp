<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ms-auto">
            <div><button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar"><span class="hamburger-box"><span
                            class="hamburger-inner"></span></span></button></div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div><button type="button" class="hamburger hamburger--elastic mobile-toggle-nav"><span
                    class="hamburger-box"><span class="hamburger-inner"></span></span></button></div>
    </div>
    <div class="app-header__menu"><span><button type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav"><span
                    class="btn-icon-wrapper"><i class="fa fa-ellipsis-v fa-w-6"></i></span></button></span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{ url('admin/dashboard') }}" class="">
                        <i class="metismenu-icon pe-7s-science"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">Issue</li>
                <li>
                    <a href="{{ url('admin/issue/create') }}" class="">
                        <i class="metismenu-icon pe-7s-plus"></i>
                        New Issue
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/issue') }}" class="">
                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        Issue
                    </a>
                </li>
                <!-- <li>
                    <a href="{{ url('admin/dashboard') }}" class="">
                        <i class="metismenu-icon pe-7s-next-2"></i>
                        Archive
                    </a>
                </li> -->
                <li class="app-sidebar__heading">Members/Users</li>
                <li>
                    <a href="{{ url('admin/issue/create') }}" class="">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Users
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/issue/create') }}" class="">
                        <i class="metismenu-icon pe-7s-settings"></i>
                        Roles & Permissions
                    </a>
                </li>
                <li class="app-sidebar__heading">Profile</li>
                <li>
                    <a href="{{ url('admin/issue/create') }}" class="">
                        <i class="metismenu-icon pe-7s-user"></i>
                        My Profile
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="javascript:void(0)" class=""
                            onclick="event.preventDefault();this.closest('form').submit();">
                            <i class="metismenu-icon pe-7s-power"></i>
                            Logout
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>