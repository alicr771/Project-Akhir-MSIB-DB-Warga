<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-xl fixed-start my-3 ms-4 border-0 bg-white"
  id="sidenav-main">
  <div class="sidenav-header">
    <i aria-hidden="true"
      class="fas fa-times text-secondary position-absolute d-none d-xl-none end-0 top-0 cursor-pointer p-3 opacity-5"
      id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="/" target="_blank">
      <span class="font-weight-bold ms-1">Dashboard</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0" />
  <div class="navbar-collapse collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}" href="{{ route('user.index') }}">
          <i class="bi bi-people"></i>
          <span class="nav-link-text ms-1">Manajemen Pengguna</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('resident.index') }}">
          <i class="bi bi-person-arms-up"></i>
          <span class="nav-link-text ms-1">Manajemen Penduduk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('neighborhood.index') }}">
          <i class="bi bi-signpost"></i>
          <span class="nav-link-text ms-1">Manajemen RT</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('community-unit.index') }}">
          <i class="bi bi-signpost-2"></i>
          <span class="nav-link-text ms-1">Manajemen RW</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pages/rtl.html">
          <i class="bi bi-houses"></i>
          <span class="nav-link-text ms-1">Manajemen Kelurahan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('document.index') }}">
          <i class="bi bi-file-earmark-text"></i>
          <span class="nav-link-text ms-1">Manajemen Dokumen</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('resident-migration.index') }}">
          <i class="bi bi-file-earmark-zip"></i>
          <span class="nav-link-text ms-1">Manajemen Mutasi</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="text-uppercase font-weight-bolder opacity-6 ms-2 ps-4 text-xs">
          Advanced Option
        </h6>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pages/profile.html">
          <i class="bi bi-person-circle"></i>
          <span class="nav-link-text ms-1">Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pages/sign-in.html">
          <i class="bi bi-sliders2"></i>
          <span class="nav-link-text ms-1">Settings</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
          <i class="bi bi-box-arrow-left"></i>
          <span class="nav-link-text ms-1">Sign Out</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
