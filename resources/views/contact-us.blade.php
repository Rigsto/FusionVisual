@extends('layout.pages')
@section('content')
    <section id="mett">
        <div class="container meetform">
            <div class="row no-gutters">
                <div class="col-md-6"><img class="img-fluid" src="assets/img/aaa.png" width="100">
                    <h4 class="consult">Fusions Visual Digital Studio</h4>
                    <h2 class="consulth2">Contact Form</h2>
                    <hr class="separate">
                    <h5 class="consult"><i class="fa fa-phone"></i>&nbsp; +6285880388900<br></h5>
                    <h5 class="consult"><i class="fab fa-instagram"></i>&nbsp; Fusionsvisual.id</h5>
                    <h5 class="consult"><i class="far fa-envelope"></i>&nbsp; customer@fusionsvisual.com</h5>
                </div>
                <div class="col-md-6">
                    <h2 class="formtitle">Contact Us</h2>
                    <form>
                        <div class="form-row">
                            <div class="col-md-6"><label>First Name *</label><input class="form-control" type="text" required="" placeholder="First Name..."></div>
                            <div class="col-md-6"><label>Last Name</label><input class="form-control" type="text" placeholder="Last Name..."></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12"><label>Your e-mail address *</label><input class="form-control" type="email" required="" placeholder="e-mail address..."></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12"><label>What's on your mind?</label><textarea class="form-control form-control-lg" rows="6" placeholder="Type something..."></textarea></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12"><button class="btn btn-primary" type="submit">Contact Us</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection