<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = Doctor::all();

        foreach ($doctors as $doctor) {
            foreach (['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'] as $day) {
                DoctorSchedule::factory()->create([
                    'doctor_id' => $doctor->id,
                    'day' => $day,
                    'time' => '08:00 - 12:00'
                ]);
            }
        }
    }
}
