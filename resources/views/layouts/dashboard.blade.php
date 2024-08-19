<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Pendaftaran Siswa Baru</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('includes.dashboard.style')
</head>

<body class="d-flex flex-column min-vh-100">
  @include('sweetalert::alert')
  @include('includes.dashboard.header')

  @include('includes.dashboard.sidebar')

  @yield('content')
  
  @include('includes.dashboard.footer')
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.dashboard.script')

</body>

</html>