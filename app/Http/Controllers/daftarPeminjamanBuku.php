<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class daftarPeminjamanBuku extends Controller
{
    public function hitungDendaa()
    {
        return Buku::DaftarHiungDenda();
    }
}
