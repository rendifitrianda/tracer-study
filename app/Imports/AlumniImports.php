<?php

namespace App\Imports;


use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Alumni;



class AlumniImports implements ToModel
{




    public function model(array $row)
    {

        return new Alumni([
            'prodi_id'  => $row[0],
            'nama'  => $row[1],
            'nik'  => $row[2],
            'ipk'  => $row[3],
            'nim'  => $row[4],
            'tahun_masuk'  => $row[5],
            'tahun_lulus'  => $row[6],
            'jenis_kelamin'  => $row[7],
            'agama'  => $row[8],
            'tempat_lahir'  => $row[9],
            'tanggal_lahir'  => $row[10],
            'alamat'  => $row[11],
            'no_hp'  => $row[12],
            'email'  => $row[13],
            'password'  => bcrypt($row[14]),
            'foto'  => $row[15],
        ]);
    }


}
