<?php

namespace Database\Seeders;

use App\Models\Time;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $times = [
            ['duration' => '10 to 12'],
            ['duration' => '12 to 2'],
            ['duration' => '2 to 4'],
            ['duration' => '4 to 6'],
            ['duration' => '6 to 8'],
        ];

        Time::insert($times);
    }
}
