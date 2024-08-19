@extends('layouts.dashboard')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Pendaftaran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pendaftaran</li>
          <li class="breadcrumb-item active">Validasi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <section class="section profile pt-4">
                <div class="row">
                  <div class="col-xl-12  justify-content-center">
          
                    <div class="card">
                      <div class="card-body ">
                        <!-- Bordered Tabs -->
                       
                        <div class="tab-content pt-2">
          
                          <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <div class="row">
                              <div class="col-md-8">
                                <h5 class="card-title">Validasi Data Pendaftaran</h5>
                              </div>
                              <div class="col-md-4 d-flex justify-content-end align-items-center">
                                <a href="{{ route('pendaftaran.admin') }}" class="btn btn-primary "><b>Kembali</b></a>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                              <div class="col-lg-9 col-md-8">{{ $data->nama_siswa}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">NISN</div>
                              <div class="col-lg-9 col-md-8">{{ $data->nisn}}</div>
                            </div>
          
                            <form action="{{ route('pendaftaran.admin.edit', $data->id) }}" method="POST">
                              @csrf
                              @method('PUT')
                              <div class="row">
                                <div class="col-lg-3 col-md-4 label  d-flex align-items-center">Status Pendaftaran</div>
                                <div class="col-lg-9 col-md-8">
                                <select id="status" name="status_pendaftaran" class="form-control label" required>
                                    <option value="">-- Pilih Status --</option>
                                    <option value="Lolos">Lolos</option>
                                    <option value="Tidak Lolos">Tidak Lolos</option>
                                </select>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                          </div>
          
                        </div><!-- End Bordered Tabs -->
          
                      </div>
                    </div>
          
                  </div>
                  
                </div>
              </section>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection

