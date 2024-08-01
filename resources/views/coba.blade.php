@extends('template')
@section('main')
    <h1>Ini view laravel</h1>

    @for ($i= 1; $i<10; $i++)
        @if ($i % 2)
            <h2>Ini perulangan menggunakan blade</h2>
        @endif
    @endfor

    <img src="{{ asset('img/foto152.png') }}" width="300" alt="">
@endsection
