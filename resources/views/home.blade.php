@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="get" action="{{route('user.search')}}">
                    @csrf
                    <input placeholder="enter text" name="keyword">
                    <button>
                        search
                    </button>
                </form>
                <a href="{{route('user.create')}}">
                    <button type="button" class="btn btn-success">
                        <i class="fa fa-user-plus"></i>
                    </button>
                </a>
                <a href="{{route('post.create', Auth::user()->id)}}">
                    <button type="button" class="btn btn-outline-primary">
                        <i class="fa fa-plus"></i> New Post
                    </button>
                </a>
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Control</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listUser as $key=>$listUsers)
                        <tr>
                            <th>{{$listUsers->id}}</th>
                            <td>{{$listUsers->name}}</td>
                            <td>{{$listUsers->email}}</td>
                            <td>
                                <a href="{{route('user.info', $listUsers->id)}}">
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-info-circle"></i>
                                    </button>
                                </a>
                                <a href="{{route('user.edit', $listUsers->id)}}">
                                    <button type="button" class="btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>
                                <a href="{{route('user.delete', $listUsers->id)}}"
                                   onclick=" return(confirm('Xoa khong babie???'))">
                                    <button type="button" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
