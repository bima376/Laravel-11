<?php

use Illuminate\Support\Facades\Route;

//ROUTE VIEW 
// Route::get('/', function () {
//     return view('welcome');//contoh menggunakan view blade.php routes
// }); 

Route::get('/basic-routes', function () {
    return 'Basic Routes Laravel'. 10+1;//hanya menampilkan teks "Basik Routes Laravel11" (tanpa menggunakan views blade.php)
}); 

Route::view('/view-routes', 'route.view-routes'); //SIMPEL ->sekedar menampilkan halaman saja

#cara menampilkan argument ke view
#1 tanpa return function atau SIMPEL
Route::view('/argument-1', 'route.argument-1',
    [
        'title' => 'cara mengirimkan argument ke view',
        'teks' => 'Ok Paham'
    ]
); 
#2 dengan return functtion 
Route::get('/argument-2', function () {
    return view('route.argument-2', [
        'title' => 'cara mengirimkan argument ke view',
        'teks' => 'Ok Paham'
    ]);
});

//Redirect
Route::redirect('/route/redirect-1', '/route/redirect-2'); //mengalihkan atau menendang pengunjung ke halaman lain semisal= adanya maintenance

//parameter->{id}
#contoh 1
Route::get('/param/{id}', function ($id) {
    return'ini route menggunakan parameter id'. $id; #contoh cara mengakses http://127.0.0.1:8000/param/88
}); 
#contoh 2
Route::get('/parameter/{id}', function($id) {
    return view('route.param', ['id' => $id]);
});#contoh cara mengakses http://127.0.0.1:8000/parameter/apasaja


//Route prefix
Route::prefix('page')->group(function () {
    Route::get('/home', function () {
        return'ini halaman rumah'; #contoh akses http://127.0.0.1:8000/page/home
    }); 
    Route::get('/about', function () {
        return'ini halaman tentang'; #contoh akses http://127.0.0.1:8000/page/about
    }); 
    Route::get('/contact', function () {
        return'ini halaman kontak'; #contoh akses http://127.0.0.1:8000/page/contact
    }); 
});


//Methods
#Route::get(); //mendapatkan data
#Route::post(); //menginput data ke Database
#Route::put(); //mengupdate data ke Database
#Route::patch(); //mengupdate data ke Database
#Route::delete(); //menghapus data


// Blade Template
#Cara Kerja If else
Route::get('/blade-template-ifels', function () {
    return view('Blade-template.ifels', [
        'nama' => 'penguin',
        'jenis' => 'kawasan',
    ]);
});

#Cara kerja switch case
Route::get('/blade-template-switch-case', function () {
    return view('Blade-template.switch-case', [
        'nama' => 'penguin',
        'jenis' => 'burung',
    ]);
});

#Cara kerja Loop
Route::get('/blade-template-loop', function () {
    return view('Blade-template.loop', [
        'nama' => 'penguin',
        'jenis' => 'burung',
        'makanan' => ['pindang, salmon, teri'],
    ]);
}); 


// BLADE TEMPLATING
Route::get('/', function () {
    return view('Blade-template.template', [
        'judul'=>'Layout Template'
    ]);
}); 