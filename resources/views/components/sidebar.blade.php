<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
  id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="/" target="_blank">
      <span class="ms-1 font-weight-bold">Dashboard</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0" />
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}" href="{{ route('user.index') }}">
          <i class="bi bi-people"></i>
          <span class="nav-link-text ms-1">Manajemen Pengguna</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pages/tables.html">
          <i class="bi bi-person-arms-up"></i>
          <span class="nav-link-text ms-1">Manajemen Penduduk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pages/billing.html">
          <i class="bi bi-signpost"></i>
          <span class="nav-link-text ms-1">Manajemen RT</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pages/virtual-reality.html">
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
        <a class="nav-link" href="./pages/rtl.html">
          <i class="bi bi-file-earmark-text"></i>
          <span class="nav-link-text ms-1">Manajemen Dokumen</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pages/rtl.html">
          <i class="bi bi-file-earmark-zip"></i>
          <span class="nav-link-text ms-1">Manajemen Mutasi</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
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
        <a class="nav-link" href="./pages/sign-up.html">
          <i class="bi bi-box-arrow-left"></i>
          <span class="nav-link-text ms-1">Sign Out</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
