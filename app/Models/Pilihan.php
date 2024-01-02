<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pilihan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'pilihan';

    protected $fillable = [
        'soal_id',
        'title_pilihan',
    ];

    static $rules = [
        'title_pilihan' => ['required'],

    ];
    static $pesan = [
        'title_pilihan.required' => 'Harus diisi tidak boleh kosong !',
    ];

    function soal(){
        return $this->belongsTo(Soal::class);
    }
}
