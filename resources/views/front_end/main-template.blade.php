<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('front_end.partials.head')
    <body class="antialiased">
        <!-- ======= Header ======= -->

       @include('front_end.partials.nav-bar')



        <!-- End Header -->
        @yield('hero')
        <main id="main">

            @yield('section')



        </main><!-- End #main -->
        @include('front_end.partials.script')

        <!-- start Footer -->
        @include('front_end.partials.footer')
        <!-- end Footer -->
    </body>
</html>
