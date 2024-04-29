<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['name' => 'John Doe', 'edu_zone' => 'Zone A'],
            ['name' => 'Jane Smith', 'edu_zone' => 'Zone B'],
            ['name' => 'ali bakr', 'edu_zone' => 'Zone c'],
            ['name' => 'ramy badran', 'edu_zone' => 'Zone d'],
            ['name' => 'hamed khalaf', 'edu_zone' => 'Zone e'],
        ];

        Student::insert($students);
    }
}
