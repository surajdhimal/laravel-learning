<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert multiple students at once using the insert method
        Student::insert([
            ['name' => 'Rajesh Sharma', 'age' => 22, 'city' => 'Kathmandu'],
            ['name' => 'Anita Koirala', 'age' => 20, 'city' => 'Pokhara'],
            ['name' => 'Suman Gurung', 'age' => 24, 'city' => 'Lalitpur'],
            ['name' => 'Pramilla Bhatta', 'age' => 21, 'city' => 'Bhakta'],
        ]);
    }
}
