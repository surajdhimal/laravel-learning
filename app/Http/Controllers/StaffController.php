<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $staffs = Staff::get();
        // $staffs = Staff::with('phoneNumbers')->get();
        // $staffs = Staff::with('companys')->with('phoneNumbers')->get();
        // $staffs = Staff::with('companys')->with('phoneNumbers')->find(2);
        // return $staffs;

        $staffs = Staff::with('companys')->with('phoneNumbers')->get();
        foreach ($staffs as $staff) {
            echo $staff->name . "<br>";
            echo $staff->companys->company_name . "<br>";
            echo $staff->phoneNumbers->number . "<br>";
            echo "<hr>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
