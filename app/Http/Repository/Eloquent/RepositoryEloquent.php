<?php


namespace App\Http\Repository\Eloquent;


use App\Http\Repository\RepositoryInterface;
use phpDocumentor\Reflection\Project;

abstract class RepositoryEloquent implements RepositoryInterface
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }
    public function getAll()
    {
        return $this->model->all();
    }
    public function save($object)
    {
        $object->save();
    }
    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }
    public function delete($object)
    {
        $object->delete();
    }
    public function findByName($keyword)
    {
        return $this->model->where('name', 'LIKE', '%'.$keyword.'%')->get();
    }
}
