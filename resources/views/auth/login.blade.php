@extends('layouts.auth_app')
@section('title')
    Admin Login
@endsection
@section('content')
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                        <div class="w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div>
                                        <div class="text-center">
                                            <div>
                                                <a href="index.html" class="">
                                                    <img src="assets/login/images/logo_1.png" alt="" height="70"
                                                        class="auth-logo logo-dark mx-auto mt-10">

                                                </a>
                                            </div>

                                            <h4 class="font-size-30 mt-4">Bienvenido</h4>
                                            <p class="text-muted">Acceso de Usuarios</p>
                                        </div>

                                        <div class="p-2 mt-5">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                @if ($errors->any())
                                                    <div class="alert alert-danger p-0">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <div class="mb-3 auth-form-group-custom mb-4">
                                                    <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                    <label for="email">Email</label>
                                                    <input aria-describedby="emailHelpBlock" id="email" type="email"
                                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                        name="email" placeholder="Enter Email" tabindex="1"
                                                        value="{{ Cookie::get('email') !== null ? Cookie::get('email') : old('email') }}"
                                                        autofocus required>
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                </div>

                                                <div class="mb-3 auth-form-group-custom mb-4">
                                                    <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                    <label for="password" class="control-label">Password</label>

                                                    <input aria-describedby="passwordHelpBlock" id="password"
                                                        type="password"
                                                        value="{{ Cookie::get('password') !== null ? Cookie::get('password') : null }}"
                                                        placeholder="Enter Password"
                                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                        name="password" tabindex="2" required>
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('password') }}
                                                    </div>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                        tabindex="4">
                                                        Login
                                                    </button>
                                                </div>


                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="authentication-bg">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
