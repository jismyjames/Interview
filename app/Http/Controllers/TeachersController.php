<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Carbon\Carbon;

class TeachersController extends Controller
{
    public function index(Request $request){
        $teachers  = Teacher::all();
        return view('teacher', compact('teachers'));
    }

    public function add(Request $request){
        if ($request->method()=="POST") {
            $request->validate(
                [
                    'name'=>'required|string|max:20',
                ]
            );
            $teacher = new  Teacher();
            $teacher->name = $request->name;
            $teacher->created_at = date("Y-m-d H:i:s");
            if ($teacher->save()){
                return redirect('teacher');
            }
        } else {
            $model = new Teacher;
            return view('addTeacher', ['model'=>$model]);
        }

    }
}
