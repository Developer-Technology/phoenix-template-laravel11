<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo" data-move-target="#navbarVerticalNav">
  @include('common.navbar-logo', ['navbarShape' => 'default'])

  <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
    @include('common.top-navbar-nav')
  </div>
  @include('common.navbar-icons', ['navbarShape' => 'default'])
</nav>