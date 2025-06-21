<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="dualNav">
  <div class="w-100">
    <div class="d-flex flex-between-center dual-nav-first-layer">
      @include('common.navbar-logo', ['navbarShape' => 'default'])

      <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
        <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
          <input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
          <span class="fas fa-search search-box-icon"></span>

        </form>
        <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
          <button class="btn btn-link p-0" aria-label="Close"></button>
        </div>
        @include('common.search-box-content')
      </div>
      @include('common.navbar-icons', ['navbarShape' => 'default'])

    </div>
    <div class="collapse navbar-collapse navbar-top-collapse justify-content-center" id="navbarTopCollapse">
      @include('common.top-navbar-nav')
    </div>
  </div>
</nav>