<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Adminauth extends Controller
{
    
    function index(){
   
        return view('admin.login');
    }


    function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::guard('admin')->attempt($credentials)) {

            $cek = Auth::guard('admin')->user();

            if ($cek->level == 'Admin') { 
                return redirect('admin/dashboard')->with('success', 'Selamat datang admin!');
            }
           
        } else if (Auth::guard('alumni')->attempt($credentials)) {
            return redirect('alumni/dashboard')->with('success', 'Selamat datang alumni!');
        } else {
            return back()->with('danger', 'Login gagal!');
        }
        
    }
}
