<!-- BOOSTRAP -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    @include('layouts.partials.publik.styles')
    <style>
      .img-fluid-responsive {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 80vh;
      }

      @media (max-width: 1024px) {
        .img-fluid-responsive {
          height: 60vh;
        }
      }

      @media (max-width: 768px) {
        .img-fluid-responsive {
          height: 50vh;
        }
      }

      @media (max-width: 480px) {
        .img-fluid-responsive {
          height: 70vh;
        }
      }
      @media (max-width: 1024px) {
        h1 {
          font-size: 50px;
        }
      }

      @media (max-width: 768px) {
        h1e {
          font-size: 40px;
        }
      }

      @media (max-width: 480px) {
        h1 {
          font-size: 30px;
        }
      }
    </style>
  </head>
  <body>
    <!-- NAVABR -->
    @include('layouts.partials.publik.navbar')
    @stack('style')
    <!-- ENDNAVBAR -->

    <!-- hero section -->
    @yield('content')
    <!-- New Brands End -->

    {{-- footer start --}}
    @include('layouts.partials.publik.footer')
    @stack('foters')
    {{-- end footer --}}

    {{-- scrip --}}
    @include('layouts.partials.publik.scripts')
    @stack('script')
    
   
  </body>
</html>
