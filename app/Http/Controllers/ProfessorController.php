<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use Illuminate\Validation\Rule;
use Illuminate\Support\Fascades\Hash;
use Illuminate\Support\Fascades\View;


class ProfessorController extends Controller
{
    public function create(Request $request){
        $validated = $request->validate([
            "fname"=>['required'],
            "lname"=>['required'],
            "gender"=>['required'],
            "email"=>['required','email',Rule::unique('professors','email')]
        ]);

        $prof = Professor::create($validated);

        return redirect('/Professor')->with('message','Successfully Created');
    }

    public function list(){

        $data = Professor::paginate(5);
        return view ('professor.professor',['professors'=> $data]);
    }

    public function show($id){
        $data = Professor::findorFail($id);
        // dd($data);
        return view('professor.profEdit',['prof' => $data]);
    }

    public function update(Request $req, Professor $professor){
        $professor=Professor::find($req->id);
        $professor->fname=$req->fname;
        $professor->lname=$req->lname;
        $professor->gender=$req->gender;
        $professor->email=$req->email;
        $professor->save();

         return redirect('/Professor')->with('message','Successfully Created');

    }
}
