<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizzeController;
use App\Http\Livewire\AddParent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\FeesInvoicesController;
use App\Http\Controllers\GraduatedController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\OnlineClasseController;
use App\Http\Controllers\ProcessingFeeController;
use App\Http\Controllers\promotionController;
use App\Http\Controllers\ReceiptStudentsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubjectController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
    return view('auth.selection');
});
});
// Route::middleware('guest')->group(function () {
//     Route::get('/login/{type}', [LoginController::class, 'loginform']);
//     Route::get('/login', [LoginController::class, 'login']); 

// });
Route::get('/login/{type}', [LoginController::class, 'loginform']);
Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout/{type}', [LoginController::class, 'logout']);
Route::get('/logout/{type}', [LoginController::class, 'logout']);



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']
    ],
    function () {

        // Route::get('/', function () {
        //     return view('dashboard');
        // });
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');


        // Route::resource('Grades', 'GradeController');
        // Route::get('Grades', [GradeController::class,'index'])->name('Grades');
// Route::delete('deleteProduct/{id}', [AdminController::class, 'delete']);
            // Grades
        Route::get("grade",[GradeController::class,"index"])->name('grades');
        Route::post("store",[GradeController::class,"store"])->name('store');
        Route::put("update",[GradeController::class,"update"])->name('update');
        Route::delete("delete",[GradeController::class, "delete"])->name('delete');
            // Classrooms
        Route::get("Classrooms",[ClassroomController::class,"index"])->name('Classrooms');
        Route::get("deleteAll",[ClassroomController::class, "deleteAll"])->name('deleteAll');
        Route::post("storeClassrooms",[ClassroomController::class,"storeClassrooms"])->name('storeClassrooms');
        Route::get("fillterClasses",[ClassroomController::class,"fillterClasses"])->name('fillterClasses');
        Route::put("updateClassrooms",[ClassroomController::class,"updateClassrooms"])->name('updateClassrooms');
        Route::delete("deleteClassrooms",[ClassroomController::class, "deleteClassrooms"])->name('deleteClassrooms');
            //-------------------------------------- Sction----------------------
        Route::get("sections",[SectionController::class,"index"])->name('sections');
        Route::get("classes/{id}",[SectionController::class, "getClasses"])->name('getClasses');
        Route::post("storeSction",[SectionController::class, "storeSction"])->name('storeSction');
        Route::put("editSction",[SectionController::class, "editSction"])->name('editSction');
        Route::delete("deleteSction",[SectionController::class, "deleteSction"])->name('deleteSction');
        //--------------------add_parent-------------------
        Route::get('add_parent', function () {
            return view('livewire.show_Form');
        });

        // Route::get("add_parent", [AddParent::class, "show_Form"])->name('show_Form');
        //--------------------Teachers-------------------
        Route::get("Teachers", [TeacherController::class, "index"])->name('Teachers');
        Route::get("CreateTeachers", [TeacherController::class, "create"])->name('CreateTeachers');
        Route::post("storeTeachers", [TeacherController::class, "store"])->name('storeTeachers');
        Route::get("editTeachers/{id}", [TeacherController::class, "edit"])->name('editTeachers');
        Route::put("updateTeachers", [TeacherController::class, "update"])->name('updateTeachers');
        Route::delete("destroyTeachers", [TeacherController::class, "destroy"])->name('destroyTeachers');

        //--------------------Students-------------------student
        // Route::get("student",[StudentController::class,"create"])->name("student");
        Route::get("student", [StudentController::class, "create"])->name('student');
        Route::get("Get_classrooms/{id}", [StudentController::class, "Get_classrooms"])->name('Get_classrooms');
        Route::get("Get_Section/{id}", [StudentController::class, "Get_Section"])->name('Get_Section');
        Route::post("storStudend", [StudentController::class, "store"])->name('storStudend');
        Route::get("viewStudent", [StudentController::class, "index"])->name('viewStudent');
        Route::get("editStudents/{id}", [StudentController::class, "edit"])->name('editStudents');
        Route::put("updateStudents", [StudentController::class, "update"])->name('updateStudents');
        Route::delete("deleteStudent", [StudentController::class, "destroy"])->name('deleteStudent');
        //Show
        Route::get("ShowStudents/{id}", [StudentController::class, "Show"])->name('ShowStudents');
       //Upload_attachment
        Route::post("Upload_attachment", [StudentController::class, "Upload_attachment"])->name('Upload_attachment');
        //Download_attachment
        Route::get("Download_attachment/{studentName}/{fileName}", [StudentController::class, "Download_attachment"])->name('Download_attachment');
        //Delete_attachment
        Route::post("Delete_attachment", [StudentController::class, "Delete_attachment"])->name('Delete_attachment');
        //promotion
        Route::get("promotion", [promotionController::class, "index"])->name('promotion');
        Route::post("storpromotion", [promotionController::class, "store"])->name('storpromotion');
        Route::get("promotionCreate", [promotionController::class, "create"])->name('promotionCreate');
        Route::delete("promotionDelete", [promotionController::class, "destroy"])->name('promotionDelete');
        //Graduated
        Route::get("Graduated", [GraduatedController::class, "index"])->name('Graduated');
        Route::get("GraduatedCreate", [GraduatedController::class, "create"])->name('GraduatedCreate');
        Route::post("Graduatedstor", [GraduatedController::class, "SoftDelete"])->name('Graduatedstor');
        Route::put("GraduatedUpdate", [GraduatedController::class, "ReturnData"])->name('GraduatedUpdate');
        Route::delete("GraduatedDelete", [GraduatedController::class, "destroy"])->name('GraduatedDelete');

        //Fees
        Route::get("fee", [FeeController::class, "index"])->name('fee');
        Route::get("feeCreate", [FeeController::class, "create"])->name('feeCreate');
        Route::post("feeStor", [FeeController::class, "store"])->name('feeStor');
        Route::get("feeEdit/{id}", [FeeController::class, "edit"])->name('feeEdit');
        Route::put("feeUpdate", [FeeController::class, "update"])->name('feeUpdate');
        Route::delete("feeDelete", [FeeController::class, "destroy"])->name('feeDelete');

        //Fees invoices
        Route::get("feeInvoices", [FeesInvoicesController::class, "index"])->name('feeInvoices');
        Route::get("feeInvoicesshow/{id}", [FeesInvoicesController::class, "show"])->name('feeInvoicesshow');
        // Route::get("feeCreate", [FeesInvoicesController::class, "create"])->name('feeCreate');
        Route::post("feeInvoicesStor", [FeesInvoicesController::class, "store"])->name('feeInvoicesStor');
        Route::get("feeInvoicesEdit/{id}", [FeesInvoicesController::class, "edit"])->name('feeInvoicesEdit');
        Route::put("feeInvoicesUpdate", [FeesInvoicesController::class, "update"])->name('feeInvoicesUpdate');
        Route::delete("feeInvoicesDelete", [FeesInvoicesController::class, "destroy"])->name('feeInvoicesDelete');
        //receipt_student
        Route::get("receiptStudent", [ReceiptStudentsController::class, "index"]);
        Route::get("receiptStudentShow/{id}", [ReceiptStudentsController::class, "show"]);
        Route::post("receiptStudentStore", [ReceiptStudentsController::class, "store"]);
        Route::get("receiptStudentEdit/{id}", [ReceiptStudentsController::class, "edit"]);
        Route::put("receiptStudentUpdate", [ReceiptStudentsController::class, "update"]);
        Route::delete("receiptStudentDelete", [ReceiptStudentsController::class, "destroy"]);


        //receipt_student
        Route::get("ProcessingFee", [ProcessingFeeController::class, "index"]);
        Route::get("ProcessingFeeShow/{id}", [ProcessingFeeController::class, "show"]);
        Route::post("ProcessingFeetStore", [ProcessingFeeController::class, "store"]);
        Route::get("ProcessingFeetEdit/{id}", [ProcessingFeeController::class, "edit"]);
        Route::put("ProcessingFeetUpdate", [ProcessingFeeController::class, "update"]);
        Route::delete("ProcessingFeetDelete", [ProcessingFeeController::class, "destroy"]);

        //Payment
        Route::get("Payment", [PaymentController::class, "index"]);
        Route::get("PaymentShow/{id}", [PaymentController::class, "show"]);
        Route::post("PaymenttStore", [PaymentController::class, "store"]);
        Route::get("PaymenttEdit/{id}", [PaymentController::class, "edit"]);
        Route::put("PaymenttUpdate", [PaymentController::class, "update"]);
        Route::delete("PaymenttDelete", [PaymentController::class, "destroy"]);

        //Attendance
        Route::get("Attendance", [ AttendanceController::class, "index"]);
        Route::get("AttendanceShow/{id}", [AttendanceController::class, "show"]);
        Route::post("AttendancetStore", [ AttendanceController::class, "store"]);
        //Subject
        Route::get("Subject", [ SubjectController::class, "index"]);
        Route::get("SubjectCreate", [ SubjectController::class, "create"]);
        Route::post("SubjecttStore", [ SubjectController::class, "store"]);

        Route::get("SubjectEdit/{id}", [SubjectController::class, "edit"]);
        Route::patch("SubjectUpdate", [SubjectController::class, "update"]);
        Route::delete("SubjectDelete", [SubjectController::class, "destroy"]);
        //Quizze
        Route::get("Quizzes", [ QuizzeController::class, "index"]);
        Route::get("QuizzeCreate", [ QuizzeController::class, "create"]);
        Route::post("QuizzeStore", [ QuizzeController::class, "store"]);

        Route::get("QuizzeEdit/{id}", [QuizzeController::class, "edit"]);
        Route::put("QuizzetUpdate", [QuizzeController::class, "update"]);
        Route::delete("QuizzeDelete", [QuizzeController::class, "destroy"]);
        // Question
        Route::get("Questions", [QuestionController::class, "index"]);
        Route::get("QuestionCreate", [QuestionController::class, "create"]);
        Route::post("QuestionsStore", [QuestionController::class, "store"]);
        Route::get("QuestionEdit/{id}", [QuestionController::class, "edit"]);
        Route::put("QuestiontUpdate", [QuestionController::class, "update"]);
        Route::delete("QuestionDelete", [QuestionController::class, "destroy"]);

        // OnlineClasses
        Route::get("OnlineClasses", [OnlineClasseController::class, "index"]);
        Route::get("OnlineClassesCreate", [OnlineClasseController::class, "create"]);
        Route::post("OnlineClassesStore", [OnlineClasseController::class, "store"]);
        Route::delete("OnlineClassesDelete", [OnlineClasseController::class, "destroy"]);

        // OnlineClasses
        Route::get("library", [LibraryController::class, "index"]);
        Route::get("NewBook", [LibraryController::class, "create"]);
        Route::post("storeBook", [LibraryController::class, "store"]);


        // Settings
        Route::get("setting", [SettingController::class, "index"]);
       Route::post("update", [SettingController::class, "update"]);





    }

);





// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
