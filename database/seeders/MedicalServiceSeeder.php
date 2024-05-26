<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Paracetamol',
                'category' => 'medicine',
                'price' => 10000,
                'quantity' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Komix',
                'category' => 'medicine',
                'price' => 5000,
                'quantity' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Konsultasi Gigi',
                'category' => 'consultation',
                'price' => 100000,
                'quantity' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Konsultasi Rutin',
                'category' => 'consultation',
                'price' => 80000,
                'quantity' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cabut Gigi',
                'category' => 'treatment',
                'price' => 100000,
                'quantity' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rawat Jalan',
                'category' => 'treatment',
                'price' => 20000,
                'quantity' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('medical_services')->insert($data);
    }
}
