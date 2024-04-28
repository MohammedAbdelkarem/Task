<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function addTeacherView()
    {
        return view('trachers.create');
    }

    public function storeTeacher(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:teachers,name',
            'subject' => 'required',
        ]);

        Teacher::create($validatedData);

        return redirect('/teachers/create')->with('success', 'Teacher created successfully!');
    }

    public function getTeachers()
    {
        $teachers = Teacher::get();

        return view('trachers.show' , compact('teachers'));
    }
}
