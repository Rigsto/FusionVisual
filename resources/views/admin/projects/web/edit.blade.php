@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Web Project -
                    #WEB{{str_pad($web->id, 4, '0', STR_PAD_LEFT)}}</h1>
            </div>
            <div class="card-body">
                <fieldset>
                    <legend>Project Details</legend>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>ID</h6>
                        </div>
                        <div class="col-md-9">
                            : #WEB{{str_pad($web->id, 4, '0', STR_PAD_LEFT)}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Theme Reference</h6>
                        </div>
                        <div class="col-md-9">
                            : {{$web->themeRef}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Color</h6>
                        </div>
                        <div class="col-md-2"
                             style="background-color: {{$web->color->colorPrimary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$web->color->colorPrimary}}</div>
                        <div class="col-md-2"
                             style="background-color: {{$web->color->colorSecondary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$web->color->colorSecondary}}</div>
                        <div class="col-md-2"
                             style="background-color: {{$web->color->colorTertiary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$web->color->colorTertiary}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Description</h6>
                        </div>
                        <div class="col-md-9">
                            : {{$web->penjelasan}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->status == 0) Idle @elseif($web->status == 1) Ongoing @else Maintenance @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Deadline</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->deadline == null) - @else {{\Carbon\Carbon::parse($web->deadline)->format('d F Y')}} @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Hosting</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->hosting_id == null) - @else #HOS{{str_pad($web->hosting_id, 3, '0', STR_PAD_LEFT)}} @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Domain</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->domain_id == null) - @else #DOM{{str_pad($web->domain_id, 3, '0', STR_PAD_LEFT)}} @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>ZIP Data</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->zipData == null) -
                            @else
                                {{$web->zipData}}
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('web.edit', $web->id) }}" class="btn btn-primary">Edit Project</a>
                            @if($web->zipData != null)
                                <a href="" class="btn btn-success">Download ZIP</a>
                            @endif
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
@endsection