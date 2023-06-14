<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Halaman Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg stiky-top p-4 bg-dark-subtle mb-5">
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
                    <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#ModalLogin">Join Us</a></li>
                </ul>
            </div>
    </nav>

    <!-- Modal Login -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <form class="needs-validation" action="../proses/proses_login.php" method="post" novalidate>
                        <img src="../assets/img/logo.png" alt="" width="150" height="150">
                        <h1 class="h3 mb-3 fw-normal">WELCOME BACK</h1>
                        <h1 class="h5 mt-4 mb-3 fw-normal">Please enter your email and password</h1>

                        <!-- username form -->
                        <div class="form-floating ms-2 me-2 mb-3">
                            <input type="email" name="username" class="form-control" id="floatingInput"
                                placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                            <div class="valid-feedback mb-2">
                                Looks good!
                            </div>
                            <div class="invalid-feedback mb-2">
                                Username salah atau kosong!!
                            </div>
                        </div>

                        <!-- password form -->
                        <div class="form-floating ms-2 me-2 mb-5">
                            <input type="password" name="password" class="form-control" id="floatingPassword"
                                placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                            <div class="valid-feedback mb-2">
                                Looks good!
                            </div>
                            <div class="invalid-feedback mb-2">
                                Password salah atau kosong!!
                            </div>
                        </div>

                        <button class="w-100 btn btn-lg btn-info" type="submit" name="submit">Log in</button>
                    </form>
                    <script src="../assets/js/signin.js"></script>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Login-->
