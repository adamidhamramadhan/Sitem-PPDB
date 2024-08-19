@extends('layouts.app')

@section('content')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Login</h2>
        <p>Apabila belum memiliki akun silahkan register terlebih dahulu</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="contact" class="contact ">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mt-5 card">
                    <div class="card-header d-flex justify-content-center">Login</div>
                    <div class="card-body mt-4">
    
                        <form action="{{ url('proses_login') }}" method="POST">
                            @csrf
    
                            <div class="form-group row mb-4">
                                @error('login_gagal')
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <span class="alert-inner--text">{{ $message }}</span>
                                </div>
                                @enderror
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" value="{{ old('username') }}" autofocus>
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">

                                </div>
                                <div class="mt-4 col-md-6">
                                    <button type="submit" class="btn btn-primary px-4">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End Contact Section -->
  </main>
@endsection