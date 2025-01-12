<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = Profile::get();
        // $users = Profile::all();
        $users = Profile::simplepaginate(4);

        // return $users;
        return view('home', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // // Validate the incoming data
    // $validated = $request->validate([
    //     'username' => 'required|string|max:255',
    //     'useremail' => 'required|email|unique:profiles,email',
    //     'userage' => 'required|integer',
    //     'usercity' => 'required|string',
    //     'password' => 'required|string|min:8',  // Ensure password is required
    // ]);

    // // Create a new user instance
    // $user = new Profile;

    // // Set the user data
    // $user->name = $request->username;
    // $user->email = $request->useremail;
    // $user->age = $request->userage;
    // $user->city = $request->usercity;

    // // Hash the password before saving
    // $user->password = bcrypt($request->password);

    // Save the user to the database
    // $user->save();

    // Validate the incoming data
    $validated = $request->validate([
        'username' => 'required|string|max:255',
        'useremail' => 'required|email|unique:profiles,email',
        'userage' => 'required|integer',
        'usercity' => 'required|string',
        'password' => 'required|string|min:8',
    ]);

    Profile::create([
        'name' => $request->username,
        'email' => $request->useremail,
        'age' => $request->userage,
        'city' => $request->usercity,
        'password' => bcrypt($request->password),
    ]);

    // Redirect to the users index page
    return redirect()->route('users.index')->with('status', 'New User Added Successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = Profile::findOrFail($id);
        // return $users;
        return view('viewuser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = Profile::findOrFail($id);
        // return $users;
        return view('updateuser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $users = Profile::find($id);

        // $users->name = $request->username;
        // $users->email = $request->useremail;
        // $users->age = $request->userage;
        // $users->city = $request->usercity;

        // // return $users;
        // $users->save();

        $request->validate([
            'username' => 'required|alpha',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required|alpha',
        ]);

        $users = Profile::where('id', $id)->update([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'city' => $request->usercity
        ]);

        return redirect()->route('users.index')->with('status', 'User Data Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = Profile::findOrFail($id);
        // $users = Profile::where('email', 'nisha@example.com');
        $users->delete();

        // Profile::destroy($id);
        // Profile::destroy(8,9);
        // Profile::destroy([8,9]);

        // Profile::truncate();

        return redirect()->route('users.index')->with('status', 'User Data Deleted Successfully.');
    }
}
