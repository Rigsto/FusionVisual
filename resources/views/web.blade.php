@extends('layout.pages')
@section('content')
    <div class="container webprice">
        <h1 class="text-center bus">Company Profile Packages</h1>
        <div class="row">
            @if($companies)
                @foreach($companies as $paket)
            <div class="col-md-4 compro1">
                <div class="pricingTable {{$paket->nama == "Farmer" ? "purple" : "green"}}">
                    <div class="pricingTable-header">
                        <h3>{{$paket->nama}}</h3>
                    </div>
                    <div class="pricing-plans"><span class="price-value"><span>{{$paket->harga}}</span></span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li>@if($paket->freeHosting == 1) <strike>Free Hosting</strike> @else Free Hosting @endif</li>
                            <li>@if($paket->freeDomain == 1) <strike>Free Domain</strike> @else Free Domain @endif</li>
                            <li>Subdomain :  {{$paket->freeSubdomain}}</li>
                            <li>up to {{$paket->pages}} Pages</li>
                            <li>{{$paket->seo}} Key Words</li>
                            <li>{{$paket->duration}} Days of Work</li>
                            <li>Free Update Existing Pages : {{$paket->freeEditPage}}</li>
                            <li>@if($paket->responsive == 1) <strike>Responsive Design</strike> @else FResponsive Design @endif</li>
                            <li>@if($paket->ftp == 1) <strike>FTP Access</strike> @else FTP Access @endif</li>
                            <li>@if($paket->slideshow == 1) <strike>Slideshow Header</strike> @else Slideshow Header @endif</li>
                            <li>@if($paket->cms == 1) <strike>Content Management System</strike> @else Content Management System @endif</li>
                            <li>@if($paket->ssl == 1) <strike>SSL Security</strike> @else SSL Security @endif</li>
                            <li>@if($paket->login == 1) <strike>Login & Registration System</strike> @else Login & Registration System @endif</li>
                            <li>@if($paket->siteSearch == 1) <strike>Search Feature</strike> @else Search Feature @endif</li>
                        </ul>
                    </div>
                    <div class="pricingTable-sign-up"><a href="{{ route('checkout') }}" class="btn btn-block">Add to
                            cart</a>
                    </div>
                </div>
            </div>
                @endforeach
            @endif
        </div>

        <h1 class="text-center bus">Business Packages</h1>
        <div class="row">
            @if($companies)
                @foreach($bus as $paket)
            <div class="col-md-4">
                <div class="pricingTable {{$paket->nama == "Poets" ? "purple" : ($paket->nama == "Merchant" ? "green" : "yellow")}}">
                    <div class="pricingTable-header">
                        <h3>{{$paket->nama}}</h3>
                    </div>
                    <div class="pricing-plans"><span class="price-value"><span>{{$paket->harga}}</span></span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li>@if($paket->freeHosting == 1) <strike>Free Hosting</strike> @else Free Hosting @endif</li>
                            <li>@if($paket->freeDomain == 1) <strike>Free Domain</strike> @else Free Domain @endif</li>
                            <li>Subdomain :  {{$paket->freeSubdomain}}</li>
                            <li>up to {{$paket->pages}} Pages</li>
                            <li>{{$paket->seo}} Key Words</li>
                            <li>{{$paket->duration}} Days of Work</li>
                            <li>Free Update Existing Pages : {{$paket->freeEditPage}}</li>
                            <li>@if($paket->responsive == 1) <strike>Responsive Design</strike> @else Responsive Design @endif</li>
                            <li>@if($paket->ftp == 1) <strike>FTP Access</strike> @else FTP Access @endif</li>
                            <li>@if($paket->slideshow == 1) <strike>Slideshow Header</strike> @else Slideshow Header @endif</li>
                            <li>@if($paket->cms == 1) <strike>Content Management System</strike> @else Content Management System @endif</li>
                            <li>@if($paket->ssl == 1) <strike>SSL Security</strike> @else SSL Security @endif</li>
                            <li>@if($paket->login == 1) <strike>Login & Registration System</strike> @else Login & Registration System @endif</li>
                            <li>@if($paket->siteSearch == 1) <strike>Search Feature</strike> @else Search Feature @endif</li>
                        </ul>
                    </div>
                    <div class="pricingTable-sign-up"><a href="{{ route('checkout') }}" class="btn btn-block">Add to
                            cart</a></div>
                </div>
            </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection