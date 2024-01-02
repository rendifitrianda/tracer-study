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
use Carbon\Carbon;
use Illuminate\Support\Str;


class Alumnitracer extends Controller
{
    function index(){

        $siLogin = Auth::guard('alumni')->user();    
        $sekarang = Carbon::now();
        $tahunSekarang =  Carbon::createFromFormat('Y-m-d H:i:s', $sekarang)->year;
        $data['list'] = Survey::with('alumni')->where('tahun_input', '=', $tahunSekarang )->where('alumni_id', $siLogin->id)->get();

       


        if( $data['list']->count() > 0 ){
             $data['list'] = 'Terimakasih Anda Sudah Menjawab Beberapa Pertanyaan Dari Tarcer Study Yang Telah Kami Berikan !';
        }else{
            $data['list'] = null;
        }

        // return $data;

        // return $data;
        return view('alumni.tracer.index', $data);
    }

    function tambah(Request $request){

        $siLogin = Auth::guard('alumni')->user();  
        $sekarang = Carbon::now();
        $tahunSekarang =  Carbon::createFromFormat('Y-m-d H:i:s', $sekarang)->year; 

        $survey = new Survey;
        $survey->alumni_id = $siLogin->id;
        $survey->tanggal_lulus = $request->tanggal_lulus;
        $survey->tingkat_sarjana = $request->tingkat_sarjana;
        $survey->nilai_rata_rata = $request->nilai_rata_rata;
        $survey->status_saat_ini = $request->status_saat_ini;
        $survey->pendidikan_lanjutan = $request->pendidikan_lanjutan;
        $survey->pendidikan = $request->pendidikan;
        $survey->kepuasan_programstudy = $request->kepuasan_programstudy;
        $survey->tahun_input = $tahunSekarang;
        $simpan = $survey->save();
        if ($simpan) {
           return back()->with('success', 'Terimakasih telah mengisi form tracer studi !');
        }
        return back()->with('danger', 'Terjadi kesalahan saat mengirim jawaban, coba ulangi kembali.');
    }

   

}
