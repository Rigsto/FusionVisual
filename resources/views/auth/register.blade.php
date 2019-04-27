@extends('layout.pages')
@section('content')
    <section id="login">
        <div class="container" id="logform">
            <div class="formlog">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="formbody"><img class="img-fluid" src="assets/img/aaa(2).png" width="100">
                            <h1 class="wb">Hello, Let's start your new adventure!</h1>
                            <p>Turn your ideas into reality with us!</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-row">
                                    <input class="form-control inlog" type="text" required="" placeholder="Full Name.."
                                           name="name" id="name">
                                </div>
                                <div class="form-row">
                                    <input class="form-control inlog" type="text" required=""
                                           placeholder="E-mail Address..." name="email" id="email">
                                </div>
                                <div class="form-row">
                                    <input class="form-control inlog" type="password" placeholder="Password..."
                                           name="password" id="password">
                                </div>
                                <div class="form-row">
                                    <input class="form-control inlog" type="password" placeholder="Re-type Password..."
                                           name="password-confirmation" id="password-confirm">
                                </div>
                                <div class="form-row">
                                    <button class="btn btn-primary logbtn" type="submit">{{ __('Sign Up') }}</button>
                                </div>
                                <p class="forpass">Already have account?&nbsp;<a href="{{ route('login') }}">Login
                                        Here.</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection