<?php

namespace App\Http\Controllers;

use App;
use Alert;
use Carbon;
use DataUser;

use App\User;
use App\Buku;
use App\Supplier;
use App\Mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth as Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = Auth::user();
        return view('admin.dashboard');
    }

    // petugas

    public function datapetugas()
    {
        $User = User::all();
        return view('admin.datapetugas',['User' => $User]);
    }
    public function tambahdatapetugas()
    {
    return view('admin.tambahdatapetugas');
    }

    public function submittambahdatapetugas(Request $request)
    {
      $User  = new User;

      $User->nama = $request->nama;
      $User->email = $request->email;
      $User->no_telepon = $request->no_telepon;
      $User->password = bcrypt($request->password);;
      $User->save();

      return redirect(route('datapetugas'))->with(['success' => 'Data Petugas '.$request->nama.' Berhasil di Tambah']);
    }
    public function editdatapetugas($Id)
    {
      $User = User::find($Id);
      return view('admin.editdatapetugas', ['User'=>$User]);
    }
    public function submiteditdatapetugas(Request $request, $Id)
    {
      $User = User::find($Id);

      $User->nama       = $request->nama;
      $User->no_telepon = $request->no_telepon;
      $User->email      = $request->email;
      if ($request->password) {
        $User->password = bcrypt($request->password);
      }
      $User->save();

      return redirect(route('datapetugas'))->with('success', 'Data Petugas '.$request->nama.' Berhasil di Ubah');
    }
      public function hapusdatapetugas($Id)
    {
      $User = User::find($Id);
      $User->delete();

      return redirect(route('datapetugas'))->with('success', 'Data Petugas Berhasil di Hapus');
    }

    // Mahasiswa
        public function datamahasiswa()
    {
        $Mahasiswa = Mahasiswa::all();
        return view('admin.datamahasiswa',['Mahasiswa' => $Mahasiswa]);
    }
    public function tambahdatamahasiswa()
    {
    return view('admin.tambahdatamahasiswa');
    }

    public function submittambahdatamahasiswa(Request $request)
    {
      $Mahasiswa  = new Mahasiswa;

      $Mahasiswa->nim = $request->nim;
      $Mahasiswa->nama = $request->nama;
      $Mahasiswa->tempat_lahir = $request->tempat_lahir;
      $Mahasiswa->tanggal_lahir = $request->tanggal_lahir;
      $Mahasiswa->jenis_kelamin = $request->jenis_kelamin;
      $Mahasiswa->no_telepon = $request->no_telepon;
      $Mahasiswa->alamat = $request->alamat;
      $Mahasiswa->email = $request->email;
      $Mahasiswa->save();

      return redirect(route('datamahasiswa'))->with('success', 'Data Mahasiswa '.$request->nama.' Berhasil di Tambah');
    }
    public function editdatamahasiswa($Id)
    {
      $Mahasiswa = Mahasiswa::find($Id);
      return view('admin.editdatamahasiswa', ['Mahasiswa'=>$Mahasiswa]);
    }
    public function submiteditdatamahasiswa(Request $request, $Id)
    {
      $Mahasiswa = Mahasiswa::find($Id);

      $Mahasiswa->nim = $request->nim;
      $Mahasiswa->nama = $request->nama;
      $Mahasiswa->tempat_lahir = $request->tempat_lahir;
      $Mahasiswa->tanggal_lahir = $request->tanggal_lahir;
      $Mahasiswa->jenis_kelamin = $request->jenis_kelamin;
      $Mahasiswa->no_telepon = $request->no_telepon;
      $Mahasiswa->alamat = $request->alamat;
      $Mahasiswa->email = $request->email;
      $Mahasiswa->save();

      return redirect(route('datamahasiswa'))->with('success', 'Data Mahasiswa '.$request->nama.' Berhasil di Ubah');
    }
      public function hapusdatamahasiswa($Id)
    {
      $Mahasiswa = Mahasiswa::find($Id);
      $Mahasiswa->delete();

      return redirect(route('datamahasiswa'))->with('success', 'Data Mahasiswa Berhasil di Hapus');
    }

    // Buku
        public function databuku()
    {
        $Buku = Buku::all();
        return view('admin.databuku',['Buku' => $Buku]);
    }
    public function tambahdatabuku()
    {
    return view('admin.tambahdatabuku');
    }

    public function submittambahdatabuku(Request $request)
    {
      $Buku  = new Buku;

      $Buku->kodebuku     = $request->kodebuku;
      $Buku->judul        = $request->judul;
      $Buku->pengarang    = $request->pengarang;
      $Buku->penerbit     = $request->penerbit;
      $Buku->tahun        = $request->tahun;
      $Buku->tanggal_beli = $request->tanggal_beli;
      $Buku->harga        = $request->harga;
      $Buku->save();

      return redirect(route('databuku'))->with('success', 'Data Buku '.$request->judul.' Berhasil di Tambah');
    }
    public function editdatabuku($Id)
    {
      $Buku = Buku::find($Id);
      return view('admin.editdatabuku', ['Buku'=>$Buku]);
    }
    public function submiteditdatabuku(Request $request, $Id)
    {
      $Buku = Buku::find($Id);

      $Buku->kodebuku     = $request->kodebuku;
      $Buku->judul        = $request->judul;
      $Buku->pengarang    = $request->pengarang;
      $Buku->penerbit     = $request->penerbit;
      $Buku->tahun        = $request->tahun;
      $Buku->tanggal_beli = $request->tanggal_beli;
      $Buku->harga        = $request->harga;
      $Buku->save();


      return redirect(route('databuku'))->with('success', 'Data Buku '.$request->judul.' Berhasil di Ubah');
    }
      public function hapusdatabuku($Id)
    {
      $Buku = Buku::find($Id);
      $Buku->delete();

      return redirect(route('databuku'))->with('success', 'Data Buku Berhasil di Hapus');
    }

      // Supplier
      public function datasupplier()
    {
        $Supplier = Supplier::all();
        return view('admin.datasupplier',['Supplier' => $Supplier]);
    }
    public function tambahdatasupplier()
    {
    return view('admin.tambahdatasupplier');
    }

    public function submittambahdatasupplier(Request $request)
    {
      $Supplier  = new Supplier;

      $Supplier->id_supplier = $request->id_supplier;
      $Supplier->nama        = $request->nama;
      $Supplier->alamat      = $request->alamat;
      $Supplier->no_telepon  = $request->no_telepon;
      $Supplier->save();

      return redirect(route('datasupplier'))->with('success', 'Data Supplier '.$request->judul.' Berhasil di Tambah');
    }
    public function editdatasupplier($Id)
    {
      $Supplier = Supplier::find($Id);
      return view('admin.editdatasupplier', ['Supplier'=>$Supplier]);
    }
    public function submiteditdatasupplier(Request $request, $Id)
    {
      $Supplier = Supplier::find($Id);

      $Supplier->id_supplier = $request->id_supplier;
      $Supplier->nama        = $request->nama;
      $Supplier->alamat      = $request->alamat;
      $Supplier->no_telepon  = $request->no_telepon;
      $Supplier->save();


      return redirect(route('datasupplier'))->with('success', 'Data Supplier '.$request->judul.' Berhasil di Ubah');
    }
      public function hapusdatasupplier($Id)
    {
      $Supplier = Supplier::find($Id);
      $Supplier->delete();

      return redirect(route('datasupplier'))->with('success', 'Data Supplier Berhasil di Hapus');
    }
}
