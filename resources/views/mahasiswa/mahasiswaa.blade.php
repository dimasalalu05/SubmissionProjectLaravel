<h1>Daftar Mahasiswa Lengkapa</h1>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>IPK</th>
        <th>Kolom Keterangan</th>
    </tr>
    @forelse ($daftarMahasiswa as $df)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $df['nama'] }}</td>
            <td>{{ $df['nim'] }}</td>
            <td>{{ number_format($df['ipk'] / 10, 1, ',', '.') }}</td>
            <td>
                @if ($df['ipk'] > 35)
                    Cumlaude
                @elseif ($df['ipk'] >= 30)
                    Baik
                @else
                    Mohon Untuk ditingkatkan
                @endif
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4">Belum ada data</td>
        </tr>
    @endforelse
</table>
