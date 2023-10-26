<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginA(){
        $a = new Admin();
        return view("Admin.adminLogin");
    }
    public function cekloginA(Request $request){
        $a = new Admin();
        $a = $a->where('username',$request->input('username'))->where('password',$request->input('password'));
        
        if($a->exists()){
            return redirect('home');
        }
        return back()->with('info','login gagal');
}
}