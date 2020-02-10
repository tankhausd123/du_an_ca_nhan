<?php


namespace App\Http\Service\Implement;


use App\Http\Repository\Implement\UserRepositoryImplement;
use App\Http\Service\ServiceInterface;
use App\User;

class UserServiceImplement implements ServiceInterface
{
    protected $UserRepositoryImplement;
    public function __construct(UserRepositoryImplement $UserRepositoryImplement)
    {
        $this->UserRepositoryImplement = $UserRepositoryImplement;
    }

    function getAll()
    {
        return $this->UserRepositoryImplement->getAll();
    }

    function create($request)
    {
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = bcrypt("$request->password");
        $this->UserRepositoryImplement->save($newUser);
    }

    function findById($id)
    {
        return $this->UserRepositoryImplement->findById($id);
    }

    function update($request, $id)
    {
        $user = $this->UserRepositoryImplement->findById($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $this->UserRepositoryImplement->save($user);
    }

    function delete($object)
    {
        $this->UserRepositoryImplement->delete($object);
    }

    function findByName($keyword)
    {
       return $this->UserRepositoryImplement->findByName($keyword);
    }
}
