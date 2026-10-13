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

    public function daftar()
    {
        $daftarMahasiswa =
            [
                ['nama' => 'Dimas Wahyu Nugroho', 'nim' => 242520014, 'ipk' => 15],
                ['nama' => 'Reza Refansyah', 'nim' => 242520020, 'ipk' => 30],
                ['nama' => 'Alfin Hidayat', 'nim' => 23424245, 'ipk' => 25],
                ['nama' => 'Mauliana Bilqis', 'nim' => 33424245, 'ipk' => 30],
                ['nama' => 'Nadiyah Afifa', 'nim' => 23422245, 'ipk' => 25],
            ];

        return view('mahasiswa.mahasiswaa', compact('daftarMahasiswa'));
    }

    public function show(int $nim)
    {
        $daftarMahasiswa =
            [
                ['nama' => 'Dimas Wahyu Nugroho', 'nim' => 242520014, 'ipk' => 15],
                ['nama' => 'Reza Refansyah', 'nim' => 242520020, 'ipk' => 30],
                ['nama' => 'Alfin Hidayat', 'nim' => 23424245, 'ipk' => 25],
                ['nama' => 'Mauliana Bilqis', 'nim' => 33424245, 'ipk' => 30],
                ['nama' => 'Nadiyah Afifa', 'nim' => 23422245, 'ipk' => 25],
            ];

        $mahasiswa = collect($daftarMahasiswa)->firstWhere('nim', $nim);

        if (!$mahasiswa) {
            abort(404);
        }
        return view('mahasiswa.detail', compact('mahasiswa'));
    }
}
