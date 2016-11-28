<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
  @yield('styles')
</head>
<body>
  @include('partials._sidebar')
  @yield('intro')
  
  <div class="container">
    @yield('content')
  </div>

  <footer class="page-footer teal">
    @include('partials._footer')
  </footer>


  @include('partials._javascripts')
  @yield('scripts')

  </body>
</html>