<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tags = Tag::with('updates')->with('clips')->find(2);
        $tags = Tag::with(["updates:title,description", "clips"])->get();
        // return $tags;
        echo "<h1>All Updates:</h1>";
        foreach ($tags as $tag) {
            foreach ($tag->updates as $update) {
                echo "<h2>$update->title</h2>";
                echo "<h2>$update->description</h2>";
                echo "<hr>";
            }
        }
        echo "<h1>All Clips:</h1>";
        foreach ($tags as $tag) {
            foreach ($tag->clips as $clip) {
                echo "<h2>$clip->title</h2>";
                echo "<h2>$clip->url</h2>";
                echo "<hr>";
           }
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

    /**#
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
