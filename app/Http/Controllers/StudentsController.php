<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Fascades\Hash;
use Illuminate\Support\Fascades\View;


class StudentsController extends Controller
{
    public function create(Request $request){
        $validated = $request->validate([
            "student_no"=>['required'],
            "first_name"=>['required'],
            "last_name"=>['required'],
            "age"=>['required'],
            "gender"=>['required'],
            "contact_no"=>['required'],
            "email"=>['required','email',Rule::unique('students','email')]
            
        ]);

        $stud = Student::create($validated);

        return redirect('/Student')->with('message','Successfully Created');
    }

    public function studlist(){

        $data = Student::paginate(15);   
           return view ('student.student',['students'=>$data]);
    }


    public function index(){

       $data = Student::paginate(15);    
    //    $data = Student::table('students')->Paginate(5);
       return view ('student.index',['students'=>$data]);

    //    return view('student.index', [
    //     'Student' =>Student::table('Student')->paginate(15)]);

    }


    public function admin(){

        return view ('admin.index');
    }

    public function show($id){
        $data = Student::findorFail($id);
        // dd($data);
        return view('student.studentEdit',['stud' => $data]);
    }

    public function update(Request $req, Student $student){
        $student=Student::find($req->id);
        $student->student_no=$req->student_no;
        $student->first_name=$req->first_name;
        $student->last_name=$req->last_name;
        $student->age=$req->age;
        $student->gender=$req->gender;
        $student->contact_no=$req->contact_no;
        $student->email=$req->email;
        $student->save();

         return redirect('/Student')->with('message','Successfully Created');

    }


}
    