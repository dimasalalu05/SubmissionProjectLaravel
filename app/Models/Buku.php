<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public static function DaftarHitungDenda()
    {
        $hasil = [];

        $daftarPeminjamanBuku = [
            [
                'judul_buku' => 'islam ala prabowo',
                'jumlah_hari_terlambat' => 10,
                'status_keanggotan' => 'umum'
            ],
            [
                'judul_buku' => 'seporsi mie ayam',
                'jumlah_hari_terlambat' => 4,
                'status_keanggotan' => 'mahasiswa'
            ],
            [
                'judul_buku' => 'AI',
                'jumlah_hari_terlambat' => 90,
                'status_keanggotan' => 'dosen'
            ],

        ];

        foreach ($daftarPeminjamanBuku as $dpb) {
            $dendaDasar = $dpb['jumlah_hari_terlambat'] * 2000;

            $diskon = match ($dpb['status_keanggotan']) {
                'umum' =>  0.50,
                'mahasiswa' => 0.20,
                default => 0,
            };

            $denda = $dendaDasar - ($dendaDasar * $diskon);

            $hasil[] = [
                'judul' => $dpb['judul_buku'],
                'denda' => $denda
            ];
        }
        return $hasil;
    }
}
