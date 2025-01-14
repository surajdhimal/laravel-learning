<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // In your ContactsTableSeeder
public function run()
{
    \App\Models\Contact::insert([
        ['address' => 'Kathmandu', 'city' => 'Bagmati', 'email' => 'ram@example.com', 'phone' => '9800000001', 'student_id' => 1],
        ['address' => 'Pokhara', 'city' => 'Gandaki', 'email' => 'sita@example.com', 'phone' => '9800000002', 'student_id' => 2],
        ['address' => 'Lalitpur', 'city' => 'Bagmati', 'email' => 'hari@example.com', 'phone' => '9800000003', 'student_id' => 3],
        ['address' => 'Chitwan', 'city' => 'Province 3', 'email' => 'gita@example.com', 'phone' => '9800000004', 'student_id' => 4],
        ['address' => 'Bhairahawa', 'city' => 'Lumbini', 'email' => 'pradeep@example.com', 'phone' => '9800000005', 'student_id' => 5],
    ]);
}
}
