<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Appointment;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportView()
    {
        return view('reports.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'report' => 'required',
            'field' => 'required',
        ]);
        $type = $request['report'];
        $field = $request['field'];

        if($type == 'student')
        {
            $id = Student::where('name' , $field)->pluck('id')->first();
            $data = Appointment::where('student_id' , $id)->get();
            if(!$id)
            {
                return back()->with('error', 'there is no student with this name');
            }
            return view('reports.show' , compact('data'));
        }
        else if($type == 'teacher')
        {
            $id = Teacher::where('name' , $field)->pluck('id')->first();
            $data = Appointment::where('teacher_id' , $id)->get();

            if(!$id)
            {
                return back()->with('error', 'there is no teacher with this name');
            }
            return view('reports.show' , compact('data'));
        }
        else
        {
            $data = Appointment::where('date' , $field)->get();

            if($data->isEmpty())
            {
                return back()->with('error', 'there is no appointments for that day');
            }
            return view('reports.show' , compact('data'));
        }
    }
}
