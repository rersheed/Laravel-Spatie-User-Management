<header id="page-topbar">
    <div class="navbar-header">

        <div class="d-flex align-items-left">
            <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex align-items-center">


            <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ asset('backend/assets/images/users/avatar-2.jpg') }} " alt="Header Avatar">
                    <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="{{ route('profile.edit') }}">
                        <span> {{ __('Profile') }}</span>
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            <span>Log Out</span>
                        </a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
