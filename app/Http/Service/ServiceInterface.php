<?php


namespace App\Http\Service;


interface ServiceInterface
{
    function getAll();
    function create($request);
    function findById($id);
    function update($request, $id);
    function delete($object);
    function findByName($keyword);
}
