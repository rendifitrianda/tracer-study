<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Alumni;

class GuestController extends Controller
{
    function index(){
        $data['list'] = Alumni::get();

        return view('guest', $data);
    }

    function kirim(Request $request){

        $request->validate(Guest::$rules,Guest::$pesan);

        $guest = new Guest;
        $guest->pengisi = $request->pengisi;
        $guest->perusahaan = $request->perusahaan;
        $guest->jabatan = $request->jabatan;
        $guest->alumni_id = $request->alumni_id;
        $guest->sikap = $request->sikap;
        $guest->keahlian = $request->keahlian;
        $guest->bahasa_asing = $request->bahasa_asing;
        $guest->penggunaan_tek = $request->penggunaan_tek;
        $guest->komunikasi = $request->komunikasi;
        $guest->kerjasama = $request->kerjasama;
        $guest->pengembangan_diri = $request->pengembangan_diri;
        $guest->kesiapan = $request->kesiapan;
        $guest->harapan = $request->harapan;
        $guest->kritik_saran = $request->kritik_saran;


        $simpan = $guest->save();
        if($simpan){
            return back()->with('success', 'Terimakasih telah mengisi survey dari kami !');
        }
        return back()->with('danger', 'Terjadi kesalahan, coba ulangi kembali !');
    }
}
