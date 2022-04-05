<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Daftar_c extends Controller
{
    public function index(){
        return view('daftar', [
            'title' => 'Daftar Akun Baru'
        ]);
    }

    public function store(Request $regis){

        $randomNumber = random_int(100000, 999999); //masih not work

        $validasi = $regis->validate([
            'nama'  => 'max:50',
            'telp'  => 'numeric',
            'email' => 'required|email:dns|unique:user,email',
            'user'  => 'required|min:5|max:25|unique:user,username',
            'pass'  => 'required|min:8'
        ]);

        $validasi['pass'] = Hash::make($validasi['pass']);
        $validasi['id']   = $randomNumber; //masih not work

        User::create($validasi);

        return view('Anjay MAsuk');
    }
}
