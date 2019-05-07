@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">User List</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($users)
                            @foreach($users as $user)
                        <tr>
                            <td><a href="">{{$user->name}}</a></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->telepon}}</td>
                            <td>{{$user->alamat}}</td>
                            <td>{{ucwords($user->role->nama)}}</td>
                            <td>{{$user->active == 1 ? 'Active' : 'Pending'}}</td>
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