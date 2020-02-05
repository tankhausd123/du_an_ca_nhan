<?php

namespace App\Http\Controllers;

use App\Http\Service\Implement\UserServiceImplement;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $UserServiceImplement;
    public function __construct(UserServiceImplement $UserServiceImplement)
    {
        $this->UserServiceImplement = $UserServiceImplement;
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
}
