<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Adminauth;
use App\Http\Controllers\Admin\Adminalumni;
use App\Http\Controllers\Admin\Admindashboard;
use App\Http\Controllers\Admin\Adminprodi;
use App\Http\Controllers\Admin\Admintracer;
use App\Http\Controllers\Admin\Adminkuisioner;
use App\Http\Controllers\Admin\Adminsurvey;
use App\Http\Controllers\Admin\Adminguest;
use App\Http\Controllers\Admin\Adminprofile;

// Alumni
use App\Http\Controllers\Alumni\Alumnidashboard;
use App\Http\Controllers\Alumni\Alumnitracer;
use App\Http\Controllers\Alumni\Alumnikuisioner;
use App\Http\Controllers\Alumni\Alumniprofile;

// Wadir
use App\Http\Controllers\Wadir\Wadirdashboard;


// Guest
use App\Http\Controllers\GuestController;


Livewire::setScriptRoute(function ($handle) {
    return Route::get('/new_tracer/livewire/livewire.js', $handle);
});
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/new_tracer/livewire/update', $handle);
});

Route::prefix('/')->group(function () {

    Route::controller(GuestController::class)->group(function () {
        Route::get('/', 'index');
        Route::post('/guest', 'kirim');
    });

});

Route::prefix('auth')->group(function () {

    Route::controller(Adminauth::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'login');
    });

});

// Alumni controller
Route::prefix('wadir')->middleware(['auth:admin'])->group(function () {
  
    Route::controller(Wadirdashboard::class)->group(function () {
       Route::get('/dashboard', 'index');
       Route::get('/prodi', 'wadirProdi');
       Route::get('/alumni', 'wadirAlumni');
       Route::get('/alumni/detail/{alumni}', 'wadirAlumniDetail');
       Route::get('/tracer', 'tracer');
       Route::get('/survey', 'survey');
       Route::get('/survey/detail/{survey}', 'surveyDetail');
       Route::get('/kuisioner', 'kuisioner');
       Route::get('/guest', 'guest');
       Route::get('/guest/detail/{guest}', 'guestDetail');
       Route::get('/profile/{admin}', 'profile');
       Route::post('/profile/edit/{admin}', 'profileEdit');
       Route::get('logout', 'logout');
    });
    
});

// Alumni controller
Route::prefix('alumni')->middleware(['auth:alumni'])->group(function () {
  
    Route::controller(Alumnidashboard::class)->group(function () {
       Route::get('/dashboard', 'index');
    });
    Route::controller(Alumnitracer::class)->group(function () {
       Route::get('/tracer', 'index');
       Route::post('/tracer/tambah', 'tambah');
    });
    Route::controller(Alumnikuisioner::class)->group(function () {
       Route::get('/kuisioner', 'index');
       Route::post('/kuisioner/tambah', 'tambah');
    });
    Route::controller(Alumniprofile::class)->group(function () {
       Route::get('/profile', 'index');
       Route::post('/profile/update', 'update');
       Route::get('/profile/logout', 'logout');
    });
});


Route::prefix('admin')->middleware(['auth:admin'])->group(function () {

    // Dashboard controller
    Route::controller(Admindashboard::class)->group(function () {
        Route::get('/dashboard', 'index');
        Route::get('/dataChart', 'dataChart');
    });

    // Dashboard controller
    Route::controller(Adminalumni::class)->group(function () {
        Route::get('/alumni', 'index');
        Route::get('/alumni/tambah', 'tambah');
        Route::post('/alumni/tambah', 'aksiTambah');
        Route::get('/alumni/detail/{alumni}', 'detail');
        Route::get('/alumni/edit/{alumni}', 'edit');
        Route::post('/alumni/edit/{alumni}', 'Aksiedit');
        Route::post('/alumni/hapus/{alumni}', 'hapus');
        Route::post('/alumni/uploadFile', 'uploadFile');

    });
    // Prodi controller
    Route::controller(Adminprodi::class)->group(function () {
        Route::get('/prodi', 'index');
        Route::post('/prodi/tambah', 'tambah');
        Route::post('/prodi/edit/{prodi}', 'edit');
        Route::post('/prodi/hapus/{prodi}', 'hapus');
    });
    // Tracer controller
    Route::controller(Admintracer::class)->group(function () {

        // Handle bagian
        Route::get('/tracer', 'index');
        Route::post('/tracer/tambahBagian', 'tambahBagian');
        Route::post('/tracer/updateBagian/{bagian}', 'updateBagian');
        Route::get('/tracer/hapusBagian/{bagian}', 'hapusBagian');
        // ------------------------------------------------------------

        // Handle soal
        Route::get('/tracer/soal/{bagian}', 'soal');
        Route::post('/tracer/tambahSoal/{bagian}', 'tambahSoal');
        Route::post('/tracer/editSoal/{soal}', 'editSoal');
        Route::get('/tracer/hapusSoal/{soal}', 'hapusSoal');
        // ------------------------------------------------------------

        // Handle pilihan
        Route::post('/tracer/tambahPilihan/{soal}', 'tambahPilihan');
        Route::post('/tracer/updatePilihan/{pilihan}', 'updatePilihan');
        Route::get('/tracer/deletePilihan/{pilihan}', 'deletePilihan');
         // ------------------------------------------------------------
    });

     // Kuisioner controller
     Route::controller(Adminkuisioner::class)->group(function () {
        Route::get('/kuisioner', 'index');
        Route::get('/kuisioner/getSoal/{id}', 'getSoal');
        Route::post('/kuisioner/postSoal', 'postSoal');
    });

     // Survey controller
     Route::controller(Adminsurvey::class)->group(function () {
        Route::get('/survey', 'index');
        Route::get('/survey/tambah', 'tambah');
        Route::post('/survey/tambah', 'aksitambah');
        Route::get('/survey/detail/{survey}', 'detail');
        Route::get('/survey/getSoal/{id}', 'getSoal');
        Route::post('/survey/postSoal', 'postSoal');
    });

    // Guest controller
    Route::controller(Adminguest::class)->group(function () {
        Route::get('/guest', 'index');
        Route::get('/guest/detail/{guest}', 'detail');
        Route::post('/guest/hapus/{guest}', 'hapus');
    });

    // Profile controller
    Route::controller(Adminprofile::class)->group(function () {
        Route::get('/profile/{admin}', 'index');
        Route::post('/profile/edit/{admin}', 'edit');
        Route::get('/logout', 'logout');
    });
});


