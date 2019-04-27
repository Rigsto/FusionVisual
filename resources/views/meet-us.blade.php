@extends('layout.pages')
@section('content')
    <section id="met">
        <div class="container meetform">
            <div class="row no-gutters">
                <div class="col-md-6"><img class="img-fluid" src="assets/img/aaa.png" width="100">
                    <h4 class="consult">Fusions Visual Digital Studio</h4>
                    <h4 class="consult"></h4>
                    <h2 class="consulth2">30 Minute Meeting</h2>
                    <hr class="separate">
                    <h5 class="consult"><i class="far fa-clock"></i>&nbsp; 30 min</h5>
                    <h5 class="consult"><i class="fas fa-globe-americas"></i>&nbsp; Western Indonesian Time (WIB)</h5>
                </div>
                <div class="col-md-6">
                    <h2 class="formtitle">Enter Details</h2>
                    <form><label>Choose time of Meeting *</label>
                        <div class="form-row ex">
                            <div class="col-md-4"><label>Month</label><input class="form-control" type="text" value="March" readonly="" required=""></div>
                            <div class="col-md-4"><label>Date *</label><select class="custom-select" required=""><optgroup label="Choose Date"><option value="" selected="">----</option><option value="">11 March 2019</option><option value="">12 March 2019</option><option value="">13 March 2019</option></optgroup></select></div>
                            <div
                                class="col-md-4"><label>Time *</label><select class="custom-select" required=""><optgroup label="Choose Time"><option value="" selected="">----</option><option value="">13:00</option><option value="">13:30</option><option value="">14:00</option></optgroup></select></div>
                </div>
                <div class="form-row">
                    <div class="col-md-12"><label>Method of Meeting *</label><select class="custom-select" required=""><option value="" selected="">----</option><option value="">Online</option><option value="">Offline</option></select></div>
                </div>
                <div class="form-row">
                    <div class="col-md-6"><label>First Name *</label><input class="form-control" type="text" required="" placeholder="First Name..."></div>
                    <div class="col-md-6"><label>Last Name</label><input class="form-control" type="text" placeholder="Last Name..."></div>
                </div>
                <div class="form-row">
                    <div class="col-md-12"><label>Your e-mail address *</label><input class="form-control" type="email" required="" placeholder="e-mail address..."></div>
                </div>
                <div class="form-row">
                    <div class="col-md-12"><label>Phone Number / Skype ID *</label><input class="form-control" type="text" required="" placeholder="Phone Number / Skype ID"></div>
                </div>
                <div class="form-row">
                    <div class="col-md-12"><label>Prefered Place of Meeting *</label><select class="custom-select" required=""><optgroup label="Meeting Place"><option value="" selected="">----</option><option value="">Starbucks Gwalk Citraland Surabaya</option><option value="">Excelso Gwalk Citralnad Surabaya</option><option value="">Calipto Cafe TPR Citraland</option></optgroup></select></div>
                </div>
                <div class="form-row">
                    <div class="col-md-12"><label>Topic of Discussion *</label>
                        <div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" required="" id="formCheck-1"><label class="custom-control-label" for="formCheck-1">Graphics Design</label></div>
                        <div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" id="formCheck-2"><label class="custom-control-label" for="formCheck-2">Website Development</label></div>
                        <div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" id="formCheck-3"><label class="custom-control-label" for="formCheck-3">Mobile Apps Development</label></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12"><label>Anything else we should know ahead of time?</label><input class="form-control" type="text" placeholder="what's on your mind?"></div>
                </div>
                <div class="form-row">
                    <div class="col-md-12"><button class="btn btn-primary" type="submit">Schedule Meeting</button></div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection