<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prodi;
use App\Models\Alumni;

class Adminprodi extends Controller
{
    function index(){
        $data['list'] = Prodi::get();
        return view('admin.prodi.index', $data);
    }

    function tambah(Request $request){

        $request->validate(Prodi::$rules,Prodi::$pesan);

        $prodi = new Prodi;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->link = $request->link;
        $simpan = $prodi->save();

        if($simpan == 1){
            return back()->with('success', 'Data Berhasil Disimpan');
        }
        return back()->with('danger', 'Data Gagal Disimpan');
    }

    function edit(Request $request, Prodi $prodi){

        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->link = $request->link;
        $simpan = $prodi->update();

        if($simpan == 1){
            return back()->with('success', 'Data Berhasil diupdate');
        }
        return back()->with('danger', 'Data Gagal diupdate');
    }

    function hapus(Prodi $prodi){

        $alumni = Alumni::where('prodi_id', $prodi->id)->delete();
        $simpan = $prodi->delete();

        if($simpan == 1){
            return back()->with('success', 'Data Berhasil dihapus');
        }
        return back()->with('danger', 'Data Gagal dihapus');
    }


}
