@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 style="color: red">Edit User</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('user.update', $user->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" class="form-control" placeholder="Enter Username" name="name" value="{{$user->name}}">
                                <label>Email:</label>
                                <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{$user->email}}">
                                <label>Password:</label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{$user->password}}">
                            </div>
                            <button type="button" onclick="window.history.go(-1)" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-success">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

