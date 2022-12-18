<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[StudentsController::class,'index'])->middleware('auth');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login/process',[UserController::class,'process']);
Route::get('/register',[UserController::class,'register']);
Route::post('/store',[UserController::class,'store']);
Route::post('/logout',[UserController::class,'logout']);

// this route is for navbar links
Route::get('/Dashboard',[DashboardController::class,'dashboard']);
Route::get('/Class',[DashboardController::class,'class']);
Route::get('/Course',[DashboardController::class,'course']);
Route::get('/Professor',[DashboardController::class,'professor']);
Route::get('/Student',[DashboardController::class,'student']);
Route::get('/Grading',[DashboardController::class,'grading']);
Route::get('/Setting',[DashboardController::class,'setting']);
Route::get('/tvl',[DashboardController::class,'tvlGrading']);
Route::get('/acad',[DashboardController::class,'acadGrading']);
Route::get('/core',[DashboardController::class,'coreGrading']);

/*************************************** Route for Create and Display Function for Class  ************************************/
Route::get('/add/student',[StudentsController::class,'create']);


/*************************************** Route for Create and Display Function for Professor  ************************************/
Route::get('/Professor',[ProfessorController::class,'list']);
Route::post('/Professor/create',[ProfessorController::class,'create']);

/*************************************** Route for Create and Display Function for Student  ************************************/



// ****************************************** This Route for Subject

Route::controller(SubjectController::class)->group(function () {
   Route::get('/Course','list');
   Route::post('/Course/add','create');   
   Route::get('/course/{id}','show'); 
   Route::put('/course/{id}','update');
});

Route::controller(ClassController::class)->group(function(){
    Route::get('/class/{id}','show');
    Route::put('/class/{id}','update');
    Route::post('/store-class','create');
    Route::post('/filterdata/','filtercreate');
    Route::get('/Class/','classResult');
    Route::get('/filterdata','filterdata');
    Route::get('/store-class','showClass');
    Route::get('/filterdata/{id}','test');
    Route::get('/filterdatas/','getStudent');
    Route::post('filterdata/','filtercreate');
});

Route::controller(ProfessorController::class)->group(function(){
    Route::get('/prof/{id}','show');
    Route::put('/professor/{id}','update');
});



Route::controller(StudentsController::class)->group(function(){


    // this route for creating students
    Route::post('/Student/create','create');

    // this route for update students
    Route::put('/student/{id}','update');

    // this route for student id to show for updates.
    Route::get('/stud/{id}','show');

    // this route to display list of students
    Route::get('/studentlist','studlist');

});

Route::controller(DashboardController::class)->group(function(){

    Route::get('/Dashboard','studnum');
});

Route::controller(SectionController::class)->group(function(){

    Route::get('/filterdata','class_list');
    
});

Route::controller(GradingController::class)->group(function(){

    Route::get('/grading.tvl','grading_list');
    // Route::get('/editTvl','tvledit');
    Route::get('/editTvl/{id}','findStudent');
   // Route::put('/editTvl/{id}','updateScores');
    Route::put('/editTvl/{id}','updateScores');
});

