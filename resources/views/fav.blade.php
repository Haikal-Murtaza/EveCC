@extends('layouts.profil')

@section('tab')
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="true" href="bio">{{ __('BIO') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="fav">{{ __('User’s Recipe and Fav') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="setting">Account Setting</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="card mb-3" style="display: flex;">
                <div class="row">
                    <img src="{{ asset('asset/foto1.jpg') }}" class="card-img-left" alt="..."
                        style="width: 30%; height: auto;">
                    <div class="card-body" style="flex: 1;">
                        <div class="text-start">
                            <div>
                                <h5 class="card-title border-bottom">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="recipe/1" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="display: flex;">
                <div class="row">
                    <img src="{{ asset('asset/foto2.jpg') }}" class="card-img-left" alt="..."
                        style="width: 30%; height: auto;">
                    <div class="card-body" style="flex: 1;">
                        <div class="text-start">
                            <div>
                                <h5 class="card-title border-bottom">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
