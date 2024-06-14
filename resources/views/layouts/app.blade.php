<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    
    @include('components.includes.style')
  </head>

  <body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    @include('components.navbar')

    @include('components.sidebar')

    <main class="main-content position-relative border-radius-lg">
      <div class="container-fluid py-4">
        @yield('content')
      </div>
      @include('components.footer')
    </main>

    @include('components.includes.script')
  </body>

</html>


