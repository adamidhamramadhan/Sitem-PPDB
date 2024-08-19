@extends('layouts.app')

@section('content')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Register</h2>
        <p>Apabila belum memiliki akun silahkan register terlebih dahulu</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="register" class="register">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mt-2 card mb-2">
                    <div class="card-header d-flex justify-content-center">Register</div>
                    <div class="card-body mt-2">
                        <form action="{{ route('register.post') }}" method="POST">
                            @csrf

                            <div class="form-group row mb-4">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nama Lengkap:</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" name="name"  autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                              </div>

                            <div class="form-group row mb-4">
                              <label for="nisn" class="col-md-4 col-form-label text-md-right">NISN:</label>
                              <div class="col-md-6">
                                  <input type="text" id="nisn" class="form-control" name="nisn"  autofocus>
                                  @if ($errors->has('nisn'))
                                      <span class="text-danger">{{ $errors->first('nisn') }}</span>
                                  @endif
                              </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                                <div class="col-md-6">
                                    <input type="text" id="email" class="form-control" name="email" autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                              </div>
    
                            <div class="form-group row mb-4">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username:</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username"  autofocus>
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password:</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" >
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
                                        Register
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