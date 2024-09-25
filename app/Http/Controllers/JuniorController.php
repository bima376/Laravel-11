<?php

namespace App\Http\Controllers;

use App\Models\Junior;
use Illuminate\Http\Request;

class JuniorController extends Controller
{
    public function index()
    {
        $data = Junior::all();
        $title='Home';
        return view('home', [
            'judul'=> $title,
            'list'=> $data
        ]);
    }
}
