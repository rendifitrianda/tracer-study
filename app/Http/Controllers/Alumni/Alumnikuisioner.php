<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Prodi;
use App\Models\Bagian;
use App\Models\Soal;
use App\Models\Pilihan;
use App\Models\Survey;
use App\Models\Kusioner;
use Carbon\Carbon;
use Illuminate\Support\Str;



class Alumnikuisioner extends Controller
{
    function index(){

        $siLogin = Auth::guard('alumni')->user();     
        // $data['soal'] = Bagian::with('soal.pilihan')
        // ->where('prodi_id',  $siLogin->prodi_id)
        // ->get()
        // ->map(function($isidata) use ($siLogin){
        //     $map = $isidata->soal->map(function($x){
        //         return $x->pilihan;
        //     });

        //     return $map;
        // });

        // Skip soal yang sudah dipilih alumni
        // $data['pilihan'] = Kusioner::with('pilihan.soal.bagian')
        // ->where('alumni_id',  $siLogin->id)
        // ->get()
        // ->map(function($isidata) use ($siLogin){
        //     $dipilihalumni =  $isidata->pilihan->id;
        //     $bagian = Bagian::with('soal.pilihan')
        //              ->get()
        //              ->map(function($databagian){
        //                 return $databagian->soal->map(function($pilihan){
        //                     return $pilihan->pilihan;
        //                 });
        //              });
        //     // $listPilhan =  $bagian->map(function($pilihan){
        //     //     return $pilihan->pilihan;
        //     // });
        //     return $bagian;
        // });
        
        
        $data['list'] = Bagian::with('soal.pilihan')->where('prodi_id',  $siLogin->prodi_id)->get();
        // return $data['pilihan'];
        return view('alumni.kuisioner.index', $data);
    }

    function tambah(Request $request){
        $siLogin = Auth::guard('alumni')->user();   
        $pilihan = $request->pilihan_id;

        $sekarang = Carbon::now();
        $tahunSekarang =  Carbon::createFromFormat('Y-m-d H:i:s', $sekarang)->year;
 

        for ($i=0; $i < count($pilihan); $i++) { 
            $kuisioner = new Kusioner;
            $kuisioner->pilihan_id = $pilihan[$i];
            $kuisioner->alumni_id = $siLogin->id;
          
            $simpan = $kuisioner->save();
            
        }

        if ($simpan) {
            return back()->with('success', 'Terimakasih telah mengisi form tracer studi !');
            }
            return back()->with('danger', 'Terjadi kesalahan saat mengirim jawaban, coba ulangi kembali.');

       

    }

   

}
