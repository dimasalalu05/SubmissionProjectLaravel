<x-layoutbuku>

    @php
        /** Mengecek apakah ada stok yang kosong
         *contains() hanya memnetukan true or false
         */
        $stokKosong = collect($daftarBuku)->contains(function ($sk) {
            return $sk['stok'] == 0;
        });
    @endphp

    @if ($stokKosong)
        <x-badge :status="$status"> Produk Kosong</x-badge>
    @endif

    <table class="w-full bg-white border border-gray-300 shadow-md rounded">
        <thead>
            <tr>
                <th class="p-2 border-2">Judul</th>
                <th class="p-2 border-2">Penulis</th>
                <th class="p-2 border-2">Stok</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($daftarBuku as $db)
                <tr>
                    <td class="p-2 border-2">{{ $db['judul'] }}</td>
                    <td class="p-2 border-2">{{ $db['penulis'] }}</td>
                    <td class="p-2 border-2">{{ $db['stok'] }}</td>
                </tr>
            @empty
            @endforelse
        </tbody>

    </table>

</x-layoutbuku>
