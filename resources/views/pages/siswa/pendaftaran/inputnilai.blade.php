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
                        <h5>Pengisian Nilai Rapot</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('input.nilai', $data->id) }}" class="contact-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-section">
                              <div class="form-group row mx-sm-1 mt-4 text-center">
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label"></label>
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Semester 1</label>
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Semester 2</label>
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Semester 3</label>
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Semester 4</label>
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Semester 5</label>
                              </div>
                              <div class="form-group row mx-sm-1 mt-1">
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Bahasa Indonesia</label>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_indonesia" name="bind1">
                                  @if ($errors->has('bind1'))
                                      <span class="text-danger">{{ $errors->first('bind1') }}</span>
                                  @endif
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_indonesia" name="bind2">
                                  @if ($errors->has('bind2'))
                                      <span class="text-danger">{{ $errors->first('bind2') }}</span>
                                  @endif
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_indonesia" name="bind3">
                                  @if ($errors->has('bind3'))
                                      <span class="text-danger">{{ $errors->first('bind3') }}</span>
                                  @endif
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_indonesia" name="bind4">
                                  @if ($errors->has('bind4'))
                                      <span class="text-danger">{{ $errors->first('bind4') }}</span>
                                  @endif
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_indonesia" name="bind5">
                                  @if ($errors->has('bind5'))
                                      <span class="text-danger">{{ $errors->first('bind5') }}</span>
                                  @endif
                                </div>
                              </div>
                              <div class="form-group row mx-sm-1 mt-4 ">
                                <label for="IPA" class="col-sm-2 col-form-label">IPA</label>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="IPA" name="ipa1">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="IPA" name="ipa2">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="IPA" name="ipa3">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="IPA" name="ipa4">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="IPA" name="ipa5">
                                </div>
                              </div>
                              <div class="form-group row mx-sm-1 mt-4 ">
                                <label for="bahasa_inggris" class="col-sm-2 col-form-label">Bahasa Inggris</label>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_inggris" name="bing1">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_inggris" name="bing2">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_inggris" name="bing3">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_inggris" name="bing4">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_inggris" name="bing5">
                                </div>
                              </div>
                              <div class="form-group row mx-sm-1 mt-4 ">
                                <label for="mtk" class="col-sm-2 col-form-label">Matematika</label>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="mtk" name="mtk1">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="mtk" name="mtk2">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="mtk" name="mtk3">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="mtk" name="mtk4">
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="mtk" name="mtk5">
                                </div>
                              </div>
                              <input type="hidden" name="pendaftaran_id" value="{{ $data->id}}">
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
