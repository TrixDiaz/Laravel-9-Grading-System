<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function list(){
        $data = array('subject'=> DB::table('subjects')->orderBy('created_at','asc')->paginate(10));
        return view ('course.course',$data);
    }

    public function create(Request $request){

        // dd($request);

        $validated = $request->validate([
            "subj_name"=>['required'],
            "subj_code"=>['required'],
            "subj_unit"=>['required']
        ]);

        $prof = Subject::create($validated);

        return redirect('/Course')->with('message','Successfully Created');
    }

    public function show($id){
        $data = Subject::findorFail($id);
        // dd($data);
        return view('course.courseEdit',['course' => $data]);
    }

    public function update(Request $req, Subject $subject){
        $subject=Subject::find($req->id);
        $subject->subj_name=$req->subj_name;
        $subject->subj_code=$req->subj_code;
        $subject->subj_unit=$req->subj_unit;
        $subject->save();

         return redirect('/Course')->with('message','Successfully Created');

    }
}
