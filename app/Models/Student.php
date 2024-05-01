<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'edu_zone',
    ];
    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
    
}
