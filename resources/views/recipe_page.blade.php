@extends('layouts.app')

@section('content')
{{-- Awal Heading --}}
<div class="container border-bottom p-4">
    <div class="row">
        <div class="col">
            <h1 class="d-inline">Lets Cook</h1>
            <span class="d-inline">May 21, 2023</span>
        </div>
        <div class="col">
            <div class="d-flex gap-2 justify-content-end">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <button class="btn btn-light rounded-pill px-3" type="button">Filter</button>
                <button class="btn btn-success rounded-pill px-3" type="button">Default</button>
            </div>
        </div>
    </div>
</div>
{{-- Akhir Heading --}}

{{-- Awal Konten --}}
<div class="container text-center my-5" >
    <div class="card mb-3" style="display: flex;">
        <div class="row">
            <img src="{{ asset('asset/foto1.jpg') }}" class="card-img-left" alt="..." style="width: 30%; height: auto;">
            <div class="card-body" style="flex: 1;">
                <div class="text-start">
                    <div>
                        <h5 class="card-title border-bottom">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="recipe/1" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card mb-3" style="display: flex;">
        <div class="row">
            <img src="{{ asset('asset/foto2.jpg') }}" class="card-img-left" alt="..." style="width: 30%; height: auto;">
            <div class="card-body" style="flex: 1;">
                <div class="text-start">
                    <div>
                        <h5 class="card-title border-bottom">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
{{-- Akhir Konten --}}
@endsection
