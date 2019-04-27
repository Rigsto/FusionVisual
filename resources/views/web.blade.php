@extends('layout.pages')
@section('content')
    <div class="container webprice">
        <h1 class="text-center bus">Company Profile Packages</h1>
        <div class="row">
            <div class="col-md-4 compro1">
                <div class="pricingTable purple">
                    <div class="pricingTable-header">
                        <h3>Farmer</h3>
                    </div>
                    <div class="pricing-plans"><span class="price-value"><span>390K</span></span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                        </ul>
                    </div>
                    <div class="pricingTable-sign-up"><a href="{{ route('checkout') }}" class="btn btn-block">Add to
                            cart</a></div>
                </div>
            </div>
            <div class="col-md-4 compro2">
                <div class="pricingTable green">
                    <div class="pricingTable-header">
                        <h3>magi</h3>
                    </div>
                    <div class="pricing-plans"><span class="price-value"><span>580K</span></span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                        </ul>
                    </div>
                    <div class="pricingTable-sign-up"><a href="{{ route('checkout') }}" class="btn btn-block">ADD TO
                            CART<br></a></div>
                </div>
            </div>
        </div>
        <h1 class="text-center bus">Business Packages</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="pricingTable purple">
                    <div class="pricingTable-header">
                        <h3>poets</h3>
                    </div>
                    <div class="pricing-plans"><span class="price-value"><span>780K</span></span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                        </ul>
                    </div>
                    <div class="pricingTable-sign-up"><a href="{{ route('checkout') }}" class="btn btn-block">Add to
                            cart</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricingTable green">
                    <div class="pricingTable-header">
                        <h3>merchant</h3>
                    </div>
                    <div class="pricing-plans"><span class="price-value"><span>1380K</span></span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                        </ul>
                    </div>
                    <div class="pricingTable-sign-up"><a href="{{ route('checkout') }}" class="btn btn-block">ADD TO
                            CART<br></a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricingTable yellow">
                    <div class="pricingTable-header">
                        <h3>alchemists</h3>
                    </div>
                    <div class="pricing-plans"><span class="price-value"><span>2490K</span></span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                        </ul>
                    </div>
                    <div class="pricingTable-sign-up"><a href="{{ route('checkout') }}" class="btn btn-block">ADD TO
                            CART<br></a></div>
                </div>
            </div>
        </div>
    </div>
@endsection