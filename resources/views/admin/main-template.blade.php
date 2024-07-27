<!DOCTYPE html>
<html lang="en">

@include('admin.partials.head')

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  @include('admin.partials.side-bar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('admin.partials.nav-bar')
    <!-- End Navbar -->
    @yield('content')
  </main>

  <!--   Core JS Files   -->
 @include('admin.partials.script')
</body>

@yield('component-script')

</html>
