<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @yield('navigationType') @yield('navbarShape')>
    <head>
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phoenix</title>


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

        <link rel="icon" href="{{ Vite::asset('resources/img/favicons/favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">

        <link href="{{asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        
        @yield('styles')
       
        @vite([
            'resources/scss/theme.scss', 
            'resources/scss/user.scss',
            'resources/js/bootstrap-config.js',
        ])


    </head>
    <body>
      <!-- ===============================================-->
      <!--    Main Content-->
      <!-- ===============================================-->
      {{-- <div class="preloader">
        <div class="spinner-border text-warning" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div> --}}
      <main class="main" id="top">

        @section('main-content')
          @section('before-content')
            <script type="module">
              var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
              var navbarTop = document.querySelector('.navbar-top');
              if (navbarTopStyle === 'darker') {
                navbarTop.setAttribute('data-navbar-appearance', 'darker');
              }
            
              var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
              var navbarVertical = document.querySelector('.navbar-vertical');
              if (navbarVertical && navbarVerticalStyle === 'darker') {
                navbarVertical.setAttribute('data-navbar-appearance', 'darker');
              }
            </script>
          @show
          
          <div class="content">
            @yield('content')
          </div>
          @section('after-content')
            @include('common.support-chat')
            @include('common.settings-panel')
          @show
        @show
        
      </main>

      
      @yield('title')
      
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->
        <!-- ===============================================-->
      <!--    JavaScripts-->
      <!-- ===============================================-->

      <script type="text/javascript" src="{{asset('vendors/popper/popper.min.js') }}"></script>
      <script type="text/javascript" src="{{asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{asset('vendors/anchorjs/anchor.min.js') }}"></script>
      <script type="text/javascript" src="{{asset('vendors/is/is.min.js') }}"></script>
      <script type="text/javascript" src="{{asset('vendors/simplebar/simplebar.min.js') }}"></script>
      <script type="text/javascript" src="{{asset('vendors/fontawesome/all.min.js') }}"></script>
      <script type="text/javascript" src="{{asset('vendors/lodash/lodash.min.js') }}"></script>
      <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
      <script type="text/javascript" src="{{asset('vendors/list.js/list.min.js') }}"></script>
      <script type="text/javascript" src="{{asset('vendors/feather-icons/feather.min.js') }}"></script>
      <script type="text/javascript" src="{{asset('vendors/dayjs/dayjs.min.js') }}"></script>
      @vite([
        'resources/js/app.js',
      ])      
      @yield('scripts')

      @stack('scripts')

    

    </body>
</html>
