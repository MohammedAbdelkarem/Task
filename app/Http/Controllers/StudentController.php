<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudentView()
    {
        return view('students.create');
    }

    public function storeStudent(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:students,name',
            'edu_zone' => 'required',
        ]);

        Student::create($validatedData);

        return redirect('/students/create')->with('success', 'Student created successfully!');
    }

    public function getStudents()
    {
        $students = Student::get();

        return view('students.show' , compact('students'));
    }
}
