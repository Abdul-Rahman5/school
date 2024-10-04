<?php


namespace App\Repository;

use App\Http\Traits\AttachsFileTrait;
use App\Models\Grade;
use App\Models\library;



class LibraryRepository implements LibraryRepositoryInterface
{
    use AttachsFileTrait;

    public function index()
    {
        $books = library::all();

        return view("pages.Library.index");
    }

    public function create()
    {
        $grades = Grade::all();

        return view('pages.Library.create', compact('grades'));
    }

    public function store($request)
    {
        try {

            $books = new library();
            $books->title = $request->title;
            // $books->file_name = $request->file('file_name')->getClientOriginalName();
            $books->Grade_id = $request->Grade_id;
            $books->classroom_id = $request->Classroom_id;
            $books->section_id = $request->section_id;
            $books->teacher_id = 1;
            $books->save();
            $this->uploadFile($request, "file_name");
            toastr()->success(trans('messages.success'));
            return redirect(url("library"));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
