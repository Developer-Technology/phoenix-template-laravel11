@section('content')
  <div class="d-flex flex-center content-min-h">
    <div class="text-center py-9"><img class="img-fluid mb-7 d-dark-none" src={{ Vite::asset('resources/img/spot-illustrations/2.png')}} width="470" alt="" /><img class="img-fluid mb-7 d-light-none" src={{ Vite::asset('resources/img/spot-illustrations/dark_2.png')}} width="470" alt="" />
      <h1 class="text-800 fw-normal mb-5">Create Something Beautiful.</h1><a class="btn btn-lg btn-primary" href="../documentation/getting-started.html">Getting Started</a>
    </div>
  </div>
  <footer class="footer position-absolute">
    <div class="row g-0 justify-content-between align-items-center h-100">
      <div class="col-12 col-sm-auto text-center">
        <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
      </div>
      <div class="col-12 col-sm-auto text-center">
        <p class="mb-0 text-600">v1.10.0</p>
      </div>
    </div>
  </footer>
@endsection
