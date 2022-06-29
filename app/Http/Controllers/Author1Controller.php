<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response; 
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\Author1Service;

Class Author1Controller extends Controller {
    use ApiResponser;

    public $author1Service;

    public function __construct(Author1Service $author1Service)
    {
        $this->author1Service = $author1Service;
    }

    public function index()
    { 
        return $this->successResponse($this->author1Service->obtainAuthors1()); 
    }
 
    public function add(Request $request )
    {
        return $this->successResponse($this->author1Service->createAuthor1($request->all(), Response::HTTP_CREATED));
    }

    public function show($id)
    {
        return $this->successResponse($this->author1Service->obtainAuthor1($id));
    }

    public function update(Request $request,$id)
    {
        return $this->successResponse($this->author1Service->editAuthor1($request->all(), $id));
    }

    public function delete($id)
    {
        return $this->successResponse($this->author1Service->deleteAuthor1($id));
    }
}