<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Template</title>
</head>
<body>    
    <div class="container">
        <h1>Coba if else</h1>
        <h2>Nama {{ $nama }} kamu adalah {{ $jenis }}</h2>
        @if ($jenis == 'burung')
         <a href="">link halaman burung</a>
         @elseif ($jenis == 'kawasan')
            <a href="">link halaman kutub salju</a>
         @else
            <a href="">link tidak ada</a>         
        @endif
    </div>
</body>
</html>