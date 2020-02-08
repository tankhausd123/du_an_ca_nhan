<?php

namespace App\Http\Controllers;

use App\Http\Service\Implement\PostServiceImplement;
use App\Http\Service\Implement\UserServiceImplement;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    protected $postServiceImplement;
    protected $userServiceImplement;

    public function __construct(PostServiceImplement $postServiceImplement,
                                UserServiceImplement $userServiceImplement)
    {
        $this->postServiceImplement = $postServiceImplement;
        $this->userServiceImplement = $userServiceImplement;
    }

    function create($id)
    {
        $user = $this->userServiceImplement->findById($id);
        return view('post.create', compact('user'));
    }

    function store(Request $request, $id)
    {
        $newPost = new Post();
        $newPost->Title = $request->title;
        $newPost->content = $request->contents;
        $newPost->user_id = $id;
        $newPost->save();
        return redirect()->route('home');
    }
    function edit($id)
    {
        $post = $this->postServiceImplement->findById($id);
        return view('post.edit', compact('post'));
    }
    function update(Request $request, $id)
    {
        $this->postServiceImplement->update($request, $id);
        return redirect()->route('home');
    }
    function delete($id)
    {
        $post = $this->postServiceImplement->findById($id);
        $this->postServiceImplement->delete($post);
        return redirect()->route('home');
    }
}
