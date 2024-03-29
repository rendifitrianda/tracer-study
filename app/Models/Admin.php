<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = 'admin';
    protected $fillable = [
        'nama',
        'email',
        'password',
        'foto'
    ];

    static $rules = [
        'nama' => ['required'],
        'email' => ['required'],
        'password' => ['required'],
        'foto' => ['required'],
        
    ];
    static $pesan = [
        'nama.required' => 'Harus diisi tidak boleh kosong !',
        'email.required' => 'Harus diisi tidak boleh kosong !',
        'password.required' => 'Harus diisi tidak boleh kosong !',
        'foto.required' => 'Harus diisi tidak boleh kosong !',
    ];



    function handleUploadfoto(){
        if(request()->hasFile('foto')){
            $this->handleDeletefoto();
            $foto = request()->file('foto');
            $destination = "admin";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save;
        }
    }
    function handleDeletefoto(){
        $foto= $this->foto;
        if($foto){
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }

}
