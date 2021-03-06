@extends('admin.layouts.master')
@section('content')
<div id="content">
{{ csrf_field() }}
			  <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Supplier</h3>
                        <p class="animated fadeInDown">
                          Data <span class="fa-angle-right fa"></span> Data Supplier <span class="fa-angle-right fa"></span> Edit
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        {!! Form::open(['url'=>route('submiteditdatasupplier', $Supplier->id),'files'=>true,'class'=>'register-form', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                           <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="id_supplier" value="{{$Supplier->id_supplier}}" required>
                              <span class="bar"></span>
                              <label>ID Supplier</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="nama" value="{{$Supplier->nama}}" required>
                              <span class="bar"></span>
                              <label>Nama</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="alamat" value="{{$Supplier->alamat}}" required>
                              <span class="bar"></span>
                              <label>Alamat</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="no_telepon" value="{{$Supplier->no_telepon}}" required>
                              <span class="bar"></span>
                              <label>No. Telepon</label>
                            </div>
                           </div>

                              <input class="submit btn btn-primary" type="submit" value="Simpan">
                              <a href="{{route('datasupplier')}}" class="btn btn-danger">
                              <span class="icons icon-arrow-left-circle"></span> Batal</a>

                              </div>
                            </div>  
                          </div>
                        </div>
                     
@endsection