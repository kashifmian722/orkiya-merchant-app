<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{ url('/dashboard') }}">
        <img src="{{ asset('assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Orkiya</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link loading text-white {{ ($pageTitle == 'Dashboard') ? 'active bg-gradient-primary' : ' ' }} " href="{{ url('/dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link loading text-white {{ ($pageTitle == 'Products') ? 'active bg-gradient-primary' : ' ' }} " href="{{ url('/products') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">inventory_2</i>
            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link loading text-white {{ ($pageTitle == 'Orders') ? 'active bg-gradient-primary' : ' ' }} " href="{{ url('/orders') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment_turned_in</i>
            </div>
            <span class="nav-link-text ms-1">Orders</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link loading text-white {{ ($pageTitle == 'POS Orders') ? 'active bg-gradient-primary' : ' ' }} " href="{{ url('/pos-orders') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment_turned_in</i>
            </div>
            <span class="nav-link-text ms-1">POS Orders</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link loading text-white {{ ($pageTitle == 'Profile') ? 'active bg-gradient-primary' : ' ' }} " href="{{ url('/profile') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link loading text-white {{ ($pageTitle == 'Info') ? 'active bg-gradient-primary' : ' ' }} " href="{{ url('/info') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Info</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link loading text-white {{ ($pageTitle == 'Password') ? 'active bg-gradient-primary' : ' ' }} " href="{{ url('/password') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">lock</i>
            </div>
            <span class="nav-link-text ms-1">Change Password</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link loading text-white {{ ($pageTitle == 'Email') ? 'active bg-gradient-primary' : ' ' }} " href="{{ url('/email') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">email</i>
            </div>
            <span class="nav-link-text ms-1">Email</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link loading text-white " href="{{ url('/logout') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
</aside>