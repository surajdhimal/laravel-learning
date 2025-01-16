<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $role = Role::find(1);
        $role = Role::find(4);
        return $role->employees;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::find(2);
        $userid = [1, 3];
        $role->employees()->sync($userid);
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
