<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Alumniprofile extends Controller
{
    
    function index(){   
        $data['list'] = Auth::guard('alumni')->user();
        return view('alumni.profile.index', $data);
    }
    function logout(){   
        Auth::guard('alumni')->logout();
        return redirect('/')->with('success', 'Anda telah logout !');
    }


}
