<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            ['name' => 'leo messi', 'subject' => 'math'],
            ['name' => 'jhon wick', 'subject' => 'scince'],
            ['name' => 'ammar hammoud', 'subject' => 'arabic'],
            ['name' => 'rony mansor', 'subject' => 'english'],
            ['name' => 'mohammed talal', 'subject' => 'geo'],
        ];

        Teacher::insert($teachers);
    }
}
