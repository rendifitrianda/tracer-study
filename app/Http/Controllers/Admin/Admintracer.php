<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prodi;
use App\Models\Bagian;
use App\Models\Soal;
use App\Models\Pilihan;

class Admintracer extends Controller
{
    function index(){
        $data['list'] = Bagian::with('prodi')->get();
        $data['prodi'] = Prodi::get();
        return view('admin.tracer.index', $data);
    }

    function tambahBagian(Request $request){
        $request->validate(Bagian::$rules,Bagian::$pesan);
        $bagian = new Bagian;
        $bagian->prodi_id = $request->prodi_id;
        $bagian->nama = $request->nama;
        $bagian->title = $request->title;
        $simpan = $bagian->save();
        if($simpan == 1){
            return back()->with('success', 'Data Berhasil Disimpan');
        }
        return back()->with('danger', 'Data Gagal Disimpan');
    }

    function updateBagian(Request $request, Bagian $bagian){
        $bagian->nama = $request->nama;
        $bagian->title = $request->title;
        $simpan = $bagian->update();
        if($simpan == 1){
            return back()->with('success', 'Data Berhasil Diupdate');
        }
        return back()->with('danger', 'Data Gagal Diupdate');
    }

    

    function hapusBagian(Bagian $bagian){      
        $bagian->soal()->delete();
        $bagian->delete();

        return back()->with('success', 'Data Berhasil dihapus');
    }


     // Controller aksi soal dari bagian
    function soal($bagian){

        $data['list'] =  Bagian::with('soal.pilihan')->find($bagian);
        return view('admin.soal.index', $data);
       
    }

    function tambahSoal(Request $request, $bagian){
      
      $request->validate(Soal::$rules,Soal::$pesan);
      $soal = new Soal;
      $soal->bagian_id = $bagian;
      $soal->title_soal = $request->title_soal;
        
      $simpan = $soal->save();
        if($simpan == 1){
            return back()->with('success', 'Data Berhasil Disimpan');
        }
        return back()->with('danger', 'Data Gagal Disimpan');
    }

    function editSoal(Request $request, Soal $soal){
        $request->validate(Soal::$rules,Soal::$pesan);
        
        $soal->title_soal = $request->title_soal;
          
        $simpan = $soal->update();
          if($simpan == 1){
              return back()->with('success', 'Data Berhasil Diupdate');
          }
          return back()->with('danger', 'Data Gagal Diupdate');
    }

    function hapusSoal(Request $request, Soal $soal){

        $simpan = $soal::with('pilihan')->delete();
          if($simpan == 1){
              return back()->with('success', 'Data Berhasil dihapus');
          }
          return back()->with('danger', 'Data Gagal dihapus');
    }
    // ------------------------------------------------------------------------------



    // Controller aksi pilihan dari soal

    function tambahPilihan(Soal $soal, Request $request){
        $request->validate(Pilihan::$rules,Pilihan::$pesan);
        $pilihan = new Pilihan;
        $pilihan->soal_id = $soal->id;
        $pilihan->title_pilihan = $request->title_pilihan;
          
        $simpan = $pilihan->save();
          if($simpan == 1){
              return back()->with('success', 'Data Berhasil Disimpan');
          }
          return back()->with('danger', 'Data Gagal Disimpan');
    }

    function updatePilihan(Pilihan $pilihan, Request $request){

        $request->validate(Pilihan::$rules,Pilihan::$pesan);
  
        $pilihan->title_pilihan = $request->title_pilihan;
          
        $simpan = $pilihan->update();
          if($simpan == 1){
              return back()->with('success', 'Data Berhasil Diupdate');
          }
          return back()->with('danger', 'Data Gagal Diupdate');
    }

    function deletePilihan(Pilihan $pilihan){
        
        $simpan = $pilihan->delete();
          if($simpan == 1){
              return back()->with('success', 'Data Berhasil Dihapus');
          }
          return back()->with('danger', 'Data Gagal Dihapus');
    }
     // ------------------------------------------------------------------------------



}
