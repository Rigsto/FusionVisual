@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Edit User</h1>
            </div>
            <div class="card body">
                <div class="col-md-12" style="margin-top: 1em;">
                    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['Admin\UserController@update', $user->id]]) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Full Name') !!}
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Full Name..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'E-mail Address') !!}
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'E-mail Address...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Password ') !!}
                        {!! Form::password('password', ['class'=>'form-control',  'placeholder'=>'Password...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password2', 'Re-type Password ') !!}
                        {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Re-type Password...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('roles', 'User Role') !!}
                        {!! Form::select('role', $roles, $user->role->nama, ['class'=>'custom-select']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection