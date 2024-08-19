@extends('layouts.dashboard')
@section('content')
    <main id="main" class="main">

    <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
        <div class="row">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Selamat Datang Calon Siswa!</h4>
                <p>{{ Auth::user()->name}}</p>
                <hr>
                    @isset($data)
                      @if ($data->status_pendaftaran == 'Lolos')
                        <h5>Selamat Anda <b>Lolos Pendaftaran</b>, silahkan cetak kartu pendaftaran <a href="{{ route('generate-pdf') }}" target="_blank">disini</a></h5>
                      @elseif($data->status_pendaftaran == 'Tidak Lolos')
                        <h5><b>Mohon maaf Anda Tidak Lolos Pendaftaran!</b></h5>
                      @else
                       <h5><b>Menunggu Untuk Verifikasi</b></h5>
                      @endif
                    @endisset
                    @empty($data)
                        <p>Anda belum mengisi form pendaftaran, silahkan isi di menu pendaftaran</p>
                    @endempty
              </div>
        </div>
        </div><!-- End Left side columns -->

    </div>
    </section>

    </main><!-- End #main -->
@endsection

