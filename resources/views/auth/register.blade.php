@extends('layouts.guest')

@section('content')
    <section id="authentication">
        <div class="container">
            <div class="row main-row">
                <div class="col-md-12 border">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6 hero-section">
                            <img src="{{ asset('images/login.png') }}" alt="Login Register Hero" class="img-fluid">
                        </div>
                        <div class="col-md-6 login-register-section">
                            <div class="card">
                                <div class="card-header">
                                    Login Form
                                </div>
                                <div class="card-body">
                                    <form id="loginForm">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Full Name" name="name">
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Username"
                                                name="username">
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Password" name="password">
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirm_password"
                                                placeholder="Confirm Password" name="confirm_password">
                                            <p class="text-danger"></p>
                                        </div>
                                        <button class="btn btn-success btn-block mb-2" id="loginBtn" disabled><i
                                                class="fa-solid fa-right-to-bracket"></i>&nbsp;Login</button>
                                        <a href="{{ route('login') }}" class="alternate-action">Already Have An Account ?
                                            Login</a>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <div class="or-section text-center">
                                        OR
                                    </div>
                                    <div class="social-media">
                                        <a href="" class="social-login-box"><i
                                                class="fa-brands fa-facebook"></i>&nbsp;<span>Facebook</span></a>
                                        <a href="" class="social-login-box"><i
                                                class="fa-brands fa-google"></i>&nbsp;<span>Google</span></a>
                                        <a href="" class="social-login-box"><i
                                                class="fa-brands fa-apple"></i>&nbsp;<span>Apple</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Section of Register Body Ends  -->
@endsection
