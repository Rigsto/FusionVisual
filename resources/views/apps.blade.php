@extends('layout.pages')
@section('content')
    <div class="container webprice">
        <h1 class="text-center bus">Company Profile Packages</h1>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="pricingTable purple">
                    <div class="pricingTable-header">
                        <h3>Amoeba</h3><span>Lorem Ipsum</span></div>
                    <div class="pricing-plans"><span class="price-value"><i class="fa fa-usd"></i><span>10 </span></span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                        </ul>
                    </div>
                    <div class="pricingTable-sign-up"><a href="{{ route('checkout') }}" class="btn btn-block">Add To
                            Cart</a></div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="pricingTable green">
                    <div class="pricingTable-header">
                        <h3>sparrow</h3><span>Lorem Ipsum</span></div>
                    <div class="pricing-plans"><span class="price-value"><i class="fa fa-usd"></i><span>10 </span></span>
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
            <div class="col-sm-4 col-md-4">
                <div class="pricingTable yellow">
                    <div class="pricingTable-header">
                        <h3>crow</h3><span>Lorem Ipsum</span></div>
                    <div class="pricing-plans"><span class="price-value"><i class="fa fa-usd"></i><span>10 </span></span>
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
        <div class="row bus">
            <div class="col-sm-4 col-md-4">
                <div class="pricingTable purple">
                    <div class="pricingTable-header">
                        <h3>croccodile</h3><span>Lorem Ipsum</span></div>
                    <div class="pricing-plans"><span class="price-value"><i class="fa fa-usd"></i><span>10 </span></span>
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
            <div class="col-sm-4 col-md-4">
                <div class="pricingTable green">
                    <div class="pricingTable-header">
                        <h3>leopard</h3><span>Lorem Ipsum</span></div>
                    <div class="pricing-plans"><span class="price-value"><i class="fa fa-usd"></i><span>10 </span></span>
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
            <div class="col-sm-4 col-md-4">
                <div class="pricingTable yellow">
                    <div class="pricingTable-header">
                        <h3>elepahant</h3><span>Lorem Ipsum</span></div>
                    <div class="pricing-plans"><span class="price-value"><i class="fa fa-usd"></i><span>10 </span></span>
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