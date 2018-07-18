@extends('admin.layouts.master')
@section('content')
<div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Mahasiswa</h3>
                        <p class="animated fadeInDown">
                          Data <span class="fa-angle-right fa"></span> Data Mahasiswa
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <a href="{{route('tambahdatamahasiswa')}}" class="btn btn-primary">
                        <span class="icons icon-plus"></span>
                        Tambah
                      </a>
                    </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>No. Telepon</th>
                          <th>Alamat</th>
                          <th>Email</th>
                          <th class="text-center">Aksi</th>
                        </tr>
                        @foreach ($Mahasiswa as $Index=>$DataMahasiswa)
                        <tr>
                          <td>{{$Index+=1}}</td>
                          <td>{{$DataMahasiswa->nim}}</td>
                          <td>{{$DataMahasiswa->nama}}</td>
                          <td>{{$DataMahasiswa->tempat_lahir}}</td>
                          <td>{{$DataMahasiswa->tanggal_lahir}}</td>
                          <td>{{$DataMahasiswa->jenis_kelamin}}</td>
                          <td>{{$DataMahasiswa->no_telepon}}</td>
                          <td>{{$DataMahasiswa->alamat}}</td>
                          <td>{{$DataMahasiswa->email}}</td>
                          <td class="text-center">
                            <a href="{{route('editdatamahasiswa',$DataMahasiswa->id)}}" class="btn btn-round btn-info">
                            <span class="fa fa-edit"></span>
                            Edit
                            </a>
                            <a href="{{route('hapusdatamahasiswa',$DataMahasiswa->id)}}" class="btn btn-round btn-danger">
                            <span class="fa fa-trash"></span>
                            Hapus
                            </a>
                          </td
                        </tr>
                        @endforeach
                      </thead>
                      <tbody>
                        <tr>
                          
                        </tr>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
@endsection            