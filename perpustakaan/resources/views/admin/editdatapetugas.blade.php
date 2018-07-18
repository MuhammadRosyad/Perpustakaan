@extends('admin.layouts.master')
@section('content')
<div id="content">
{{ csrf_field() }}
			  <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Petugas</h3>
                        <p class="animated fadeInDown">
                          Data <span class="fa-angle-right fa"></span> Data Petugas <span class="fa-angle-right fa"></span> Edit
                        </p>
                    </div>
                  </div>
              </div>
				<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        {!! Form::open(['url'=>route('submiteditdatapetugas', $User->id),'files'=>true,'class'=>'register-form', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form']) !!}
							             <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_firstname" name="nama" value="{{$User->nama}}" required>
                              <span class="bar"></span>
                              <label>Nama</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_email" name="email" value="{{$User->email}}" required>
                              <span class="bar"></span>
                              <label>Email</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_username" name="no_telepon" value="{{$User->no_telepon}}" required>
                              <span class="bar"></span>
                              <label>No. telepon</label>
                            </div>
						               
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="password">
                              <span class="bar"></span>
                              <label>Password</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_confirm_password" name="confirm_password">
                              <span class="bar"></span>
                              <label>Confirm Password</label>
                            </div>
                           <p>*isi jika ingin mengganti password</p>  
                              <input class="submit btn btn-primary" type="submit" value="Simpan">
                              <a href="{{route('datapetugas')}}" class="btn btn-danger">Batal</a>
                              </div>
                            </div>  
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                 </div>
                </div> 
             </div>   
@endsection