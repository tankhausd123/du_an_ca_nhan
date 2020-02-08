<?php

namespace App\Http\Controllers;

use App\Http\Service\Implement\PostServiceImplement;
use App\Http\Service\Implement\UserServiceImplement;
use App\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $UserServiceImplement;
    protected $PostServiceImplement;

    public function __construct(UserServiceImplement $UserServiceImplement,
                                PostServiceImplement $PostServiceImplement)
    {
        $this->UserServiceImplement = $UserServiceImplement;
        $this->PostServiceImplement = $PostServiceImplement;
    }

    function home()
    {
        $listUser = $this->UserServiceImplement->getAll();
        return view('home', compact('listUser'));
    }

    function create()
    {
        return view('user.create');
    }

    function store(Request $request)
    {
        $this->UserServiceImplement->create($request);
        return redirect()->route('home');
    }

    function edit($id)
    {
        $user = $this->UserServiceImplement->findById($id);
        return view('user.edit', compact('user'));
    }

    function update(Request $request, $id)
    {
        $this->UserServiceImplement->update($request, $id);
        return redirect()->route('home');
    }

    function delete($id)
    {
        $user = $this->UserServiceImplement->findById($id);
        $this->UserServiceImplement->delete($user);
        return redirect()->route('home');
    }

    function info($id)
    {
        $user = $this->UserServiceImplement->findById($id);
        $posts = Post::where('user_id', $user->id)->get();
        return view('user.info', compact('user', 'posts'));
    }
}
