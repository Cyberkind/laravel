<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function registrasiAdmin(){
        return view('Admin.registrasiAdmin');
    }
    public function simpen(Request $request){
        $a = new AdminController();
        //cek data yang dikirim user
        $cek=$request->validate([
            'id_petugas'=>'required|unique:petugas|max:11',
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
        $a = new Admin();
        if($a->where('username',$request->input('username'))->where('password',$request->input('password')->exists())){
        
        
            return redirect('homeAdmin');
        }
        return back()->with('info','login gagal');
} 
}