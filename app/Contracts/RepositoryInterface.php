<?php

namespace App\Contracts;

interface RepositoryInterface
{
    public function getAll();

    public function find($id);

    public function create($request);

    public function update($request, $id);

    public function delete($id);
}