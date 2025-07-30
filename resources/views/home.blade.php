{{-- Menggunakan kerangka dari layouts/app.blade.php --}}
@extends('layouts.app')

{{-- Mendefinisikan konten yang akan diisi ke @yield('content') --}}
@section('content')

    {{-- Memanggil semua section secara berurutan --}}
    @include('sections.hero')
    @include('sections.features')
    @include('sections.about')
    @include('sections.services')
    @include('sections.clients')
    @include('sections.contact')

@endsection