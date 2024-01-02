<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Prodi extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'prodi';
    protected $fillable = [
        'nama_prodi',
        'link'
    ];

    static $rules = [
        'nama_prodi' => ['required'],
        'nama_prodi' => ['required', 'unique:prodi'],
        'link' => ['required'],
        'link' => ['required', 'min:9'],

    ];
    static $pesan = [
        'nama_prodi.required' => 'Harus diisi tidak boleh kosong !',
        'nama_prodi.unique' => 'Sudah ada silahkan input lain !',
        'link.required' => 'Harus diisi tidak boleh kosong !',
        'link.unique' => 'Sudah ada silahkan input lain !',
        'link.min' => 'Tidak boleh kurang dari 9 Karakter !',
    ];



}
