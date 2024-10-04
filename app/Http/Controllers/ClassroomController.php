<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassroom;
use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    function index()
    {
        $myClass = Classroom::all();
        $Grades = Grade::all();
        return view("pages.My_Classes", compact("myClass", "Grades"));
    }
    function storeClassrooms(StoreClassroom $request)
    {

        $validated = $request->validated();

        try {
            $List_Classes = $request->List_Classes;
            foreach ($List_Classes as $List_Class) {

                $My_Classes = new Classroom();

                $My_Classes->Name_Class = ['en' => $List_Class['Name_class_en'], 'ar' => $List_Class['Name']];

                $My_Classes->Grade_id = $List_Class['Grade_id'];

                $My_Classes->save();
            }


            toastr()->error(trans('messages.success'));
            return redirect(url('Classrooms'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }
    function updateClassrooms(Request $request)
    {

        try {

            $Classrooms = Classroom::findOrFail($request->id);

            $Classrooms->update([

                $Classrooms->Name_Class = ['ar' => $request->Name, 'en' => $request->Name_en],
                $Classrooms->Grade_id = $request->Grade_id,
            ]);
            toastr()->error(trans('messages.Update'));
            return redirect(url('Classrooms'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function deleteClassrooms(Request $request)
    {

        $Classrooms = Classroom::findOrFail($request->id)->delete();
      
        toastr()->error(trans('messages.Delete'));
        return redirect(url('Classrooms'));
    }
    public function deleteAll(Request $request)
    {

        $delete_all_id = explode(",", $request->delete_all_id);

        Classroom::whereIn('id', $delete_all_id)->Delete();
        toastr()->error(trans('messages.Delete'));
        return redirect(url('Classrooms'));
    }
    public function fillterClasses(Request $request)
    {
        $Grades = Grade::all();
        $My_Classes = Classroom::all();
        $Search = Classroom::select('*')->where('Grade_id', '=', $request->Grade_id)->get();
        toastr()->error(trans('messages.Delete'));
        return view('pages.My_Classes', compact('Grades', 'Search', 'My_Classes'));
    }

}
