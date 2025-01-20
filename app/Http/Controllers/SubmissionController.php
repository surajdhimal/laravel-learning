<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $submission = Submission::create([
            'title' => 'The Power Within',
            'description' => 'The only limit to our realization of tomorrow is our doubts of today.'
        ]);

        $submission->contributors()->create([
            'detail' => 'The Power Within is the inner strength and belief that drives us to overcome challenges, embrace growth, and unlock our true potential.'
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
    public function show(Submission $submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Submission $submission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Submission $submission)
    {
        //
    }
}
