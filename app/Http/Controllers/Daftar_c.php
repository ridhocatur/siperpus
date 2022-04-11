<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
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
            'user'  => 'required|min:5|max:35|unique:user,user',
            'pass'  => ['required','same:u_pass', Password::min(8)->letters()->numbers()]
        ],[
            'telp.numeric'      => 'Masukkan Angka Saja',
            'email.required'    => 'Email Tidak Boleh Kosong',
            'email.unique'      => 'Email Sudah Digunakan',
            'user.required'     => 'User Tidak Boleh Kosong',
            'user.unique'       => 'User Sudah Digunakan',
            'pass.required'     => 'Password Tidak Boleh Kosong',
            'pass.same'         => 'Password Tidak Sama, Harap Periksa Kembali',
            'pass.letters'      => 'Masukkan Minimal 1 Huruf',
            'pass.numbers'      => 'Masukkan Minimal 1 Angka'
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

        return redirect('/login')->with('sukses', 'Pendaftaran Berhasil, Silahkan Login !');
    }
}
