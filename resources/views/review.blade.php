@extends('layout.pages')
@section('content')
    <section id="head" class="revtitlebg">
        <div class="container reviewtitle">
            <h2>REVIEW AND TESTIMONIAL</h2>
        </div>
    </section>
    <section id="review">
        <div class="container" id="headofcom">
            <h3>Review and testimonial from xxx customers of Fusions Visual.</h3>
            <h1 class="say">What They Say?</h1>
        </div>
        <div class="container comsec">
            <div class="row who">
                <div class="col-md-12">
                    <p class="posted"><span>Nakano Itsuki</span>&nbsp;commented on 11 Mar. 2019 :</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"><img class="rounded-circle img-fluid" src="assets/img/cover.jpg" width="150"></div>
                <div class="col-md-8 contentcom">
                    <p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.<br></p>
                    <p><strong>Saya sangat puas dengan layanan Fusions Visual.</strong></p>
                    <p><strong>Nakano Itsuki</strong>&nbsp;- Company Name<br></p>
                </div>
            </div>
        </div>
        <div class="container comsec2">
            <nav class="pagi">
{{--                paginationhere--}}
            </nav>
        </div>
    </section>
    <section id="review-form">
        @include('inc.review-form')
    </section>
@endsection