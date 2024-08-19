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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-info">

                        <div class="row">
                            <div class="col-md-8">
                                <h5>Edit Formulir Pendaftaran</h5>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end align-items-center">
                                <a class="btn btn-secondary" href="{{ route('pendaftaran.index') }}">Kembali</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{ route('pendaftaran.update', $pendaftaran->id)}}" class="contact-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-section">
                                <div class="form-group">
                                    <label for="nama" class="mb-2 mt-2">Nama Lengkap:</label>
                                    <input type="text" name="nama_siswa" class="form-control mb-3" value="{{ Auth::user()->name }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nisn" class="mb-2">NISN:</label>
                                    <input type="number" name="nisn" class="form-control mb-3" value="{{ Auth::user()->nisn }}">
                                    @if ($errors->has('nisn'))
                                        <span class="text-danger">{{ $errors->first('nisn') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nik" class="mb-2">NIK:</label>
                                    <input type="number" name="nik" class="form-control mb-3" value="{{ $pendaftaran->nik }}" >
                                    @if ($errors->has('nik'))
                                        <span class="text-danger">{{ $errors->first('nik') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="jenis_kelamin" class="mb-2">Jenis Kelamin:</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control mb-3">
                                        <option value="{{ $pendaftaran->jenis_kelamin }}" disabled>{{ $pendaftaran->jenis_kelamin }}</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @if ($errors->has('jenis_kelamin'))
                                        <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tempat_lahir" class="mb-2">Tempat Lahir:</label>
                                    <input type="text" name="tempat_lahir" class="form-control mb-3" value="{{  $pendaftaran->tempat_lahir }}" >
                                    @if ($errors->has('tempat_lahir'))
                                        <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nisn" class="mb-2">Tanggal Lahir:</label>
                                    <input type="date" name="tanggal_lahir" class="form-control mb-3" value="{{ $pendaftaran->tanggal_lahir }}">
                                    @if ($errors->has('tanggal_lahir'))
                                        <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                    @endif
                                </div>

                                
                                <div class="form-group">
                                    <label for="foto" class="mb-2">Foto: {{ $pendaftaran->foto }}</label>
                                    <input type="file" name="foto" class="form-control mb-3">
                                    
                                    <img src="{{ asset('/img/foto_siswa/'. $pendaftaran->foto) }}" width="250px">
                                    @if ($errors->has('foto'))
                                        <span class="text-danger">{{ $errors->first('foto') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="foto_akte" class="mb-2">Foto Akte: {{ $pendaftaran->foto_akte }}</label>
                                    <input type="file" name="foto_akte" class="form-control mb-3" value="{{ $pendaftaran->foto_akte }}">
                                    <img src="{{ asset('/img/foto_akte/'. $pendaftaran->foto_akte) }}" width="250px">
                                    @if ($errors->has('foto_akte'))
                                        <span class="text-danger">{{ $errors->first('foto_akte') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="agama" class="mb-2">Agama:</label>
                                    <select id="agama" name="agama" class="form-control mb-3">
                                        <option value="{{ $pendaftaran->agama }}" disabled>{{ $pendaftaran->agama }}</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                    @if ($errors->has('agama'))
                                        <span class="text-danger">{{ $errors->first('agama') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="alamat" class="mb-2">Alamat:</label>
                                    <textarea id="alamat" name="alamat" rows="4" cols="50" class="form-control mb-3">{{ $pendaftaran->alamat }}</textarea>
                                    @if ($errors->has('alamat'))
                                        <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nohp" class="mb-2">No HP:</label>
                                    <input type="number" name="nohp" class="form-control mb-3" value="{{ $pendaftaran->nohp }}">
                                    @if ($errors->has('nohp'))
                                        <span class="text-danger">{{ $errors->first('nohp') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="nama_ayah" class="mb-2">Nama Ayah:</label>
                                    <input type="text" name="nama_ayah" class="form-control mb-3" value="{{ $pendaftaran->nama_ayah }}">
                                    @if ($errors->has('nama_ayah'))
                                        <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="pekerjaan_ayah" class="mb-2">Pekerjaan Ayah:</label>
                                    <input type="text" name="pekerjaan_ayah" class="form-control mb-3" value="{{ $pendaftaran->pekerjaan_ayah }}">
                                    @if ($errors->has('pekerjaan_ayah'))
                                        <span class="text-danger">{{ $errors->first('pekerjaan_ayah') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="nohp_ayah" class="mb-2">No HP Ayah:</label>
                                    <input type="number" name="nohp_ayah" class="form-control mb-3" value="{{ $pendaftaran->nohp_ayah }}">
                                    @if ($errors->has('nohp_ayah'))
                                        <span class="text-danger">{{ $errors->first('nohp_ayah') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="nama_ibu" class="mb-2">Nama Ibu:</label>
                                    <input type="text" name="nama_ibu" class="form-control mb-3" value="{{ $pendaftaran->nama_ibu }}">
                                    @if ($errors->has('nama_ibu'))
                                        <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pekerjaan_ibu" class="mb-2">Pekerjaan ibu:</label>
                                    <input type="text" name="pekerjaan_ibu" class="form-control mb-3" value="{{ $pendaftaran->pekerjaan_ibu }}">
                                    @if ($errors->has('pekerjaan_ibu'))
                                        <span class="text-danger">{{ $errors->first('pekerjaan_ibu') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nohp_ibu" class="mb-2">No HP Ibu:</label>
                                    <input type="number" name="nohp_ibu" class="form-control mb-3" value="{{ $pendaftaran->nohp_ibu }}">
                                    @if ($errors->has('nohp_ibu'))
                                        <span class="text-danger">{{ $errors->first('nohp_ibu') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="asal_sekolah" class="mb-2">Asal Sekolah:</label>
                                    <input type="text" name="asal_sekolah" class="form-control mb-3" value="{{ $pendaftaran->asal_sekolah }}">
                                    @if ($errors->has('asal_sekolah'))
                                        <span class="text-danger">{{ $errors->first('asal_sekolah') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="foto_rapot" class="mb-2">Rapot (pdf): {{ $pendaftaran->foto_rapot }}</label>
                                    <input type="file" name="foto_rapot" class="form-control mb-3" value="{{ $pendaftaran->foto_rapot }}">
                                    @if ($errors->has('foto_rapot'))
                                        <span class="text-danger">{{ $errors->first('foto_rapot') }}</span>
                                    @endif
                               </div>

                               <div class="form-group">
                                    <label for="foto_ijazah" class="mb-2">Ijazah (pdf): {{ $pendaftaran->foto_ijazah }}</label>
                                    <input type="file" name="foto_ijazah" class="form-control mb-3" value="{{ $pendaftaran->foto_ijazah }}">
                                    @if ($errors->has('foto_ijazah'))
                                        <span class="text-danger">{{ $errors->first('foto_ijazah') }}</span>
                                    @endif
                               </div>
  
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            </div>

                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    </main><!-- End #main -->
    
@endsection

