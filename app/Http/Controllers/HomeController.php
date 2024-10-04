<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\fee_invoice;
use App\Models\My_Parent;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $data['Students']=Student::count();
        $data['StudentsTable']=Student::latest()->take(5)->get();
        $data['teachers']=Teacher::count();
        $data['TeacherTable']=Teacher::latest()->take(5)->get();
        $data['Parents']=My_Parent::count();
        $data['ParentsTable']=My_Parent::latest()->take(5)->get();
        $data['Classrooms']=Classroom::count();
        $data['fee_invoiceTable']=fee_invoice::latest()->take(5)->get();

        return view('dashboard',compact('data'));
    }
    public function index()
    {
        return view('auth.selection');
    }
}
