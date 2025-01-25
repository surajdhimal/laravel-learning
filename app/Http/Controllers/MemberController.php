<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Post;
use App\Models\Scopes\MemberScope;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $members = Member::with('posts')->get();
        // $members = Member::with('posts')->find(2);
        // $members = Member::find(2);
        // $posts = $members->posts;

        // $members = Member::doesntHave('posts')->get();
        // $members = Member::has('posts')->get();
        // $members = Member::has('posts')->with('posts')->get();
        // $members = Member::has('posts', '>=', 2)
        //                 ->with('posts')
        //                 ->get();
        // $members = Member::withCount('posts')->get();
        // $members = Member::select(['name', 'email'])->withCount('posts')->get();

        // $members = Member::with("posts")->active()->sort()->get();
        // $members = Member::with("posts")->city(["Goa", "Delhi"])->active()->sort()->get();
        // $members = Member::with("posts")->sort()->get();
        // $members = Member::with("posts")->city(["Delhi"])->sort()->get();
        // $members = Member::with("posts")->city(["Mumbai"])->sort()->get();
        // $members = Member::city(["Delhi"])->sort()->get();
        // $members = Member::withoutGlobalScope(MemberScope::class)->get();
        $members = Member::withoutGlobalScope(MemberScope::class)->city(["Delhi"])->sort()->get();
        return $members;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $posts = new Post([
        //     'title' => 'The Power of Persistence',
        //     'description' => 'Great things never come from comfort zones. Keep pushing forward, even when it feels impossible. Your persistence today will bring you closer to the success you deserve tomorrow.'
        // ]);
        // $users = Member::find(2);
        // $users->posts()->save($posts);

        $user = Member::find(4);
        // $user->posts()->create([
        //     'title' => 'Believe in Your Potential',
        //     'description' => 'Your potential is limitless. Dont let doubt hold you back. With determination, hard work, and belief in yourself, you can achieve more than you ever imagined.'
        // ]);
        $user->posts()->createMany([
            [
                'title' => 'Rise Above the Storm',
                'description' => 'Every storm you face is an opportunity to rise higher. Keep your head up, stay strong, and remember that the clouds will always clear. The sun shines brightest after the storm.'
            ],
            [
                'title' => 'Dream, Believe, Achieve',
                'description' => 'Your dreams are within reach. The first step is believing in them. The second step is taking action. Keep going, and soon you will see how much you are capable of achieving.'
            ]
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
