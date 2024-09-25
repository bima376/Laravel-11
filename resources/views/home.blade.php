@extends('layouts.nav')

@section('title', 'Home Page')

@section('content')
    <h1>Halaman{{ $judul }}</h1>
    <ol>
        @foreach ($list as $data)
            <li>
                {{ $data->nama }} | {{ $data->gender }} | {{ $data->usia }}
            </li>
        @endforeach
    </ol>
@endsection