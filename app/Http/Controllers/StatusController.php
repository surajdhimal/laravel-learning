<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $status = Status::with('image')->find(1);
        // return $status;

        $status = Status::find(1);
        return $status->image;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $status = Status::create([
            'title' => 'Rise Up: Keep Moving Forward',
            'description' => 'Dont let setbacks stop you. Stay focused, keep pushing, and remember that every step forward brings you closer to your goals. You’ve got this.',
        ]);
        $status->image()->create([
            'url' => '/images/status/status-one.jpg'
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
