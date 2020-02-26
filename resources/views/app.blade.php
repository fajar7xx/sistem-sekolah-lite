<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Fajar Siagian">
  <title>Sistem Sekolah Lite - Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href={{ asset("admin/assets/img/brand/favicon.png") }} type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href={{ asset("admin/assets/vendor/nucleo/css/nucleo.css") }} type="text/css">
  <link rel="stylesheet" href={{ asset("admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css") }} type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href={{ asset("admin/assets/css/argon.css?v=1.2.0") }} type="text/css">
</head>
<body>
    @section('sidebar')
        This is the master sidebar.
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>