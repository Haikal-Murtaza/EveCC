@extends('layouts.app')

@section('content')
    {{-- Awal Carousel --}}
    <div id="myCarousel" class="carousel slide carousel-fade mt-5 pt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img width="1700px" height="500px" src="{{ asset('asset/gado_gado.jpg') }}" alt="Nama Gambar">

                <div class="container">
                    <div class="carousel-caption text-start mb-5">
                        <h1 class="display-3">Everybody Can Cook</h1>
                        <h1 class="display-3">You Just Need To Start Today</h1>
                        <p><a class="ms-1 btn btn-lg btn-secondary" href="recipe">Cari Resep Anda</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img width="1700px" height="500px" src="{{ asset('asset/foto1.jpg') }}" alt="Nama Gambar">

                <div class="container">
                    <div class="carousel-caption text-start mb-5">
                        <h1 class="display-3">Everybody Can Cook</h1>
                        <h1 class="display-3">You Just Need To Start Today</h1>
                        <p><a class="ms-1 btn btn-lg btn-secondary" href="#">Cari Resep Anda</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img width="1700px" height="500px" src="{{ asset('asset/foto2.jpg') }}" alt="Nama Gambar">

                <div class="container">
                    <div class="carousel-caption text-start mb-5">
                        <h1 class="display-3">Everybody Can Cook</h1>
                        <h1 class="display-3">You Just Need To Start Today</h1>
                        <p><a class="ms-1 btn btn-lg btn-secondary" href="#">Cari Resep Anda</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Akhir Carousel --}}

    {{-- Awal Konten --}}
    <div class="container text-center my-5 pt-5">
        <div class="row">
            <h4 class="col px-3 py-1 d-inline-block text-decoration-underline">
                WHO WE ARE
            </h4>
        </div>
        <div class="image-stack mt-3">
            <img width="600px" height="320px" src="{{ asset('asset/foto2.jpg') }}" alt="Nama Gambar">
            <img width="600px" height="320px" src="{{ asset('asset/gado_gado.jpg') }}" alt="Nama Gambar">
            <img width="600px" height="320px" src="{{ asset('asset/foto1.jpg') }}" alt="Nama Gambar">
        </div>
        <p class="desc mt-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt aliquam ipsum eget
            consectetur. Sed
            ac elit et mi condimentum hendrerit. Duis nunc augue, rhoncus ornare ornare vitae, tempor non
            lectus.
            Aliquam urna velit, vestibulum quis tincidunt at, pharetra sit amet turpis. Aenean venenatis, nulla
            et
            accumsan fringilla, tellus tellus tincidunt diam, eleifend commodo ipsum nibh sed est. Mauris id
            metus
            finibus, scelerisque risus quis, eleifend urna. Curabitur tortor augue, maximus eu pulvinar sed,
            convallis
            in velit. Mauris dictum porta aliquam. Ut augue odio, luctus in feugiat eget, vestibulum a nibh.
        </p>
    </div>
    {{-- Akhir Konten --}}
@endsection
