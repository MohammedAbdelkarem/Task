<?php

namespace App\Http\Controllers;

use App\Models\Time;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Appointment;
use App\Models\Semester;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appView()
    {
        $students = Student::all();
        $teachers = Teacher::all();
        $times = Time::all();
        $semesters = Semester::all();
        $teacherSubjects = Teacher::pluck('subject', 'id');
        $studentEduZone = Student::pluck('edu_zone', 'id');

        return view('Appointment', compact('students', 'teachers', 'times' , 'semesters' , 'teacherSubjects' , 'studentEduZone'));
    }
    public function storeAppointment(Request $request)
    {
        $validatedData = $request->validate([
            'student_id' => 'required',
            'teacher_id' => 'required',
            'time' => 'required',
            'semester' => 'required',
            'date' => 'required',
        ]);


        return view('test' , compact('validatedData'));
    }

    //stopping here
    //store the data on the pivot table in the database , by the above method
    
    //search about the merge and it's effect and how to do that

    //create the reports
}
