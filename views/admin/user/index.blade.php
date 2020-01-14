@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb bg-white" >
            <li class="col-11 breadcrumb-item active " aria-current="page">Users</li>
            <button type="button" class="col btn btn-primary btn-sm" style="margin: 0 auto">Add User</button>
        </ol>
    </nav>
    <table class="table bg-white">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td class="text-center">{{$loop->iteration}}</td>
                <td>{{$user->first_name . ' ' . $user->last_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->status ? 'Active' : 'Disabled'}}</td>
                <td class="td-actions text-right">
                    <a href="/user/status/{{$user->id}}" rel="tooltip" class="btn {{$user->status ? 'btn-info' : 'btn-default' }}">
                        <i class="material-icons">person</i>
                    </a>
                    <button type="button" rel="tooltip" class="btn btn-success">
                        <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" class="btn btn-danger">
                        <i class="material-icons">close</i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection