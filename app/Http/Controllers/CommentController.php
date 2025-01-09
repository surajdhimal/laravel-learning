<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "Displaying all comments.";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Form to create a new comment.";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "New comment has been stored successfully.";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "Displaying details for comment ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "Editing comment ID: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "Comment ID: " . $id . " has been updated.";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "Comment ID: " . $id . " has been deleted.";
    }
}
