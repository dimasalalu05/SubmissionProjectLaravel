@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Mahasiswa</h1>

    {{-- Mengecek apakah di dalam data ada mahasiswa dengan IPK < 20 (artinya < 2.0) --}}
    @php
        $adaIPKRendah = collect($daftarMahasiswa)->contains(function ($mhs) {
            return $mhs['ipk'] < 20;
        });
    @endphp

    {{-- Tampilkan komponen alert bahaya jika ditemukan IPK di bawah 2.0 --}}
    @if ($adaIPKRendah)
        <x-alert tipe="bahaya">
            Peringatan! Terdapat mahasiswa yang memiliki IPK di bawah 2,0. Mohon segera ditinjau!
        </x-alert>
    @endif

    <table class="w-full bg-white border border-gray-300 shadow-md rounded">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="p-2 border">No</th>
                <th class="p-2 border">Nama</th>
                <th class="p-2 border">NIM</th>
                <th class="p-2 border">IPK</th>
                <th class="p-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($daftarMahasiswa as $df)
                <tr class="border-t">
                    <td class="p-2 border">{{ $loop->iteration }}</td>
                    <td class="p-2 border">{{ $df['nama'] }}</td>
                    <td class="p-2 border">{{ $df['nim'] }}</td>
                    <td class="p-2 border">{{ number_format($df['ipk'] / 10, 1, ',', '.') }}</td>
                    <td class="p-2 border">
                        <a href="{{ route('mahasiswa.detail', $df['nim']) }}"
                            class="text-blue-500 hover:underline">Lihat</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="p-4 text-center text-gray-500">Belum ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
