<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Survey extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'surveipenggunalulusan';
    protected $fillable = [
        'alumni_id',
        'tanggal_lulus',
        'tingkat_sarjana',
        'nilai_rata_rata',
        'tatus_saat_ini',
        'pendidikan_lanjutan',
        'pendidikan',
        'kepuasan_programstudy'
    ];

    static $rules = [
        'alumni_id' => ['required'],
        'tanggal_lulus' => ['required'],
        'tingkat_sarjana' => ['required'],
        'nilai_rata_rata' => ['required'],
        'status_saat_ini' => ['required'],
        'pendidikan_lanjutan' => ['required'],
        'pendidikan' => ['required'],
        'kepuasan_programstudy' => ['required'],

    ];
    static $pesan = [
        'alumni_id.required' => 'Harus diisi tidak boleh kosong !',
        'tanggal_lulus.required' => 'Harus diisi tidak boleh kosong !',
        'tingkat_sarjana.required' => 'Harus diisi tidak boleh kosong !',
        'nilai_rata_rata.required' => 'Harus diisi tidak boleh kosong !',
        'status_saat_ini.required' => 'Harus diisi tidak boleh kosong !',
        'pendidikan_lanjutan.required' => 'Harus diisi tidak boleh kosong !',
        'pendidikan.required' => 'Harus diisi tidak boleh kosong !',
        'kepuasan_programstudy.required' => 'Harus diisi tidak boleh kosong !',
    ];

    function alumni(){
        return $this->belongsTo(Alumni::class);
    }




}
