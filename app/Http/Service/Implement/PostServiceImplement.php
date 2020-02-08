<?php


namespace App\Http\Service\Implement;


use App\Http\Repository\Implement\PostRepositoryImplement;
use App\Http\Service\ServiceInterface;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostServiceImplement implements ServiceInterface
{
    protected $postRepositoryImplement;
    public function __construct(PostRepositoryImplement $postRepositoryImplement)
    {
        $this->postRepositoryImplement = $postRepositoryImplement;
    }

    function getAll()
    {
        // TODO: Implement getAll() method.
    }

    function create($request)
    {

    }

    function findById($id)
    {
        return  $this->postRepositoryImplement->findById($id);
    }

    function update($request, $id)
    {
        $post = $this->postRepositoryImplement->findById($id);
        $post->Title = $request->title;
        $post->content = $request->content;
        $this->postRepositoryImplement->save($post);
    }

    function delete($object)
    {
        $this->postRepositoryImplement->delete($object);
    }
}
