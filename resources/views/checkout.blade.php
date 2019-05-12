@extends('layout.pages')
@section('content')
    <section id="head" class="revtitlebg">
        <div class="container couttitle">
            <h2>Checkout</h2>
        </div>
    </section>
    <section id="coutform" class="py-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <h4>Customer Details</h4>
                    {!! Form::open(['method'=>'POST']) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Email Address</label>
                        @if($user = \Illuminate\Support\Facades\Auth::user())
                            {!! Form::email('email', $user->email, ['class'=>'form-control', 'readonly', 'placeholder'=>'E-mail Address...']) !!}
                            <span class="text-primary">Your email has filled automaticaly because your are logged in.</span>
                        @else
                            {!! Form::email('email', null, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'E-mail Address...']) !!}
                        @endif
                    </div>
                    @guest
                    <div class="form-group">
                        <label>Full Name</label>
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Full Name..' , 'required'=>'']) !!}
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password...' , 'required'=>'']) !!}
                    </div>
                    <div class="form-group">
                        <label>Re-type Password</label>
                        {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Re-type Password...' , 'required'=>'']) !!}
                    </div>
                    @endguest
                    <h4>Payment Details</h4>
                    <div class="form-group">
                        <label>Bank Transfer</label>
                        {!! Form::select('payment', array('Choose Bank',
                                            'BCA'),
                            null, ['class'=>'custom-select', 'id' => 'mplace']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Complete Order', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
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