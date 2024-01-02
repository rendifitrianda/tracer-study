<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prodi;
use App\Models\Bagian;
use App\Models\Soal;
use App\Models\Pilihan;
use App\Models\Alumni;
use App\Models\Kusioner;

class Adminkuisioner extends Controller
{
    function index(){
        $data['alumni'] = Alumni::get();
        $data['list'] = Bagian::get();
       
        return view('admin.kuisioner.index', $data);
    }

    function getSoal($id){

        $data = Soal::with('pilihan')->where('bagian_id', $id)->get();

        return response()->json([
            'status' => 200,
            'data' => $data,
        ]);
    }

    function postSoal(Request $request){
        foreach ($request->pilihan_id as  $value) {
            $kusioner = new Kusioner;
            $kusioner->pilihan_id = $value;
            $kusioner->alumni_id = $request->alumni_id;
            $simpan = $kusioner->save();
        }

        if($simpan == 1){
            return back()->with('success', 'Data Berhasil Disimpan');
        }
        return back()->with('danger', 'Data Gagal Disimpan');
    }



}
