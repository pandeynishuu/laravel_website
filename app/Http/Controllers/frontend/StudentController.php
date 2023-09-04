<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //show all students record
    public function index()
    {

    }
    //show students form
    public function create()
    {
        return view('frontend.student.create');
    }
    //save students record
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->faculty = $request->faculty;
        $student->batch = $request->batch;
        $student->father = $request->father;
        $student->save();
        return redirect()->back();
    }
    //edit students record
    public function edit($id)
    {

    }
    //update students record
    public function update(Request $request, $id)
    {

    }
    //show single student record
    public function show($id)
    {

    }
    //delete students record
    public function destroy($id)
    {

    }

}
