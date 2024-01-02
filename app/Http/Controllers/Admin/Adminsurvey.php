<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Survey;

class Adminsurvey extends Controller
{
    function index(){
        $x = Survey::with('alumni.prodi')
                ->get()
                ->map(function($datas){
                    $tigkatSarjana = $datas->tingkat_sarjana;
                    $status_saatini = $datas->status_saat_ini;

                    return([
                        'TS' => $tigkatSarjana,
                        'SS' => $status_saatini,
                    ]);
                });

        
        $data['D3'] = $x->where('TS', 'Diploma 3')->count();
        $data['D4'] = $x->where('TS', 'Diploma 4')->count();
        $data['BEKERJA'] = $x->where('SS', 'Bekerja')->count();
        $data['MELANJUTKANSTUDY'] = $x->where('SS', 'Melanjutkan Study')->count();
        $data['BELUMBEKERJA'] = $x->where('SS', 'Belum bekerja')->count();

        $data['list'] = Survey::with('alumni.prodi')->get();

        return view('admin.survey.index', $data);

    }
    function tambah(){
        $data['list'] = Alumni::get();
        return view('admin.survey.tambah', $data);
    }
    function aksitambah(Request $request){


        $request->validate(Survey::$rules,Survey::$pesan);

        $survey = new Survey;
        $survey->alumni_id = $request->alumni_id;
        $survey->tanggal_lulus = $request->tanggal_lulus;
        $survey->nilai_rata_rata = $request->nilai_rata_rata;
        $survey->pendidikan_lanjutan = $request->pendidikan_lanjutan;
        $survey->tingkat_sarjana = $request->tingkat_sarjana;
        $survey->status_saat_ini = $request->status_saat_ini;
        $survey->pendidikan = $request->pendidikan;
        $survey->kepuasan_programstudy = $request->kepuasan_programstudy;
        $simpan = $survey->save();

        if($simpan == 1){
            return redirect('admin/survey')->with('success', 'Data Berhasil disimpan');
        }
        return back()->with('danger', 'Data Gagal disimpan, coba ulangi kembali !');
 
    }

    function detail(Survey $survey){
        
        $data['list'] = $survey::with('alumni.prodi')->where('id', $survey->id)->get();
        // return $data;
        return view('admin.survey.detail', $data);
    }
}
