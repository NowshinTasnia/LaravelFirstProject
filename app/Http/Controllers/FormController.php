<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\syupport\Facades\DB;
use App\Model\Student;

class FormController extends Controller
{
    public function create()
    {
        //echo "got it";
        return view("form.create");
    }
    public function save(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'std_id' => 'required',
        ]);


        $stuent = new Student();

        $student->std_id=$request->std_id;
        $student->first_name=$request->first_name;
        $student->last_name=$request->last_name;
        $student->email=$request->email;

        //var_dump($student)
        $student->save();

        // echo $request->first_name;
        // echo "<br>";
        // echo $request->last_name;
        // echo "<br>";
        // echo $request->email;
        // echo "<br>";
        // echo $request->std_id;
        //return $request;
    }

    public function student_list()
    {
        echo "Nowshin";
        //$students = Student::all();

        $students = DB::select("SELECT * FROM `students`"); 
        //echo "<pre>";
        //rint_r($students);
        return view('student.list',["students" => $student]);
    }
}
