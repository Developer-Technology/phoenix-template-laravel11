<div class="navbar-logo">
  <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
  <a class="navbar-brand me-1 me-sm-3" href="/">
    @if($navbarShape == 'default')
      <div class="d-flex align-items-center">
        <div class="d-flex align-items-center">
          <img src={{ Vite::asset('resources/img/icons/logo.png') }} alt="phoenix" width="27" />
          <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
        </div>
      </div>
    @else
      phoenix 
      <span class="text-body-highlight d-none d-sm-inline">slim</span>
    @endif
  </a>
</div>