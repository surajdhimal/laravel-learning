<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Contact;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::all();
        $students = Student::with('contacts')->get();
        // $students = Student::with('contacts')->find(2);
        // $students = Student::with('contacts')->where('city','Kathmandu')->get();
        // $students = Student::withWhereHas('contacts', function($query){
        //     $query->where('city', 'Province 3');
        // })->get();
        // $students = Student::where('age', 21)->withWherehas('contacts', function($query){
        //     $query->where('city', 'Province 3');
        // })->get();
        // $students = Student::where('age', 21)->Wherehas('contacts', function($query){
        //     $query->where('city', 'Province 3');
        // })->get();

        return $students;
        // echo $students->name . "<br>";
        // echo $students->contacts->email;


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $students = new Student;

        // $students->name = "Prakash Koirala";
        // $students->age = 25;
        // $students->city = "Biratnagar";

        // $students->name = "Aisha Thapa";
        // $students->age = 24;

        // $students->save();

        $student = Student::create([
            'name' => 'Ravi Sharma',
            'age' => 25,
            'city' => 'Kathmandu'
        ]);
        $student->contacts()->create([
            'address' => '123 Main Street, Kathmandu',
            'city' => 'Kathmandu',
            'email' => 'ravi.sharma@email.com',
            'phone' => '+977 1 2345678'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
