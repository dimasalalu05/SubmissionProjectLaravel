@props(['status' => 'nilai']);

@php
    $pilihanWarna = match ($status) {
        'tersedia' => 'bg-green-100 border-green-400 text-green-200',
        'menipis' => 'bg-yellow-100 border-yellow-400 text-yellow-200',
        default => 'bg-red-100 border-red-400 text-red-200',
    };
@endphp

<div class="border-1-4 m-4 p-4 {{ $pilihanWarna }}" role="alert">
    <span class="block sm:inline">{{ $slot }}</span>
</div>
