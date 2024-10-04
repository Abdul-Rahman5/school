<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGrades;
use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Http\Request ;
use Yoeunes\Toastr\Toastr ;

class GradeController extends Controller
{

    public function index()
    {
        $Grades = Grade::all();
        return view("pages.Grades",compact("Grades"));
    }

    public function store(StoreGrades $request)
    {
        try {
            $validated = $request->validated();
            $Grade = new Grade();
            $Grade->Name = ['en' => $request->Name_en, 'ar' => $request->Name];
            $Grade->Notes = $request->Notes;
            $Grade->save();
            toastr()->error(trans('messages.success'));
     
            return redirect(url("grade"));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }
    public function update(StoreGrades $request)
    {
        try {

            $validated = $request->validated();
            $Grades = Grade::findOrFail($request->id);
            $Grades->update([
                $Grades->Name = ['ar' => $request->Name, 'en' => $request->Name_en],
                $Grades->Notes = $request->Notes,
            ]);
            toastr()->success(trans('messages.Update'));
      return redirect(url("grade"));

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function delete(Request $request)
    {

        $MyClass_id = Classroom::where('Grade_id', $request->id)->pluck('Grade_id');

        if ($MyClass_id->count() == 0) {

            $Grades = Grade::findOrFail($request->id)->delete();
            toastr()->error(trans('messages.Delete'));
             return redirect(url("grade"));
        } else {
            toastr()->error(trans('Grades_trans.delete_Grade_Error'));
             return redirect(url("grade"));
        }
    }


}
