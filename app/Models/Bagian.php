<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Bagian extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'bagian';

    protected $fillable = [
        'prodi_id',
        'nama',
        'title',
    ];

    static $rules = [
        'prodi_id' => ['required'],
        'nama' => ['required'],
        'nama' => ['required', 'unique:bagian'],
        'title' => ['required'],
        'title' => ['required'],

    ];
    static $pesan = [
        'prodi_id.required' => 'Harus diisi tidak boleh kosong !',
        'nama.required' => 'Harus diisi tidak boleh kosong !',
        'nama.unique' => 'Sudah ada silahkan input lain !',
        'title.required' => 'Harus diisi tidak boleh kosong !',
        'title.unique' => 'Sudah ada silahkan input lain !',
    ];

    function soal(){
        return $this->hasMany(Soal::class);
    }
    function prodi(){
        return $this->belongsTo(Prodi::class);
    }
}
