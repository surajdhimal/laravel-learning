<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = Employee::find(1);
        // $user = Employee::find(2);
        // $user = Employee::find(4);
        // return $user->roles;

        // $user = Employee::find(4);
        // foreach ($user->roles as $role) {
        //     echo $role->role_name . "<br>";
        // }

        $users = Employee::get();
        foreach ($users as $user) {
            echo $user->name . "<br>";
            echo $user->email . "<br>";

            foreach ($user->roles as $role) {
                echo $role->role_name . " / ";
            }
            echo "<hr>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $user = Employee::find(2);
        // $user->roles()->attach(1);

        // $user = Employee::find(3);
        // $roles = [1, 3];
        // $user->roles()->attach($roles);

        // $user = Employee::find(3);
        // $user->roles()->detach(3);

        // $user = Employee::find(1);
        // $user->roles()->detach();

        // $user = Employee::find(1);
        // $roles = [1, 4];
        // $user->roles()->sync($roles);

        // $user = Employee::find(1);
        // $roles = [1, 3];
        // $user->roles()->sync($roles);

        $user = Employee::find(1);
        $roles = [3];
        $user->roles()->sync($roles);
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
