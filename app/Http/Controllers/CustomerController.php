<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Pest\ArchPresets\Custom;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $customers = Customer::with('latestOrder')->get();
        // $customers = Customer::with('latestOrder')->find(2);
        // $customers = Customer::with('oldestOrder')->find(1);
        // $customers = Customer::with('smallestOrder')->find(1);
        // $customers = Customer::with('largestOrder')->find(1);
        // $customers = Customer::with('largestOrder')->get();
        // $customers = Customer::with('orders')->get();
        $customers = Customer::with('orders')->with('latestOrder')->get();
        return $customers;
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
