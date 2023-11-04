<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view("Admin.admin");
    }
    public function registrasiAdmin(){
        return view('Admin.registrasiAdmin');
    }
    public function simpen(Request $request){
        $a = new petugas();
        //cek data yang dikirim user
        $cek=$request->validate([
            
            'nama_petugas'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'tlp'=>'required|max:13'
        
        ]);
        $a->create($request->all());
        
        return redirect('registrasiAdmin')->with('info','Anda Berhasil Regsitrasi');

    }
    public function loginA(){
        $a = new Admin();
        return view("Admin.adminLogin");
    }
    public function cekloginA(Request $request){
        $a = new petugas();
        if($a->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            $d=$a->first();
            session(['admin'=>$d]);
            return redirect('homeAdmin');
        }
        return back()->with('info','login gagal');
} 
    public function logout(){
        session()->flush();
        return back();
    }
}