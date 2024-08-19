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
                        <h5>Formulir Pendaftaran</h5>
                    </div>
                    <div class="card-body">
                        <form action="" class="contact-form">
                            @csrf
                            <div class="form-section">
                                <label for="nama" class="mb-2">Nama Lengkap:</label>
                                <input type="text" name="nama" class="form-control mb-3" required>

                                <label for="nisn" class="mb-2">NISN:</label>
                                <input type="number" name="nisn" class="form-control mb-3" required>

                                <label for="nik" class="mb-2">NIK:</label>
                                <input type="number" name="nik" class="form-control mb-3" required>

                                <label for="jenis_kelamin" class="mb-2">Jenis Kelamin:</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control mb-3" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                                <label for="tempat_lahir" class="mb-2">Tempat Lahir:</label>
                                <input type="text" name="tempat_lahir" class="form-control mb-3" required>

                                <label for="nisn" class="mb-2">Tanggal Lahir:</label>
                                <input type="date" name="nisn" class="form-control mb-3" required>

                                <label for="foto" class="mb-2">Foto:</label>
                                <input type="file" name="foto" class="form-control mb-3" required>

                                <label for="foto_akte" class="mb-2">Foto Akte:</label>
                                <input type="file" name="foto_akte" class="form-control mb-3" required>

                                <label for="agama" class="mb-2">Agama:</label>
                                <select id="agama" name="agama" class="form-control mb-3" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>

                                <label for="alamat" class="mb-2">Alamat:</label>
                                <textarea id="alamat" name="alamat" rows="4" cols="50" class="form-control mb-3" required></textarea>

                                <label for="nohp" class="mb-2">No HP:</label>
                                <input type="number" name="nohp" class="form-control mb-3" required>
                            </div>

                            <div class="form-section">
                                <label for="nama_ayah" class="mb-2">Nama Ayah:</label>
                                <input type="text" name="nama_ayah" class="form-control mb-3" required>

                                <label for="pekerjaan_ayah" class="mb-2">Pekerjaan Ayah:</label>
                                <select id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control mb-3" required>
                                    <option value="">-- Belum Ditambah Optionnya --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                                <label for="nohp_ayah" class="mb-2">No HP Ayah:</label>
                                <input type="number" name="nohp_ayah" class="form-control mb-3" required>

                                <label for="nama_ibu" class="mb-2">Nama Ibu:</label>
                                <input type="text" name="nama_ibu" class="form-control mb-3" required>

                                <label for="pekerjaan_ibu" class="mb-2">Pekerjaan Ibu:</label>
                                <select id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control mb-3" required>
                                    <option value="">-- Belum Ditambah Optionnya --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                                <label for="nohp_ibu" class="mb-2">No HP Ibu:</label>
                                <input type="number" name="nohp_ibu" class="form-control mb-3" required>
                            </div>

                            <div class="form-section">
                                <label for="asal_sekolah" class="mb-2">Asal Sekolah:</label>
                                <input type="text" name="asal_sekolah" class="form-control mb-3" required>

                                <label for="foto_rapot" class="mb-2">Foto Rapot:</label>
                                <input type="file" name="foto_rapot" class="form-control mb-3" required>

                                <label for="foto_ijazah" class="mb-2">Foto Ijazah:</label>
                                <input type="file" name="foto_ijazah" class="form-control mb-3" required>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="previous btn btn-info float-left">Previous</button>
                                <button type="button" class="next btn btn-info">Next</button>
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

