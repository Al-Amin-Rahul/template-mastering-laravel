<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent(){
        return view('admin.student.add-student');
    }
    public function newStudent(Request $request){
        $student=new Student();
        $student->name  =   $request->name;
        $student->email  =   $request->email;
        $student->phone  =   $request->phone;
        $student->save();
        return redirect('/add-student')->with('message','Success');
    }

    public function viewStudent(){
        $students    =   Student::all();
        return view('admin.student.view-student')->with('students', $students);
    }
    public function editStudent($id){
        $student    =   Student::find($id);
        return view('admin.student.edit-student')->with('student', $student);
    }
    public function updateStudent(Request $request){
        $student    =   Student::find($request->id);
        $student->name  =   $request->name;
        $student->email  =   $request->email;
        $student->phone  =   $request->phone;
        $student->save();
        return redirect('/view-student')->with('message','Update Success');
    }

    public function deleteStudent($id){
        $student    =   Student::find($id);
        $student->delete();
        return redirect('/view-student')->with('message','Delete Success');
    }
}
