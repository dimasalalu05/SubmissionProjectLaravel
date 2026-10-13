@props(['tipe' => 'info'])

@php
    // Menyesuaikan warna background
    // match() pengganti pengkodisian switch
    $bgColor = match ($tipe) {
        'sukses' => 'bg-green-100 border-green-400 text-green-700',
        'bahaya' => 'bg-red-100 border-red-400 text-red-700',
        default => 'bg-blue-100 border-blue-400 text-blue-700',
    };
@endphp

<div class="border-l-4 p-4 mb-4 {{ $bgColor }}" role="alert">

    <span class="block sm:inline">{{ $slot }}</span>
</div>
