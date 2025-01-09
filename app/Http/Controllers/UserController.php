<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "Displaying all users.";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Ready to create a new user.";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "New user created successfully.";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "Displaying details for user ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "Editing user ID: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "User ID: " . $id . " updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "User ID: " . $id . " has been deleted";
    }
}
