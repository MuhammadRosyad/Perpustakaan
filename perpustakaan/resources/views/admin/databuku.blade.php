@extends('admin.layouts.master')
@section('content')
<div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Buku</h3>
                        <p class="animated fadeInDown">
                          Data <span class="fa-angle-right fa"></span> Data Buku
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <a href="{{route('tambahdatabuku')}}" class="btn btn-primary">
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
                          <th>Kode Buku</th>
                          <th>Judul</th>
                          <th>Pengarang</th>
                          <th>Penerbit</th>
                          <th>Tahun</th>
                          <th>Tanggal Beli</th>
                          <th>Harga</th>
                          <th class="text-center">Aksi</th>
                        </tr>
                        @foreach ($Buku as $Index=>$DataBuku)
                        <tr>
                          <td>{{$Index+=1}}</td>
                          <td>{{$DataBuku->kodebuku}}</td>
                          <td>{{$DataBuku->judul}}</td>
                          <td>{{$DataBuku->pengarang}}</td>
                          <td>{{$DataBuku->penerbit}}</td>
                          <td>{{$DataBuku->tahun}}</td>
                          <td>{{$DataBuku->tanggal_beli}}</td>
                          <td>{{$DataBuku->harga}}</td>
                          
                          <td class="text-center">
                            <a href="{{route('editdatabuku',$DataBuku->id)}}" class="btn btn-round btn-info">
                            <span class="fa fa-edit"></span>
                            Edit
                            </a>
                            <a href="{{route('hapusdatabuku',$DataBuku->id)}}" class="btn btn-round btn-danger">
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