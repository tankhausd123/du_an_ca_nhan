@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 style="color: red">Edit Post</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title: </label>
                                <input type="text" class="form-control" placeholder="Enter Title" name="title"
                                       value="{{$post->Title}}">
                                <label>Content: </label>
                                <textarea type="text" class="form-control" placeholder="Noi dung bai viet"
                                          name="content" style="height:300px; resize: none">{{$post->content}}
                                </textarea>
                            </div>
                            <button type="button" onclick="window.history.go(-1)" class="btn btn-secondary">Cancel
                            </button>
                            <button type="submit" class="btn btn-success">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


