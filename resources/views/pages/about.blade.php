@extends('layouts.app')
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p> </p>
      </div>
    </div><!-- End Breadcrumbs -->

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
    </section>

  </main>
@endsection