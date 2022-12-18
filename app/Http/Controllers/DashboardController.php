<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Users;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view ('student.dashboard');
    }

    public function class(){
        return view ('classes.class');
    }

    public function course(){
        return view ('course.course');
    }

    public function professor(){
        return view ('professor.professor');
    }


    // this is for pagination for Studentlist in Student navigation
    public function student(){
    
         $data = Student::paginate(10);

         return view ('student.student',['students'=>$data]);
    
    }

    public function grading(){
        return view('grading.grading');
    }

    public function setting(){
        return view('setting.setting');
    }

    public function tvlGrading(){
        return view ('grading.tvl');
    }

    public function acadGrading(){
        return view ('grading.acad');
    }

    public function coreGrading(){
        return view ('grading.core');
    }


    public function studnum(){
        
        $student = Student::all();
        $professor = Professor::all();
        $subject = Subject::all();
        return view('student.dashboard',['students'=>$student],['prof'=>$professor] + ['subj'=>$subject]);
    }

}
