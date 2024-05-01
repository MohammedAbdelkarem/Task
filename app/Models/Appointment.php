<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'teacher_id',
        'student_id',
        'semester_id',
        'time_id',
    ];

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function time()
    {
        return $this->belongsTo(Time::class);
    }
}
