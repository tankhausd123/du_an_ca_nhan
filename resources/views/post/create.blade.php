@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 style="color: red">Create Post</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('post.store', $user->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title: </label>
                                <input type="text" class="form-control" placeholder="Enter Title" name="title">
                                <label>Content: </label>
                                <textarea type="text" class="form-control" placeholder="Noi dung bai viet" name="contents" style="height:300px; resize: none" ></textarea>
                            </div>
                            <button type="button" onclick="window.history.go(-1)" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-success">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

