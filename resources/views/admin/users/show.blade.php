@extends('layouts.admin-layout.app')
@section('title', 'View User Details')
@section('content')
<div class="row justify-content-center">
    <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
        <div class="card">
            <div class="card-body justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h4 class="text-center">Name: {{$user->name}}</h4>
                        <p class="text-center">Email: <strong>{{$user->email}}</strong></p>
                        <p class="text-center">Role: <strong>{{$user->role->name}}</strong></p>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        @if ($user->is_active == 1) 
                                <a href="{{route('user.change_status', $user->id)}}" class="btn btn-success">Block</a>
                            @else
                                <a href="{{route('user.change_status', $user->id)}}" class="btn btn-danger">Unblock</a>
                        @endif
                        {{-- Change role --}}
                        <!-- Multiple Select -->
                    </div>
                    <div class="col-md-6">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Change Role
                        </button> 
                     <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Role: </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{route('user.change_role', $user->id)}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        {{-- Inside modal --}}
                                        <div class="row justify-content-center">
                                            <div class="col-md-10">
                                                <select name="role_id"  class="form-select mb-3">
                                                    @foreach ($roles as $role)
                                                        <option value="{{$role->id}}"
                                                            @if ($user->role_id == $role->id)
                                                              {
                                                                selected
                                                              }
                                                            @endif
                                                            >{{$role->name}}</option>
                                                    @endforeach
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>
@endsection