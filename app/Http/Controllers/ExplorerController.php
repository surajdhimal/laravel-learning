<?php

namespace App\Http\Controllers;

use App\Models\Explorer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $explorers = Explorer::where("city","Delhi")->get(["name","city","email"]);
        // $explorers = Explorer::all("name","email");
        // $explorers = Explorer::where("city","Delhi")->pluck("name","city");
        // $explorers = Explorer::find(1,["name","city"]);
        // $explorers = Explorer::findorfail(2,["name","city"]);
        // $explorers = Explorer::find(2)->email;
        // $explorers = Explorer::where("city","Delhi")->first()->name;
        // $explorers = Explorer::where("city","Delhi")->value("email");
        // $explorers = Explorer::with("voices")->get();
        $explorers = Explorer::all();
        $explorers->load("voices");
        return $explorers;
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
    public function show(Explorer $explorer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Explorer $explorer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Explorer $explorer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Explorer $explorer)
    {
        //
    }
}
