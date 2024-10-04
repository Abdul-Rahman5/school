<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSections;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Teacher;
use App\Models\section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
  {
    $Grades = Grade::with(['Sections'])->get();
    $list_Grades = Grade::all();
    $teachers = Teacher::all();
    return view('pages.Sections',compact('Grades','list_Grades','teachers'));

  }
    public function editSction(StoreSections $request)
    {


        try {
            $validated = $request->validated();
            $Sections = Section::findOrFail($request->id);

            $Sections->Name_Section = ['ar' => $request->Name_Section_Ar, 'en' => $request->Name_Section_En];
            $Sections->Grade_id = $request->Grade_id;
            $Sections->Class_id = $request->Class_id;

            if (isset($request->Status)) {
                $Sections->Status = 1;
            } else {
                $Sections->Status = 2;
            }


            // update pivot tABLE
            if (isset($request->teacher_id)) {
                $Sections->teachers()->sync($request->teacher_id);
            } else {
                $Sections->teachers()->sync(array());
            }


            $Sections->save();
            toastr()->error(trans('messages.Update'));

            return  redirect(url("sections"));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function storeSction(StoreSections $request)
    {

        try {

            $validated = $request->validated();
            $Sections = new section();
            $Sections->Name_Section = ['ar' => $request->Name_Section_Ar, 'en' => $request->Name_Section_En];
            $Sections->Grade_id = $request->Grade_id;
            $Sections->Class_id = $request->Class_id;
            $Sections->Status = 1;
            $Sections->save();
            $Sections->teachers()->attach($request->teacher_id);
            toastr()->error(trans('messages.success'));

            return redirect(url("sections"));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function deleteSction(request $request)
    {

        Section::findOrFail($request->id)->delete();
        toastr()->error(trans('messages.Delete'));

        return redirect(url("sections"));
    }
    public function getClasses($id)
    {
        $list_classes = Classroom::where("Grade_id", $id)->pluck("Name_Class", "id");

        return $list_classes;
    }

}
