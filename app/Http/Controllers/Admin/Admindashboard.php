<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumni;
use App\Models\Survey;

class Admindashboard extends Controller
{
    function index(){
       
        return view('admin.dashboard');
    }

    function dataChart(){
        $jumlahPerprodi = DB::table('alumni')
                ->join('prodi', 'alumni.prodi_id', 'prodi.id')
                ->select('nama_prodi',  DB::raw('count(*) as total'))
                ->groupBy('prodi_id')
                ->get();
        
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

        //   $jumlahPertahun = DB::table('alumni')
        //         ->join('prodi', 'alumni.prodi_id', 'prodi.id')
        //         ->select('tahun_lulus',  DB::raw('count(tahun_lulus) as total'))
        //         ->groupBy('prodi_id')
        //         ->get();
        // return $jumlahPertahun;      

        return response()->json([
            "D3" => $x->where('TS', 'Diploma 3')->count(),
            "D4" => $x->where('TS', 'Diploma 4')->count(),
            "BEKERJA" => $x->where('SS', 'Bekerja')->count(),
            "MELANJUTKANSTUDY" => $x->where('SS', 'Melanjutkan Study')->count(),
            "BELUMBEKERJA" => $x->where('SS', 'Belum bekerja')->count(),
            "DATA PRODI" => $jumlahPerprodi,
        ]);

    }
}
