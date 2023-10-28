<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\pengaduan;
use Illuminate\Http\Request;

class MasyarakatControll extends Controller
{
    public function registrasi(){
        return view('Masyarakat.registrasi');
    }
    

    public function simpan(Request $request){
        $m = new Masyarakat();
        //cek data yang dikirim user
        $cek=$request->validate([
            'nik'=>'required|unique:masyarakat|max:16',
            'Nama'=>'required',
            'Username'=>'required|min:6',
            'Password'=>'required|min:4',
            'telp'=>'required|max:13'
        ]);
        $m->create($request->all());
        
        return redirect('registrasi')->with('info','Anda Berhasil Regsitrasi');

    }
    public function login(){
        return view('Masyarakat.login');
    }
    public function ceklogin(Request $request){
        $m = new Masyarakat();
        $m = $m->where('username',$request->input('username'))->where('password',$request->input('password'));
        //cek username dan password exists (ada) di tabel masyarakat
        if($m->exists()){
            return redirect('home');
        }
        return back()->with('info','login gagal');
    }
    public function laporan(){
        return view('Masyarakat.laporan');
    }
    public function validasi(){
        return view('Masyarakat.laporan');
    }

    public function ceklaporan(Request $request){

        $photo = $request->file('foto');
        //tentukan path file akan disimpan
        $folder = 'upload_data';

        //pindahkan file ke target file
        $photo->move($folder, $photo->getClientOriginalName());
        $b = new pengaduan();
        $b->create([
            'nik'=>$request->nik,
            'tgl_pengaduan'=>date('Y-m-d'),
            'photo'=>$photo->getClientOriginalName(),
            'isi_laporan'=>$request->isi_laporan
        ]);
        
        return back();
    }
    
}


