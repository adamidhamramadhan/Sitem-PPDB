@extends('layouts.dashboard')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Pendaftaran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pendaftaran</li>
          <li class="breadcrumb-item active">Detail</li>
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
                  <div class="col-xl-8">
          
                    <div class="card">
                      <div class="card-body ">
                        <!-- Bordered Tabs -->
                       
                        <div class="tab-content pt-2">
          
                          <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <div class="row">
                              <div class="col-md-8">
                                <h5 class="card-title">Data Formulir Pendaftaran</h5>
                              </div>
                              <div class="col-md-4 d-flex justify-content-end align-items-center">
                                @if ($data->status_pendaftaran == null)
                                  <a href="{{ route('pendaftaran.admin') }}" class="btn btn-primary "><b>Kembali</b></a> 
                                @elseif ($data->status_pendaftaran == 'Lolos')
                                  <a href="{{ route('pendaftaran.admin3') }}" class="btn btn-primary "><b>Kembali</b></a> 
                                @else
                                  <a href="{{ route('pendaftaran.admin2') }}" class="btn btn-primary "><b>Kembali</b></a> 
                                @endif
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label ">Nama Lengkap</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nama_siswa}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">NISN</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nisn}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">NIK</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nik}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Jenis Kelamin</div>
                              <div class="col-lg-8 col-md-8">{{ $data->jenis_kelamin}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Tempat Lahir</div>
                              <div class="col-lg-8 col-md-8">{{ $data->tempat_lahir}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Tanggal Lahir</div>
                              <div class="col-lg-8 col-md-8">{{ \Carbon\Carbon::create($data->tanggal_lahir)->translatedFormat('d F Y') }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Agama</div>
                              <div class="col-lg-8 col-md-8">{{ $data->agama}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Alamat</div>
                              <div class="col-lg-8 col-md-8">{{ $data->alamat}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">No HP</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nohp}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Asal Sekolah</div>
                              <div class="col-lg-8 col-md-8">{{ $data->asal_sekolah}}</div>
                            </div>

                            

                            <h5 class="card-title">Data Ayah</h5>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Nama Ayah</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nama_ayah}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Pekerjaan Ayah</div>
                              <div class="col-lg-8 col-md-8">{{ $data->pekerjaan_ayah}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">No Hp Ayah</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nohp_ayah}}</div>
                            </div>

                            <h5 class="card-title">Data Ibu</h5>


                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Nama Ibu</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nama_ibu}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Pekerjaan Ibu</div>
                              <div class="col-lg-8 col-md-8">{{ $data->pekerjaan_ibu}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">No Hp Ibu</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nohp_ibu}}</div>
                            </div>

                            @isset($nilai)
                            <h5 class="card-title">Nilai Rata-Rata Rapot Semester 1 - Semester 5</h5>


                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Bahasa Indonesia</div>
                              <div class="col-lg-8 col-md-8">{{ $nilai->bahasa_indonesia}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Matematika</div>
                              <div class="col-lg-8 col-md-8">{{ $nilai->mtk}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Ilmu Pengetahuan Alam</div>
                              <div class="col-lg-8 col-md-8">{{ $nilai->ipa}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Bahasa Inggris</div>
                              <div class="col-lg-8 col-md-8">{{ $nilai->bahasa_inggris}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Total Rata-Rata</div>
                              <div class="col-lg-8 col-md-8">{{ $nilai->total_rata2}}</div>
                            </div>
                          @endisset
                          </div>
          
                        </div><!-- End Bordered Tabs -->
          
                      </div>
                    </div>
          
                  </div>
                  <div class="col-xl-4">
          
                    <div class="card">
                      <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          
                        <img src="{{ asset('img/foto_siswa/'.$data->foto) }}" alt="Profile" class="rounded">
                        <h2>{{ $data->nama_siswa}}</h2>
                        <h3>{{ $data->nisn}}</h3>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body profile-card pt-4">
                        <div class="row d-flex justify-content-center">
                          <h3 class=" d-flex justify-content-center label">Download Berkas</h3>
                          <div class="row mt-3">
                            <div class="col-lg-7 col-md-4 label d-flex align-items-center">Akte Kelahiran</div>
                            <div class="col-lg-5 col-md-8"><a href="{{ route('download.foto.akte', $data->foto_akte) }}" class="btn btn-primary">Download</a></div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-lg-7 col-md-4 label d-flex align-items-center">Rapot</div>
                            <div class="col-lg-5 col-md-8"><a href="{{ route('download.rapot', $data->foto_rapot) }}" class="btn btn-primary">Download</a></div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-lg-7 col-md-4 label d-flex align-items-center">Ijazah</div>
                            <div class="col-lg-5 col-md-8"><a href="{{ route('download.ijazah', $data->foto_ijazah) }}" class="btn btn-primary">Download</a></div>
                          </div>
                        </div>
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

