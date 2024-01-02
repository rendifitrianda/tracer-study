<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kusioner extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'kusioner';

    protected $fillable = [
        'pilihan_id',
        'alumni_id',
    ];

    static $rules = [
        'pilihan_id' => ['required'],
        'alumni_id' => ['required'],

    ];
    static $pesan = [
        'pilihan_id.required' => 'Harus diisi tidak boleh kosong !',
        'alumni_id.required' => 'Harus diisi tidak boleh kosong !',
    ];

    function soal(){
        return $this->hasMany(Soal::class);
    }
    function pilihan(){
        return $this->belongsTo(Pilihan::class);
    }
}
