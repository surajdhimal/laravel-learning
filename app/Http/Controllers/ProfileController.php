<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = Profile::find([2,4], ['name', 'email']);
        // $users = Profile::count();
        // $users = Profile::min('age');
        // $users = Profile::max('age');
        // $users = Profile::sum('age');
        // $users  = Profile::where('city', 'Dharan')->get();
        // $users  = Profile::where('city', 'Dharan')->where('age', '>', 20)->get();
        // $users = Profile::where([
        //     ['city', 'Dharan'],
        //     ['age', '>', 20]
        // ])->get();
        // $users = Profile::where('city', 'Delhi')->orWhere('age', '>', 20)->get();
        // $users = Profile::where('city', 'Dharan')->orWhere('age', '>', 20)->count();
        // $users = Profile::whereCity('Dharan')->get();
        // $users = Profile::whereCity('Dharan')->whereAge(29)->get();
        // $users = Profile::whereCity('Dharan')->whereAge(29)->select('name', 'email')->get();
        // $users = Profile::whereCity('Dharan')->whereAge(29)->select('name', 'email as User Email')->get();
        // $users = Profile::whereCity('Dharan')->whereAge(29)->select('name', 'email as User Email')->toSql();
        // $users = Profile::whereCity('Dharan')->whereAge(29)->select('name', 'email as User Email')->toRawSql();
        // $users = Profile::whereCity('Dharan')->whereAge(29)->select('name', 'email as User Email')->dd();
        // $users = Profile::whereCity('Dharan')->whereAge(29)->select('name', 'email as User Email')->ddRawSql();
        // $users = Profile::whereCity('Dharan')->first();
        // $users = Profile::where('Age', '<>', 20)->get();
        // $users = Profile::whereNot('Age', 20)->get();
        // $users = Profile::whereBetween('Age', [20, 25])->get();
        // $users = Profile::whereNotBetween('Age', [20, 25])->get();
        // $users = Profile::whereIn('city', ['Dharan', 'Nepalgunj'])->get();
        $users = Profile::whereNotIn('city', ['Dharan', 'Nepalgunj'])->get();

        // return $users;
        return view('welcome', compact('users'));
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
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
