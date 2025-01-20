<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $video = Video::with('contributors')->get();
        // return $video;

        // $video = Video::find(1);
        // return $video->contributors;

        $video = Video::with('contributors')->find(1);
        // return $video;
        echo "<h1>$video->title</h1>";
        echo "<h4>$video->url</h4>"."<hr>";
        foreach ($video->contributors as $comment) {
            echo $comment->detail . "<br>";
            echo "<hr>";   
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $video = Video::find(2);
        $video->contributors()->create([
            'detail' => 'Your time is limited, dont waste it living someone else life.'
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
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
