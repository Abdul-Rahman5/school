<?php

namespace App\Http\Controllers;

use App\Models\library;
use App\Repository\LibraryRepositoryInterface;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
protected $library;
public function __construct(LibraryRepositoryInterface $library)
{
    $this->library =$library;
}
    public function index()
    {
        return $this->library->index();
    }

    public function create()
    {
   return $this->library->create();
    }


    public function store(Request $request)
    {
     return $this->library->store($request);
    }


    public function show(library $library)
    {
        //
    }

    public function edit(library $library)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, library $library)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(library $library)
    {
        //
    }
}
