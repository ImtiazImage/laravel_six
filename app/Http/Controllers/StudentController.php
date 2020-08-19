<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{

    public function index()
    {
        $student = Student::all();
        return view('student.all-students')->with('students',$student);
    }

    public function Student()
    {
        return view('student.create');
    }

    public function Store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25|min:4',
            'email' => 'required|unique:students',
            'phone' => 'required|unique:students|max:12|min:9'
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->email= $request->email;
        $student->phone= $request->phone;

        $student->save();
        if($student){
            $notification = array(
                'message' => 'Student Info has been successfully created!',
                'alert-type'=> 'success'
            );
            return Redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'There was an error craeting the Student Info!',
                'alert-type'=> 'error'
            );
            return Redirect()->back()->with($notification);
        }
        // return response()->json($student);
    }
}
