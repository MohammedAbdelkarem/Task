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
            'time_id' => 'required',
            'semester_id' => 'required',
            'date' => 'required',
        ]);
        $studentId = $validatedData['student_id'];
        $teacherId = $validatedData['teacher_id'];
        $timeId = $validatedData['time_id'];
        $date = $validatedData['date'];

        $conflict = Appointment::where(function ($query) use ($studentId, $teacherId, $timeId) {
            $query->where('student_id', $studentId)
                ->orWhere('teacher_id', $teacherId);
        })
        ->where('time_id', $timeId)
        ->where('date', $date)
        ->exists();

        if ($conflict && !$request->has('merge')) {
            return back()->with('error', 'There is a time conflict. Please choose a different time.');
        }

        Appointment::create($validatedData);
        return back()->with('success', 'Appointment added successfully');
    }
}
