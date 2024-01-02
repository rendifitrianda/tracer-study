<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\AlumniImports;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Alumni;
use App\Models\Prodi;
use App\Models\Guest;
use App\Models\Kusioner;
use App\Models\Survey;

class Adminalumni extends Controller
{
    function index(){
        $data['list'] = Alumni::get();
        return view('admin.alumni.index', $data);
    }

    function tambah(){
        $data['list'] = Prodi::get();
        return view('admin.alumni.tambah', $data);
    }
    function aksiTambah(Request $request){

        $request->validate(Alumni::$rules,Alumni::$pesan);

        $alumni = new Alumni;
        $alumni->prodi_id = $request->prodi_id;
        $alumni->nama = $request->nama;
        $alumni->nik = $request->nik;
        $alumni->ipk = $request->ipk;
        $alumni->nim = $request->nim;
        $alumni->tahun_masuk = $request->tahun_masuk;
        $alumni->tahun_lulus = $request->tahun_lulus;
        $alumni->jenis_kelamin = $request->jenis_kelamin;
        $alumni->agama = $request->agama;
        $alumni->tempat_lahir = $request->tempat_lahir;
        $alumni->tanggal_lahir = $request->tanggal_lahir;
        $alumni->alamat = $request->alamat;
        $alumni->no_hp = $request->no_hp;
        $alumni->email = $request->email;
        $alumni->password = bcrypt($request->password);
        $alumni->handleUploadfoto();
        $simpan = $alumni->save();

        if($simpan == 1){
            return redirect('admin/alumni')->with('success', 'Data berhasil ditambahkan !');
        }
        return back()->with('danger', 'Data gagal ditambahkan !');


    }

    function detail($alumni){
        $data['list'] = Alumni::with('prodi')->find($alumni);

        return view('admin.alumni.detail', $data);
    }


    function edit(Alumni $alumni){
        $data['list'] = $alumni;
        $data['prodi'] = Prodi::get();
        return view('admin.alumni.edit', $data);
    }

    function Aksiedit(Alumni $alumni, Request $request){


        if ($request->foto != null) {
            if($request->password != null){
                $hapusFileLama = $alumni->handleDeletefoto();

                $alumni->prodi_id = $request->prodi_id;
                $alumni->nama = $request->nama;
                $alumni->nik = $request->nik;
                $alumni->ipk = $request->ipk;
                $alumni->nim = $request->nim;
                $alumni->tahun_masuk = $request->tahun_masuk;
                $alumni->tahun_lulus = $request->tahun_lulus;
                $alumni->jenis_kelamin = $request->jenis_kelamin;
                $alumni->agama = $request->agama;
                $alumni->tempat_lahir = $request->tempat_lahir;
                $alumni->tanggal_lahir = $request->tanggal_lahir;
                $alumni->alamat = $request->alamat;
                $alumni->no_hp = $request->no_hp;
                $alumni->email = $request->email;
                $alumni->password = bcrypt($request->password);
                $alumni->handleUploadfoto();
                $simpan = $alumni->update();

                if($simpan == 1){
                    return redirect('admin/alumni')->with('success', 'Data berhasil diupdate !');
                }
                return back()->with('danger', 'Data gagal diupdate !');
            }else{
                $hapusFileLama = $alumni->handleDeletefoto();

                $alumni->prodi_id = $request->prodi_id;
                    $alumni->nama = $request->nama;
                    $alumni->nik = $request->nik;
                    $alumni->ipk = $request->ipk;
                    $alumni->nim = $request->nim;
                    $alumni->tahun_masuk = $request->tahun_masuk;
                    $alumni->tahun_lulus = $request->tahun_lulus;
                    $alumni->jenis_kelamin = $request->jenis_kelamin;
                    $alumni->agama = $request->agama;
                    $alumni->tempat_lahir = $request->tempat_lahir;
                    $alumni->tanggal_lahir = $request->tanggal_lahir;
                    $alumni->alamat = $request->alamat;
                    $alumni->no_hp = $request->no_hp;
                    $alumni->email = $request->email;
                    $alumni->handleUploadfoto();
                    $simpan = $alumni->update();
    
                    if($simpan == 1){
                        return redirect('admin/alumni')->with('success', 'Data berhasil diupdate !');
                    }
                    return back()->with('danger', 'Data gagal diupdate !');
            }
        }else{
            if($request->password != null){
                $alumni->prodi_id = $request->prodi_id;
                $alumni->nama = $request->nama;
                $alumni->nik = $request->nik;
                $alumni->ipk = $request->ipk;
                $alumni->nim = $request->nim;
                $alumni->tahun_masuk = $request->tahun_masuk;
                $alumni->tahun_lulus = $request->tahun_lulus;
                $alumni->jenis_kelamin = $request->jenis_kelamin;
                $alumni->agama = $request->agama;
                $alumni->tempat_lahir = $request->tempat_lahir;
                $alumni->tanggal_lahir = $request->tanggal_lahir;
                $alumni->alamat = $request->alamat;
                $alumni->no_hp = $request->no_hp;
                $alumni->email = $request->email;
                $alumni->password = bcrypt($request->password);

                $simpan = $alumni->update();

                if($simpan == 1){
                    return redirect('admin/alumni')->with('success', 'Data berhasil diupdate !');
                }
                return back()->with('danger', 'Data gagal diupdate !');
            }else{
                $alumni->prodi_id = $request->prodi_id;
                $alumni->nama = $request->nama;
                $alumni->nik = $request->nik;
                $alumni->ipk = $request->ipk;
                $alumni->nim = $request->nim;
                $alumni->tahun_masuk = $request->tahun_masuk;
                $alumni->tahun_lulus = $request->tahun_lulus;
                $alumni->jenis_kelamin = $request->jenis_kelamin;
                $alumni->agama = $request->agama;
                $alumni->tempat_lahir = $request->tempat_lahir;
                $alumni->tanggal_lahir = $request->tanggal_lahir;
                $alumni->alamat = $request->alamat;
                $alumni->no_hp = $request->no_hp;
                $alumni->email = $request->email;

                $simpan = $alumni->update();

                if($simpan == 1){
                    return redirect('admin/alumni')->with('success', 'Data berhasil diupdate !');
                }
                return back()->with('danger', 'Data gagal diupdate !');
            }
        }

    }
    function hapus(Alumni $alumni){

        $hapus1 = Guest::where('alumni_id', $alumni->id)->delete();
        $hapus2 = Kusioner::where('alumni_id', $alumni->id)->delete();
        $hapus3 = Survey::where('alumni_id', $alumni->id)->delete();

        $hapusFileLama = $alumni->handleDeletefoto();
        $hapus = $alumni->delete();
        if($hapus == 1){
            return redirect('admin/alumni')->with('success', 'Data berhasil dihapus !');
        }
        return back()->with('danger', 'Data gagal dihapus !');
 

    }


    function uploadFile(Request $request){

        $file = $request->file('file');

        Excel::import(new AlumniImports, $file);

        return back()->with('success', 'Data berhasil diupload !');
    }
}
