<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Admin;

class Adminprofile extends Controller
{
    
    function index(Admin $admin){   
        $data['list'] = $admin;
        return view('admin.profile.index', $data);
    }
    function edit(Admin $admin, Request $request){   
        
        if($request->password != null){
            if($request->foto != null){
                $admin->handleDeletefoto();
                $admin->nama = $request->nama;
                $admin->email = $request->email;
                $admin->password = bcrypt($request->password);
                $admin->handleUploadfoto();
                $edit = $admin->update();
                if($edit){
                    return back()->with('success', 'Data berhasil diupdate !');
                }
                return back()->with('danger', 'Data gagal diupdate !');
            }else{
                $admin->handleDeletefoto();
                $admin->nama = $request->nama;
                $admin->email = $request->email;
                $admin->password = bcrypt($request->password);
                $edit = $admin->update();
                if($edit){
                    return back()->with('success', 'Data berhasil diupdate !');
                }
                return back()->with('danger', 'Data gagal diupdate !');
            }
        }else{
            if($request->foto != null){
                $admin->handleDeletefoto();
                $admin->nama = $request->nama;
                $admin->email = $request->email;
                $admin->handleUploadfoto();
                $edit = $admin->update();
                if($edit){
                    return back()->with('success', 'Data berhasil diupdate !');
                }
                return back()->with('danger', 'Data gagal diupdate !');
            }else{
                $admin->handleDeletefoto();
                $admin->nama = $request->nama;
                $admin->email = $request->email;
                $edit = $admin->update();
                if($edit){
                    return back()->with('success', 'Data berhasil diupdate !');
                }
                return back()->with('danger', 'Data gagal diupdate !');
            }
        }



    }
    function logout(){   
        Auth::guard('admin')->logout();
        return redirect('auth/login')->with('success', 'Anda telah logout !');
    }


}
