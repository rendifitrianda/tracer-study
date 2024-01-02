<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Soal extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'soal';

    protected $fillable = [
        'bagian_id',
        'title_soal',
    ];

    static $rules = [
        'title_soal' => ['required'],

    ];
    static $pesan = [
        'title_soal.required' => 'Harus diisi tidak boleh kosong !',
    ];

    function bagian(){
        return $this->belongsTo(Bagian::class);
    }
    function pilihan(){
        return $this->hasMany(Pilihan::class);
    }
}
