<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">

                <a href="{{ route('admin.dashboard.index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('images/logo-white.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo-white-horizontal.png') }}" class="img-fluid">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="ms-1" key="t-henry">
                        {{ auth()->user()->name ?? 'Misafir'}}
                    </span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                @if(auth()->check())
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->

                    <a class="dropdown-item" href="{{ route('admin.profile.show', auth()->id()) }}">Profil</a>
                    <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                        <span key="t-logout">Çıkış</span>
                    </a>

                    {!! Form::open(['route' => 'logout', 'method' => 'POST', 'id' => 'logout-form']) !!}

                    {!! Form::close() !!}
                </div>
                @endif
            </div>

        </div>
    </div>
</header>
