@extends('layouts.profil')

@section('tab')
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="bio">{{ __('BIO') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fav">User’s Recipe and Fav</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="setting">Account Setting</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="text-center">
                            <div class="line-container">
                                <hr class="line">
                                <h2>Beberapa kata</h2>
                                <hr class="line">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
