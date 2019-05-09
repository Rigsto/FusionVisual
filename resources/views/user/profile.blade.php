@extends('layout.userMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Edit User</h1>
            </div>
            <div class="card body">
                <div class="col-md-12" style="margin-top: 1em;">
                    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['User\ProfileController@update', $user->id]]) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Full Name') !!}
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Full Name..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'E-mail Address') !!}
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'E-mail Address...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tel', 'Phone Number') !!}
                        {!! Form::text('telepon', null, ['class'=> 'form-control', 'placeholder' =>'Phone Number...']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('ala', 'Address') !!}
                        {!! Form::text('alamat', null, ['class'=> 'form-control', 'placeholder' =>'Address...']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Password ') !!}
                        {!! Form::password('password', ['class'=>'form-control',  'placeholder'=>'Password...'])!!}
                    </div>
                    <div class="form-group">
                        <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
                        {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection