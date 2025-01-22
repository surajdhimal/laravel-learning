<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $test = Test::find(1);
        // return $test->meta_data;

        // $test = Test::OrderBy("meta_data->name")->get();
        // $test = Test::find(1);
        // return $test->meta_data["name"];

        // $test = Test::find(3);
        // return $test->meta_data["address"]["city"];

        // $test = Test::where("meta_data->name", "Santosh Ghimire")->get();
        // $test = Test::where("meta_data->name", "LIKE", "pra%")->get();
        // $test = Test::whereJsonContains("meta_data->name", "Prakriti Lama")->get();
        $test = Test::whereJsonLength("meta_data->name", 1)->get();
        // $test = Test::whereJsonLength("meta_data->name", 0)->get();
        return $test;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $test = new Test;
        // $test->meta_data = [
        //     "name" => "Amar Bhattarai",
        //     "email" => "amar.bhattarai@email.com",
        //     "mobile_number" => "+977 9878901234"
        // ];
        // $test->save();

        // $test = Test::create([
        //     "meta_data" => [
        //         "name" => "Prakriti Lama",
        //         "email" => "prakriti.lama@email.com",
        //         "mobile_number" => "+977 9889012345"
        //     ]
        // ]);
        // $test = Test::create([
        //     "meta_data" => [
        //         "name" => "Santosh Ghimire",
        //         "email" => "santosh.ghimire@email.com",
        //         "mobile_number" => "+977 9890123456",
        //         "address" => [
        //             "street" => "45, Manakamana Road",
        //             "city" => "Kathmandu",
        //             "country" => "Nepal"
        //         ]
        //     ]
        // ]);

        // UPDATE DATA
        // $test = Test::where('id', 1)->update([
        //     "meta_data->name" => "Sneha Sherpa"
        // ]);

        // $test = Test::find(1);
        // $test->meta_data['name'] = 'Jyoti Gurung';
        // $test->save();

        // $test = Test::where('id', 3)->update([
        //     "meta_data->address->city" => "Biratnagar"
        // ]);

        // DELETING ATTRIBUTE
        // $test = Test::find(2);
        // $test->meta_data = collect($test->meta_data)->forget("email");
        // $test->save();

        // ADDING NEW ATTRIBUTE THAT HAD DELETED
        $test = Test::where("id", 2)->update([
            "meta_data->email" => "prakriti.lama@example.com"
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
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}
