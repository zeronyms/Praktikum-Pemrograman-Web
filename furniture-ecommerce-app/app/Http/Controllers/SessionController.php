<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view('login');
    }
    function login(Request $req){
        Session::flash('email', $req->email);
        $req->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Wajib diisi',
            'password.required'=>'Wajib diisi',
        ]);

        $infoLogin = [
            'email'=>$req->email,
            'password'=>$req->password
        ];
        if(Auth::attempt($infoLogin)){ //kalo proses otentikasi sukses, kita redirect 
            //success
            return redirect('home')->with('success', 'Berhasil login');
            //failed
        }else {
            // return 'gagal';
            return redirect('sesi')->with('error', 'username atau password tidak valid!');
        }
    }
}
