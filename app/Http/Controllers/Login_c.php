<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login_c extends Controller
{
    public function index(){
        return view('login', [
            'title' => 'Login | SiPerpus'
        ]);
    }

    public function masuk(Request $masuk)
    {
        $masuk->validate([
            'user'  => 'required',
            'pass'  => 'required'
        ]);

        $user  = User::where('user')->get();
        $email = User::where('email')->get();

        if ($masuk) {
            # code...
        }

        $kresiden = $masuk->only('user','pass');
        if (Auth::attempt($kresiden)) {
            // return redirect()->intended('dashboard')->with('sukses','Masuk Berhasil');
            dd('sukses');
        }
        dd('gagal');
        // return redirect('login')->with('gagal','Login Gagal, User / Password Salah');
    }
}
