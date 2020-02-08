@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 style="color: red">Info {{$user->name}}</h1>
                    </div>
                    <div class="card-body">
                        Email:
                        <br>
                        {{$user->email}}
                        <br>
                        <a href="{{route('post.create', $user->id)}}" class="btn btn-primary">Create
                            Post</a>
                        @foreach($posts as $key=>$post)
                            <div class="card">
                                <div class="card-header">
                                    <h3>
                                        {{$post->Title}}
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>
                                        {{$post->content}}
                                    </p>
                                    <a href="{{route('post.edit', $post->id)}}" class="btn btn-warning">Edit Post</a>
                                    <a href="{{route('post.delete', $post->id)}}" class="btn btn-danger" onclick=" return(confirm('Xoa khong babie???'))">Delete
                                        Post</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


