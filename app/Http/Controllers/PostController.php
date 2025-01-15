<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::with('members')->get();
        // $posts = Post::with('members')->find(2);
        // return $posts;

        // echo $posts->title . "<br>";
        // echo $posts->members->name . "<br>";
        // echo $posts->description . "<br>";
        // foreach ($posts as $post) {
        //     echo "<div style='border:1px solid red;margin:0 0 10px'>
        //         <h3>$post->title</h3>
        //         <span>{$post->members->name}</span>
        //         <p>$post->description</p>
        //     </div>";
        // }

        // $posts = Post::with('members')->where('title', 'Embrace the Challenges')->get();
        // $posts = Post::withWhereHas('members',function($query){
        //     $query->where('name', 'Sita Sharma');
        // })->get();
        // $posts = Post::withWhereHas('members',function($query){
        //     $query->where('name', 'Sita Sharma')->orWhere('name','Dipendra Gurung');
        // })->get();

        $users = Member::where('name', 'Sita Sharma')->get();
        $posts = Post::whereBelongsTo($users)->get();
        return $users;
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
