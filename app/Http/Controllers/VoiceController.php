<?php

namespace App\Http\Controllers;

use App\Models\Voice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $voices = Voice::with("explorers:name as User Name,email as User email,id")->get(["title","description","user_id"]);
        // $voices = Voice::with(["explorer" => function($query){
        //     $query->select("id","name","email");
        // }])->get(["title","description","user_id"]);
        // $voices = Voice::select("title","description","user_id")->withWhereHas("explorers" , function($query){
        //     $query->select("id","name","email")->where("city","Delhi");
        // })->get();
        // $voices = Voice::with("explorers")->get();
        // $voices = Voice::get();
        $voices = Voice::without("explorers")->find(2);
        return $voices;
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
    public function show(Voice $voice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voice $voice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voice $voice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voice $voice)
    {
        //
    }
}
