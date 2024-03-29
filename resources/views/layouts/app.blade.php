<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sign-in.css') }}">
    <link href="{{ asset('css/profil.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg stiky-top p-4 bg-dark-subtle shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/home" class="nav-link active text-decoration-underline"
                                aria-current="page">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="/recipe" class="nav-link" aria-current="page">{{ __('Recipe') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="idea" class="nav-link">Share Idea</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Join Us') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="bio" role="button" aria-haspopup="true"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <footer class="footer pt-3 bg-dark-subtle">
        <div class="row">
            <div class="col-md-5 offset-md-1 mb-3">
                <h4>EveCC</h4>
                <p>The place for someone who wants to share their inspiration, needs inspiration, or is just bored with
                    their normal food</p>
            </div>
            <form class="col form-container">
                <div class="form-row">
                    <div class="form-group">
                        <input id="name" type="text" class="form-control form-input" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <textarea id="message" class="form-control form-input" placeholder="Your Message"></textarea>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input id="email" type="email" class="form-control form-input" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input id="subject" type="text" class="form-control form-input" placeholder="Subject">
                    </div>
                    <div class="form-row form-submit">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-fluid d-flex bg-secondary justify-content-center">
            <p>EveCC - CopyRight 2023. All rights reserved.</p>
        </div>
    </footer>

    {{-- Awal Script Js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    {{-- AKhir Script Js --}}
</body>

</html>
