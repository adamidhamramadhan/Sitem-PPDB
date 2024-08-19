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
                    <div class="card-header text-white bg-info text-center">
                        <h5>Formulir Pendaftaran</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pendaftaran.store')}}" class="contact-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-section">
                                <div class="card-header mb-2">Data Pribadi</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama" class="mb-2">Nama Lengkap:</label>
                                        <input type="text" name="nama_siswa" class="form-control mb-3" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="nisn" class="mb-2">NISN:</label>
                                        <input type="number" name="nisn" class="form-control mb-3" value="{{ old('nisn') }}">
                                        @if ($errors->has('nisn'))
                                            <span class="text-danger">{{ $errors->first('nisn') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="nik" class="mb-2">NIK:</label>
                                        <input type="number" name="nik" class="form-control mb-3"  value="{{ old('nik') }}" >
                                        @if ($errors->has('nik'))
                                            <span class="text-danger">{{ $errors->first('nik') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kelamin" class="mb-2">Jenis Kelamin:</label>
                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control mb-3" value="{{ old('jenis_kelamin') }}" >
                                            <option value="">-- Pilih --</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @if ($errors->has('jenis_kelamin'))
                                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="tempat_lahir" class="mb-2">Tempat Lahir:</label>
                                        <input type="text" name="tempat_lahir" class="form-control mb-3" value="{{ old('tempat_lahir') }}" >
                                        @if ($errors->has('tempat_lahir'))
                                            <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="nisn" class="mb-2">Tanggal Lahir:</label>
                                        <input type="date" name="tanggal_lahir" class="form-control mb-3" value="{{ old('tanggal_lahir') }}">
                                        @if ($errors->has('tanggal_lahir'))
                                            <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="foto" class="mb-2">Foto:</label>
                                        <input type="file" name="foto" class="form-control mb-3" value="{{ old('foto') }}">
                                        @if ($errors->has('foto'))
                                            <span class="text-danger">{{ $errors->first('foto') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="foto_akte" class="mb-2">Foto Akte:</label>
                                        <input type="file" name="foto_akte" class="form-control mb-3" value="{{ old('foto_akte') }}">
                                        @if ($errors->has('foto_akte'))
                                            <span class="text-danger">{{ $errors->first('foto_akte') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="agama" class="mb-2">Agama:</label>
                                        <select id="agama" name="agama" class="form-control mb-3" value="{{ old('agama') }}">
                                            <option value="">-- Pilih --</option>
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
                                        <textarea id="alamat" name="alamat" rows="4" cols="50" class="form-control mb-3" value="{{ old('alamat') }}"></textarea>
                                        @if ($errors->has('alamat'))
                                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="nohp" class="mb-2">No HP:</label>
                                        <input type="number" name="nohp" class="form-control mb-3" value="{{ old('nohp') }}">
                                        @if ($errors->has('nohp'))
                                            <span class="text-danger">{{ $errors->first('nohp') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="card-header mb-2">Data Orang Tua</div>
                                <div class="card-body">
                                    <div class="row col-lg-12">
                                        <div class="col-md-6 ">
                                            
                                            <div class="form-group">
                                                <label for="nama_ayah" class="mb-2">Nama Ayah:</label>
                                                <input type="text" name="nama_ayah" class="form-control mb-3" value="{{ old('nama_ayah') }}">
                                                @if ($errors->has('nama_ayah'))
                                                    <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                                                @endif
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="pekerjaan_ayah" class="mb-2">Pekerjaan Ayah:</label>
                                                <input type="text" name="pekerjaan_ayah" class="form-control mb-3" value="{{ old('pekerjaan_ayah') }}">
                                                @if ($errors->has('pekerjaan_ayah'))
                                                    <span class="text-danger">{{ $errors->first('pekerjaan_ayah') }}</span>
                                                @endif
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="nohp_ayah" class="mb-2">No HP Ayah:</label>
                                                <input type="number" name="nohp_ayah" class="form-control mb-3" value="{{ old('nohp_ayah') }}">
                                                @if ($errors->has('nohp_ayah'))
                                                    <span class="text-danger">{{ $errors->first('nohp_ayah') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class=" col-md-6">
                                            <div class="form-group">
                                                <label for="nama_ibu" class="mb-2">Nama Ibu:</label>
                                                <input type="text" name="nama_ibu" class="form-control mb-3" value="{{ old('nama_ibu') }}">
                                                @if ($errors->has('nama_ibu'))
                                                    <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="pekerjaan_ibu" class="mb-2">Pekerjaan ibu:</label>
                                                <input type="text" name="pekerjaan_ibu" class="form-control mb-3" value="{{ old('pekerjaan_ibu') }}">
                                                @if ($errors->has('pekerjaan_ibu'))
                                                    <span class="text-danger">{{ $errors->first('pekerjaan_ibu') }}</span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="nohp_ibu" class="mb-2">No HP Ibu:</label>
                                                <input type="number" name="nohp_ibu" class="form-control mb-3" value="{{ old('nohp_ibu') }}">
                                                @if ($errors->has('nohp_ibu'))
                                                    <span class="text-danger">{{ $errors->first('nohp_ibu') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>

                                <div class="card-header mb-2">Data Sekolah</div>
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="asal_sekolah" class="mb-2">Asal Sekolah:</label>
                                        <input type="text" name="asal_sekolah" class="form-control" value="{{ old('asal_sekolah') }}">
                                        <font size="2">*e.g. SMP Negeri 1 Kota Bengkulu</font>
                                        @if ($errors->has('asal_sekolah'))
                                            <span class="text-danger">{{ $errors->first('asal_sekolah') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="foto_rapot" class="mb-2">Rapot (pdf):</label>
                                        <input type="file" name="foto_rapot" class="form-control" value="{{ old('foto_rapot') }}">
                                        <font size="2">*smt 1 - smt 5, ext .pdf</font>
                                        @if ($errors->has('foto_rapot'))
                                            <span class="text-danger">{{ $errors->first('foto_rapot') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="foto_ijazah" class="mb-2">Ijazah (pdf):</label>
                                        <input type="file" name="foto_ijazah" class="form-control" value="{{ old('foto_ijazah') }}">
                                        <font size="2">*Depan Belakang, ext .pdf</font>
                                        @if ($errors->has('foto_ijazah'))
                                            <span class="text-danger">{{ $errors->first('foto_ijazah') }}</span>
                                        @endif
                                    </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                </div>

                                <button type="submit" class="btn btn-success mt-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    </main><!-- End #main -->
    
@endsection

