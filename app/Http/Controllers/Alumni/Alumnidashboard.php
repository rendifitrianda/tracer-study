<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Alumnidashboard extends Controller
{
    function index(){
        
        return view('alumni.dashboard');
    }
}
