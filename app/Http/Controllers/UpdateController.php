<?php

namespace App\Http\Controllers;

use App\Models\Update;
use App\Models\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $updates = Update::all(); // Get all updates
        // $tags = [];
        // foreach ($updates as $update) {
        //     // Access tags for each individual update
        //     $tags[] = $update->tags;
        // }
        // return $tags;

        // $updates = Update::with('tags')->find(3);
        $updates = Update::with('tags')->get();
        // return $updates;
        foreach ($updates as $update) {
            echo "<h2>$update->title</h2>";
            echo "<p>$update->description</p>";
            foreach ($update->tags as $tag) {
                echo "$tag->tag_name / ";
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $update = Update::create([
        //     'title' => 'A Day Full of Possibilities',
        //     'description' => 'Every new day brings a fresh start. Make the most of it with hope and passion.'
        // ]);
        // $update->tags()->create([
        //     'tag_name' => 'Positive Vibes',
        //     'created_at' => NOW(),
        //     'updated_at' => NOW()
        // ]);

        // $update = Update::create([
        //     'title' => 'Seize the Moment',
        //     'description' => 'The present is all we have. Embrace it fully and let your actions shape your future.'
        // ]);
        // $update->tags()->attach(5);

        $update = Update::find(3);
        $update->tags()->attach([2, 6]);
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
    public function show(Update $update)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Update $update)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Update $update)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Update $update)
    {
        //
    }
}
