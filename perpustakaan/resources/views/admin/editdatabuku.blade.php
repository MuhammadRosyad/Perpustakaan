@extends('admin.layouts.master')
@section('content')
<div id="content">
{{ csrf_field() }}
			  <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Buku</h3>
                        <p class="animated fadeInDown">
                          Data <span class="fa-angle-right fa"></span> Data Buku <span class="fa-angle-right fa"></span> Edit
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        {!! Form::open(['url'=>route('submiteditdatabuku', $Buku->id),'files'=>true,'class'=>'register-form', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                           <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="kodebuku" value="{{$Buku->kodebuku}}" required>
                              <span class="bar"></span>
                              <label>Kode Buku</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="judul" value="{{$Buku->judul}}" required>
                              <span class="bar"></span>
                              <label>Judul</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="pengarang" value="{{$Buku->pengarang}}" required>
                              <span class="bar"></span>
                              <label>Pengarang</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="penerbit" value="{{$Buku->penerbit}}" required>
                              <span class="bar"></span>
                              <label>Penerbit</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="tahun" value="{{$Buku->tahun}}" required>
                              <span class="bar"></span>
                              <label>Tahun</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <label>Tanggal Beli</label>
                              <br>
                              <br>
                              <input type="date" class="form-text"  name="tanggal_beli" value="{{$Buku->tanggal_beli}}" required>
                              <span class="bar"></span>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="harga" value="{{$Buku->harga}}" required>
                              <span class="bar"></span>
                              <label>Harga</label>
                            </div>
                           </div>

                              <input class="submit btn btn-primary" type="submit" value="Simpan">
                              <a href="{{route('databuku')}}" class="btn btn-danger">
                              <span class="icons icon-arrow-left-circle"></span> Batal</a>

                              </div>
                            </div>  
                          </div>
                        </div>
                     
@endsection