<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $fillable = [
        'duration',
    ];

    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}
