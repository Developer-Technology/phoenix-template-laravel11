@php
    $isCombo = isset($isCombo) ? $isCombo : false;
    $moveTarget = isset($moveTarget) ? $moveTarget : false;
    $navbarShape = isset($navbarShape) ? $navbarShape : 'default'; 
@endphp
<nav class="navbar navbar-top fixed-top navbar-expand-lg {{ isset($class) ? $class : '' }}" id={{ $id }} {!! $isCombo ? "data-navbar-top='combo'" : '' !!} {!! $moveTarget ? "data-move-target='#navbarVerticalNav'" : '' !!}>
  @include('common.navbar-logo', ['navbarShape' => $navbarShape])
  <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
    @include('common.top-navbar-nav')
  </div>
  @include('common.navbar-icons', ['navbarShape' => $navbarShape])
</nav>