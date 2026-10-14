<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarBuku extends Controller
{
    public function index()
    {
        $status = 'tersedia';
        $daftarBuku = [
            ['judul' => 'Seporsi Mie Ayamm Sebelum Mati', 'penulis' => 'Joko Susilo', 'stok' => 12],
            ['judul' => 'Islam Ala Prabowo', 'penulis' => 'abdulrahman', 'stok' => 0],
            ['judul' => 'dunia yang nanti', 'penulis' => 'wahid', 'stok' => 10],
            ['judul' => 'oemograman web', 'penulis' => 'hidayat', 'stok' => 100],
            ['judul' => 'AI', 'penulis' => 'lala', 'stok' => 65],
        ];

        return view('daftarBuku', compact('daftarBuku', 'status'));
    }
}
