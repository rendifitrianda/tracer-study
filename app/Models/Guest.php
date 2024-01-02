<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guest extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'guest';

    protected $fillable = [
        'pengisi',
        'perusahaan',
        'jabatan',
        'alumni_id',
        'sikap',
        'keahlian',
        'bahasa_asing',
        'penggunaan_tek',
        'komunikasi',
        'kerjasama',
        'pengembangan_diri',
        'kesiapan',
        'harapan',
        'kritik_saran',
    ];

    static $rules = [
        'pengisi'  => ['required'],
        'perusahaan'  => ['required'],
        'jabatan'  => ['required'],
        'alumni_id'  => ['required'],
        'sikap'  => ['required'],
        'keahlian'  => ['required'],
        'bahasa_asing'  => ['required'],
        'penggunaan_tek'  => ['required'],
        'komunikasi'  => ['required'],
        'kerjasama'  => ['required'],
        'pengembangan_diri'  => ['required'],
        'kesiapan'  => ['required'],
        'harapan'  => ['required'],
        'kritik_saran'  => ['required'],

    ];
    static $pesan = [
        'prodi_id.required' => 'Harus diisi tidak boleh kosong !',
        'pengisi.required'  =>'Harus diisi tidak boleh kosong !',
        'perusahaan.required'  =>'Harus diisi tidak boleh kosong !',
        'jabatan.required'  =>'Harus diisi tidak boleh kosong !',
        'alumni_id.required'  =>'Harus diisi tidak boleh kosong !',
        'sikap.required'  =>'Harus diisi tidak boleh kosong !',
        'keahlian.required'  =>'Harus diisi tidak boleh kosong !',
        'bahasa_asing.required'  =>'Harus diisi tidak boleh kosong !',
        'penggunaan_tek.required'  =>'Harus diisi tidak boleh kosong !',
        'komunikasi.required'  =>'Harus diisi tidak boleh kosong !',
        'kerjasama.required'  =>'Harus diisi tidak boleh kosong !',
        'pengembangan_diri.required'  =>'Harus diisi tidak boleh kosong !',
        'kesiapan.required'  =>'Harus diisi tidak boleh kosong !',
        'harapan.required'  =>'Harus diisi tidak boleh kosong !',
        'kritik_saran.required'  =>'Harus diisi tidak boleh kosong !',
    ];

    function alumni(){
        return $this->belongsTo(Alumni::class);
    }
}
