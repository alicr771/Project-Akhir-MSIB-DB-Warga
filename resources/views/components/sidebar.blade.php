<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="https://ui-avatars.com/api/?name=DbWarga&background=5f73e2&color=fff&rounded=true" class="navbar-brand-img" alt="...">
				<span class="ms-1 font-weight-bolder text-primary">Dashboard</span>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <i class="fas fa-home"></i>
                            <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('user.*') ? 'active' : '' }}" href="{{ route('user.index') }}">
                            <i class="fas fa-users"></i>
                            <span class="nav-link-text ms-1">Pengguna</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('resident.*') ? 'active' : '' }}" href="{{ route('resident.index') }}">
                            <i class="fas fa-user"></i>
                            <span class="nav-link-text ms-1">Penduduk</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('user.index') ? 'active' : '' }}" href="{{ route('user.index') }}">
                            <i class="fas fa-home"></i>
                            <span class="nav-link-text ms-1">Keluarga</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('neighborhood.*') ? 'active' : '' }}" href="{{ route('neighborhood.index') }}">
                            <i class="fas fa-user"></i>
                            <span class="nav-link-text ms-1">RT</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('community-unit.*') ? 'active' : '' }}" href="{{ route('community-unit.index') }}">
                            <i class="fas fa-user"></i>
                            <span class="nav-link-text ms-1">RW</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('kelurahan.*') ? 'active' : '' }}" href="{{ route('kelurahan.index') }}">
                            <i class="fas fa-home"></i>
                            <span class="nav-link-text ms-1">Kelurahan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('document.*') ? 'active' : '' }}" href="{{ route('document.index') }}">
                            <i class="fas fa-file"></i>
                            <span class="nav-link-text ms-1">Dokumen</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('resident-migration.*') ? 'active' : '' }}" href="{{ route('resident-migration.index') }}">
                            <i class="fas fa-check"></i>
                            <span class="nav-link-text ms-1">Mutasi</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Other</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('profile.*') || Route::is('profile') ? 'active' : '' }}" href="{{ route('profile') }}">
                            <i class="fas fa-users"></i>
                            <span class="nav-link-text ms-1">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('generals.*') ? 'active' : '' }}" href="{{ route('generals.index') }}">
                            <i class="fas fa-cog"></i>
                            <span class="nav-link-text ms-1">Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-primary mx-2 text-white" style="border-radius: .25rem" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							  document.getElementById('logout-form').submit();">
						<i class="fas fa-arrow-left"></i>
							<span class="nav-link-text ms-1">Sign Out</span>
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
