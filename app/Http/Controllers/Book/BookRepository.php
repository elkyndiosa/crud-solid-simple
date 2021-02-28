<?php
namespace App\Http\Controllers\Book;

use App\Contracts\RepositoryInterface;
use App\Models\Book;

class BookRepository implements RepositoryInterface
{

    public function getAll()
    {
        return Book::all();
    }

    public function find($uuid)
    {
        return Book::findByUuid($uuid);
    }

    public function create($request)
    {
        $params = $this->params($request);
        return Book::create($params);
    }

    public function update($request, $uuid)
    {
        $params = $this->params($request);
        $book = Book::findByUuid($uuid)
            ->first()
            ->update($params);
        return $book;
    }

    public function delete($uuid)
    {
        return Book::destroy($uuid);
    }

    private function params($request)
    {
        return [
            'user_id' => $request->user_id,
            'title' => $request->title,
            'editorial' => $request->editorial,
            'year' => $request->year,
            'number' => $request->number
        ];
    }

}
