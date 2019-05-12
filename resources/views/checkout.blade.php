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
                    @if($web)
                        <div>
                            <h4 style="margin: 0;">{{$web->nama}}</h4>
                            <p style="margin: 0;">{{$web->id == 1 || $web->id == 2 ? 'Website Development Company Profile Packages' : 'Website Development Business Packages'}}</p>
                            <p style="margin: 0;">Rp. {{number_format($web->harga, 0, '', '.')}},-</p>
                        </div>
                        <hr style="margin: 0.5em 0 0.5em 0;border-top: 1px solid black;">
                        <div class="row no-gutters">
                            <div class="col-md-6 text-left">
                                <p style="margin: 0;">Subtotal</p>
                                <p style="margin: 0;">Unique Code </p>
                                <p style="margin: 0; font-weight: bold">Total </p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p style="margin: 0;">Rp. {{number_format($web->harga, 0, '', '.')}},-</p>
                                <p style="margin: 0;">Rp. {{number_format($web->harga, 0, '', '.')}},-</p>
                                <p style="margin: 0; font-weight: bold">Rp. {{number_format($web->harga, 0, '', '.')}},-</p>
                            </div>
                        </div>
                        <hr>
                    @else
                        <div>
                            <h4 style="margin: 0;">{{$app->nama}}</h4>
                            <p style="margin: 0;">{{$app->id == 1 || $app->id == 2 ? 'Mobile Apps Development Company Profile Packages' : 'Mobile Apps Development Business Packages'}}</p>
                            <p style="margin: 0;">Rp. {{number_format($app->harga, 0, '', '.')}},-</p>
                        </div>
                        <hr style="margin: 0.5em 0 0.5em 0;border-top: 1px solid black;">
                        <div class="row no-gutters">
                            <div class="col-md-6 text-left">
                                <p style="margin: 0;">Subtotal</p>
                                <p style="margin: 0;">Unique Code </p>
                                <p style="margin: 0; font-weight: bold">Total </p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p style="margin: 0;">Rp. {{number_format($app->harga, 0, '', '.')}},-</p>
                                <p style="margin: 0;">Rp. {{number_format($app->harga, 0, '', '.')}},-</p>
                                <p style="margin: 0; font-weight: bold">Rp. {{number_format($app->harga, 0, '', '.')}},-</p>
                            </div>
                        </div>
                        <hr>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection