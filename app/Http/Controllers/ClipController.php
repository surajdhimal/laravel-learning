<?php

namespace App\Http\Controllers;

use App\Models\Clip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $clip = Clip::find(1);
        // $clip->tags()->detach(1);

        $clip = Clip::find(2);
        $clip->tags()->sync([1, 4]);
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
    public function show(Clip $clip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clip $clip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clip $clip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clip $clip)
    {
        //
    }
}
