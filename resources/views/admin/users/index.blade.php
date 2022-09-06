@extends('layouts.admin-layout.app')
@section('title', 'All Users')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered border-primary table-centered mb-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)   
                    <tr>
                        <td class="table-user">
                           <h5>{{$user->id}}</h5>
                        </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="table-action text-center">
                            {{-- <form action="">
                                <a href="" class="action-icon text-danger"> <i class="mdi mdi-delete"></i></a>
                            </form> --}}
                           <a href="{{route('users.show', $user->id)}}" class="btn btn-primary"><i class="dripicons-preview"></i></a>
                           @if ($user->is_active == 1) 
                                <a href="{{route('user.change_status', $user->id)}}" class="btn btn-success">Block</a>
                            @else
                                <a href="{{route('user.change_status', $user->id)}}" class="btn btn-danger">Unblock</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection