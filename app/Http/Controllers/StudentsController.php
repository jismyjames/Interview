<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class StudentsController extends Controller
{
    public function index(Request $request)
    {
        $students  = Student::all();
        return view('student', compact('students'));
    }

    public function addStudent(Request $request)
    {
        // try{
        if ($request->method() == "POST") {
            // dd($request->all());
            $request->validate(
                [
                    'name' => 'required|string|max:20',
                    'age' => 'required',
                    'gender' => 'required',
                    'reporting_teacher' => 'required',
                ]
            );

            $student = new  Student();
            $student->fill($request->all());
            $student->save(); // returns false
            return redirect(route('viewStudent'));
        } else {
            $model = new Student;
            $teachers = Teacher::pluck('name', 'id');
            return view('addStudent', ['model' => $model, 'teachers' => $teachers]);
        }
        //}
        // catch(\Exception $e){ 
        // // do task when error
        // return redirect()->back()->with('error',$e->getMessage());
        // }

    }

    public function edit(Request $request)
    {
        if ($request->method() == "POST") {
            
            $request->validate(
                [
                    'name' => 'required|string|max:20',
                    'age' => 'required',
                    'gender' => 'required',
                    'reporting_teacher' => 'required',
                ]
            );

            Student::find($request->id)->update($request->all());
            return redirect(route('viewStudent'));
        } else {
            $model    = Student::find($request->id);
            $teachers = Teacher::pluck('name', 'id');
            return view('editStudent', ['model' => $model, 'teachers' => $teachers]);
        }
    }

    public function delete(Request $request){

        Student::find($request->id)->delete();
        return redirect()->back()
                ->with('success', 'Student successfully deleted');
    }
}
