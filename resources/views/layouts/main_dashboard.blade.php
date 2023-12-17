<x-dashboard.links_header />

<!-- .app -->
<div class="app">
    <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
    <!-- .app-header -->
    <x-dashboard.nav_header />
    <!-- .app-aside -->
    @if (!(Auth::user()->role == 'patient'))
        <x-dashboard.aside />
    @endif
    <!-- .app-main -->
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page">
                <!-- .page-inner -->
                <div class="page-inner">
                    <!-- .page-title-bar -->
                    @yield('content_dashboard')
                </div><!-- /.page-inner -->
            </div><!-- /.page -->
        </div><!-- .app-footer -->

        {{-- <x-dashboard.footer /> --}}
        <!-- /.wrapper -->
    </main><!-- /.app-main -->
</div><!-- /.app -->
<!-- BEGIN BASE JS -->
<x-dashboard.links_footer />
