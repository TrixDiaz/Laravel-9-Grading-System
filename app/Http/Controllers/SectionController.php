<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Professor;
use App\Models\Section;

class SectionController extends Controller
{
    public function class_list(){
        $data = Section::all();
        return view('classes.filter',['section'=>$data]);
    }

    
































}
