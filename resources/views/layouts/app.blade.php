<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <link rel="icon" type="image/png" href="https://ui-avatars.com/api/?name=DB+WARGA&rounded=true&background=6f42c1&color=fff&bold=true">
    <title>
        @yield('title', 'DB WARGA')
    </title>
    @stack('styles')
    @include('components.includes.style')
</head>

<body>
    <!-- Sidenav -->
    @include('components.sidebar')
    <!-- Main content -->
    <div class="main-content" id="panel">
        @include('components.navbar')

        <!-- Page content -->
        @yield('content')

        <!-- Footer -->
        @include('components.footer')
    </div>
	
    <!-- Core -->
    <script src="{{ asset('') }}assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{ asset('') }}assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="{{ asset('') }}assets/js/argon.js?v=1.2.0"></script>
</body>
@stack('scripts')
</html>
