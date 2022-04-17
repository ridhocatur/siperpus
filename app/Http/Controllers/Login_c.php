<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login_c extends Controller
{
    public function index(){
        return view('login', [
            'title' => 'Login | SiPerpus'
        ]);
    }

    public function masuk(Request $request)
    {
        $valid = $request->validate([
            'user'  => 'required',
            'pass'  => 'required'
        ]);

        if (Auth::attempt($valid)) {
            // $request->session()->regenerate();

            // return redirect()->intended('user_dashboard');

            dd('login berhasil');
        }

        dd('login gagal',$valid);
    }
}
