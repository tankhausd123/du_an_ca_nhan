<?php


namespace App\Http\Repository\Implement;


use App\Http\Repository\Eloquent\RepositoryEloquent;
use App\Http\Repository\RepositoryInterface;
use App\Post;

class PostRepositoryImplement extends RepositoryEloquent implements RepositoryInterface
{

    public function getModel()
    {
        return Post::class;
    }
}
