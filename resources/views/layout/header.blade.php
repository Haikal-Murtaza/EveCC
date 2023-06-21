<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sign-in.css') }}">
    <title>Halaman Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg stiky-top p-4 bg-dark-subtle">
        <div class="container-fluid">
            <a class=" navbar-brand d-flex ms-5 text-dark text-decoration-none" href="/">
                EveCC
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end me-5" id="navbarSupportedContent">
                <ul class="navbar-nav jus">
                    <li class="nav-item me-2"><a href="/home" class="nav-link active text-decoration-underline"
                            aria-current="page">Home</a></li>
                    <li class="nav-item me-2"><a href="/recipe" class="nav-link">Recipe</a></li>
                    <li class="nav-item me-2"><a href="idea" class="nav-link">Share Idea</a></li>
                    <li class="nav-item"><a href="login" class="nav-link">Join Us</a></li>
                </ul>
            </div>
    </nav>
