<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = "Dimas Wahyu Nugroho";
        $nim = "242520014";
        $prodi = "TI";

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function show()
    {
        return view('mahasiswa.profil');
    }
}
