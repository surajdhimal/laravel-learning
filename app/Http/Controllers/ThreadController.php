<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thread = Thread::find(2);
        return $thread;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post_title = "Start Where You Are: The Journey Begins Now";

Thread::create([
    "title" => $post_title,
    "description" => "The best time to start is right where you are. Dont wait for the perfect moment  every step you take now brings you closer to your goals. The journey begins with one action, and you are already on your way.",
    "user_id" => 2,
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
    public function show(Thread $thread)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
