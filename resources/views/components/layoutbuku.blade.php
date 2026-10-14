<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Mahasiswa')</title>
    <!-- Contoh styling sederhana atau Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">


    {{-- <x-navbar> --}}

    <!-- Konten Utama -->
    <main>
        <div class="container mx-auto mt-6 p-4">
            {{ $slot }}
        </div>
    </main>
</body>

</html>
