<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guest;


class Adminguest extends Controller
{
    function index(){
        $data['list'] = Guest::with('alumni')->get();

        return view('admin.guest.index', $data);
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

    function detail($guest){
        $data['list'] = Guest::with('alumni')->where('id', $guest)->get();
        // return $data;
        return view('admin.guest.detail', $data);
    }

    function hapus(Guest $guest){
        $guest->delete();
        return back()->with('success', 'Dsata berhasil dihapus');
    }


}