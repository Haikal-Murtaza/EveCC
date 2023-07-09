@extends('layouts.profil')

@section('tab')
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="true" href="bio">{{ __('BIO') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fav">{{ __('User’s Recipe and Fav') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="setting">{{ __('Account Setting') }}</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">My Account</div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Enter your username" value="{{ Auth::user()->name }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter your email address" value="{{ Auth::user()->email }}"
                                            disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone"
                                            placeholder="Enter your phone number">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-header">Change Password</div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="old-password">Old Password</label>
                                        <input type="password" class="form-control" id="old-password"
                                            placeholder="Enter your old password">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-password">New Password</label>
                                        <input type="password" class="form-control" id="new-password"
                                            placeholder="Enter your new password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-password">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm-password"
                                            placeholder="Confirm your new password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-header">Actions</div>
                            <div class="card-body">
                                <table class="table">
                                    <!-- Table content -->
                                </table>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-danger">Delete Account</a>
                                    <a href="#" class="btn btn-primary" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
