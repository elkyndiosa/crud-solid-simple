<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Book\BookRepository;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Book\Requests\BookPostRequest;
class BookController extends Controller
{

    protected $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function index()
    {
        return $this->bookRepository->getAll();
    }

    public function store(BookPostRequest $request)
    {
        return $this->bookRepository->create($request);
    }

    public function show(Book $book)
    {
        return $this->bookRepository->find($book->uuid);
    }

    public function update(BookPostRequest $request, Book $book)
    {
        return $this->bookRepository->update($request, $book->id);
    }

    public function destroy(Book $book)
    {
        return $book->delete();
    }
}
