<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeachers;
use App\Repository\TeacherRepositoryInterface;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    protected $Teacher;

    public function __construct(TeacherRepositoryInterface $Teacher)
    {
        $this->Teacher = $Teacher;
    }

    function index() {
        $Teachers = $this->Teacher->getAllTeachers();
        return view("pages.Teachers", compact('Teachers'));


    }
    public function store(StoreTeachers $request)
    {
        return $this->Teacher->StoreTeachers($request);
    }
    public function create()
    {
        $specializations = $this->Teacher->Getspecialization();
        $genders = $this->Teacher->GetGender();
        return view('pages.createTeachers', compact('specializations', 'genders'));
    }
    public function edit($id)
    {
        $Teachers = $this->Teacher->editTeachers($id);
        $specializations = $this->Teacher->Getspecialization();
        $genders = $this->Teacher->GetGender();
        return view('pages.EditTeachers', compact('Teachers', 'specializations', 'genders'));
    }

    public function update(Request $request)
    {
        return $this->Teacher->UpdateTeachers($request);
    }
    public function destroy(Request $request)
    {
        
        return $this->Teacher->DeleteTeachers($request);
    }
}
