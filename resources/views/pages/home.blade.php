@extends('layouts.app')

@section('content')
   <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Pendaftaran Siswa Baru<br>Sudah dibuka</h1>
      <h2>Klik menu di bawah untuk mendaftar</h2>
      <a href="{{ url('/registrasi')}}" class="btn-get-started">Daftar</a>
    </div>
  </section><!-- End Hero -->
  
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Tata Cara Pendaftaran Siswa baru</h3>
            <p class="fst-italic">
            <ul>
              <li><i class="bi bi-check-circle"></i> Calon peserta didik baru melakukan registrasi di menu daftar pada halaman web</li>
              <li><i class="bi bi-check-circle"></i> Kemudian melakukan login</li>
              <li><i class="bi bi-check-circle"></i> Peserta didik baru mengisi formulir pendaftaran</li>
              <li><i class="bi bi-check-circle"></i> Kemudian menunggu verifikasi dari pihak sekolah</li>
              <li><i class="bi bi-check-circle"></i> Apabila sudah terverifikasi tahap selanjutnya akan diumumkan pada halaman dashboard</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

</main><!-- End #main -->
@endsection