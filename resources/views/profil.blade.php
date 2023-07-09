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

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection
