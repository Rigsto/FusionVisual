@extends('layout.pages')
@section('content')
    <section id="head" class="revtitlebg">
        <div class="container couttitle">
            <h2>Checkout</h2>
        </div>
    </section>
    <section id="coutform" style="margin-top: 7em;">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <h4>Customer Details</h4>
                    <form>
                        <div class="form-group"><label>Email Address</label><input class="form-control form-control" type="email"></div>
                        <h4>Payment Details</h4>
                        <div class="form-group"><label>Bank Transfer</label><select class="custom-select"><option value="">Choose Bank</option><option value="" selected="">BCA</option></select></div>
                        <div class="form-group"><button class="btn btn-primary" type="button">Complete Order</button></div>
                    </form>
                </div>
                <div class="col-md-4 offset-xl-2">
                    <h4 style="margin: 0;">Your Order</h4>
                    <hr style="margin: 0.5em 0 0.5em 0;border-top: 1px solid black;">
                    <div>
                        <h4 style="margin: 0;">Package Name</h4>
                        <p style="margin: 0;">Description</p>
                        <p style="margin: 0;">Price</p>
                    </div>
                    <hr style="margin: 0.5em 0 0.5em 0;border-top: 1px solid black;">
                    <div>
                        <p style="margin: 0;">Subtotal</p>
                        <p style="margin: 0;">Unique Code</p>
                        <p style="margin: 0;">Total</p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
@endsection