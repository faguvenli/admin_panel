<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard.index') }}" class="waves-effect">
                        <i class="bx bx-home"></i>
                        <span key="t-home">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('users.index') }}" class="waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-users">Kullanıcılar</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
