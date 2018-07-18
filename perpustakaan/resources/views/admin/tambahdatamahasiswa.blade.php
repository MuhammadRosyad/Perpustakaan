@extends('admin.layouts.master')
@section('content')
<div id="content">
{{ csrf_field() }}
			  <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Mahasiswa</h3>
                        <p class="animated fadeInDown">
                          Data <span class="fa-angle-right fa"></span> Data Mahasiswa <span class="fa-angle-right fa"></span> Tambah
                        </p>
                    </div>
                  </div>
              </div>
			         	<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                      	{!!Form::open(['url'=>route('submittambahdatamahasiswa'),'files'=>true,'class'=>'register-form', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form']) !!}

                          <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="nim" required>
                              <span class="bar"></span>
                              <label>NIM</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="nama" required>
                              <span class="bar"></span>
                              <label>Nama</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="tempat_lahir" required>
                              <span class="bar"></span>
                              <label>Tempat Lahir</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <label>Tanggal Lahir</label>
                              <br>
                              <br>
                              <input type="date" class="form-text"  name="tanggal_lahir" required>
                              <span class="bar"></span>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <label>Jenis Kelamin</label>
                            </div>
                            <div class="form-animate-radio">
                            <label class="radio">
                            <input id="radio1" type="radio" name="jenis_kelamin" value="Laki-laki" checked />
                            <span class="outer">
                            <span class="inner"></span></span> Laki-laki
                            </label>
                            <label class="radio">
                            <input id="radio1" type="radio" name="jenis_kelamin" value="Perempuan" />
                            <span class="outer">
                            <span class="inner"></span></span> Perempuan
                            </label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="no_telepon" required>
                              <span class="bar"></span>
                              <label>No. telepon</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="alamat" required>
                              <span class="bar"></span>
                              <label>Alamat</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="email" required>
                              <span class="bar"></span>
                              <label>Email</label>
                            </div>
                           </div>

                              <input class="submit btn btn-primary" type="submit" value="Simpan" >
                              <a href="{{route('datamahasiswa')}}" class="btn btn-danger">
                              <span class="icons icon-arrow-left-circle"></span>
                              Batal</a>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                 
@endsection
