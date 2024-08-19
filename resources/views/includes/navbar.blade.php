<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="{{ url('/home')}}">PPDB</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="active" href="{{ url('/home')}}">Home</a></li>
        <li><a href="{{ url('/about')}}">About</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>      
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <a href="{{ route('register') }}" class="get-started-btn"><b>Daftar</b></a>

  </div>
</header><!-- End Header -->