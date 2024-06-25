<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom mb-4">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div>
    </div>
    <ul class="navbar-nav align-items-center ml-auto ml-md-0 px-4">
        <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <div class="media align-items-center">
                    <div class="media-body d-none d-lg-flex flex-column justify-content-end align-items-end" style="min-width: 5rem; margin-right: .75rem;">
                        <span class="mb-0 text-sm font-weight-bold text-right d-block">{{ Auth::user()->name }}</span>
                        <span class="mb-0 badge badge-primary font-weight-bold text-right">{{ Auth::user()->role == 1 ? 'admin' : 'staff' }}</span>
                    </div>
                    <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="https://ui-avatars.com/api/?name={{ Auth::user()->name ?? 'username' }}&background=random">
                    </span>
                </div>
            </a>
            <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome</h6>
                </div>
                <a href="{{ route('profile') }}" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                </a>
                <div class="dropdown-divider"></div>
				<a class="dropdown-item" href="{{ route('logout') }}" 
				onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					<i class="ni ni-user-run"></i>
					{{ __('Logout') }}
				</a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
