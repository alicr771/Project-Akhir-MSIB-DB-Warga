<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="argon/assets/img/apple-icon.png">
    <link rel="icon" type="image/png"
        href="https://ui-avatars.com/api/?name=DB+WARGA&rounded=true&background=6f42c1&color=fff&bold=true">
    <title>
        @yield('title', 'DB WARGA')
    </title>
    @include('components.includes.style')
</head>

<body class="">
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100">
                @yield('content')
            </div>
        </section>
    </main>

    @include('components.includes.script')
</body>

</html>
