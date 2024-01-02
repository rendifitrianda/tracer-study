<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumni extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = 'alumni';
    protected $fillable = [
        'prodi_id',
        'nama',
        'nik',
        'ipk',
        'nim',
        'tahun_masuk',
        'tahun_lulus',
        'jenis_kelamin',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'email',
        'password',
        'foto',
    ];

    static $rules = [
        'prodi_id' => ['required'],
        'nama' => ['required'],
        'nik' => ['required', 'unique:alumni'],
        'ipk' => ['required'],
        'nim' => ['required', 'unique:alumni'],
        'tahun_masuk' => ['required'],
        'tahun_lulus' => ['required'],
        'jenis_kelamin' => ['required'],
        'agama' => ['required'],
        'tempat_lahir' => ['required'],
        'tanggal_lahir' => ['required'],
        'alamat' => ['required'],
        'no_hp' => ['required', 'unique:alumni'],
        'email' => ['required', 'unique:alumni'],
        'password' => ['required', 'unique:alumni'],
        'foto' => ['required'],
    ];
    static $pesan = [
        'prodi_id.required' => 'Harus diisi tidak boleh kosong !',
        'nama.required' => 'Harus diisi tidak boleh kosong !',
        'nik.required' => 'Harus diisi tidak boleh kosong !',
        'ipk.required' => 'Harus diisi tidak boleh kosong !',
        'nim.required' => 'Harus diisi tidak boleh kosong !',
        'nim.unique' => 'Sudah ada silahkan input NIM lain !',
        'tahun_masuk.required' => 'Harus diisi tidak boleh kosong !',
        'tahun_lulus.required' => 'Harus diisi tidak boleh kosong !',
        'jenis_kelamin.required' => 'Harus diisi tidak boleh kosong !',
        'agama.required' => 'Harus diisi tidak boleh kosong !',
        'tempat_lahir.required' => 'Harus diisi tidak boleh kosong !',
        'tanggal_lahir.required' => 'Harus diisi tidak boleh kosong !',
        'alamat.required' => 'Harus diisi tidak boleh kosong !',
        'no_hp.required' => 'Harus diisi tidak boleh kosong !',
        'no_hp.unique' => 'Sudah ada silahkan input Nomor lain !',
        'email.required' => 'Harus diisi tidak boleh kosong !',
        'email.unique' => 'Sudah ada silahkan input email lain !',
        'password.unique' => 'Sudah ada silahkan input email lain !',
        'password.required' => 'Harus diisi tidak boleh kosong !',
        'foto.required' => 'Harus diisi tidak boleh kosong !',
    ];



    function handleUploadfoto(){
        if(request()->hasFile('foto')){
            $this->handleDeletefoto();
            $foto = request()->file('foto');
            $destination = "alumni";
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

    function prodi(){
        return $this->belongsTo(Prodi::class);
    }
}
