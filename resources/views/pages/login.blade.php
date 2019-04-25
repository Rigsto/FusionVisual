@extends('layout.pages')
@section('content')
    <section id="login">
        <div class="container" id="logform">
            <div class="formlog">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="formbody"><img class="img-fluid" src="assets/img/aaa(2).png" width="100">
                            <h1 class="wb">Welcome Back!</h1>
                            <p>Let's continue our journey together!</p>
                            <form>
                                <div class="form-row"><input class="form-control inlog" type="email" required="" placeholder="E-mail Address..."></div>
                                <div class="form-row"><input class="form-control inlog" type="password" required="" placeholder="Password..."></div>
                                <div class="form-row"><button class="btn btn-primary logbtn" type="submit">Login</button></div>
                                <p class="forpass">Forgot password?&nbsp;<a href="#">Reset Here.</a></p>
                                <p class="forpass">Don't have account?&nbsp;<a href="sign">Sign up Here.</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection