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
                            <div class="alert alert-success alert-dismissible ml-3 mr-3" id="messages">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Email Sent Successfully</strong>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    Reset Your Password
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Username"
                                                name="username">
                                            <p class="text-danger" id="usernameError">

                                            </p>
                                        </div>

                                        <button type="button" class="btn btn-success btn-block mb-2" id="loginBtn"><i
                                                class="fa-solid fa-right-to-bracket"></i>&nbsp;Login</button>
                                        <a href="{{ route('register') }}" class="alternate-action">Don't Have An Account ?
                                            Create New
                                            One</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Section of Login Body Ends -->
@endsection
