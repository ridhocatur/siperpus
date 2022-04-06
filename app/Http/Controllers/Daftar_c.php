<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class Daftar_c extends Controller
{
    public function index(){
        return view('daftar', [
            'title' => 'Daftar Akun Baru'
        ]);
    }

    public function store(Request $regis){

        $validasi = $regis->validate([
            'nama'  => 'max:50',
            'telp'  => 'numeric',
            'email' => 'required|email:dns|unique:user,email',
            'user'  => 'required|min:5|max:25|unique:user,user',
            'pass'  => 'required|min:8'
        ]);

        $validasi = new User;
        $validasi->id    = uniqid();
        $validasi->nama  = $regis->nama;
        $validasi->telp  = $regis->telp;
        $validasi->email = $regis->email;
        $validasi->user  = $regis->user;
        $validasi->pass  = Hash::make($regis->pass);
        $validasi->roles = "2";

        $validasi->save();

        return view('Anjay MAsuk');
    }
}
