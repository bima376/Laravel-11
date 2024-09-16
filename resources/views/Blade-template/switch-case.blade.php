<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Template</title>
</head>
<body>
    {{-- Ganti isi jenis di routes untuk mengetes --}}
    <div class="container">
        <h1>Coba if else</h1>
        <h2>Nama {{ $nama }} kamu adalah {{ $jenis }}</h2>
        @switch($jenis)
            @case($jenis== 'burung')
                <a href="">link burung</a>
                @break
            @case($jenis== 'kawasan')
            <a href="">link kawasan</a>
                @break
            @default
            <a href="">link tidak ada</a>
        @endswitch
    </div>
</body>
</html>