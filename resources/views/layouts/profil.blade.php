@extends('layouts.app')

@section('content')
    <div class="cover-photo">
        <img src="{{ asset('asset/background.jpeg') }}" alt="Foto Profil">
    </div>

    <div class="profile-picture">
        <img src="{{ asset('asset/background.jpeg') }}" alt="Foto Profil">
    </div>

    <div class="profile-details bg-dark-subtle">
        <h1>{{ Auth::user()->name }}</h1>
        <p>Member since : {{ Auth::user()->created_at }}</p>
        <!-- Informasi lainnya seperti pekerjaan, lokasi, tanggal lahir, dll. -->
    </div>

    @yield('tab')
@endsection
