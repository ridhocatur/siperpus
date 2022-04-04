<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Daftar_c extends Controller
{
    public function index(){
        return view('daftar', [
            "title" => "Daftar Akun Baru"
        ]);
    }

    public function store(Request $data){
        $validasi = $data->validate([
            
        ]);
    }
}
