@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">User List</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($users)
                            @foreach($users as $user)
                        <tr class="text-center">
                            <td><img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" height="45"></td>
                            <td><a href="{{route('user.edit', $user->id)}}">{{ucwords($user->name)}}</a></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->telepon}}</td>
                            <td>{{$user->alamat}}</td>
                            <td>{{ucwords($user->role->nama)}}</td>
                            <td>{{$user->active == 1 ? 'Active' : 'Inactive'}}</td>
                            <td>
                                @if($user->active == 1)
                                    <a href="{{route('user.deactivate')}}" class="btn btn-warning btn-circle" title="Deactivate User" onclick="event.preventDefault();
							                                              document.getElementById('deactivate-user').submit();"><i class="fas fa-exclamation-triangle"></i></a>
                                    {!! Form::open(['method'=>'POST', 'action'=> ['Admin\UserController@deactivate', $user->id], 'id' => 'deactivate-user', 'style' => 'display: none;']) !!}
                                    {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                    {!! Form::close() !!}
                                @else
                                    <a href="{{route('user.activate')}}" class="btn btn-success btn-circle" title="Deactivate User" onclick="event.preventDefault();
							                                              document.getElementById('activate-user').submit();"><i class="fas fa-check"></i></a>
                                    {!! Form::open(['method'=>'POST', 'action'=> ['Admin\UserController@activate', $user->id], 'id' => 'activate-user', 'style' => 'display: none;']) !!}
                                    {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                    {!! Form::close() !!}
                                @endif
                                <a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger btn-circle" title="Delete User" onclick="event.preventDefault();
							                                              document.getElementById('delete-user').submit();"><i class="fas fa-trash"></i></a>
                                {!! Form::open(['method'=>'DELETE', 'action'=> ['Admin\UserController@destroy', $user->id], 'id' => 'delete-user', 'style' => 'display: none;']) !!}
                                {{ csrf_field() }}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection