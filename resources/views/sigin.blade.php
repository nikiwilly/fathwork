@extends('layoutslp.main')
@section('isi')
    <section class="wrapper bg-dark text-white">
        <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 text-white mb-3">Sign In</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col mt-n19">
                    <div class="card shadow-lg">
                        <div class="row gx-0 text-center">
                            <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block"
                                data-image-src="assets/img/photos/tm3.jpg">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-10 p-md-11 p-lg-13">
                                    <h2 class="mb-3 text-start">Welcome Back</h2>
                                    <p class="lead mb-6 text-start">Fill your email and password to sign in.</p>

                                    <form class="text-start mb-3" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-floating mb-4">
                                            <input type="email" name="email" class="form-control" placeholder="Email" id="loginEmail" required>
                                            <label for="loginEmail">Email</label>
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-floating password-field mb-4">
                                            <input type="password" name="password" class="form-control" placeholder="Password" id="loginPassword" required>
                                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                            <label for="loginPassword">Password</label>
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign In</button>
                                    </form>

                                    @if(session('loginError'))
                                        <div class="alert alert-danger mt-3">
                                            {{ session('loginError') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
