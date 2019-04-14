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
                            <form>
                                <div class="form-row"><input class="form-control inlog" type="text" required="" placeholder="Full Name.."></div>
                                <div class="form-row"><input class="form-control inlog" type="text" required="" placeholder="E-mail Address..."></div>
                                <div class="form-row"><input class="form-control inlog" type="password" placeholder="Password..."></div>
                                <div class="form-row"><input class="form-control inlog" type="password" placeholder="Re-type Password..."></div>
                                <div class="form-row"><button class="btn btn-primary logbtn" type="submit">Sign Up</button></div>
                                <p class="forpass">Already have account?&nbsp;<a href="login.html">Login Here.</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection