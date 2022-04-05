<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Hash;

class Daftar_c extends Controller
{
    public function index(){
        return view('daftar', [
            "title" => "Daftar Akun Baru"
        ]);
    }

    public function store(Request $regis){
        $validasi = $regis->validate([
            'nama'  => 'max:50',
            'telp'  => 'numeric',
            'email' => 'required|email|unique:user,email',
            'user'  => 'required|min:5|max:25|unique:user,username',
            'pass'  => 'required|min:8'
        ]);

        $validasi['pass'] = Hash::make($validasi['pass']);

        User::create($validasi);

        return view('Anjay MAsuk');
    }
}
